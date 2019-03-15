
<?php
error_reporting(E_ALL ^ E_NOTICE);
$cpid = strval($_GET['cpid']);


$con = mysqli_connect('localhost','root','','amanhi_master');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}



mysqli_select_db($con,"amanhi_master");

$sql_atBirth="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 0 month),'%d-%m-%Y') as 'atBirth', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='1' ) and  (a.visit='1' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";

$sql="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 3 month),'%d-%m-%Y') as '3Mon', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='2' ) and  (a.visit='2' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";

$sql_v3="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 6 month),'%d-%m-%Y') as '6Mon', a.visit as 'visit', a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='3') and  (a.visit='3' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";


$sql_v4="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 12 month),'%d-%m-%Y') as '12Mon', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='4') and  (a.visit='4' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";

$sql_v5="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 18 month),'%d-%m-%Y') as '18Mon', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='5' ) and  (a.visit='5' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";

$sql_v6="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 24 month),'%d-%m-%Y') as '24Mon', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='6') and  (a.visit='6' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";


$sql_v7="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 30 month),'%d-%m-%Y') as '30Mon', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='7') and  (a.visit='7' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";

$sql_v8="select m.StudyID as 'sid', m.Q112 as 'cpid', date_format(m.Q204,'%d-%m-%Y') as 'dob', m.Q109 as 'mname', m.Q110 as 'fname', m.Q104 as 'Vill', m.Q105 as 'bari', m.Q106 as 'hh', date_format(date_add(m.Q204, INTERVAL 36 month),'%d-%m-%Y') as '36Mon',date_format(date_add(date_add(m.Q204, INTERVAL 36 month), INTERVAL 180 day),'%d-%m-%Y') as 'lastVisit', a.visit, a.visitOutCome as 'sta' from master m left join frm_act_alldata a on a.StudyID = m.StudyId and m.Q112 = a.Q112 and a.VisitDT = (select max(x.VisitDT) from frm_act_alldata x WHERE x.Q112 = '".$cpid."' and x.visit='8') and  (a.visit='8' or a.visit is null or a.visit = '') WHERE m.Q112 = '".$cpid."'";


$result_atBirth = mysqli_query($con,$sql_atBirth);
$result = mysqli_query($con,$sql);
$result_v3 = mysqli_query($con,$sql_v3);
$result_v4 = mysqli_query($con,$sql_v4);
$result_v5 = mysqli_query($con,$sql_v5);
$result_v6 = mysqli_query($con,$sql_v6);
$result_v7 = mysqli_query($con,$sql_v7);
$result_v8 = mysqli_query($con,$sql_v8);



while($row_vat_birth = mysqli_fetch_array($result_atBirth)) {
	echo $row_vat_birth['sid'];
	echo "||";
	echo $row_vat_birth['cpid'];		
	echo "||";
	echo $row_vat_birth['dob'];
	echo "||";
	echo $row_vat_birth['mname'];
	echo "||";
	echo $row_vat_birth['fname'];
	echo "||";
	echo $row_vat_birth['Vill'];
	echo "||";
	echo $row_vat_birth['bari'];
	echo "||";
	echo $row_vat_birth['hh'];
	echo "||";
	$visit_birth_dob= $row_vat_birth['dob'];
	$visit_birth_visit= $row_vat_birth['atBirth'];
	$visit_birth_status = $row_vat_birth['sta'];
	}


while($row = mysqli_fetch_array($result)) {
	$visit_2_dob= $row['dob'];
	$visit_2_visit = $row['3Mon'];
	$visit_2_status = $row['sta'];
	$st_vatBirth = $row['sta'];
}



while($row_v3 = mysqli_fetch_array($result_v3)) {
	$visit_3_dob= $row_v3['dob'];
	$visit_3_visit= $row_v3['6Mon'];
	$visit_3_status = $row_v3['sta'];
}



while($row_v4 = mysqli_fetch_array($result_v4)) {
	$visit_4_dob=$row_v4['dob'];
	$visit_4_visit= $row_v4['12Mon'];
	$visit_4_status = $row_v4['sta'];
}

