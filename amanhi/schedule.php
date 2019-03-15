<?php require_once('Connections/amanhi_master.php'); ?>
<?php require_once('Connections/amanhi.php'); ?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
session_start();
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


//SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.EnDt, b.visit, b.visitDT FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID WHERE  a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 3 MONTH) between DATE_ADD(CURDATE(), INTERVAL  -60 DAY)  and CURDATE() AND a.StudyId not in (select d.StudyId from act_study.frm_act d where (d.visit = 2 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 2 ) or d.StudyId is null)  ORDER BY a.Q204 ASC

//SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.EnDt, b.visit, b.visitDT FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID WHERE  a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 3 MONTH) between DATE_ADD(CURDATE(), INTERVAL  -60 DAY)  and CURDATE() AND a.StudyId not in (select d.StudyId from act_study.frm_act d where (d.visit = 2 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 2 ) or d.StudyId is null)  ORDER BY a.Q204 ASC

//SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110 FROM master a  LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 WHERE  a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 6 MONTH) between DATE_ADD(CURDATE(), INTERVAL  -60 DAY)  and CURDATE() AND a.StudyId not in (select d.StudyId from act_study.frm_act d where (d.visit = 3 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 3 ) or d.StudyId is null)  ORDER BY a.Q204 ASC

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_2 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='2' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='3' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='2' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='2') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 3 MONTH) between DATE_ADD(CURDATE(), INTERVAL -60 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 2 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 2 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='3' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_2 = mysql_query($query_visit_2, $amanhi_master) or die(mysql_error());
$row_visit_2 = mysql_fetch_assoc($visit_2);
$totalRows_visit_2 = mysql_num_rows($visit_2);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_3 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='3' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='6' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='3' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='3') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 6 MONTH) between DATE_ADD(CURDATE(), INTERVAL -60 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 3 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 3 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='6' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_3 = mysql_query($query_visit_3, $amanhi_master) or die(mysql_error());
$row_visit_3 = mysql_fetch_assoc($visit_3);
$totalRows_visit_3 = mysql_num_rows($visit_3);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_4 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='4' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='12' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='4' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='4') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 12 MONTH) between DATE_ADD(CURDATE(), INTERVAL -60 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 4 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 4 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='12' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_4 = mysql_query($query_visit_4, $amanhi_master) or die(mysql_error());
$row_visit_4 = mysql_fetch_assoc($visit_4);
$totalRows_visit_4 = mysql_num_rows($visit_4);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_5 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='5' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='18' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='5' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='5') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 18 MONTH) between DATE_ADD(CURDATE(), INTERVAL -60 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 5 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 5 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='18' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_5 = mysql_query($query_visit_5, $amanhi_master) or die(mysql_error());
$row_visit_5 = mysql_fetch_assoc($visit_5);
$totalRows_visit_5 = mysql_num_rows($visit_5);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_6 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='6' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='24' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='6' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='6') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 24 MONTH) between DATE_ADD(CURDATE(), INTERVAL -180 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 6 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 6 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='24' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_6 = mysql_query($query_visit_6, $amanhi_master) or die(mysql_error());
$row_visit_6 = mysql_fetch_assoc($visit_6);
$totalRows_visit_6 = mysql_num_rows($visit_6);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_7 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='7' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='30' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='7' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='7') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 30 MONTH) between DATE_ADD(CURDATE(), INTERVAL -60 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 7 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 7 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='30' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_7 = mysql_query($query_visit_7, $amanhi_master) or die(mysql_error());
$row_visit_7 = mysql_fetch_assoc($visit_7);
$totalRows_visit_7 = mysql_num_rows($visit_7);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_8 = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, x.Sch_Date, x.for_status, b.visit, b.visitDT, b.visitOutCome, p.visitOutCome as 'p_visit' FROM master a LEFT join act_study.frm_act b on a.StudyId = b.StudyId and a.Q112 = b.Q112 and b.visitDT=date_format(curdate(),'%Y-%m-%d') and b.visit='8' LEFT JOIN reschedule x on a.StudyId = x.StudyID and a.Q112 = x.CPID and date_format(x.EnDt,'%Y-%m-%d')=date_format(curdate(),'%Y-%m-%d') and x.visit='36' left join act_study.frm_act p on a.StudyId = p.StudyId and a.Q112 = p.Q112 and p.visit='8' and p.visitDT = (select max(t.visitDT) from act_study.frm_act t WHERE a.StudyId = t.StudyId and a.Q112 = t.Q112 and t.visit='8') and date_format(p.visitDT,'%Y-%m-%d')< date_format(curdate(),'%Y-%m-%d') WHERE a.Unit = '".$_GET['unit']."' and a.block = '".$_GET['block']."' and a.Q212 = '1' and a.Q213 in ('1', '9') AND DATE_ADD(a.Q204, INTERVAL 36 MONTH) between DATE_ADD(CURDATE(), INTERVAL -60 DAY) and CURDATE() AND a.Q112 not in (select d.Q112 from act_study.frm_act d where (d.visit = 8 and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < 8 ) or d.StudyId is null) AND a.Q112 not in (select e.CPID from reschedule e where (a.StudyId = e.StudyID and e.visit='36' and a.Q112 = e.CPID and e.Sch_Date > curdate() and date_format(e.EnDt,'%Y-%m-%d')> date_format(curdate(),'%Y-%m-%d') ) or (e.Sch_Date is null)) group by a.Q112 ORDER BY a.Q204 ASC";
$visit_8 = mysql_query($query_visit_8, $amanhi_master) or die(mysql_error());
$row_visit_8 = mysql_fetch_assoc($visit_8);
$totalRows_visit_8 = mysql_num_rows($visit_8);

mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visit_DUE = "SELECT distinct a.Q112, a.StudyId, date_format(a.Q204,'%d-%m-%Y') as dob, a.Q109, a.Q110, b.visit FROM master a inner join reschedule b on a.StudyId = b.StudyID and a.Q112 = b.CPID  WHERE b.Sch_Date = curdate() and a.Q212 = '1' and a.Q213 in ('1', '9') AND b.StudyId not in (select d.StudyId from act_study.frm_act d where (d.visit = b.visit and d.visitOutCome = 1) or (d.visitOutCome = 6 and d.visit < b.visit ) or d.StudyId is null)  ORDER BY a.Q204 ASC";
$visit_DUE = mysql_query($query_visit_DUE, $amanhi_master) or die(mysql_error());
$row_visit_DUE = mysql_fetch_assoc($visit_DUE);
$totalRows_visit_DUE = mysql_num_rows($visit_DUE);

$colname_user = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_user = $_SESSION['MM_Username'];
}
mysql_select_db($database_amanhi, $amanhi);
$query_user = sprintf("SELECT * FROM user_info WHERE User_ID = %s", GetSQLValueString($colname_user, "text"));
$user = mysql_query($query_user, $amanhi) or die(mysql_error());
$row_user = mysql_fetch_assoc($user);
$totalRows_user = mysql_num_rows($user);

