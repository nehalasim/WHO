<?php require_once('Connections/amanhi.php'); ?>
<?php require_once('Connections/amanhi_master.php'); ?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
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

mysql_select_db($database_amanhi, $amanhi);
$query_TabID = "SELECT * FROM tab_info";
$TabID = mysql_query($query_TabID, $amanhi) or die(mysql_error());
$row_TabID = mysql_fetch_assoc($TabID);
$totalRows_TabID = mysql_num_rows($TabID);

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

$URL_U =  $_GET['block'];
$URL_B =  $_GET['unit'];



mysql_select_db($database_amanhi_master, $amanhi_master);
$query_visitSch = "SELECT  date_format(DATE_ADD(m.Q204, INTERVAL 0 MONTH),'%d-%m-%Y') as dob, date_format(DATE_ADD(m.Q204, INTERVAL 3 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as 'Mon3_startDate', date_format(DATE_ADD(m.Q204, INTERVAL 3 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as 'Mon3_endDate', date_format(DATE_ADD(m.Q204, INTERVAL 6 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as Mon6_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 6 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as Mon6_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 12 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as 'Mon12_startDate', date_format(DATE_ADD(m.Q204, INTERVAL 12 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as 'Mon12_endDate', date_format(DATE_ADD(m.Q204, INTERVAL 18 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as Mon18_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 18 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as Mon18_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 24 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as Mon24_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 24 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as Mon24_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 30 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as Mon30_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 30 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as Mon30_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 36 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as Mon36_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 36 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as Mon36_endDate, b.Block, m.StudyId, m.Q107 as mcid, m.Q112 as cpid from master m INNER JOIN block b on m.Q104 = b.VillageCode WHERE b.Block = '".$_GET['block']."' AND b.Unit  = '".$_GET['unit']."' AND ((DATE_ADD(m.Q204, INTERVAL 3 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND DATE_ADD(m.Q204, INTERVAL 3 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY)) or (DATE_ADD(m.Q204, INTERVAL 6 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND DATE_ADD(m.Q204, INTERVAL 6 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY)) or (DATE_ADD(m.Q204, INTERVAL 12 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND DATE_ADD(m.Q204, INTERVAL 12 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY)) or (DATE_ADD(m.Q204, INTERVAL 18 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND DATE_ADD(m.Q204, INTERVAL 18 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY)) or (DATE_ADD(m.Q204, INTERVAL 24 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND
DATE_ADD(m.Q204, INTERVAL 24 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY)) or (DATE_ADD(m.Q204, INTERVAL 30 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND
DATE_ADD(m.Q204, INTERVAL 30 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY)) or (DATE_ADD(m.Q204, INTERVAL 36 MONTH) >=DATE_ADD(CURDATE(), INTERVAL -5 DAY) AND
DATE_ADD(m.Q204, INTERVAL 36 MONTH) <=DATE_ADD(CURDATE(), INTERVAL +5 DAY))) GROUP BY m.StudyId, m.Q112";
$visitSch = mysql_query($query_visitSch, $amanhi_master) or die(mysql_error());
$row_visitSch = mysql_fetch_assoc($visitSch);
$totalRows_visitSch = mysql_num_rows($visitSch);

//SELECT  date_format(DATE_ADD(m.Q204, INTERVAL 0 MONTH),'%d/%m/%Y') as dob, date_format(DATE_ADD(m.Q204, INTERVAL 3 MONTH) - INTERVAL 5 DAY,'%d-%m-%Y') as Mon3_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 3 MONTH) + INTERVAL 5 DAY,'%d-%m-%Y') as Mon3_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 6 MONTH) - INTERVAL 5 DAY,'%d/%m/%Y') as Mon6_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 6 MONTH) + INTERVAL 5 DAY,'%d/%m/%Y') as Mon6_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 12 MONTH) - INTERVAL 5 DAY,'%d/%m/%Y') as Mon12_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 12 MONTH) + INTERVAL 5 DAY,'%d/%m/%Y') as Mon12_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 18 MONTH) - INTERVAL 5 DAY,'%d/%m/%Y') as Mon18_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 18 MONTH) + INTERVAL 5 DAY,'%d/%m/%Y') as Mon18_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 24 MONTH) - INTERVAL 5 DAY,'%d/%m/%Y') as Mon24_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 24 MONTH) + INTERVAL 5 DAY,'%d/%m/%Y') as Mon24_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 30 MONTH) - INTERVAL 5 DAY,'%d/%m/%Y') as Mon30_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 30 MONTH) + INTERVAL 5 DAY,'%d/%m/%Y') as Mon30_endDate, date_format(DATE_ADD(m.Q204, INTERVAL 36 MONTH) - INTERVAL 5 DAY,'%d/%m/%Y') as Mon36_startDate, date_format(DATE_ADD(m.Q204, INTERVAL 36 MONTH) + INTERVAL 5 DAY,'%d/%m/%Y') as Mon36_endDate, b.Block, m.StudyId, m.Q107 as mcid, m.Q112 as cpid from master m INNER JOIN block b on m.Q104 = b.VillageCode GROUP by m.Q112, m.StudyId


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style_main.css">