while($row_v5 = mysqli_fetch_array($result_v5)) {
	$visit_5_dob= $row_v5['dob'];
	$visit_5_visit= $row_v5['18Mon'];
	$visit_5_status = $row_v5['sta'];
}


while($row_v6 = mysqli_fetch_array($result_v6)) {
	$visit_6_dob=$row_v6['dob'];
	$visit_6_visit= $row_v6['24Mon'];
	$visit_6_status = $row_v6['sta'];
}

while($row_v7 = mysqli_fetch_array($result_v7)) {
	$visit_7_dob= $row_v7['dob'];
	$visit_7_visit= $row_v7['30Mon'];
	$visit_7_status = $row_v7['sta'];
}

while($row_v8 = mysqli_fetch_array($result_v8)) {
	$visit_8_dob=$row_v8['dob'];
	$visit_8_visit=$row_v8['36Mon'];
	$visit_8_status = $row_v8['sta'];
	$visit_8_lastVisit = $row_v8['lastVisit'];
	
}


echo $visit_birth_visit;
echo "||";


if (strtotime($visit_birth_visit)< strtotime('22-11-2016') or $visit_birth_status==NULL){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_birth_visit)> strtotime('22-11-2016') and $visit_birth_status==NULL and $visit_2_status!= NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_birth_visit)> strtotime('22-11-2016') and $visit_birth_status==NULL and $visit_2_status== NULL){
	echo "Pending";
	echo "||";
	}		
else{
	if($visit_birth_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_birth_status=="2"){
		echo "Partial";
		echo "||";
		}
	elseif($visit_birth_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_birth_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_birth_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_birth_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_birth_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_birth_status=="9"){
		echo "Other";
		echo "||";
		}	
	}	


echo $visit_2_dob;
echo "||";
echo $visit_2_visit;
echo "||";
if (strtotime($visit_2_visit) < strtotime('22-11-2016') or $visit_birth_status=="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_2_visit) > strtotime('22-11-2016') and $st_vatBirth!="6" and $visit_2_status==NULL and $visit_3_status!=NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_2_visit) > strtotime('22-11-2016') and $st_vatBirth!="6" and $visit_2_status==NULL and $visit_3_status==NULL){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_2_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_2_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_2_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_2_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_2_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_2_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_2_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_2_status=="9"){
		echo "Other";
		echo "||";
		
		}	

	}	
	
	
	




echo $visit_3_dob;
echo "||";
echo $visit_3_visit;
echo "||";
if (strtotime($visit_3_visit) < strtotime('22-11-2016') or $visit_2_status=="6" or $visit_birth_status =="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_3_visit) > strtotime('22-11-2016') and $visit_2_status!="6" and $visit_3_status==NULL and $visit_4_status!=NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_3_visit) > strtotime('22-11-2016') and $visit_2_status!="6" and $visit_3_status==NULL and $visit_4_status==NULL){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_3_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_3_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_3_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_3_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_3_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_3_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_3_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_3_status=="9"){
		echo "Other";
		echo "||";
		}	
	
	
	}		
	
echo $visit_4_dob;
echo "||";
echo $visit_4_visit;
echo "||";
if (strtotime($visit_4_visit) < strtotime('22-11-2016') or $visit_3_status=="6" or $visit_2_status=="6" or $visit_birth_status=="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_4_visit) > strtotime('22-11-2016') and $visit_3_status!="6" and $visit_4_status==NULL and $visit_5_status!=NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_4_visit) > strtotime('22-11-2016') and $visit_3_status!="6" and $visit_4_status==NULL and $visit_5_status==NULL){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_4_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_4_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_4_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_4_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_4_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_4_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_4_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_4_status=="9"){
		echo "Other";
		echo "||";
		}	
	
	}
	
	
	
	
	
	
	
	