mysql_select_db($database_amanhi, $amanhi);
$query_CountAll = "SELECT count(*) FROM frm_act";
$CountAll = mysql_query($query_CountAll, $amanhi) or die(mysql_error());
$row_CountAll = mysql_fetch_assoc($CountAll);
$totalRows_CountAll = mysql_num_rows($CountAll);

mysql_select_db($database_amanhi, $amanhi);
$query_OdayEntry = "SELECT count(*) as totalToday FROM frm_act WHERE visitDT = curdate()";
$OdayEntry = mysql_query($query_OdayEntry, $amanhi) or die(mysql_error());
$row_OdayEntry = mysql_fetch_assoc($OdayEntry);
$totalRows_OdayEntry = mysql_num_rows($OdayEntry);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Current_visit</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
 
<script src="js/jquery.alerts.js" type="text/javascript"></script>
<link href="css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style_main_PCV.css"/>


<script src="js/jquery.animateNumber.min.js"></script>

<script>
function checkDateTime(){
var time = new Date();

var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

var n = weekday[time.getDay()];

var day = time.getDate();
var mon = time.getMonth()+1;
var year = time.getFullYear();

var hour = time.getHours();
var minu = time.getMinutes();

var cDay = day+'-'+mon+'-'+year;
var cTime = ' '+hour+' : '+minu;

document.getElementById('time').innerHTML = n+ ' | '+cDay+' | Block - <?php echo $_GET['block'];?>';


}

</script>









<!--for data search-->
<script>
function searchChild() {
	
	var str = document.getElementById('search_cpid').value;
	
if(document.getElementById('search_cpid').value != "" && !isNaN(document.getElementById('search_cpid').value)){

  //if (str[0]=="") {
   // document.getElementById("30_mon_count").value="";
   // return;
//  } 
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();

  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	var responseArray = xmlhttp.responseText.split("||");
	  

      document.getElementById("srch_res_sid").innerHTML=responseArray[0];
	  document.getElementById("srch_res_cpid").innerHTML=responseArray[1];
	  document.getElementById("srch_res_dob").innerHTML=responseArray[2];
	  document.getElementById("srch_res_mname").innerHTML=responseArray[3];
	  document.getElementById("srch_res_fname").innerHTML=responseArray[4];
	  document.getElementById("srch_res_vill").innerHTML=responseArray[5];
	  document.getElementById("srch_res_bari").innerHTML=responseArray[6];
	  document.getElementById("srch_res_hh").innerHTML=responseArray[7];
	  
	  document.getElementById("Mon0_dob").innerHTML = responseArray[2];
	  document.getElementById("Mon0_visit").innerHTML = responseArray[8];
	  document.getElementById("Mon0_status").innerHTML = responseArray[9];
	  
	  document.getElementById("Mon3_dob").innerHTML = responseArray[10];
	  document.getElementById("Mon3_visit").innerHTML = responseArray[11];
	  document.getElementById("Mon3_status").innerHTML = responseArray[12];
	  
	  document.getElementById("Mon6_dob").innerHTML = responseArray[13];
	  document.getElementById("Mon6_visit").innerHTML = responseArray[14];
	  document.getElementById("Mon6_status").innerHTML = responseArray[15];
	  
	  document.getElementById("Mon12_dob").innerHTML = responseArray[16];
	  document.getElementById("Mon12_visit").innerHTML = responseArray[17];
	  document.getElementById("Mon12_status").innerHTML = responseArray[18];
	  
	  document.getElementById("Mon18_dob").innerHTML = responseArray[19];
	  document.getElementById("Mon18_visit").innerHTML = responseArray[20];
	  document.getElementById("Mon18_status").innerHTML = responseArray[21];
	  
	  document.getElementById("Mon24_dob").innerHTML = responseArray[22];
	  document.getElementById("Mon24_visit").innerHTML = responseArray[23];
	  document.getElementById("Mon24_status").innerHTML = responseArray[24];
	  
	  document.getElementById("Mon30_dob").innerHTML = responseArray[25];
	  document.getElementById("Mon30_visit").innerHTML = responseArray[26];
	  document.getElementById("Mon30_status").innerHTML = responseArray[27];
	  
	  document.getElementById("Mon36_dob").innerHTML = responseArray[28];
	  document.getElementById("Mon36_visit").innerHTML = responseArray[29];
	  document.getElementById("Mon36_status").innerHTML = responseArray[30];
	  
	  	 
	  
	  
if (document.getElementById("Mon30_visit").innerHTML=="undefined"){
		document.getElementById("srch_res_sid").innerHTML="";
	  document.getElementById("srch_res_cpid").innerHTML="";
	  document.getElementById("srch_res_dob").innerHTML="";
	  document.getElementById("srch_res_mname").innerHTML="";
	  document.getElementById("srch_res_fname").innerHTML="";
	  document.getElementById("srch_res_vill").innerHTML="";
	  document.getElementById("srch_res_bari").innerHTML="";
	  document.getElementById("srch_res_hh").innerHTML="";
	  document.getElementById("Mon3_dob").innerHTML = "";
	  document.getElementById("Mon3_visit").innerHTML = "";
	  document.getElementById("Mon3_status").innerHTML = "";
	  document.getElementById("Mon6_dob").innerHTML = "";
	  document.getElementById("Mon6_visit").innerHTML = "";
	  document.getElementById("Mon6_status").innerHTML = "";
	  document.getElementById("Mon12_dob").innerHTML = "";
	  document.getElementById("Mon12_visit").innerHTML = "";
	  document.getElementById("Mon12_status").innerHTML = "";
	  document.getElementById("Mon18_dob").innerHTML = "";
	  document.getElementById("Mon18_visit").innerHTML = "";
	  document.getElementById("Mon18_status").innerHTML = "";	  
	  document.getElementById("Mon24_dob").innerHTML = "";
	  document.getElementById("Mon24_visit").innerHTML = "";
	  document.getElementById("Mon24_status").innerHTML = "";
	  document.getElementById("Mon30_dob").innerHTML = "";
	  document.getElementById("Mon30_visit").innerHTML = "";
	  document.getElementById("Mon30_status").innerHTML = "";	  
	  document.getElementById("Mon36_dob").innerHTML = "";
	  document.getElementById("Mon36_visit").innerHTML = "";
	  document.getElementById("Mon36_status").innerHTML = "";
	  document.getElementById("Mon0_dob").innerHTML = "";
	  document.getElementById("Mon0_visit").innerHTML = "";
	  document.getElementById("Mon0_status").innerHTML = "";
		}
	}

	

  }
  

  xmlhttp.open("GET","php/search_child.php?cpid="+str,true);
  xmlhttp.send();

}
}
</script>
<!--end for search-->









