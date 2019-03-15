
<?php
$q = strval($_GET['q']);
$s = strval($_GET['s']);

$con = mysqli_connect('localhost','root','','amanhi_master');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}



mysqli_select_db($con,"amanhi_master");

$sql="select * from master where StudyId = '".$q."' and RIGHT(Q112, 1) = '".$s."'";





$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


	echo $row['Q102'];
	echo "||";
	echo $row['Q103'];
	echo "||";
	echo $row['Q104'];
	echo "||";
	echo $row['Q105'];
	echo "||";
	echo $row['Q106'];
	echo "||";
	echo $row['Q107'];
	echo "||";
	echo $row['Q108'];
	echo "||";
	echo $row['Q109'];
	echo "||";
	echo $row['Q110'];
	echo "||";
	echo $row['Q203'];
	echo "||";
	echo trim($row['Q112']);
	echo "||";
	//echo $row['CDOB'];
	$date=date_create($row['Q204']);
	echo date_format($date,"Y-m-d");
	echo "||";
	echo date_format($date,"d/m/Y");
	echo "||";
	echo $row['StudyId'];
	echo "||";
	echo $row['Upazilla_Name'];
	echo "||";
	echo $row['Union_Name'];
	echo "||";
	echo $row['Village_Name'];
	echo "||";
	echo $row['Bari_Name'];
	echo "||";
	echo $row['HH_Name'];
	echo "||";
	echo date_format($date,"m/d/Y");
}
 






mysqli_close($con);
?>
