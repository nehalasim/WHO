
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
$query = mysql_query("insert into reschedule(StudyID, CPID, visit, Mname, Fname, Sch_Date) values ('$sid','$cpid','$visit','$mname','$fname','$Sch_date')"); //Insert query
if($query){
echo "এই শিশুটির $visit মাসের ভিজিট $Sch_date_show তারিখে সফলভাবে রিশিডিউল করা হয়েছে। $Sch_date_show তারিখে শিশুটির তথ্য DUE বাটনে ক্লিক করলে দেখতে পাবেন।";
	
}
else{	
	echo "এই শিশুর $visit মাসের ভিজিটটি ইতিমধ্যে একবার রিশিডিউল করা হয়েছে। আপনি যদি ভিজিট শিডিউল পুনরায় পরিবর্তন করতে চান, তাহলে OK বাটনটি ক্লিক করুন";
	

	}
mysql_close($connection); // Connection Closed.


//
?>

 