<!--for data pulling from pcvmain-->
<script>
function count_next_sch() {
	var allValue = document.getElementById('Next_sch_date').value;
	
	
	var strDay = allValue.substring(11,21);
	var str = allValue.substring(0,10);
	

if (strDay=="Saturday"){
	document.getElementById("next_sch_block").value = "A";
}
else if(strDay=="Sunday"){
	document.getElementById("next_sch_block").value = "B";
	}
else if(strDay=="Monday"){
	document.getElementById("next_sch_block").value = "C";
	}	
else if(strDay=="Tuesday"){
	document.getElementById("next_sch_block").value = "D";
	}		
else if(strDay=="Wednesday"){
	document.getElementById("next_sch_block").value = "E";
	}		
else if(strDay=="Thursday"){
	document.getElementById("next_sch_block").value = "X";
	}
else{
	document.getElementById("next_sch_block").value = "";
	}	

var strBlock = document.getElementById("next_sch_block").value;
var strUnit = document.getElementById("next_sch_unit").value;

if(document.getElementById('Next_sch_date').value != ""){

  //if (str[0]=="") {
   // document.getElementById("30_mon_count").value="";
   // return;
//  } 
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();

  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	var responseArray = xmlhttp.responseText.split("||");
	
      document.getElementById("3_mon_count").value=responseArray[0];
	  document.getElementById("6_mon_count").value=responseArray[1];
	  document.getElementById("12_mon_count").value=responseArray[2];
	  document.getElementById("18_mon_count").value=responseArray[3];
	  document.getElementById("24_mon_count").value=responseArray[4];
	  document.getElementById("30_mon_count").value=responseArray[5];
	  document.getElementById("36_mon_count").value=responseArray[6];
	  document.getElementById("DUE_count").value=responseArray[7];
	  var m3 = parseInt(responseArray[0]);
	  var m6 = parseInt(responseArray[1]);
	  var m12 = parseInt(responseArray[2]);
	  var m18 = parseInt(responseArray[3]);
	  var m24 = parseInt(responseArray[4]);
	  var m30 = parseInt(responseArray[5]);
	  var m36 = parseInt(responseArray[6]);
	  var due = parseInt(responseArray[7]);
	  var mTotal = m3+m6+m12+m18+m24+m30+m36+due;

	  $('#next_sch_count_container_counter_value').animateNumber({ number: mTotal },2000);
	}

  }

  xmlhttp.open("GET","php/next_sch.php?DT="+str+"&unit="+strUnit+"&block="+strBlock,true);
  xmlhttp.send();

}
else{
	if(document.getElementById("set_cpid").value!="")
	{
		
     document.getElementById('set_cpid').value="";

	}
	}
}
</script>
<!--end for data pulling from pcvmain-->









<script>
function count_next_sch_rec() {
	
	var allValueRe_sch = document.getElementById('dateSelection').value;
	
	
	var strDay = allValueRe_sch.substring(12,22);
	var str = allValueRe_sch.substring(0,10);
	

if (strDay=="Saturday"){
	document.getElementById("next_re_sch_block").value = "A";
}
else if(strDay=="Sunday"){
	document.getElementById("next_re_sch_block").value = "B";
	}
else if(strDay=="Monday"){
	document.getElementById("next_re_sch_block").value = "C";
	}	
else if(strDay=="Tuesday"){
	document.getElementById("next_re_sch_block").value = "D";
	}		
else if(strDay=="Wednesday"){
	document.getElementById("next_re_sch_block").value = "E";
	}		
else if(strDay=="Thursday"){
	document.getElementById("next_re_sch_block").value = "X";
	}
else{
	document.getElementById("next_re_sch_block").value = "";
	}	

var strBlock = document.getElementById("next_re_sch_block").value;
var strUnit = document.getElementById("next_sch_unit").value;

if(document.getElementById('dateSelection').value != ""){

  //if (str[0]=="") {
   // document.getElementById("30_mon_count").value="";
   // return;
//  } 
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();

  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	var responseArray = xmlhttp.responseText.split("||");
	
//      document.getElementById("3_mon_count").value=responseArray[0];
//	  document.getElementById("6_mon_count").value=responseArray[1];
//	  document.getElementById("12_mon_count").value=responseArray[2];
//	  document.getElementById("18_mon_count").value=responseArray[3];
//	  document.getElementById("24_mon_count").value=responseArray[4];
//	  document.getElementById("30_mon_count").value=responseArray[5];
//	  document.getElementById("36_mon_count").value=responseArray[6];
	  var m3 = parseInt(responseArray[0]);
	  var m6 = parseInt(responseArray[1]);
	  var m12 = parseInt(responseArray[2]);
	  var m18 = parseInt(responseArray[3]);
	  var m24 = parseInt(responseArray[4]);
	  var m30 = parseInt(responseArray[5]);
	  var m36 = parseInt(responseArray[6]);
	  var due = parseInt(responseArray[7]);
	  
	  var mTotal = m3+m6+m12+m18+m24+m30+m36+due;
	  
	  $('#next_sch_count_container_counter_value_for_reSch').animateNumber({ number: mTotal },1500);
	  
	}

  }

  xmlhttp.open("GET","php/next_re_sch.php?DT="+str+"&unit="+strUnit+"&block="+strBlock,true);
  xmlhttp.send();

}
else{
	if(document.getElementById("set_cpid").value!="")
	{
		
     document.getElementById('set_cpid').value="";

	}
	}
}
</script>








<!--save for reschedule-->
<script type="text/javascript">
$(document).ready(function() {
$("#save_reschedule").click(function() {
var sid = $("#set_sid").val();
var cpid = $("#set_cpid").val();
var visit = $("#set_visit").val();
var mname = $("#set_mname").val();
var fname = $("#set_fname").val();
var Sch_date = $("#set_date2").val();
if (sid == '' || cpid == '' || mname == '' || fname == '' || Sch_date == '') {
jAlert("সকল তথ্য সঠিক ভাবে দেয়া হইনি। পুনরায় এই মেসেজ বক্স ক্লোজ করে আবার সঠিক শিশু নির্বাচন করুণ।");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("php/saveRe_data.php", {
postSid: sid,
postCpid: cpid,
postVisit: visit,
postMname: mname,
postFname: fname,
postDate: Sch_date
}, function(data) {
jConfirm(data, 'Confirm', function(r) {
    if (r){
		$("#save_reschedule").slideUp();
	  $("#update_reschedule").slideDown(); 	
	  
	}
	else{
/*
$('#set_sid').val(''); // To reset form fields
$('#set_cpid').val(''); // To reset form fields
$('#set_mname').val(''); // To reset form fields
$('#set_fname').val(''); // To reset form fields
$('#set_date2').val(''); // To reset form fields
*/
		}
  });


});
}
});
});
</script>
<!--save for reschedule-->