<script>
function block(){
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    var n = weekday[d.getDay()];
    
	if(n=="Saturday"){
		document.getElementById('block').value = 'A';
		}
		else if(n=="Sunday"){
			document.getElementById('block').value = 'B';
			}
		else if(n=="Monday"){
			document.getElementById('block').value = 'C';
			}
		else if(n=="Tuesday"){
			document.getElementById('block').value = 'D';
			}
		else if(n=="Wednesday"){
			document.getElementById('block').value = 'E';
			}			
	}


function tabID(){
block();	
if(document.getElementById('tabID').value = "1001"){
	document.getElementById('unit').value = '1';
	}
else if(document.getElementById('tabID').value = "1002"){
	document.getElementById('unit').value = '2';
	}	
else if(document.getElementById('tabID').value = "1003"){
	document.getElementById('unit').value = '3';
	}		
}




</script>
</head>

<body onLoad="tabID();">


<input type="hidden" id="tabID" name="tabID" value="<?php echo $row_TabID['Tab_ID']; ?>"/>


<div style="height:5vw; background-color:#3CF; width:100%; position:fixed; z-index:999999;">
<div style="height:auto; overflow:hidden; padding-top:0.7vw; margin-left:5vw;">
<form name="getVisit">
<input type="text" maxlength="1" name="unit" id="unit" class="inputArea" placeholder="ইউনিট"/>
<input type="text" maxlength="1" name="block" id="block" class="inputArea" placeholder="ব্লক"/>
<input type="submit" name="src" id="src" class=" dirButton" value="search"/>
<a href="system.php?id=<?php echo $_GET['id']; ?>">
<input type="button" style="height:3.5vw; width:10vw; margin-right:1vw; text-align:center; float:right; background-color: #FFF; border-radius:0.3vw; color:#333;" value="এন্ট্রি সিস্টেম"/>
</a>
<a href="TodayEntry.php?id=<?php echo $_GET['id']; ?>">
<input type="button" style="height:3.5vw; margin-right:2vw; width:10vw; float:right; text-align:center; background-color: #FFF; border-radius:0.3vw; color:#333;" value="আজকের এন্ট্রি"/>
</a>
</form>

</div>
</div>


<div class="scheduleContainer" style="margin-top:5vw;">
<div style="  width:43vw; float:left; text-align:center; font-weight:bold; background-color:#FFF; font-size:1.5vw;">শিশুর তথ্য</div>

<!--visit 3 mon-->
<div class="schDate" style="width:30vw; background-color:#F9F3EE; font-size:1.5vw; text-align:center;">৩ মাসের ভিজিট</div><!--start date-->


<!--visit 6 mon-->
<div class="schDate" style="width:30vw; background-color: #EFDFCF; font-size:1.5vw; text-align:center;">৬ মাসের ভিজিট</div>

<!--visit 12 mon-->
<div class="schDate" style="width:30vw; background-color: #E7CFB8; font-size:1.5vw; text-align:center;">১২ মাসের ভিজিট</div>

<!--visit 18 mon-->
<div class="schDate" style="width:30vw; background-color: #DEBE9E; font-size:1.5vw; text-align:center;">১৮ মাসের ভিজিট</div>

