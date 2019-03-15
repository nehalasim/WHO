<?php require_once('Connections/amanhi.php'); ?>
<?php
clearstatcache();
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
$query_user = "SELECT * FROM user_info";
$user = mysql_query($query_user, $amanhi) or die(mysql_error());
$row_user = mysql_fetch_assoc($user);
$totalRows_user = mysql_num_rows($user);

mysql_select_db($database_amanhi, $amanhi);
$query_Unit = "SELECT right(Tab_ID,1) as Unit, Tab_ID ,MAX( EnDt) FROM tab_info WHERE EnDt=(select max(EnDt) from tab_info)";
$Unit = mysql_query($query_Unit, $amanhi) or die(mysql_error());
$row_Unit = mysql_fetch_assoc($Unit);
$totalRows_Unit = mysql_num_rows($Unit);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['userID'])) {
  $loginUsername=$_POST['userID'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "schedule.php?block=".$_POST['block']."&unit=".$_POST['unit']."&id=".$_POST['userID1'];
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_amanhi, $amanhi);
  
  $LoginRS__query=sprintf("SELECT User_ID, User_Pass FROM user_info WHERE User_ID=%s AND User_Pass=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $amanhi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>System login</title>
 
 
 <script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/mask1_3.js" type="text/javascript"></script>
<script src="js/inputType.js" type="text/javascript"></script>



<!--Used script plugin for customized alert boxes-->
<!--
<script src="js/jquery.js" type="text/javascript"></script>
-->
<script src="js/jquery.ui.draggable.js" type="text/javascript"></script>

<script src="js/jquery.alerts.js" type="text/javascript"></script>
<link href="css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<!--end Used script plugin for customized alert boxes-->


<!--to disable back button-->

<script>
function preventBack(){
	window.history.forward();
		}
		setTimeout("preventBack()",0);
		window.onunload = function (){ null };
</script>
<!--to disable back button-->

<!--All CSS file-->
<link rel="shortcut icon" href="image/favicon.ico"/><!--End title icon-->
<link rel="stylesheet" type="text/css" href="css/animateItems.css"/>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style_main_PCV.css"/>




<script type="text/javascript">
$(document).ready(function(){
$("#userID1").blur(function() {
var reg = $('#userID1').val();

if(reg=="")
{
$("#userID1").html("");
}

else
{
$.ajax({
type: "POST",
url: "php/userChk.php",
data:"reg="+reg,
success: function(html){
$("#userID1").html(html);
}
});
return false;
}
});
});
</script>






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
		else if(n=="Thursday"){
			document.getElementById('block').value = 'X';
			}				
	}
	</script>
</head>

<body onLoad="block();">


<div class="headder">সিস্টেম লগইন <div style="float:right; font-size:1vw; padding-top:0.8vw; margin-right:0.5vw;">version 3.1</div></div>


<div class="wrapper">

<script>
function chkLog(){
	if(document.getElementById('userID').value=="" || document.getElementById('userID1').value=="" || document.getElementById('password').value=="" || document.getElementById('userID').value== document.getElementById('userID1').value){
		return false;
		} 
		else
		{
			return true;
			}
	}
</script>

<form onSubmit="return chkLog();" ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" name="login">



<input type="hidden" id="block" name="block"/>
<input type="hidden" id="unit" name="unit" value="<?php echo $row_Unit['Unit']; ?>"/>

<div class="LogContainer">
<div style="height:6.7vw; width:40vw; font-size:2vw; color:#FFF; text-align:center; margin-right:auto; margin-left:auto;">
PROJAHNMO<br>ACT Child Anthropometry<br>Unit - <?php echo $row_Unit['Unit']; ?></div>
<div class="LogDIV">
<div class="logDivCon">প্রথম ইউজার আইডি</div>
<div class="logDivCon" style=" padding-top:0.5vw;">দ্বিতীয় ইউজার আইডি</div>
<div class="logDivCon" style=" padding-top:0.3vw;">আপনার পাসওয়ার্ড</div>
</div>
<div class="LogDIV">
<div class="logDivCon"><input  placeholder="ইউজার আইডি দিন" autocomplete="off" type="text" name="userID" id="userID" class="textArea" style="width:80%; height:2.5vw; font-size:2vw;"/></div>

<div class="logDivCon"><input  placeholder="ইউজার আইডি দিন" autocomplete="off" type="text" name="userID1" id="userID1" class="textArea" style="width:80%; height:2.5vw; font-size:2vw;"/></div>







<div class="logDivCon"><input placeholder="পাসওয়ার্ড দিন" autocomplete="off" type="password" name="password" id="password" class="textArea" style="width:80%; height:2.5vw; font-size:2vw;"/></div>
</div>

<div style="width:100%; text-align:center;"><input type="submit" name="sub" id="sub" value="সাবমিট" style="width:40%; height:4.5vw; background-color:#FFF; color:#000; font-size:2.2vw; border-radius:1.5vw; margin-top:8%; box-shadow:0.0vw 0.5vw 0.2vw #333333;"/></div>


</div>
</form>
</div>

</body>
</html>
<?php
mysql_free_result($user);

mysql_free_result($Unit);
?>