echo $visit_5_dob;
echo "||";
echo $visit_5_visit;
echo "||";
if (strtotime($visit_5_visit) < strtotime('22-11-2016') or $visit_4_status=="6" or $visit_3_status=="6" or $visit_2_status=="6" or $visit_birth_status=="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_5_visit) > strtotime('22-11-2016') and $visit_4_status!="6" and $visit_5_status==NULL and $visit_6_status!=NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_5_visit) > strtotime('22-11-2016') and $visit_4_status!="6" and $visit_5_status==NULL and $visit_6_status==NULL){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_5_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_5_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_5_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_5_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_5_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_5_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_5_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_5_status=="9"){
		echo "Other";
		echo "||";
		}	
	
	}	










echo $visit_6_dob;
echo "||";
echo $visit_6_visit;
echo "||";
if (strtotime($visit_6_visit) < strtotime('22-11-2016') or $visit_5_status=="6" or $visit_4_status=="6" or $visit_3_status=="6" or $visit_2_status=="6" or $visit_birth_status=="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_6_visit) > strtotime('22-11-2016') and $visit_5_status!="6" and $visit_6_status==NULL and $visit_7_status!=NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_6_visit) > strtotime('22-11-2016') and $visit_5_status!="6" and $visit_6_status==NULL and $visit_7_status==NULL){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_6_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_6_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_6_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_6_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_6_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_6_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_6_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_6_status=="9"){
		echo "Other";
		echo "||";
		}	
	
	}
	
	
	
	
	
	
	
	
echo $visit_7_dob;
echo "||";
echo $visit_7_visit;
echo "||";
if (strtotime($visit_7_visit) < strtotime('22-11-2016') or $visit_6_status=="6" or $visit_5_status=="6" or $visit_4_status=="6" or $visit_3_status=="6" or $visit_2_status=="6" or $visit_birth_status=="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_7_visit) > strtotime('22-11-2016') and $visit_6_status!="6" and $visit_7_status==NULL and $visit_8_status!=NULL){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_7_visit) > strtotime('22-11-2016') and $visit_6_status!="6" and $visit_7_status==NULL and $visit_8_status==NULL){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_7_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_7_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_7_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_7_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_7_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_7_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_7_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_7_status=="9"){
		echo "Other";
		echo "||";
		}	
	
	}
	
	
	
	






echo $visit_8_dob;
echo "||";
echo $visit_8_visit;
echo "||";
if (strtotime($visit_8_visit) < strtotime('22-11-2016') or $visit_6_status=="6" or $visit_6_status=="6" or $visit_5_status=="6" or $visit_4_status=="6" or $visit_3_status=="6" or $visit_2_status=="6" or $visit_birth_status=="6"){
	echo "N/A";
	echo "||";
	}
elseif(strtotime($visit_8_visit) > strtotime('22-11-2016') and $visit_7_status!="6" and $visit_8_status==NULL and $visit_8_lastVisit < date('d-m-Y')){
	echo "Missed";
	echo "||";
	}	
elseif(strtotime($visit_8_visit) > strtotime('22-11-2016') and $visit_7_status!="6" and $visit_8_status==NULL and $visit_8_lastVisit > date('d-m-Y')){
	echo "Pending";
	echo "||";
	}	
else{


	if($visit_8_status=="1"){
		echo "Done";
		echo "||";
		}
	elseif($visit_8_status=="2"){
		echo "Partial";
		echo "||";
		}	
	elseif($visit_8_status=="3"){
		echo "Absent";
		echo "||";
		}
	elseif($visit_8_status=="4"){
		echo "Migration";
		echo "||";
		}
	elseif($visit_8_status=="5"){
		echo "Sick";
		echo "||";
		}			
	elseif($visit_8_status=="6"){
		echo "Died";
		echo "||";
		}		
	elseif($visit_8_status=="7"){
		echo "Refuse";
		echo "||";
		}	
	elseif($visit_8_status=="9"){
		echo "Other";
		echo "||";
		}	
	
	}		
	






mysqli_close($con);
?>
