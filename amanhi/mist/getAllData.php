
<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','root','','amanhi_master');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}



mysqli_select_db($con,"amanhi_master");

$sql="select DISTINCT a.*, b.PCV_UName, b.PCV_VName, b.PCV_BName, b.PCV_HHName from amanhi_master.master a inner join pcvmain.u5childlist_master b on a.Q112 = b.CPID where a.StudyId = '".$q."'";





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
	echo $row['Q112'];
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
}

    





mysqli_close($con);
?>
