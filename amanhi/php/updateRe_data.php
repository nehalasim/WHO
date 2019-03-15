
<?php
// Establishing connection with server by passing "server_name", "user_id", "password".
$connection = mysql_connect("localhost", "root", "");
// Selecting Database by passing "database_name" and above connection variable.
$db = mysql_select_db("amanhi_master", $connection);
$sid=$_POST['postSid']; // Fetching Values from URL
$cpid=$_POST['postCpid'];
$visit=$_POST['postVisit'];
$mname=$_POST['postMname'];
$fname=$_POST['postFname'];
$Sch_date_show= $_POST['postDate'];
$Sch_date= date("Y-m-d",strtotime($_POST['postDate']));

$query = mysql_query("update reschedule set Sch_Date = '$Sch_date' where StudyID = $sid and CPID = $cpid and visit = $visit"); //Insert query

if($query){
echo "ভিজিট শিডিউল $Sch_date_show তারিখে সফল ভাবে আপডেট হয়েছে।";
}
else{	

//	echo "এই শিশুর তথ্য, ভিজিট $visit এর জন্য একবার এন্ট্রি হয়েছে। এই আইডি, আবার ভিজিট $visit এর জন্য রিশিডিউল এ এন্ট্রি দিতে পারবেননা। ";
	}
mysql_close($connection); // Connection Closed.
?>