<!--visit 24 mon-->
<div class="schDate" style="width:30vw; background-color: #D6AD85; font-size:1.5vw; text-align:center;">২৪ মাসের ভিজিট</div>

<!--visit 30 mon-->
<div class="schDate" style="width:30vw; background-color: #D0A375; font-size:1.5vw; text-align:center;">৩০ মাসের ভিজিট</div>

<!--visit 36 mon-->
<div class="schDate" style="width:30vw; background-color: #CA9662; font-size:1.5vw; text-align:center;">৩৬ মাসের ভিজিট</div>

</div>




<div class="scheduleContainer">
<div style="">
<div class="schSID" style="height:auto;">StudyID</div>
<div class="schCPID">CPID</div>
<div class="schMCID">MCID</div>
<div class="schDOB">DOB</div>
<div class="schBlock">Block</div>
</div>
<!--visit 3 mon-->
<div class="schDate" style="background-color:#F9F3EE; margin-left:0vw;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#F9F3EE;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#F9F3EE;">ভিজিট শেষ</div><!--end date-->

<!--visit 6 mon-->
<div class="schDate" style="background-color:#EFDFCF;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#EFDFCF;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#EFDFCF;">ভিজিট শেষ</div><!--end date-->

<!--visit 12 mon-->
<div class="schDate" style="background-color:#E7CFB8;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#E7CFB8;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#E7CFB8;">ভিজিট শেষ</div><!--end date-->

<!--visit 18 mon-->
<div class="schDate" style="background-color:#DEBE9E;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#DEBE9E;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#DEBE9E;">ভিজিট শেষ</div><!--end date-->

<!--visit 24 mon-->
<div class="schDate" style="background-color:#D6AD85;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#D6AD85;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#D6AD85;">ভিজিট শেষ</div><!--end date-->

<!--visit 30 mon-->
<div class="schDate" style="background-color:#D0A375;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#D0A375;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#D0A375;">ভিজিট শেষ</div><!--end date-->

<!--visit 36 mon-->
<div class="schDate" style="background-color:#CA9662;">ভিজিট শুরু</div><!--start date-->
<div class="schDate" style="background-color:#CA9662;">ভিজিট তারিখ</div><!--visit date-->
<div class="schDate" style="background-color:#CA9662;">ভিজিট শেষ</div><!--end date-->

</div>




