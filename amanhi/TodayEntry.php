<?php require_once('Connections/amanhi.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
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
$query_allRecordToday = "SELECT * FROM frm_act where visitDT = curdate()";
$allRecordToday = mysql_query($query_allRecordToday, $amanhi) or die(mysql_error());
$row_allRecordToday = mysql_fetch_assoc($allRecordToday);
$colnameToday_allRecordToday = "-1";
if (isset($_GET['srchToday'])) {
  $colnameToday_allRecordToday = $_GET['srchToday'];
}
$colname_allRecordToday = "-1";
if (isset($_GET['srchStartDate'])) {
  $colname_allRecordToday = date('Y-m-d',strtotime($_GET['srchStartDate']));
}
$colnameEnd_allRecordToday = "-1";
if (isset($_GET['srchEndDate'])) {
  $colnameEnd_allRecordToday = date('Y-m-d',strtotime($_GET['srchEndDate']));
}
mysql_select_db($database_amanhi, $amanhi);
$query_allRecordToday = sprintf("SELECT * FROM frm_act WHERE VisitDT = %s or (VisitDT >= %s and VisitDT <= %s)", GetSQLValueString($colnameToday_allRecordToday, "date"),GetSQLValueString($colname_allRecordToday, "date"),GetSQLValueString($colnameEnd_allRecordToday, "date"));
$allRecordToday = mysql_query($query_allRecordToday, $amanhi) or die(mysql_error());
$row_allRecordToday = mysql_fetch_assoc($allRecordToday);
$totalRows_allRecordToday = mysql_num_rows($allRecordToday);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style_main.css">
<script>
function SelectSrch(){
	if(document.getElementById('search').selectedIndex==1){
		document.getElementById('ByDate').style.display = "block";
		document.getElementById('ByToday').style.display = "none";
		document.getElementById('BySID').style.display = "none";
		document.getElementById('srchToday').checked = false;
		document.getElementById('srchSID').value = "";
		}
	else if(document.getElementById('search').selectedIndex==2){
		document.getElementById('ByDate').style.display = "none";
		document.getElementById('ByToday').style.display = "block";
		document.getElementById('BySID').style.display = "none";
		document.getElementById('srchSID').value = "";
		document.getElementById('srchStartDate').value ="";
		document.getElementById('srchEndDate').value ="";
		}
	else if(document.getElementById('search').selectedIndex==3){
		document.getElementById('ByDate').style.display = "none";
		document.getElementById('ByToday').style.display = "none";
		document.getElementById('BySID').style.display = "none";
		document.getElementById('srchStartDate').value ="";
		document.getElementById('srchEndDate').value ="";
		document.getElementById('srchToday').checked = false;
		location.href="ScheduleVisit.php?id=<?php echo $_GET['id']; ?>";
		}		
	
	}
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/mask1_3.js" type="text/javascript"></script>
<script src="js/inputType.js" type="text/javascript"></script>
</head>

<body>

<div class="headder" style="height:3vw; overflow:hidden;">
<div style="margin-left:46vw; float:left; ">আজকের এন্ট্রি</div>
<a href="schedule.php?id=<?php echo $_GET['id']; ?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>">
<input type="text" readonly name="again" id="again" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #FFF; display:block; border-radius:0.3vw; height:1.8vw; width:8vw; margin-top:0.2vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:right; color:#000;" value="এন্ট্রি সিস্টেম"/>
</a>

</div>


<form name="search4a">
<div style="height:5vw; width:100%; background-color: #E8FFFF; font-size:1.5vw;">
<div style="float:left; width:20vw; margin-left:2vw;">
<select onChange="SelectSrch();" class="dropDown4a" id="search" style="margin-top:0.7vw;">
<option>Search By</option>
<option>তারিখ দ্বারা</option>
<option>আজকের এন্ট্রি</option>
<option id="CurVisit">আজকের ভিজিট</option>
<!--<option>স্টাডি আইডি দ্বারা</option>-->
</select>
</div>






<div id="ByDate" style="display:none;">
<span style=" float:left; margin-top:1.3vw; margin-left:1vw; margin-right:1vw;">এন্ট্রি শুরুর তারিখ</span>
<input onBlur="startdateChk();" type="text" name="srchStartDate" id="srchStartDate" class="text4a" style="width:12vw; float:left;"/>

<input type="hidden" value="<?php echo $_GET['id']; ?>" id="id" name="id"/>
<span style=" float:left; margin-top:1.3vw; margin-left:0vw; margin-right:0.5vw;">এন্ট্রি শেষ তারিখ</span>
<input type="text" name="srchEndDate" id="srchEndDate" class="text4a" style="width:12vw; float:left;"/>
</div>

<div id="ByToday" style="display:none;">
<div style="float:left; margin-top:1.3vw; margin-left:5vw; width:15vw; ">আজকের এন্ট্রি</div>
<div style="float:left; margin-top:0vw; margin-left:5vw; width:15vw; ">
<input value="<?php echo date("Y/m/d"); ?>" onClick="srchTodayChk();" type="checkbox" name="srchToday" id="srchToday" class="radio" style="margin-top:0.5vw; margin-left:-5vw;"/>
</div>
</div>

<div id="BySID" style="display:none;">
<div style="float:left; margin-top:1.3vw; margin-left:5vw; width:15vw; ">স্টাডি আইডি</div>
<div style="float:left; margin-top:0vw; margin-left:5vw; width:15vw; ">
<input onKeyPress="return isNumber(event)" maxlength="7" onClick="srchTodayChk();" type="text" name="srchSID" id="srchSID" class="text4a" style="margin-top:1vw; margin-left:-5vw;"/>
</div>
</div>

<input value="search" type="submit" name="search" id="search" style="height:3vw; font-size:2vw; background-color:#FFF; color:#06C; width:10vw; float:right; margin-top:1vw; margin-right:2vw; box-shadow:0.2vw 0.2vw 0.2vw #666666;"/>


</form>
</div>






<div style="height:auto; width:90%; margin-left:auto; margin-right:auto; background-color:#E8FBFF; overflow:hidden;">


<div style="width:100%; height:3vw; padding:1vw; font-size:1.5vw;">
<div style="float:left; width:15vw; border-right:1px #333333 solid;">বাচ্চার পিআইডি</div>
<div style="float:left; width:15vw; border-right:1px #333333 solid; margin-left:2vw;">মায়ের পিআইডি</div>
<div style="float:left; width:10vw; border-right:1px #333333 solid; margin-left:2vw;">স্ট্যাটাস</div>
<div style="float:left; width:15vw; border-right:1px #333333 solid; margin-left:2vw;">তারিখ</div>
<div style="float:left; width:24vw; margin-left:2vw;">মায়ের নাম</div>
</div>

<?php do { ?>
  <div style="width:100%; height:3vw; padding:1vw; font-size:1.5vw;">
    <div style="float:left; width:15vw; border-right:1px #333333 solid;"><?php echo $row_allRecordToday['Q112']; ?></div>
    <div style="float:left; width:15vw; border-right:1px #333333 solid; margin-left:2vw;"><?php echo $row_allRecordToday['Q108']; ?></div>
    <div style="float:left; width:10vw; border-right:1px #333333 solid; margin-left:2vw;"><?php echo $row_allRecordToday['visitOutCome']; ?></div>
    <div style="float:left; width:15vw; border-right:1px #333333 solid; margin-left:2vw;"><?php echo $row_allRecordToday['visitDT']; ?></div>
    <div style="float:left; width:24vw; margin-left:2vw;"><?php echo $row_allRecordToday['Q109']; ?></div>
  </div>
  <?php } while ($row_allRecordToday = mysql_fetch_assoc($allRecordToday)); ?>




</div>

</body>
</html>
<?php
mysql_free_result($allRecordToday);
?>