<!--save for reschedule-->
<script type="text/javascript">
$(document).ready(function() {
$("#update_reschedule").click(function() {
var sid = $("#set_sid").val();
var cpid = $("#set_cpid").val();
var visit = $("#set_visit").val();
var mname = $("#set_mname").val();
var fname = $("#set_fname").val();
var Sch_date = $("#set_date2").val();
if (sid == '' || cpid == '' || mname == '' || fname == '' || Sch_date == '') {
jAlert("সকল তথ্য সঠিক ভাবে দেয়া হইনি। পুনরায় এই মেসেজ বক্স ক্লোজ করে আবার সঠিক শিশু নির্বাচন করুণ।");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("php/updateRe_data.php", {
postSid: sid,
postCpid: cpid,
postVisit: visit,
postMname: mname,
postFname: fname,
postDate: Sch_date
}, function(data) {
jConfirm(data, 'Confirm', function(r) {
    if (r){
//		$("#save_reschedule").slideUp();
//	  $("#update_reschedule").slideDown(); 	

	}
	else{
/*
$('#set_sid').val(''); // To reset form fields
$('#set_cpid').val(''); // To reset form fields
$('#set_mname').val(''); // To reset form fields
$('#set_fname').val(''); // To reset form fields
$('#set_date2').val(''); // To reset form fields
*/
		}
  });


});
}
});
});
</script>
<!--save for reschedule-->







<script>
$(document).ready(function(){
    $("#show_visit_3").click(function(){
        $("#visit_3").slideDown();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "3";
		document.getElementById("show_visit_3").style.backgroundColor="#CC0";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
		
    });

	 $("#show_visit_6").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideDown();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "6";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#CC0";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
		
    });
	$("#show_visit_12").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideDown();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "12";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#CC0";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
    });
	$("#show_visit_18").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideDown();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "18";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#CC0";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
    });
	$("#show_visit_24").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideDown();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "24";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#CC0";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
		
    });
	$("#show_visit_30").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideDown();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "30";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#CC0";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
    });
	$("#show_visit_36").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#visit_36").slideDown();
		document.getElementById("schedule_button").style.display = "block";
		document.getElementById("set_visit").value = "36";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#CC0";
		document.getElementById("show_visit_DUE").style.backgroundColor="#09F";
    });
	$("#show_visit_DUE").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideDown();
		document.getElementById("schedule_button").style.display = "none";
		$("#visit_36").slideUp();		
		document.getElementById("set_visit").value = "9";
		
		document.getElementById("show_visit_3").style.backgroundColor="#09F";
		document.getElementById("show_visit_6").style.backgroundColor="#09F";
		document.getElementById("show_visit_12").style.backgroundColor="#09F";
		document.getElementById("show_visit_18").style.backgroundColor="#09F";
		document.getElementById("show_visit_24").style.backgroundColor="#09F";
		document.getElementById("show_visit_30").style.backgroundColor="#09F";
		document.getElementById("show_visit_36").style.backgroundColor="#09F";
		document.getElementById("show_visit_DUE").style.backgroundColor="#CC0";

		
    });	
		$("#next_sch").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		$("#visit_36").slideUp();
		$("#next_sch_container").slideDown();
		
		document.getElementById("set_visit").value = "9";
    });
	
	$("#search").click(function(){
        $("#visit_3").slideUp();
		$("#visit_6").slideUp();
		$("#visit_12").slideUp();
		$("#visit_18").slideUp();
		$("#visit_24").slideUp();
		$("#visit_30").slideUp();
		$("#visit_DUE").slideUp();
		$("#con_msg_cont").slideUp();
		document.getElementById("schedule_button").style.display = "block";
		$("#visit_36").slideUp();
		$("#next_sch_container").slideUp();
		$("#search_container").slideDown();
		
		document.getElementById("set_visit").value = "9";
    });	
	


	
});
</script>
<script>
$(document).ready(function(){
    $(".id_container").click(function(){
		$("#con_msg_cont").slideDown();
			$("#save_reschedule").slideDown();
	  $("#update_reschedule").slideUp(); 
		
    });
	});

</script>
<script>
$(document).ready(function(){
    $("#msgClose").click(function(){
		$("#con_msg_cont").slideUp();
		window.location.reload();
    });
	$("#search_clsose").click(function(){
		$("#search_container").slideUp();
    });
    $("#next_sch_close").click(function(){
		$("#next_sch_container").slideUp();
    });
	$("#close_button").click(function(){
		$("#con_msg_cont").slideUp();
    });
	
	$("#close_button_sch").click(function(){
		$("#con_msg_cont").slideUp();
    });
	});
</script>


<script>
$(document).ready(function(){
    $(".id_container").click(function(){
		$(".message").slideDown();
	  $(".id_info").slideDown();
	  $(".act_button").slideDown();
	  
	  $("#re_sch_container").slideUp();
	  $("#re_sch_container_save").slideUp();
		var text = $(this).text();
		var sid = $(this).children(".sid_box").text();
		var cpid = $(this).children(".cpid_box").text();
		var dob = $(this).children(".dob_box").text();
		var mname = $(this).children(".mname_box").text();
		var fname = $(this).children(".fname_box").text();
		
		document.getElementById("ID_info_SID").innerHTML = "Study ID - "+sid;
		document.getElementById("ID_info_CPID").innerHTML = "CPID - "+cpid;
		document.getElementById("ID_info_DOB").innerHTML = "DOB - "+dob;
		document.getElementById("ID_info_Mname").innerHTML = "Mother name - "+mname;
		document.getElementById("ID_info_Fname").innerHTML = "Father name - "+fname;
		
		
		document.getElementById("set_sid").value = sid;
		document.getElementById("set_cpid").value = cpid;
		document.getElementById("set_mname").value = mname;
		document.getElementById("set_fname").value = fname;
		
if(document.getElementById("set_visit").value == "9"){
	document.getElementById("schedule_button").style.display = "none";
	}
	else{
		document.getElementById("schedule_button").style.display = "Block";
		}
		
		
    });
	});
</script>

<script>
$(document).ready(function(){
    $("#schedule_button").click(function(){
	  $(".message").slideUp();
	  $(".id_info").slideUp();
	  $(".act_button").slideUp();
	  $(".schedule_button").slideUp();
	  $(".re_sch_container").slideDown();
	  $(".re_sch_container_save").slideDown();
    });
	});
</script>
<!--for drop down day selection-->


</head>

<body onLoad="checkDateTime();">