<?php do { ?>

  <?php 
 if($row_visitSch['Block']== "A"){
	$BlockDat = "saturday";
	}
else if($row_visitSch['Block']== "B"){
	$BlockDat = "sunday";
	}	
else if($row_visitSch['Block']== "C"){
	$BlockDat = "monday";
	}		
else if($row_visitSch['Block']== "D"){
	$BlockDat = "tuesday";
	}	
else if($row_visitSch['Block']== "E"){
	$BlockDat = "wednesday";
	}
	
$start_date=strtotime($row_visitSch['Mon3_startDate']);
$end_date=strtotime($row_visitSch['Mon3_endDate']);

  $start_date=strtotime($BlockDat, $start_date);
  if($start_date>=$end_date)
  break;
  

$start_dateMon6=strtotime($row_visitSch['Mon6_startDate']);
$end_dateMon6=strtotime($row_visitSch['Mon6_endDate']);

  $start_dateMon6=strtotime($BlockDat, $start_dateMon6);
  if($start_dateMon6>=$end_dateMon6)
  break;  
  

$start_dateMon12=strtotime($row_visitSch['Mon12_startDate']);
$end_dateMon12=strtotime($row_visitSch['Mon12_endDate']);

  $start_dateMon12=strtotime($BlockDat, $start_dateMon12);
  if($start_dateMon12>=$end_dateMon12)
  break;   
  
$start_dateMon18=strtotime($row_visitSch['Mon18_startDate']);
$end_dateMon18=strtotime($row_visitSch['Mon18_endDate']);

  $start_dateMon18=strtotime($BlockDat, $start_dateMon18);
  if($start_dateMon18>=$end_dateMon18)
  break;    
  
$start_dateMon24=strtotime($row_visitSch['Mon24_startDate']);
$end_dateMon24=strtotime($row_visitSch['Mon24_endDate']);

  $start_dateMon24=strtotime($BlockDat, $start_dateMon24);
  if($start_dateMon24>=$end_dateMon24)
  break;      
  
$start_dateMon30=strtotime($row_visitSch['Mon30_startDate']);
$end_dateMon30=strtotime($row_visitSch['Mon30_endDate']);

  $start_dateMon30=strtotime($BlockDat, $start_dateMon30);
  if($start_dateMon30>=$end_dateMon30)
  break;        
  
$start_dateMon36=strtotime($row_visitSch['Mon36_startDate']);
$end_dateMon36=strtotime($row_visitSch['Mon36_endDate']);

  $start_dateMon36=strtotime($BlockDat, $start_dateMon36);
  if($start_dateMon36>=$end_dateMon36)
  break;         
  
  
?>



 
  <div class="scheduleContainer">
	  
    <div class="schSID"><?php echo $row_visitSch['StudyId']; ?></div>
    <div class="schCPID"><?php echo $row_visitSch['cpid']; ?></div>
    <div class="schMCID"><?php echo $row_visitSch['mcid']; ?></div>
    <div class="schDOB"><?php echo $row_visitSch['dob']; ?></div>
    <div class="schBlock"><?php echo $row_visitSch['Block']; ?></div>
  
     <!--visit 3 mon-->
    <div class="schDate" style="background-color:#F9F3EE;"><?php echo $row_visitSch['Mon3_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#F9F3EE;"><?php echo date("d-m-Y",$start_date); ?></div><!--visit date-->
    <div class="schDate" style="background-color:#F9F3EE;"><?php echo $row_visitSch['Mon3_endDate']; ?></div><!--end date-->
      
    <!--visit 6 mon-->
    <div class="schDate" style="background-color:#EFDFCF;"><?php echo $row_visitSch['Mon6_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#EFDFCF;"><?php echo date("d-m-Y",$start_dateMon6); ?></div><!--visit date-->
    <div class="schDate" style="background-color:#EFDFCF;"><?php echo $row_visitSch['Mon6_endDate']; ?></div><!--end date-->
    
    <!--visit 12 mon-->
    <div class="schDate" style="background-color:#E7CFB8;"><?php echo $row_visitSch['Mon12_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#E7CFB8;"><?php echo date("d-m-Y",$start_dateMon12); ?></div><!--visit date-->
    <div class="schDate" style="background-color:#E7CFB8;"><?php echo $row_visitSch['Mon12_endDate']; ?></div><!--end date-->
    
    <!--visit 18 mon-->
    <div class="schDate" style="background-color:#DEBE9E;"><?php echo $row_visitSch['Mon18_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#DEBE9E;"><?php echo date("d-m-Y",$start_dateMon18); ?></div><!--visit date-->
    <div class="schDate"style="background-color:#DEBE9E;"><?php echo $row_visitSch['Mon18_endDate']; ?></div><!--end date-->
    
    <!--visit 24 mon-->
    <div class="schDate" style="background-color:#D6AD85;"><?php echo $row_visitSch['Mon24_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#D6AD85;"><?php echo date("d-m-Y",$start_dateMon24); ?></div><!--visit date-->
    <div class="schDate" style="background-color:#D6AD85;"><?php echo $row_visitSch['Mon24_endDate']; ?></div><!--end date-->
    
    <!--visit 30 mon-->
    <div class="schDate" style="background-color:#D0A375;"><?php echo $row_visitSch['Mon30_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#D0A375;"><?php echo date("d-m-Y",$start_dateMon30); ?></div><!--visit date-->
    <div class="schDate" style="background-color:#D0A375;"><?php echo $row_visitSch['Mon30_endDate']; ?></div><!--end date-->
    
    <!--visit 36 mon-->
    <div class="schDate" style="background-color:#CA9662;"><?php echo $row_visitSch['Mon36_startDate']; ?></div><!--start date-->
    <div class="schDate" style="background-color:#CA9662;"><?php echo date("d-m-Y",$start_dateMon36); ?></div><!--visit date-->
    <div class="schDate" style="background-color:#CA9662;"><?php echo $row_visitSch['Mon36_endDate']; ?></div><!--end date-->
    
  </div>  
  <?php } while ($row_visitSch = mysql_fetch_assoc($visitSch)); ?>

</body>
</html>
<?php
mysql_free_result($TabID);

mysql_free_result($visitSch);
?>
