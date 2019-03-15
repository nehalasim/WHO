
<?php
$schoolID = strval($_GET['schoolID']);
$examName = strval($_GET['examName']);
$examStartDate = strval($_GET['examStartDate']);
$genClass = strval($_GET['genClass']);
$genSec = strval($_GET['genSec']);
$genShift = strval($_GET['genShift']);
$genRollNo = strval($_GET['genRollNo']);




$con = mysqli_connect('localhost','root','','sims');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}



mysqli_select_db($con,"sims");

$sql="SELECT a.inClass, a.inSection, a.examStartDate, a.examName FROM seatplan a inner join userprofile b on a.schoolID = b.schoolID WHERE schoolID =  '".$schoolID."' and a.examName = '".$examName."' AND a.examStartDate = '".$examStartDate."' and a.forClass = '".$genClass."' AND a.forSection = '".$genSec."' AND a.forShift = '".$genShift."' and (b.classRollNumber BETWEEN a.fromRollNo and a.toRollNo)";





$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


	echo $row['a.inClass'];
	echo "||";
	echo $row['a.inSection'];
	echo "||";
	echo $row['a.examStartDate'];
	echo "||";
	echo $row['a.examName'];
}
 






mysqli_close($con);
?>