<!--for searcing any specific child-->
<div id="search_container" class="con_msg_cont">
	<div id="search_content" class="con_msg">
       

        <div id="search_clsose" class="msg_close"> 
        &times;
        </div>
      			 <div class="search_by_container">
					<div class="search_by">Search by</div>
                    <div class="search_by_cpid"><input onKeyUp="searchChild();" type="text" id="search_cpid" name="search_cpid" class="search_box"/></div>                 
                 </div>
                 
             <div class="scarch_identification_container"><div class="scarch_headder">Identification</div>
                 	<div class="search_container">
                    <div class="search_box_name">Study ID</div>
                    <div class="search_box_value animated bounceIn" id="srch_res_sid"></div>
               </div>
                    
                    <div class="search_container">
                    <div class="search_box_name">CPID</div>
                    <div class="search_box_value" id="srch_res_cpid"></div>
                    </div>
                    
                    <div class="search_container">
                    <div class="search_box_name">DOB</div>
                    <div class="search_box_value" id="srch_res_dob"></div>
                    </div>
                    
                    
                    <div class="search_container">
                    <div class="search_box_name">Mother name</div>
                    <div class="search_box_value" id="srch_res_mname"></div>
                    </div>
                    
                    <div class="search_container">
                    <div class="search_box_name">Father name</div>
                    <div class="search_box_value" id="srch_res_fname"></div>
                    </div>
                    
                    <div class="search_container">
                    <div class="search_box_name">Village</div>
                    <div class="search_box_value" id="srch_res_vill"></div>
                    </div>
                    
                    <div class="search_container">
                    <div class="search_box_name">Bari</div>
                    <div class="search_box_value" id="srch_res_bari"></div>
                    </div>
                    
                    <div class="search_container">
                    <div class="search_box_name">Household</div>
                    <div class="search_box_value" id="srch_res_hh"></div>
                    </div>
             </div>
             
      <div class="scarch_visit_container"><div class="scarch_headder">Visit status</div>
    		        
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw; color:#FF0;">Month</div>               
                    <div class="search_box_sta_value" style="width:14vw; color:#FF0;">DOB</div>               
                    <div class="search_box_sta_value" style="width:14vw; color:#FF0;">Date</div>               
                    <div class="search_box_sta_value" style="width:10vw; color:#FF0;">Status</div>               
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">Birth</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon0_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon0_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;"  id="Mon0_status"></div>               
                    </div> 
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">3</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon3_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon3_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;"  id="Mon3_status"></div>               
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">6</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon6_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon6_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;" id="Mon6_status"></div>               
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">12</div>               
					<div class="search_box_sta_value" style="width:14vw;" id="Mon12_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon12_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;" id="Mon12_status"></div>
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">18</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon18_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon18_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;" id="Mon18_status"></div>  
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">24</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon24_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon24_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;" id="Mon24_status"></div>    
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">30</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon30_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon30_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;" id="Mon30_status"></div>    
                    </div>
                    
                    <div class="search_status_container">
                    <div class="search_box_sta_value" style="width:7vw;">36</div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon36_dob"></div>               
                    <div class="search_box_sta_value" style="width:14vw;" id="Mon36_visit"></div>               
                    <div class="search_box_sta_value" style="width:10vw;" id="Mon36_status"></div>  
                    </div>
                    
             
      </div>   
 </div>
 </div>       
 <!--end for searcing any specific child-->
 





<form name="reshe" id="reshe"  METHOD="GET" action="system.php?id=<?php echo $_GET['id'];?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>">

<div id="con_msg_cont" class="con_msg_cont">
	<div id="confirm_msg" class="con_msg">
       

        <div id="msgClose" class="msg_close"> 
        &times;
        </div>
        
        
  <div class="re_sch_container" id="re_sch_container">

        <div class="sch_box_container">
        <div class="sch_box_name">Study ID</div>
        <input type="text" value="" id="set_sid" name="set_sid" class="sch_box" readonly/>
        </div>
        
        
        <div class="sch_box_container">
        <div class="sch_box_name">CPID</div>
        <input type="text" value="" id="set_cpid" name="set_cpid" class="sch_box" readonly/>
        </div>
        
        <div class="sch_box_container">
        <div class="sch_box_name">Mother name</div>
        <input type="text" value="" id="set_mname" name="set_mname" class="sch_box" readonly/>
        </div>
        
        <div class="sch_box_container">
        <div class="sch_box_name">Father Name</div>
        <input type="text" value="" id="set_fname" name="set_fname" class="sch_box" readonly/>
        </div>
        
        <div class="sch_box_container">
        <div class="sch_box_name">Visit No.</div>
        <input type="text" value="" id="set_visit" name="set_visit" class="sch_box" style="width:4vw;" readonly/> 
        <div class="sch_box_name" style="margin-top:0.6vw; margin-left:1vw;"> Months</div>
        </div>
        
        <input type="hidden" name="unit" id="unit" value="<?php echo $_GET['unit'];?>"/>
        <input type="hidden" name="block" id="block" value="<?php echo $_GET['block'];?>"/>
    	<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>"/>
            
        <script>
        function setD(){
			document.getElementById("set_date2").value =  document.getElementById("dateSelection").value.substring(0,10);
			count_next_sch_rec();
			}
        </script>
        
        <div class="sch_box_container">
        <div class="sch_box_name">Reschedule</div>
        <select id="dateSelection" name="dateSelection" class="sch_box_dropBox" onChange="setD();">
   		 <option class="dropOption">Date</option>
         <option value=""></option>
		</select>
        <input type="hidden" value="" id="set_date2" name="set_date2"/>
        </div>
        
        
        
   </div>     
   
  <div class="re_sch_container_save" id="re_sch_container_save">
<div style="width:100%; height:auto; float:left;">
  <div class="save_button" style="margin-left:5vw; width:13vw; padding-top:3vw; height:6vw;" id="save_reschedule">Save</div>
  <div class="update_button" id="update_reschedule">Update</div>
</div>

  
  <div class="re_sch_counter_value">Total : <span id="next_sch_count_container_counter_value_for_reSch">0</span></div>
  <div class="re_sch_counter_value" style="width:8vw;">Block</div>
  <input readonly type="text" id="next_re_sch_block" name="next_re_sch_block" class="sch_box_for_block" style="width:3vw; margin-top:14vw; margin-left:0.1vw; text-align:center; background-color:rgba(0,0,0,0.5);"/>
  
  </div>  
        
        <div class="message">
        নিচের তথ্যগুলো লক্ষ্য করুন। যদি তথ্যগুলো সঠিক থাকে, তাহলে নিচের সবুজ বাটনটিতে ক্লিক করে ফর্ম পূরণ করুন অথবা প্রয়োজনে ভিজিটটি রিশিডিউল করুন। 
        আর যদি তথ্য সঠিক না থাকে, তাহলে এই মেসেজ বক্সটি ক্লোজ করে সঠিক শিশুটি নির্বাচন		 করুন।
      </div>

