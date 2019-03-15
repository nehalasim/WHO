
<?php
$dtSTR = strtotime($_GET['DT']);

$dt = date('Y-m-d',$dtSTR);
$unit = strval($_GET['unit']);
$block = strval($_GET['block']);

$con = mysqli_connect('localhost','root','','amanhi_master');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}



mysqli_select_db($con,"amanhi_master");

$sql="SELECT count(distinct a.Q112) as '3Mon'
FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 3 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -60 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 2 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 2 ) or d.StudyId is null)";

$sql_v3="SELECT count(distinct a.Q112) as '6Mon'
FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 6 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -60 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 3 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 3 ) or d.StudyId is null)";

$sql_v4="SELECT count(distinct a.Q112) as '12Mon'
FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visit='4' WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 12 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -60 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 4 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 4 ) or d.StudyId is null)";

$sql_v5="SELECT count(distinct a.Q112) as '18Mon' FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 18 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -60 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 5 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 5 ) or d.StudyId is null)";

$sql_v6="SELECT count(distinct a.Q112) as '24Mon' FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 24 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -180 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 6 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 6 ) or d.StudyId is null)";

$sql_v7="SELECT count(distinct a.Q112) as '30Mon' FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 30 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -60 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 7 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 7 ) or d.StudyId is null)";

$sql_v8="SELECT count(distinct a.Q112) as '36Mon' FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE 
a.Unit = '".$unit."' and a.block = '".$block."' and a.Q212 = '1' and a.Q213 in ('1', '9') 
and
DATE_ADD(date_format(a.Q204,'%Y-%m-%d'), INTERVAL 36 MONTH) between DATE_ADD(date_format('".$dt."','%Y-%m-%d'), INTERVAL  -180 DAY)  and date_format('".$dt."','%Y-%m-%d')
AND
a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 8 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 8 ) or d.StudyId is null)";

$sql_due="select COUNT(DISTINCT CPID) as 'totalDue' from reschedule where Sch_Date = date_format('".$dt."','%Y-%m-%d')";


$result = mysqli_query($con,$sql);
$result_v3 = mysqli_query($con,$sql_v3);
$result_v4 = mysqli_query($con,$sql_v4);
$result_v5 = mysqli_query($con,$sql_v5);
$result_v6 = mysqli_query($con,$sql_v6);
$result_v7 = mysqli_query($con,$sql_v7);
$result_v8 = mysqli_query($con,$sql_v8);
$result_vDue = mysqli_query($con,$sql_due);


while($row = mysqli_fetch_array($result)) {
	echo $row['3Mon'];
	echo "||";	
}
while($row_v3 = mysqli_fetch_array($result_v3)) {
	echo $row_v3['6Mon'];
	echo "||";	
} 
while($row_v4 = mysqli_fetch_array($result_v4)) {
	echo $row_v4['12Mon'];
	echo "||";	
} 
while($row_v5 = mysqli_fetch_array($result_v5)) {
	echo $row_v5['18Mon'];
	echo "||";	
} 
while($row_v6 = mysqli_fetch_array($result_v6)) {
	echo $row_v6['24Mon'];
	echo "||";	
} 
while($row_v7 = mysqli_fetch_array($result_v7)) {
	echo $row_v7['30Mon'];
	echo "||";	
} 
while($row_v8 = mysqli_fetch_array($result_v8)) {
	echo $row_v8['36Mon'];
	echo "||";	
} 
while($row_vDue = mysqli_fetch_array($result_vDue)) {
	echo $row_vDue['totalDue'];
	echo "||";	
} 





mysqli_close($con);
?>