<div id="ID_info" class="id_info">
<div id="ID_info_SID" style="width:100%; text-align:left; float:left;"></div>
<div id="ID_info_CPID" style=" margin-top:1vw; width:100%; text-align:left; float:left;"></div>
<div id="ID_info_DOB" style="margin-top:1vw; width:100%; text-align:left; float:left;"></div>
<div id="ID_info_Mname" style="margin-top:1vw; width:100%; text-align:left; float:left;"></div>
<div id="ID_info_Fname" style="margin-top:1vw; width:100%; text-align:left; float:left;"></div>
</div>

<div class="button_container">
<!--<div class="close_button" id="close_button">CLOSE</div>-->


<input type="submit" class="act_button" name="sub" value="ফর্ম পূরণ করুন" id="sub"/>





<div class="schedule_button" id="schedule_button">রিশিডিউল করুন</div>
</div>
</div>
</div>
</form>




<div id="next_sch_container" class="next_sch_container">
        
	<div class="next_sch_content">
                <div id="next_sch_close" class="msg_close"> 
                &times;
                </div>

                <div class="next_sch_ele_container">
                <div class="next_sch_date_title">তারিখ নির্বাচন করুন</div>
                <select id="Next_sch_date" class="next_sch_box_dropBox" onChange="count_next_sch();">
                <option></option>
                </select>
                    <div class="next_sch_date_title" style=" float:left; margin-left:1vw; padding-top:0.5vw; width:10vw;">
                    Unit - <input id="next_sch_unit" readonly type="text" value="<?php echo $_GET['unit']; ?>" class="sch_box" style=" margin-top:-0.5vw; float:right;width:2vw;"/>
                    </div>
                    <div class="next_sch_date_title" style=" float:left; margin-left:1vw; padding-top:0.5vw; width:10vw;">
                    Block - <input id="next_sch_block" readonly type="text" value="" class="sch_box" style=" margin-top:-0.5vw; float:right;width:2vw;"/>
                    </div>

 
                </div>	
                
	 			<div style="width:50%;float:left;">
                <div class="next_sch_box_container" style="margin-top:1vw;">
                <div class="next_sch_box_name">3 Month</div>
                <input type="text" value="" id="3_mon_count" name="3_mon_count" class="next_sch_box" readonly/>
                </div>
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">6 Month</div>
                <input type="text" value="" id="6_mon_count" name="6_mon_count" class="next_sch_box" readonly/>
                </div>
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">12 Month</div>
                <input type="text" value="" id="12_mon_count" name="12_mon_count" class="next_sch_box" readonly/>
                </div>
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">18 Month</div>
                <input type="text" value="" id="18_mon_count" name="18_mon_count" class="next_sch_box" readonly/>
                </div>
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">24 Month</div>
                <input type="text" value="" id="24_mon_count" name="24_mon_count" class="next_sch_box" readonly/>
                </div>
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">30 Month</div>
                <input type="text" value="" id="30_mon_count" name="30_mon_count" class="next_sch_box" readonly/>
                </div>
                
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">36 Month</div>
                <input type="text" value="" id="36_mon_count" name="36_mon_count" class="next_sch_box" readonly/>
                </div>
                
                <div class="next_sch_box_container">
                <div class="next_sch_box_name">Total due</div>
                <input type="text" value="" id="DUE_count" name="DUE_count" class="next_sch_box" readonly/>
                </div>
                                
                </div>
                
                <div class="next_sch_count_container">
                	<div class="next_sch_count_container_title">মোট শিশু</div>
                    <div class="next_sch_count_container_counter" id="next_sch_counter_total">
                    <span id="next_sch_count_container_counter_value">0</span>
                    </div>
                </div>
                       	
    </div>
</div>



<div class="s_headder">
<div class="title">Today's Schedule | 


</div>
<!--
<div class="headder_des">
Unit - <?php //echo $_GET['unit'];?> 
Block - <?php //echo $_GET['block'];?>
</div>
-->
<div class="headder_des" id="time" style=" padding-top:0.1vw; float:left; font-size:2.5vw;">
</div>

<div class="next_sch_button" id="search" style="width:7vw;">Search</div>
<div class="next_sch_button" id="next_sch">Next Schedules</div>

</div>

<?php 
$v2 = intval($totalRows_visit_2);
$v3 = intval($totalRows_visit_3);
$v4 = intval($totalRows_visit_4);
$v5 = intval($totalRows_visit_5);
$v6 = intval($totalRows_visit_6);
$v7 = intval($totalRows_visit_7);
$v8 = intval($totalRows_visit_8);
$totalC = ($v2+$v3+$v4+$v5+$v6+$v7+$v8);
?>


<div class="s_visit">
<a href="system.php?id=<?php echo $_GET['id'];?>&block=<?php echo $_GET['block']; ?>&unit=<?php echo $_GET['unit']; ?>&set_sid=&msg="><div class="s_button" id="show_visit_BL">BL</div></a>
<div class="s_button" id="show_visit_3">3</div><div class="s_button_ntf"><?php echo $totalRows_visit_2 ?> </div>
<div class="s_button" id="show_visit_6">6</div><div class="s_button_ntf"><?php echo $totalRows_visit_3 ?> </div>
<div class="s_button" id="show_visit_12">12</div><div class="s_button_ntf"><?php echo $totalRows_visit_4 ?> </div>
<div class="s_button" id="show_visit_18">18</div><div class="s_button_ntf"><?php echo $totalRows_visit_5 ?> </div>
<div class="s_button" id="show_visit_24">24</div><div class="s_button_ntf"><?php echo $totalRows_visit_6 ?> </div>
<div class="s_button" id="show_visit_30">30</div><div class="s_button_ntf"><?php echo $totalRows_visit_7 ?> </div>
<div class="s_button" id="show_visit_36">36</div><div class="s_button_ntf"><?php echo $totalRows_visit_8 ?> </div>
<div class="s_button" id="show_visit_DUE">Due</div><div class="s_button_ntf"><?php echo $totalRows_visit_DUE ?> </div>

<div class="s_button_total" id="show_visit_36">Total</div>
<div class="s_button_ntf_total" style=" width:2.8vw; font-weight:bold;"><?php echo $totalC; ?></div>
</div>
<div style="height:75%; width:100%; overflow:hidden; float:left;"><!--wrap-->
<!--visit 3-->
<?php if ($totalRows_visit_2 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_3">
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_2['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_2['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_2['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_2['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_2['Q110']; ?></div>
        <div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_2['visitOutCome']== NULL and $row_visit_2['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_2['visitOutCome']!= NULL and $row_visit_2['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_2['visitOutCome']."</div>";
				} 
				elseif($row_visit_2['visitOutCome']== NULL and $row_visit_2['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_2['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_2['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_2['for_status']."</div>";	
					}
		
		?>
        <?Php 
		  if ($row_visit_2['visitOutCome']== NULL and $row_visit_2['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_2['p_visit']."</div>";
			  
			  }
		?>
        
        <!--
		<div class="status_box_value" style="display:;"><?php echo $row_visit_2['visitDT']; ?></div>
        <div class="status_box" id="status_box" style=" width:1vw; background-color:#090; float:left;">r</div>
        -->
        </div>
      
      <?php } while ($row_visit_2 = mysql_fetch_assoc($visit_2)); ?>
  </div>
  <?php } // Show if recordset not empty ?>
  
  
  
<!--visit 6-->
<?php if ($totalRows_visit_3 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_6">
    
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_3['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_3['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_3['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_3['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_3['Q110']; ?></div>
		<div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_3['visitOutCome']== NULL and $row_visit_3['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_3['visitOutCome']!= NULL and $row_visit_3['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_3['visitOutCome']."</div>";
				} 
				elseif($row_visit_3['visitOutCome']== NULL and $row_visit_3['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_3['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_3['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_3['for_status']."</div>";	
					}
		
		?>
        <?Php 
		  if ($row_visit_3['visitOutCome']== NULL and $row_visit_3['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_3['p_visit']."</div>";
			  
			  }
		?>


      </div>
      
      <?php } while ($row_visit_3 = mysql_fetch_assoc($visit_3)); ?>
    
  </div>
  <?php } // Show if recordset not empty ?>
  
  
  
<!--visit 12-->
<?php if ($totalRows_visit_4 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_12">
    
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_4['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_4['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_4['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_4['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_4['Q110']; ?></div>
        <div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_4['visitOutCome']== NULL and $row_visit_4['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_4['visitOutCome']!= NULL and $row_visit_4['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_4['visitOutCome']."</div>";
				} 
				elseif($row_visit_4['visitOutCome']== NULL and $row_visit_4['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_4['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_4['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_4['for_status']."</div>";	
					}
		
		?>
        
        <?Php 
		  if ($row_visit_4['visitOutCome']== NULL and $row_visit_4['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_4['p_visit']."</div>";
			  
			  }
		?>
                
        
        
    
      </div>
   
      <?php } while ($row_visit_4 = mysql_fetch_assoc($visit_4)); ?>
  </div>
  <?php } // Show if recordset not empty ?>
  
  
  
<!--visit 18-->
<?php if ($totalRows_visit_5 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_18">
    
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_5['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_5['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_5['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_5['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_5['Q110']; ?></div>
        <div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_5['visitOutCome']== NULL and $row_visit_5['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_5['visitOutCome']!= NULL and $row_visit_5['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_5['visitOutCome']."</div>";
				} 
				elseif($row_visit_5['visitOutCome']== NULL and $row_visit_5['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_5['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_5['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_5['for_status']."</div>";	
					}
		
		?>
        <?Php 
		  if ($row_visit_5['visitOutCome']== NULL and $row_visit_5['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_5['p_visit']."</div>";
			  
			  }
		?>
        
        
      </div>
      
      <?php } while ($row_visit_5 = mysql_fetch_assoc($visit_5)); ?>
    
  </div>
  <?php } // Show if recordset not empty ?>
  
  
<!--visit 24-->
<?php if ($totalRows_visit_6 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_24">
    
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_6['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_6['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_6['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_6['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_6['Q110']; ?></div>
        <div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_6['visitOutCome']== NULL and $row_visit_6['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_6['visitOutCome']!= NULL and $row_visit_6['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_6['visitOutCome']."</div>";
				} 
				elseif($row_visit_6['visitOutCome']== NULL and $row_visit_6['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_6['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_6['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_6['for_status']."</div>";	
					}
		
		?>
        <?Php 
		  if ($row_visit_6['visitOutCome']== NULL and $row_visit_6['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_6['p_visit']."</div>";
			  
			  }
		?>
        
      </div>
      
      <?php } while ($row_visit_6 = mysql_fetch_assoc($visit_6)); ?>
    
  </div>
  <?php } // Show if recordset not empty ?>
  
  
  
<!--visit 30-->
<?php if ($totalRows_visit_7 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_30">
    
    <?php do { ?>
      <!--<a style="color:#000;" href="system.php?id=<?php echo $_GET['id'];?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>&sid=<?php echo $row_visit_7['StudyId'];?>&cpid=<?php echo $row_visit_7['Q112'];?>">-->
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_7['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_7['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_7['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_7['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_7['Q110']; ?></div>
        <div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_7['visitOutCome']== NULL and $row_visit_7['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_7['visitOutCome']!= NULL and $row_visit_7['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_7['visitOutCome']."</div>";
				} 
				elseif($row_visit_7['visitOutCome']== NULL and $row_visit_7['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_7['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_7['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_7['for_status']."</div>";	
					}
		
		?>
        <?Php 
		  if ($row_visit_7['visitOutCome']== NULL and $row_visit_7['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_7['p_visit']."</div>";
			  
			  }
		?>
      </div>
      <!--    </a>-->
      <?php } while ($row_visit_7 = mysql_fetch_assoc($visit_7)); ?>
    
  </div>
  <?php } // Show if recordset not empty ?>
  
  
  
  
<!--visit 36-->
<?php if ($totalRows_visit_8 > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_36">
    
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_8['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_8['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_8['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_8['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_8['Q110']; ?></div>
        <div style="height:100%; font-size:1.3vw; float:left;">Status</div>
        <?php if ($row_visit_8['visitOutCome']== NULL and $row_visit_8['Sch_Date'] ==NULL){
			echo "<div class='status_pending'>Pending</div>";
			}
			elseif($row_visit_8['visitOutCome']!= NULL and $row_visit_8['Sch_Date'] ==NULL){
				echo "<div class='status_box'>".$row_visit_8['visitOutCome']."</div>";
				} 
				elseif($row_visit_8['visitOutCome']== NULL and $row_visit_8['Sch_Date'] !=NULL){
				echo "<div class='status_box_re'>".$row_visit_8['for_status']."</div>";	
				} 
				else{
					echo "<div class='status_box'>".$row_visit_8['visitOutCome']."</div>";
					echo "<div class='status_box_re'>".$row_visit_8['for_status']."</div>";	
					}
		
		?>
        <?Php 
		  if ($row_visit_8['visitOutCome']== NULL and $row_visit_8['p_visit']!= NULL){
			  
			  echo "<div class='status_pre_visit'>".$row_visit_8['p_visit']."</div>";
			  
			  }
		?>
      </div>
      
      <?php } while ($row_visit_8 = mysql_fetch_assoc($visit_8)); ?>
    
  </div>
  <?php } // Show if recordset not empty ?>
  
  
  
<!--visit DUE-->
<?php if ($totalRows_visit_DUE > 0) { // Show if recordset not empty ?>
  <div class="s_shw_child_list" id="visit_DUE">
    
    <?php do { ?>
      
      <div class="id_container">
        <div style="display:none;" class="sid_box_name">StudyID-</div>
        <div class="sid_box"><?php echo $row_visit_DUE['StudyId']; ?></div>
        <div style="display:none;" class="dob_box_name">| DOB-</div>
        <div class="dob_box"><?php echo $row_visit_DUE['dob']; ?></div>
        <div style="display:none;" class="cpid_box_name">| CPID-</div>
        <div class="cpid_box"><?php echo $row_visit_DUE['Q112']; ?></div>
        <div style="display:none;" class="mname_box_name">| Mother name-</div>
        <div class="mname_box"><?php echo $row_visit_DUE['Q109']; ?></div>
        <div style="display:none;" class="fname_box_name">| Father name-</div>
        <div class="fname_box"><?php echo $row_visit_DUE['Q110']; ?></div>
        <div style="width:7vw;" class="visit_box_name">| Visit-</div>
        <div style="width:2vw;" class="visit_box"><?php echo $row_visit_DUE['visit']; ?></div>
      </div>
      
      <?php } while ($row_visit_DUE = mysql_fetch_assoc($visit_DUE)); ?>
    
  </div>
  <?php } // Show if recordset not empty ?>
  
  </div><!--end wrap-->
  
  
  
  
  
  
  
  <fieldset id="uInfo" class="fieldset" style="width:91%; display:non; font-size:1.3vw;">
<legend>ব্যবহারকারীর তথ্য</legend>
ডাটা কালেক্টরদের আইডি : <input type="text" readonly name="userID" id="userID" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" value="<?php echo $row_user['User_ID']; ?>"/> <input type="text" readonly name="userID1" id="userID1" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" 
value="<?php echo $_GET['id']; ?>"/> &nbsp; | &nbsp;
মোট এন্ট্রি দিয়েছেন : <input type="text" readonly name="st1" id="st1" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" value="<?php echo $row_CountAll['count(*)']; ?>"/>&nbsp; | &nbsp;
আজকে মোট এন্ট্রি দিয়েছেন : <input type="text" readonly name="st2" id="st2" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" value="<?php echo $row_OdayEntry['totalToday']; ?>"/>

<!--to exit from entry system-->
<script>
function ExitFunc() {
 
    if (confirm("আপনি কি সিস্টেম থেকে বের হয়ে যাবেন।") == true) {
 	document.getElementById('logOut').click();
    } 
	else {
 
    }

}
</script>
<!--end to exit from entry system-->


<!--to exit from entry system-->
<script>
function ReloadFunc() {
 
    if (confirm("আপনি কি আবার নতুন করে আরম্ব করতে চান") == true) {
 	window.location.reload();
    } 
	else {
 
    }

}
</script>
<!--end to exit from entry system-->

<!--to exit from entry system-->
<script>
function todayEn() {

	window.location.href= "TodayEntry.php?id=<?php echo $_GET['id']; ?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>";
}
</script>
<!--end to exit from entry system-->


<!--<input type="text" readonly name="close" id="close" style="background-color: #FFF; display:block; border-radius:0.3vw; height:1.5vw; width:8vw; font-size:1.2vw; text-align:center; float:right; color:#000;" value="পুনরায় আরম্ব"/>
-->
<div style="width:100%; margin-top:2%; border-top:1.2px #990000 solid; padding-top:1%;">

<!--to backup database-->
<script>
function BackUpFuc() {
 
//    if (confirm("ব্যাকআপ নেয়ার জন্য OK চাপুন ") == true) {
 	location.href = "php/CHW_BackUp.php";
 //   } 
//	else {

//    }

}
</script>
<!-- end to backup database-->


<input type="hidden" id="tab_ID" name="tab_ID" value="<?php echo $row_Tab_Info['Tab_ID']; ?>"/>

<a href="php/CHW_BackUp.php?id=<?php echo $_GET['id']; ?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>">
<input type="text" readonly name="backUpNow" id="backUpNow" style="background-color: #FC0; box-shadow:0.4vw 0.4vw 0.2vw #999999; display:block; border-radius:0.3vw; height:2.5vw; width:11vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:left; color:#000;" value="ব্যাকআপ"/>
</a>

<!--to exit from entry system-->
<script>
function ExitFunc() {
 
    if (confirm("আপনি কি সিস্টেম থেকে বের হয়ে যাবেন।") == true) {
 	document.getElementById('logOut').click();
    } 
	else {
 
    }

}
</script>
<!--end to exit from entry system-->


<input onClick="ExitFunc();" type="text" readonly name="close" id="close" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #C30; display:block; border-radius:0.3vw; height:2.5vw; width:8vw; font-size:1.2vw; font-weight:bold; text-align:center; float:right; color:#FFF;" value="বাহির"/>



<input onClick="ReloadFunc()" type="text" readonly name="again" id="again" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #FFF; display:block; border-radius:0.3vw; height:2.5vw; width:11vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:right; color:#000;" value="পুনরায় আরম্ভ"/>

<input onClick="todayEn();" type="text" readonly name="again" id="again" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #FFF; display:block; border-radius:0.3vw; height:2.5vw; width:11vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:right; color:#000;" value="এন্ট্রি স্ট্যাটাস"/>

 <a href="<?php echo $logoutAction ?>"><input type="hidden" name="logOut" id="logOut"/></a>


</div>

</fieldset>
  
</body>
</html>
<!--for showing dates in reschedule date dropdown-->
<script>
function formatDate(date) {
	var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
    var d = new Date(date),
	dName = '' + weekday[d.getDay()],
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [day, month, year, , dName].join('-');
}
var curr = new Date;
var first = curr.getDate()
var firstday = (new Date(curr.setDate(first))).toString();
var options = "";
for (var i = 0; i < 14; i++) {
    var next = new Date(curr.getTime());
    next.setDate(first + i);
    options += '<option>' + formatDate((next.toString())) + '</option>';
}
$("#dateSelection").append(options);

//$("#datemenu1").html("<option>PICK A DATE</option>");
</script>


<!--date showing in next schedule dropdown menu-->
<script>
function formatNextDate(date) {
var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";
    var d = new Date(date),
        dName = '' + weekday[d.getDay()],
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [day, month, year, dName].join('-');
}
var curr = new Date;
var first = curr.getDate()
var firstday = (new Date(curr.setDate(first))).toString();
var options = "";
for (var i = 0; i < 14; i++) {
    var next = new Date(curr.getTime());
    next.setDate(first + i);
    options += '<option>' + formatNextDate((next.toString())) + '</option>';
}
$("#Next_sch_date").append(options);

//$("#datemenu1").html("<option>PICK A DATE</option>");
</script>
<?php
mysql_free_result($visit_2);

mysql_free_result($visit_3);

mysql_free_result($visit_4);

mysql_free_result($visit_5);

mysql_free_result($visit_6);

mysql_free_result($visit_7);

mysql_free_result($visit_8);

mysql_free_result($visit_DUE);

mysql_free_result($user);

mysql_free_result($CountAll);

mysql_free_result($OdayEntry);
?>
