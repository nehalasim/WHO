<?php require_once('Connections/amanhi.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
 
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
//session_start();
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "actSAve")) {
  $insertSQL = sprintf("INSERT INTO frm_act (version, StudyID, visit, Q101, Q102, Q103, Q104, Q105, Q106, Q107, Q108, Q109, Q110, Q111, Q112, Q113, Q114Y, Q114M, Q114D, Q201, Q201Code, Q201Oth, visitDT, visitOutCome, Oth_OutCome, Q203, Q302a, Q302b, Q303a, Q303b, Q341a, Q341b, Q341c, Q342a, Q342b, Q342c, Q343a, Q343b, Q343c, Q351a, Q351b, Q351c, Q352a, Q352b, Q352c, Q353a, Q353b, Q353c, Q361a, Q361b, Q361c, Q362a, Q362b, Q362c, Q363a, Q363b, Q363c, Q371a, Q371b, Q371c, Q372a, Q372b, Q372c, Q373a, Q373b, Q373c, Q381a, Q381b, Q381c, Q382a, Q382b, Q382c, Q383a, Q383b, Q383c, Q384, Q39a, Q39b, Q311, TabID, UserID_1, UserID_2,isCHW) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['version'], "text"),
					   GetSQLValueString($_POST['sid'], "text"),
                       GetSQLValueString($_POST['visit'], "text"),
                       GetSQLValueString($_POST['site'], "text"),
                       GetSQLValueString($_POST['upazila'], "text"),
                       GetSQLValueString($_POST['union'], "text"),
                       GetSQLValueString($_POST['village'], "text"),
                       GetSQLValueString($_POST['bari'], "text"),
                       GetSQLValueString($_POST['household'], "text"),
                       GetSQLValueString($_POST['cid'], "text"),
                       GetSQLValueString($_POST['pid'], "text"),
                       GetSQLValueString($_POST['mname'], "text"),
                       GetSQLValueString($_POST['fname'], "text"),
                       GetSQLValueString($_POST['cname'], "text"),
                       GetSQLValueString($_POST['cpid'], "text"),
                       GetSQLValueString($_POST['cdobForCal'], "date"),
                       GetSQLValueString($_POST['ageYear'], "text"),
                       GetSQLValueString($_POST['ageMonth'], "text"),
                       GetSQLValueString($_POST['ageDay'], "text"),
                       GetSQLValueString($_POST['Q21'], "text"),
                       GetSQLValueString($_POST['placeCode'], "text"),
                       GetSQLValueString($_POST['otherCode'], "text"),
                       GetSQLValueString($_POST['Q22'], "date"),
                       GetSQLValueString($_POST['visitOutCome'], "text"),
                       GetSQLValueString($_POST['VisitO'], "text"),
                       GetSQLValueString($_POST['deathDtSave'], "date"),
                       GetSQLValueString($_POST['Q32a'], "text"),
                       GetSQLValueString($_POST['Q32b'], "text"),
                       GetSQLValueString($_POST['Q33a'], "text"),
                       GetSQLValueString($_POST['Q33b'], "text"),
                       GetSQLValueString($_POST['Q341a'], "text"),
                       GetSQLValueString($_POST['Q341b'], "text"),
                       GetSQLValueString($_POST['Q341c'], "text"),
                       GetSQLValueString($_POST['Q342a'], "text"),
                       GetSQLValueString($_POST['Q342b'], "text"),
                       GetSQLValueString($_POST['Q342c'], "text"),
                       GetSQLValueString($_POST['Q343a'], "text"),
                       GetSQLValueString($_POST['Q343b'], "text"),
                       GetSQLValueString($_POST['Q343c'], "text"),
                       GetSQLValueString($_POST['Q351a'], "text"),
                       GetSQLValueString($_POST['Q351b'], "text"),
                       GetSQLValueString($_POST['Q351c'], "text"),
                       GetSQLValueString($_POST['Q352a'], "text"),
                       GetSQLValueString($_POST['Q352b'], "text"),
                       GetSQLValueString($_POST['Q352c'], "text"),
                       GetSQLValueString($_POST['Q353a'], "text"),
                       GetSQLValueString($_POST['Q353b'], "text"),
                       GetSQLValueString($_POST['Q353c'], "text"),
                       GetSQLValueString($_POST['Q361a'], "text"),
                       GetSQLValueString($_POST['Q361b'], "text"),
                       GetSQLValueString($_POST['Q361c'], "text"),
                       GetSQLValueString($_POST['Q362a'], "text"),
                       GetSQLValueString($_POST['Q362b'], "text"),
                       GetSQLValueString($_POST['Q362c'], "text"),
                       GetSQLValueString($_POST['Q363a'], "text"),
                       GetSQLValueString($_POST['Q363b'], "text"),
                       GetSQLValueString($_POST['Q363c'], "text"),
                       GetSQLValueString($_POST['Q371a'], "text"),
                       GetSQLValueString($_POST['Q371b'], "text"),
                       GetSQLValueString($_POST['Q371c'], "text"),
                       GetSQLValueString($_POST['Q372a'], "text"),
                       GetSQLValueString($_POST['Q372b'], "text"),
                       GetSQLValueString($_POST['Q372c'], "text"),
                       GetSQLValueString($_POST['Q373a'], "text"),
                       GetSQLValueString($_POST['Q373b'], "text"),
                       GetSQLValueString($_POST['Q373c'], "text"),
                       GetSQLValueString($_POST['Q381a'], "text"),
                       GetSQLValueString($_POST['Q381b'], "text"),
                       GetSQLValueString($_POST['Q381c'], "text"),
                       GetSQLValueString($_POST['Q382a'], "text"),
                       GetSQLValueString($_POST['Q382b'], "text"),
                       GetSQLValueString($_POST['Q382c'], "text"),
                       GetSQLValueString($_POST['Q383a'], "text"),
                       GetSQLValueString($_POST['Q383b'], "text"),
                       GetSQLValueString($_POST['Q383c'], "text"),
                       GetSQLValueString($_POST['Q384'], "text"),
                       GetSQLValueString($_POST['endTime1st'], "text"),
                       GetSQLValueString($_POST['endTime2nd'], "text"),
                       GetSQLValueString($_POST['Q311'], "text"),
                       GetSQLValueString($_POST['tab_ID'], "text"),
                       GetSQLValueString($_POST['userID'], "text"),
                       GetSQLValueString($_POST['userID1'], "text"),
					   GetSQLValueString($_POST['is_CHW'], "text"));

  mysql_select_db($database_amanhi, $amanhi);
  $Result1 = mysql_query($insertSQL, $amanhi) or die(mysql_error());

  $insertGoTo = "schedule.php?block=".$_GET['block']."&unit=".$_GET['unit']."&id=".$_GET['id'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

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
$query_Tab_Info = "SELECT Tab_ID,MAX( EnDt) FROM tab_info WHERE EnDt=(select max(EnDt) from tab_info)";
$Tab_Info = mysql_query($query_Tab_Info, $amanhi) or die(mysql_error());
$row_Tab_Info = mysql_fetch_assoc($Tab_Info);
$totalRows_Tab_Info = mysql_num_rows($Tab_Info);

$colname_user2nd = "-1";
if (isset($_GET['id'])) {
  $colname_user2nd = $_GET['id'];
}
mysql_select_db($database_amanhi, $amanhi);
$query_user2nd = sprintf("SELECT * FROM user_info WHERE User_ID = %s", GetSQLValueString($colname_user2nd, "text"));
$user2nd = mysql_query($query_user2nd, $amanhi) or die(mysql_error());
$row_user2nd = mysql_fetch_assoc($user2nd);
$totalRows_user2nd = mysql_num_rows($user2nd);

mysql_select_db($database_amanhi, $amanhi);
$query_OdayEntry = "SELECT count(*) as totalToday FROM frm_act where visitDT = curdate()";
$OdayEntry = mysql_query($query_OdayEntry, $amanhi) or die(mysql_error());
$row_OdayEntry = mysql_fetch_assoc($OdayEntry);
$totalRows_OdayEntry = mysql_num_rows($OdayEntry);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SYSTEM</title>

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style_main.css">


<script src="js/show.js" type="text/javascript"></script>

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


<!--for data pulling from pcvmain-->
<script>
function showUser() {

	
//		var SID_A = document.getElementById("getStudyId");
 //       var SID_B = document.getElementById("StudyId");
  //      var valueA = SID_A.value;
   //     SID_B.value = valueA;
	
	var str = document.getElementById('sid').value;
	var sno = document.getElementById('sno').value;
	
if(document.getElementById('sno').value.length == 1){

  if (str=="") {
    document.getElementById("pid").value="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();

  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	var responseArray = xmlhttp.responseText.split("||");
	if(document.getElementById('sid').value == responseArray[13]){ 	
      document.getElementById("upazila").value=responseArray[0];
	  document.getElementById("union").value=responseArray[1];
	  document.getElementById("village").value=responseArray[2];
	  document.getElementById("bari").value=responseArray[3];
	  document.getElementById("household").value=responseArray[4];
	  document.getElementById("cid").value=responseArray[5];
	  document.getElementById("pid").value=responseArray[6];
	  document.getElementById("mname").value=responseArray[7];
	  document.getElementById("fname").value=responseArray[8];
	  document.getElementById("cname").value=responseArray[9];
	  document.getElementById("cpid").value=responseArray[10];
	  document.getElementById("cdob").value=responseArray[12];
	  document.getElementById("cdobForCal").value=responseArray[11];
	  document.getElementById("upazilaName").value=responseArray[14];
	  document.getElementById("unionName").value=responseArray[15];
	  document.getElementById("villageName").value=responseArray[16];
	  document.getElementById("bariName").value=responseArray[17];
	  document.getElementById("householdName").value=responseArray[18];
	  document.getElementById("dobForchk").value = responseArray[19];
	  //document.getElementById("txtHint").value=xmlhttp.responseText;
	}
	else{
if (document.getElementById("sid").value!=""){
		$(document).ready( function() {
		jAlert('এই শিশুর তথ্য ডাটাবেইজে নেই অথবা এই স্টাডির জন্য প্রযোজ্য নয়।', 'শিশুর তথ্য');
		});
		
		
//		alert("এই শিশুর তথ্য ডাটাবেইজে নেই অথবা এই এস্টাডির জন্য প্রযোজ্য নয়।");
		
	  document.getElementById('sid').value="";
	  document.getElementById('sno').value="";
	  document.getElementById('sno').disabled=true;
      document.getElementById("upazila").value="";
	  document.getElementById("union").value="";
	  document.getElementById("village").value="";
	  document.getElementById("bari").value="";
	  document.getElementById("household").value="";
	  document.getElementById("cid").value="";
	  document.getElementById("pid").value="";
	  document.getElementById("mname").value="";
	  document.getElementById("fname").value="";
	  document.getElementById("cname").value="";
	  document.getElementById("cpid").value="";
	  document.getElementById("cdob").value="";
}

		}

	}

  }

  xmlhttp.open("GET","php/getAllData.php?q="+str+"&s="+sno,true);
  xmlhttp.send();

}
else{
	if(document.getElementById("sid").value!="")
	{
		
	$(document).ready( function() {
	jAlert('এই আইডি সটিক নয়', 'আইডি');
	});
		
//	alert("এই আইডি সটিক নয়");

      document.getElementById('sid').value="";
	  document.getElementById('sno').value="";
	  document.getElementById('sno').disabled=true;
      document.getElementById("upazila").value="";
	  document.getElementById("union").value="";
	  document.getElementById("village").value="";
	  document.getElementById("bari").value="";
	  document.getElementById("household").value="";
	  document.getElementById("cid").value="";
	  document.getElementById("pid").value="";
	  document.getElementById("mname").value="";
	  document.getElementById("fname").value="";
	  document.getElementById("cname").value="";
	  document.getElementById("cpid").value="";
	  document.getElementById("cdob").value="";
	}
	}
}
</script>
<!--end for data pulling from pcvmain-->





<!--Child registration check-->

<script type="text/javascript">
$(document).ready(function(){
$("#next").focus(function() {
var reg = $('#sid').val();
var cpid = $('#cpid').val();
var visit = $('#visitForChk').val();

if(reg=="")
{
$("#sno").html("");
}

else
{
$.ajax({
type: "POST",
url: "php/childChk.php",
data:"reg="+reg+"&cpid="+cpid+"&visit="+visit,
success: function(html){
$("#sno").html(html);
}
});
return false;
}
});
});
</script>
<!--end child registration check-->


<input type="hidden" name="weiSelector" id="weiSelector"/>
<script>
function onLoadMsg(){
	
	if(document.getElementById('sid').value==""){
//		alert();
		document.getElementById('sid').readOnly=false;
		}
		
	var msg = "<?php echo $_GET['msg']; ?>";
	if(msg == "1"){
		jAlert('আপনার এন্ট্রিতে ভুল ছিল, তাই এন্ট্রি হয়নি। সিস্টেম থেকে বাহির হয়ে আবার প্রবেশ করুণ।', 'শিশুর তথ্য');
		}
		
		document.getElementById('sid').value="";
		document.getElementById('sno').value = '';
	}

</script>



<!--disble back button-->
<script>
(function (global) {

	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {

		noBackPlease();

		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };

    };

})(window);

</script>
<!--end disble back button-->

</head>



<body onLoad="onLoadMsg();">



<form method="POST" action="<?php echo $editFormAction; ?>" name="actSAve" onSubmit="return formVal();">

<input type="hidden" value="1" name="is_CHW" id="is_CHW"/>
<script>
function msgCall(){
	var wei = document.getElementsByName('wei');
	
	if(wei[0].checked==true && wei[1].checked==false){
	document.getElementById('weiSelector').value = "T";	
	document.getElementById('msg').style.display = "none";
	//document.getElementById('part6').style.display= "block";
	document.getElementById('part6').style.display= "none";
	document.getElementById('part7').style.display= "none";
	document.getElementById('part8').style.display = "block";
	document.getElementById('Q36_1st').style.display="block";
	return true;
	}
	
	else if(wei[0].checked==false && wei[1].checked==true){
	document.getElementById('weiSelector').value = "S";		
	document.getElementById('msg').style.display = "none";
	document.getElementById('part6').style.display= "none";
	//document.getElementById('part7').style.display= "block";
	document.getElementById('Q35_1st').style.display="block";
	document.getElementById('part8').style.display = "block";
	document.getElementById('Q36_1st').style.display="block";
	return true;
	}
	
	else{
		return false;
		}
}


function msgCallBack(){
	document.getElementById('msg').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "block";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "none";
	document.getElementById('backUpNow').style.display = "block";
	
	}	
	
</script>


<div id="msg" style=" display:none; height:80%; width:92%; margin-left:2vw; text-align:center; font-size:3vw; border:solid #FC0 1vw; margin-top:3vw; padding:1vw; background-color:#0CC; position: absolute; z-index:99999999;">
আপনি কি পরিমাপ করার জন্য প্রস্তুুত। যদি প্রস্তুুত থাকেন, তাহলে নিচের ওজন মাপার যন্ত্রটি নির্বাচন করুণ এবং (_হ্যাঁ_) তে চাপুন। যদি না থাকেন, তাহলে (_না_) তে চাপুন। প্রথম পরিমাপ শুরু করার পর, পিছনের কিছু পরিবর্তন করতে পারবেন না । সে ক্ষেত্রে ফর্ম পুনরায় আরম্ব করতে হবে।

<div style="height:8vw; width:100%; float: left; background-color: #D7F7FF;">
<div style="color:#000; float:left; margin-left:18vw; padding-top:1.9vw;"><input type="radio" id="wei" name="wei" class="radio"/> TANITA BD-585</div>
<div style="color:#000; float:left; margin-left:5vw; padding-top:1.9vw;"><input type="radio" id="wei" name="wei" class="radio"/> SECA 874dr</div>
</div>

<div onClick="msgCallBack();" style=" margin-top:1vw; float:left; height:8vw; width:16vw; background-color:#FFF; font-size:3vw; line-height:8vw; border:1vw solid #CCC; cursor:pointer;">
_না_
</div>

<div onClick="return msgCall();" style=" float:right; margin-top:1vw; height:8vw; width:16vw; background-color:#FFF; font-size:3vw; line-height:8vw; border:1vw solid #CCC; cursor:pointer;">
_হ্যাঁ_
</div>
</div>

<div class="headder"><!---headder-->
CHILD ANTHROPOMETRY TOOL
</div><!---headder end-->



<div style="height:auto; min-height:34vw; overflow:hidden;">
<script>
$( document ).ready(function() {
$("#sid").focus(function(){
	document.getElementsByName('visit')[0].checked=false;
	document.getElementsByName('visit')[1].checked=false;
	document.getElementsByName('visit')[2].checked=false;
	document.getElementsByName('visit')[3].checked=false;
	document.getElementsByName('visit')[4].checked=false;
	document.getElementsByName('visit')[5].checked=false;
	document.getElementsByName('visit')[6].checked=false;
	document.getElementsByName('visit')[7].checked=false;
	document.getElementById('sno').value = "";
	document.getElementById('upazila').value = "";
	document.getElementById('upazilaName').value = "";
	document.getElementById('union').value = "";
	document.getElementById('unionName').value = "";
	document.getElementById('bari').value = "";
	document.getElementById('bariName').value = "";
	document.getElementById('household').value = "";
	document.getElementById('householdName').value = "";
	document.getElementById('cid').value = "";
	document.getElementById('pid').value = "";
	document.getElementById('cname').value = "";
	document.getElementById('mname').value = "";
	document.getElementById('fname').value = "";
	document.getElementById('cpid').value = "";
	document.getElementById('cdob').value = "";
	document.getElementById('cdobForCal').value = "";
	document.getElementById('ageYear').value = "";
	document.getElementById('ageMonth').value = "";
	document.getElementById('ageDay').value = "";
});
});
</script>

<fieldset id="part1" class="fieldset"><!--part one-->
<input type="hidden" name="version" id="version" value="2"/>  <!--in version 1 entry allowed in time frame +/-5 visitSchedule. In version 2 entry allowed -5 days from visit date  till next visit -->
<div class="idPart">
<div style="float:left;">স্টাডি আইডি <input value="<?php echo $_GET['set_sid']; ?>" maxlength="6" onBlur="return serialNo();"  type="text" name="sid" id="sid" class="inputArea" readonly/></div>
<div style="float:right;">বাচ্চার সিরিয়াল নাম্বার <input disabled maxlength="1" onChange="showUser();" type="text" name="sno" id="sno" class="inputArea"/></div>
</div>

<div class="visit">ভিজিট নাম্বার</div>


<div class="visitL"><!--left bar-->
<input type="hidden" name="visitForChk" id="visitForChk"/>
<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v1" style="width:70%; float:left;">জন্মের সময়</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="1"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v2" style="width:70%; float:left;">৩ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="2"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v3" style="width:70%; float:left;">৬ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="3"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v4" style="width:70%; float:left;">১২ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="4"/></div>
</div>

</div><!--left bar end-->

<div class="visitL"><!--left bar-->

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v5" style="width:70%; float:left;">১৮ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="5"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v6" style="width:70%; float:left;">২৪ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="6"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v7" style="width:70%; float:left;">৩০ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="7"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div id="v8" style="width:70%; float:left;">৩৬ মাস</div>
<div style="width:20%; float:left;"><input onClick="color();" type="radio" id="visit" name="visit" class="radio" value="8"/></div>
</div>


<script>
function handler1(){
	document.getElementById('gpPagePart2').click();
	}
</script>

</div><!--left bar end-->
<div id="page1Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="পরের প্রশ্ন" id="next" onClick="handler1();" name="next" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part one end-->







<fieldset id="part2" class="fieldset" style="display:none;"><!--part two-->

<div class="addWrapper"><!--left bar-->

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">দেশ</div>
<div style="width:40%; float:left; margin-left:1vw;"><input type="text" value="11" readonly name="site" id="site" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:25%; float:left; font-size:1.5vw;">উপজিলা</div>

<div style="width:65%; float:left;">
<input readonly type="text" name="upazila" id="upazila" class="textDataPull" style="width:5vw; float:left; margin-right:1vw;"/>
<input readonly type="text" name="upazilaName" id="upazilaName" class="textDataPull" style="float:left;"/>
</div>

</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:25%; float:left; font-size:1.5vw;">ইউনিয়ন</div>
<div style="width:65%; float:left;">
<input readonly type="text" name="union" id="union" class="textDataPull" style="width:5vw; float:left; margin-right:1vw;"/>
<input readonly type="text" name="unionName" id="unionName" class="textDataPull" style="float:left;"/>
</div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:25%; float:left; font-size:1.5vw;">গ্রাম</div>
<div style="width:65%; float:left;">
<input readonly type="text" name="village" id="village" class="textDataPull" style="width:5vw; float:left; margin-right:1vw;"/>
<input readonly type="text" name="villageName" id="villageName" class="textDataPull" style="float:left;"/>
</div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:25%; float:left; font-size:1.5vw;">বাড়ি</div>
<div style="width:65%; float:left;">
<input readonly type="text" name="bari" id="bari" class="textDataPull" style="width:5vw; float:left; margin-right:1vw;" />
<input readonly type="text" name="bariName" id="bariName" class="textDataPull" style="float:left;"/>
</div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:25%; float:left; font-size:1.5vw;">খানা</div>
<div style="width:65%; float:left;">
<input readonly type="text" name="household" id="household" class="textDataPull" style="width:5vw; float:left; margin-right:1vw;"/>
<input readonly type="text" name="householdName" id="householdName" class="textDataPull" style="float:left;"/>
</div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">সিআইডি </div>
<div style="width:40%; float:left; margin-left:1vw;"><input readonly type="text" name="cid" id="cid" class="textDataPull"/></div>
</div> 

</div><!--left bar end-->



<div class="addWrapper"><!--right bar-->
<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">পিআইডি</div>
<div style="width:40%; float:left;"><input readonly type="text" name="pid" id="pid" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">মায়ের নাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="mname" id="mname" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাবার নাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="fname" id="fname" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাচ্চার নাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="cname" id="cname" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">সিপিআইডি</div>
<div style="width:40%; float:left;"><input readonly type="text" name="cpid" id="cpid" class="textDataPull"/></div>

<input type="hidden" id="ageChk"/>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">জন্ম তারিখ</div>
<div style="width:40%; float:left;"><input readonly type="text" name="cdob" id="cdob" class="textDataPull"/></div>
<input readonly type="hidden" name="cdobForCal" id="cdobForCal" class="textDataPull"/>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাচ্চার বয়স </div>
<div style="width:60%; float:left;">

<input readonly type="text" name="ageYear" id="ageYear" style="width:3vw; float:left; margin-right:0.1vw;" class="textDataPull"/>
<div style="float:left; margin-right:0.5vw; margin-top:0.5vw; font-size:1.2vw; color: #36F; font-weight:bold;">Y</div>
<input readonly type="text" name="ageMonth" id="ageMonth" style="width:3vw; float:left; margin-right:0.1vw;" class="textDataPull"/>
<div style="float:left; margin-right:0.5vw; margin-top:0.5vw; font-size:1.2vw; color: #36F; font-weight:bold;">M</div>
<input readonly type="text" name="ageDay" id="ageDay" style="width:3vw; float:left; margin-right:0.1vw;" class="textDataPull"/>
<div style="float:left; margin-top:0.5vw; font-size:1.2vw; color: #36F; font-weight:bold;">D</div>

</div>
</div> 

<script>
function handler2(){
	document.getElementById('gpPagePart3').click();
	}
</script>
</div><!--right bar end -->
<div id="page2Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next2" onClick="part1Back();" name="next2" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next2" onClick="handler2();" name="next2" class="dirButton" /> 
</div><!--nxt pre button end-->
</fieldset><!--part two end-->


<fieldset id="part3" class="fieldset" style="display:none;"><!--part three-->
<div style="width:100%; float:left; font-size:2.5vw; margin-bottom:3vw;">২.০১ মাপ বা ভিজিট করা হয়েছে, সে জায়গার নাম</div>

<script>
function handler3(){
	placeTrans();
	document.getElementById('Q21Click').click();
	}
</script>

<div style="width:40%; float:left; height:auto;">
<div id="mesPlace1" style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
১. বাড়ি
</div>
<div style="height:auto; width:5vw; float:left; font-size:3vw;">
<input type="radio" name="Q21" id="Q21" class="radio" value="1" onClick="handler3();"/>
</div>

<div id="mesPlace2" style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
২. হসপিটাল
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="2" onClick="handler3();"/>
</div>

<div id="mesPlace3" style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
৩. কালিগঞ্জ
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="3" onClick="handler3();"/>
</div>
</div>


<div style="width:40%; float:left; margin-left:4vw;">
<div id="mesPlace4" style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
৪. ইউনিয়ন
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="4" onClick="handler3();"/>
</div>

<div id="mesPlace5" style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
৯. অনন্যা 
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="9" onClick="handler3();"/>
</div>


<div id="Q21o" style="display:none;">
<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
<span id="hospital" style="display:none;">হসপিটাল কোড</span> 
<span id="unionN" style="display:none;">ইউনিয়ন কোড</span> 
<span id="other" style="display:none;">অনন্যা কোড</span> 
</div>

<script>
function placeTrans(){
	document.getElementById('placeCodeDis').value =  document.getElementById('placeCode').value
	}
</script>

<div style="height:auto; width:5vw; float:left;">
<input readonly type="text" id="placeCodeDis" name="placeCodeDis" class="dropdown" style="width:15vw; display:none;"/>
<select onChange="placeTrans();" name="placeCode" id="placeCode" class="dropdown" style="display:none; width:20vw;">
<option value="">একটি নির্বাচন করুণ</option>
<option value="02">জাকিগঞ্জ UHC</option>
<option value="03">মানিকপুর FWC</option>
<option value="04">সড়কের বাজার FWC</option>
<option value="05">সিলেট ওসমানী মেডিকেল</option>
<option value="38">জকিগঞ্জ ইউনিয়ন</option>
<option value="35">কলাছরা ইউনিয়ন</option>
<option value="34">কাশকানাকপুর ইউনিয়ন</option>
<option value="30">বড়ঠাকুরি ইউনিয়ন</option>
<option value="37">সুলতানপুর ইউনিয়ন</option>
<option value="36">মানিকপুর ইউনিয়ন</option>
<option value="47">পূর্বদিঘীরপার ইউনিয়ন</option>
<option value="45">পাশ্চম দিঘীরপার ইউনিয়ন</option>
<option value="33">কাজলসের ইউনিয়ন</option>
</select>


<script>
function isNumber(evt){
	var charCode= (evt.which) ? evt.which : event.keyCode
	if(charCode>31 && (charCode<48 || charCode>57))
	return false;
	
	return true;
	}
</script>
<input onKeyPress="return isNumber(event)" type="text" name="otherCode" maxlength="2" id="otherCode" class="inputArea" style="width:10vw; display:none;"/>
</div>
</div>




</div>

<script>
function handler4(){
	document.getElementById('gpPagePart4').click();
	}
</script>

<div id="page3Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next3" onClick="part2Back();" name="next2" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next3" onClick="handler4();" name="next2" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part three-->

<fieldset id="part4" class="fieldset" style="display:none; overflow:hidden;"><!--part four-->

<div style="width:35%; height:20vw; border-right:1px #666666 solid; float:left;">
<div style="width:100%; float:left; font-size:2.5vw; margin-bottom:3vw;">ভিজিট এর তারিখ</div>
<div style="height:auto; width:5vw; float:left; font-size:3vw;">
<input type="hidden" name="Q22" id="Q22" class="inputArea"/>
<input readonly type="text" name="VisitDate_dis" id="VisitDate_dis" class="inputArea"/>
</div>
</div>


<div style="width:35%; height:20vw; float:left; margin-left:5vw;">

<div style="width:100%; float:left; font-size:2.5vw; margin-bottom:3vw;">২.০১ ভিজিট এর ফলাফল</div>

<script>
function visitTrans(){
	document.getElementById('visitOutComeSave').value =  document.getElementById('visitOutCome').value
	}
</script>


<script>
function handler5(){
	visitTrans();
	document.getElementById('OutcomeCHnage').click();
	}
</script>



<div style="height:auto; width:5vw; float:left; font-size:3vw;">
<input type="text" id="visitOutComeSave" name="visitOutComeSave" class="dropdown" style="width:15vw; display:none;" />
<select onChange="handler5();" id="visitOutCome" name="visitOutCome" class="dropdown">
<option value="">যে কোন একটি নির্বাচন করুন</option>
<option value="1">সম্পন্ন</option>
<option value="2">আংশিক সম্পন্ন</option>
<option value="3">শিশু সাময়িক অনুপস্থিত</option>
<option value="4">পরিবার স্থায়ীভাবে স্থানান্তরিত</option>
<option value="5">শিশু অসুস্থ</option>
<option value="6">শিশু মারা গিয়েছে</option>
<option value="7">সম্মতি প্রত্যাহার</option>
<option value="9">অন্যান্য</option>
</select>
</div>


<div style="height:auto; width:100%; float:left; margin-top:2vw; font-size:3vw; overflow:hidden;">
<!--<input type="text" name="VisitO" id="VisitO" class="inputArea" style="width:10vw; display:none;"/>-->
<script>
function visitOutTrans(){
	document.getElementById('VisitDis').value=document.getElementById('VisitO').value;
	}
</script>
<select onChange="visitOutTrans();" id="VisitO" name="VisitO" class="dropdown" style="display:none;">
<option value="">যে কোন একটি নির্বাচন করুন</option>
<option value="11">বাড়িতে অনুষ্ঠান হচ্ছে</option>
<option value="12">শিশু ঘুমিয়ে আছে</option>
<option value="13">শিশু খুব কান্নাকাটি করছে</option>
<option value="14">মা অসুস্থ </option>
<option value="15">খুব বৃষ্টি</option>
</select>
<input readonly type="text" class="dropdown" style="display:none;" id="VisitDis" name="VisitDis"/>


<script>



function ddt(){

var dt = document.getElementById('deathDt').value;
var cDob = document.getElementById('dobForchk').value;
var today = new Date();
var MyDt = new Date(dt);


var dob = new Date(cDob);

if (MyDt>today){
	jAlert("শিশুর মৃত্যুর তারিখ, আজকের তারিখ থেকে বেশি হতে পারবেনা। সঠিক তারিখ লিখুন।");
	document.getElementById('deathDt').value= "";
	}
	else if(MyDt<dob){
		jAlert("শিশুর মৃত্যুর তারিখ, শিশুর জন্মের তারিখ থেকে পরের তারিখ হবে।");
		document.getElementById('deathDt').value= "";
		}
	
document.getElementById('deathDtSave').value = dt.substring(6,11)+'-'+dt.substring(0,2)+'-'+dt.substring(3,5);	
	
}
</script>

<input type="hidden" id="dobForchk" name="dobForchk"/>
<input onBlur="ddt();" type="text" name="deathDt" id="deathDt" class="inputArea" style="width:30vw; display:none;"/>
<input type="hidden" name="deathDtSave" id="deathDtSave" value=""/>
<div id="dateForM" style="display:none; font-size:2vw;">মাস/দিন/বছর</div>
</div>

</div>

<script>
function handler6(){
	document.getElementById('gpPagePart5').click();
	}
</script>
<div id="page4Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next14" onClick="part3Back();" name="next14" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next4" onClick="handler6();" name="next2" class="dirButton" /> 
</div><!--nxt pre button end-->
</fieldset><!--part four end -->




<fieldset id="part5" class="fieldset" style="display:none; overflow:hidden;"><!--part five-->

<div id="Q3a1" style="width:100%; float:left; margin-bottom:2vw;">
<div id="collector_one" style="height:auto; width:50vw; float:left; font-size:2.5vw;">প্রথম ডাটা কালেক্টর এর আইডি</div>
<div style="height:auto; width:30vw; float:left;"><input value="<?php echo $row_user['User_ID']; ?>" type="text" name="Q32a" id="Q32a" class="inputArea"/></div>
</div>

<div id="Q3b1" style="width:100%; float:left; margin-bottom:2vw;">
<div id="start_one" style="height:auto; width:50vw; float:left; font-size:2.5vw;">প্রথম পরিমাপ শুরুর সময়</div>
<div style="height:auto; width:30vw; float:left;"><input readonly type="text" name="Q33a" id="Q33a" class="inputArea"/>
</div>
</div>


<div id="Q3a2" style="width:100%; float:left; margin-bottom:2vw;">
<div id="collector_two" style="height:auto; width:50vw; float:left; font-size:2.5vw;">দ্বিতীয় ডাটা কালেক্টর এর আইডি</div>
<div style="height:auto; width:30vw; float:left;"><input value="<?php echo $_GET['id']; ?>" type="text" name="Q32b" id="Q32b" class="inputArea"/>
</div>
</div>

<div id="Q3b2" style="width:100%; float:left;">
<div id="start_two" style="height:auto; width:50vw; float:left; font-size:2.5vw;">দ্বিতীয় পরিমাপ শুরুর সময়</div>
<div style="height:auto; width:30vw; float:left;"><input readonly type="text" name="Q33b" id="Q33b" class="inputArea"/>
</div>
</div>


<div id="page5Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next5" onClick="part4Back();" name="next5" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next5" onClick="part6();" name="next5" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part five end -->


<fieldset id="part6" class="fieldset" style="display:none; overflow: hidden;"><!--part six-->
<legend style="font-size:1.8vw;">ওজন TANITA BD-585</legend>
<div style="width:100%; margin-left:22%;">
<div id="Q34_1st" style="width:24vw; background-color: #F93 ; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
১ম.CHW - <?php echo $row_user['UName']; ?> (<?php echo $row_user['Emp_ID']; ?>)</div> 
<div id="Q34_2nd" style="width:24vw; background-color: #9FF; float:left; font-size:2vw; margin-right:3.5%; margin-bottom:2vw; margin-top:1vw; display:none;">
২য়.CHW - <?php echo $row_user2nd['UName']; ?> (<?php echo $row_user2nd['Emp_ID']; ?>)</div> 
<div id="Q34_diff" style="width:15vw; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
পার্থক্য</div>
</div>

<script>
function handler7(){
	document.getElementById('Q341Blur').click();
	}
</script>

<div id="Q34a" style="width:100%; float:left;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৪.১ প্রথম পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q341a" id="Q341a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler7();"  type="text" name="Q341b" id="Q341b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q341c" id="Q341c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler8(){
	document.getElementById('Q342Blur').click();
	}
</script>
<div id="Q34b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৪.২ দ্বিতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q342a" id="Q342a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler8();" type="text" name="Q342b" id="Q342b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q342c" id="Q342c" class="mes" style="display:none;"/></div> 
</div>


<script>
function handler9(){
	document.getElementById('Q343Blur').click();
	}
</script>
<div id="Q34c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw;font-size:2vw; ">৩.৪.৩ তৃতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q343a" id="Q343a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler9();" type="text" name="Q343b" id="Q343b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q343c" id="Q343c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler10(){
	document.getElementById('gpPagePart7').click();
	}
</script>
<div id="page6Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next6BKB" onClick="part5Back();" name="next6" class="dirButton" style="display:none;" /> 
<input type="button" value="পরের প্রশ্ন" id="next6" onClick="handler10();" name="next6" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part six end -->




<fieldset id="part7" class="fieldset" style="display:none; overflow: hidden;"><!--part seven-->
<legend style="font-size:1.8vw;">ওজন SECA 874dr</legend>

<div style="width:100%; margin-left:22%;">
<div id="Q35_1st" style=" width:24vw; background-color: #F93;  float:left; font-size:2vw;  margin-bottom:2vw; margin-top:1vw; display:none;">
১ম.CHW - <?php echo $row_user['UName']; ?> (<?php echo $row_user['Emp_ID']; ?>)
</div> 

<div id="Q35_2nd" style="width:24vw; background-color: #9FF; float:left; font-size:2vw; margin-right:3.5%; margin-bottom:2vw; margin-top:1vw; display:none;">
২য়.CHW - <?php echo $row_user2nd['UName']; ?> (<?php echo $row_user2nd['Emp_ID']; ?>)</div> 
<div id="Q35_diff" style="width:15vw; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
পার্থক্য</div> 
</div>

<script>
function handler11(){
	document.getElementById('Q351Blur').click();
	}
</script>
<div id="Q35a" style="width:100%; float:left;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৫.১ প্রথম পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q351a" id="Q351a" class="mes"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler11();" type="text" name="Q351b" id="Q351b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q351c" id="Q351c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler12(){
	document.getElementById('Q352Blur').click();
	}
</script>
<div id="Q35b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৫.২ দ্বিতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q352a" id="Q352a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler12();" type="text" name="Q352b" id="Q352b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q352c" id="Q352c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler13(){
	document.getElementById('Q353Blur').click();
	}
</script>
<div id="Q35c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৫.৩ তৃতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q353a" id="Q353a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler13();" type="text" name="Q353b" id="Q353b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q353c" id="Q353c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler14(){
	document.getElementById('gpPagePart8').click();
	}
</script>
<div id="page7Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next77" onClick="part5Back();" name="next77" class="dirButton" style="display:none;"/> 
<input type="button" value="পরের প্রশ্ন" id="next7" onClick="handler14();" name="next7" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part seven end -->




<fieldset id="part8" class="fieldset" style="display:none; overflow: hidden;"><!--part eight-->
<legend style="font-size:1.8vw;">মাথার পরিধি</legend>

<div style="width:100%; margin-left:22%;">
<div id="Q36_1st" style="width:24vw; background-color: #F93; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
১ম.CHW - <?php echo $row_user['UName']; ?> (<?php echo $row_user['Emp_ID']; ?>)
</div> 
<div id="Q36_2nd" style="width:24vw; background-color: #9FF; float:left; font-size:2vw; margin-right:3.5%; margin-bottom:2vw; margin-top:1vw; display:none;">
২য়.CHW - <?php echo $row_user2nd['UName']; ?> (<?php echo $row_user2nd['Emp_ID']; ?>)
</div> 
<div id="Q36_diff" style="width:15vw; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
পার্থক্য</div> 
</div>


<script>
function handler15(){
	document.getElementById('Q361Blur').click();
	}
</script>
<div id="Q36a" style="width:100%; float:left;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৬.১ প্রথম পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q361a" id="Q361a" class="mes"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler15()" type="text" name="Q361b" id="Q361b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q361c" id="Q361c" class="mes" style="display:none;"/></div> 
</div>


<script>
function handler16(){
	document.getElementById('Q362Blur').click();
	}
</script>
<div id="Q36b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৬.২ দ্বিতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q362a" id="Q362a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler16();" type="text" name="Q362b" id="Q362b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q362c" id="Q362c" class="mes" style="display:none;"/></div> 
</div>


<script>
function handler17(){
	document.getElementById('Q363Blur').click();
	}
</script>
<div id="Q36c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৬.৩ তৃতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q363a" id="Q363a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler17();" type="text" name="Q363b" id="Q363b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q363c" id="Q363c" class="mes" style="display:none;"/></div> 
</div>



<script>
function handler18(){
	document.getElementById('gpPagePart9').click();
	}
</script>
<div id="page8Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next6BK" onClick="part5Back();" name="next6" class="dirButton" />  
<input type="button" value="পরের প্রশ্ন" id="next8" onClick="handler18();" name="next8" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part eight end -->



<fieldset id="part9" class="fieldset" style="display:none; overflow: hidden;"><!--part nine-->
<legend style="font-size:1.8vw;">মধ্য বাহুর উপরিভাগ পরিধি</legend>

<div style="width:100%; margin-left:22%;">
<div id="Q37_1st" style="width:24vw; background-color: #F93; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
১ম.CHW - <?php echo $row_user['UName']; ?> (<?php echo $row_user['Emp_ID']; ?>)
</div> 
<div id="Q37_2nd" style="width:24vw; background-color: #9FF; float:left; font-size:2vw; margin-right:3.5%; margin-bottom:2vw; margin-top:1vw; display:none;">
২য়.CHW - <?php echo $row_user2nd['UName']; ?> (<?php echo $row_user2nd['Emp_ID']; ?>)
</div> 
<div id="Q37_diff" style="width:15vw; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
পার্থক্য</div> 
</div>

<script>
function handler19(){
	document.getElementById('Q371Blur').click();
	}
</script>
<div id="Q37a" style="width:100%; float:left;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৭.১ প্রথম পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q371a" id="Q371a" class="mes"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler19();" type="text" name="Q371b" id="Q371b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q371c" id="Q371c" class="mes" style="display:none;"/></div> 
</div>


<script>
function handler20(){
	document.getElementById('Q372Blur').click();
	}
</script>
<div id="Q37b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৭.২ দ্বিতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q372a" id="Q372a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler20();" type="text" name="Q372b" id="Q372b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q372c" id="Q372c" class="mes" style="display:none;"/></div> 
</div>


<script>
function handler21(){
	document.getElementById('Q373Blur').click();
	}
</script>
<div id="Q37c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৭.৩ তৃতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q373a" id="Q373a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler21();" type="text" name="Q373b" id="Q373b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q373c" id="Q373c" class="mes" style="display:none;"/></div> 
</div>


<script>
function handler22(){
	document.getElementById('gpPagePart10').click();
	}
</script>
<div id="page9Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next9" onClick="part8Back();" name="next9" class="dirButton" style="display:none;" /> 
<input type="button" value="পরের প্রশ্ন" id="next9" onClick="handler22();" name="next9" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part nine end -->


<fieldset id="part10" class="fieldset" style="display:none; overflow: hidden;"><!--part ten-->
<legend style="font-size:1.8vw;">দৈর্ঘ্য / উচ্চতা</legend>

<div style="width:100%; margin-left:22%;">
<div id="Q38_1st" style="width:24vw; background-color: #F93; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
১ম.CHW - <?php echo $row_user['UName']; ?> (<?php echo $row_user['Emp_ID']; ?>)
</div> 
<div id="Q38_2nd" style="width:24vw; background-color: #9FF; float:left; font-size:2vw; margin-right:3.5%; margin-bottom:2vw; margin-top:1vw; display:none;">
২য়.CHW - <?php echo $row_user2nd['UName']; ?> (<?php echo $row_user2nd['Emp_ID']; ?>)
</div> 
<div id="Q38_diff" style="width:15vw; float:left; font-size:2vw; margin-bottom:2vw; margin-top:1vw; display:none;">
পার্থক্য</div> 
</div>

<script>
function handler23(){
	document.getElementById('Q381Blur').click();
	}
</script>
<div id="Q38a" style="width:100%; float:left;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৮.১ প্রথম পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q381a" id="Q381a" class="mes"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler23();" type="text" name="Q381b" id="Q381b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q381c" id="Q381c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler24(){
	document.getElementById('Q382Blur').click();
	}
</script>
<div id="Q38b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৮.২ দ্বিতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q382a" id="Q382a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler24();" type="text" name="Q382b" id="Q382b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q382c" id="Q382c" class="mes" style="display:none;"/></div> 
</div>

<script>
function handler25(){
	document.getElementById('Q383Blur').click();
	}
</script>
<div id="Q38c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:20vw; float:left; font-size:2.5vw; font-size:2vw; ">৩.৮.৩ তৃতীয় পরিমাপ</div> 
<div style="width:24vw; float:left;"><input type="text" name="Q383a" id="Q383a" class="mes" style="display:none;"/></div> 
<div style="width:25vw; float:left;"><input onBlur="handler25();" type="text" name="Q383b" id="Q383b" class="mes" style="display:none;"/></div> 
<div style="width:18vw; float:left;"><input type="text" name="Q383c" id="Q383c" class="mes" style="display:none;"/></div> 
</div>


<!--to select radio button-->
<script>
function imgRadio1(){
		 document.getElementById('imgHg').style.backgroundColor = "#0C9";
		 document.getElementById('imgHg1').style.backgroundColor = "";
		 document.getElementsByName('Q384')[0].checked = true;
		 document.getElementsByName('Q384')[1].checked = false;
	}
function imgRadio2(){
	 	document.getElementById('imgHg').style.backgroundColor = "";
		 document.getElementById('imgHg1').style.backgroundColor = "#0C9";
		 document.getElementsByName('Q384')[0].checked = false;
		 document.getElementsByName('Q384')[1].checked = true;
	}	

function imgeCol1(){
	  	 document.getElementById('imgHg').style.backgroundColor = "#0C9";
		 document.getElementById('imgHg1').style.backgroundColor = "";	
	}
function imgeCol2(){
	  	 document.getElementById('imgHg').style.backgroundColor = "";
		 document.getElementById('imgHg1').style.backgroundColor = "#0C9";	
	}	
	
</script>
<!--end to select radio button-->


<div id="Q38Type" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">৩.৮.৪ পরিমাপ করার ধরণ</div>
<div id="imgHg" style="width:30vw; height:25.3vw; float:left; margin-left:1%; border:1px #000000 solid; font-size:1.2vw; text-align:center; font-weight:bold; overflow:hidden;">
Recumbent
<div style="width:100%; float:left;" id="divImg1"  onClick="imgRadio1();"><img id="img1" src="image/rec.jpg" style="height:80%; width:100%;"/></div>
<div id="imgRadio1" style="width:100%; float:left; text-align:center; padding-top:5.4vw;"><input onClick="imgeCol1();" value="1" type="radio" name="Q384" id="Q384" class="radio"/></div>
</div> 


<div id="imgHg1" style="width:14vw; float:left; margin-left:2%; border:1px #000000 solid; font-size:1.2vw; text-align:center; font-weight:bold;">
Height
<div style="width:100%; height:20vw; float:left;" id="divImg2" onClick="imgRadio2();"><img id="img2" src="image/stn.jpg" style="height:100%; width:100%;"/></div>
<div id="imgRadio2" style="width:100%; float:left; text-align:center;"><input onClick="imgeCol2();" value="2" type="radio" name="Q384" id="Q384" class="radio"/></div>
</div> 


</div>

<script>
function handler26(){
	document.getElementById('gpPagePart11').click();
	}
</script>
<div id="page10Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next101" onClick="part9Back();" name="next101" class="dirButton" style="display:none;" /> 
<input type="button" value="পরের প্রশ্ন" id="next10" onClick="handler26();" name="next10" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part ten end -->




<fieldset id="part11" class="fieldset" style="display:none; overflow: hidden;"><!--part eleven-->
<legend style="font-size:1.8vw;">পরিমাপ শেষ</legend>

<div id="Q39_1st" style="width:25vw; float:left; font-size:2vw; margin-bottom:1vw; margin-top:1vw; display: ;">
১ম.CHW - <?php echo $row_user['UName']; ?> (<?php echo $row_user['Emp_ID']; ?>)</div> 

<div id="Q39a" style="width:100%; float:left;">
<div style="width:30vw; float:left; font-size:2.5vw;">পরিমাপ শেষ করার সময়</div> 
<div style="width:20vw; float:left;"><input readonly type="text" name="endTime1st" id="endTime1st" class="mes"/></div> 
</div>


<div id="Q39_2nd" style="width:30vw; float:left; font-size:2vw; margin-bottom:1vw; margin-top:3vw; display:;">
২য়.CHW - <?php echo $row_user2nd['UName']; ?> (<?php echo $row_user2nd['Emp_ID']; ?>)</div> 

<div id="Q39b" style="width:100%; float:left; margin-top:0vw; display:;">
<div style="width:30vw; float:left; font-size:2.5vw;">পরিমাপ শেষ করার সময়</div> 
<div style="width:20vw; float:left;"><input readonly type="text" name="endTime2nd" id="endTime2nd" class="mes" style="display:;"/></div> 
</div>


<div id="page11Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next11" onClick="part9Back();" name="next11" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next11" onClick="part12();" name="next11" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part eleven end -->





<fieldset id="part12" class="fieldset" style="display:none; overflow: hidden;"><!--part twelve-->
<legend style="font-size:1.8vw;"></legend>

<div id="Q38_1st" style="width:100%; float:left; font-size:2.5vw; margin-bottom:1vw; margin-top:1vw; display:;">
<span style=" float:left;">৩.১১ </span> 
<input readonly type="text" name="ND" id="NDQ341a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ341b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ342a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ342b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ343a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ343b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ351a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ351b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ352a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ352b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ353a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ353b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ361a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ361b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ362a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ362b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ363a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ363b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ371a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ371b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ372a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ372b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ373a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ373b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ381a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ381b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ382a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ382b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ383a" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
<input readonly type="text" name="ND" id="NDQ383b" class="mes" style="width:8vw; float:left; background-color:#CCC;"/> 
, এই উল্লেখিত প্রশ্নগুল পরিমাপ নেয়া হইনি, তার কারন নিচের বক্সে লিখুন।
</div> 


<script>
function Q311Trans(){
	document.getElementById('Q311Dis').value =  document.getElementById('Q311').value
	}
</script>
<div id="Q38a" style="width:100%; float:left;">
<div style="width:50%; float:left;">

<input readonly type="text" name="Q311Dis" id="Q311Dis" class="dropdown" style="width:10vw; display:none;"/>
<select onChange="Q311Trans();" name="Q311" id="Q311" class="dropdown">
<option value="">যে কোন একটি নির্বাচন করুণ</option>
<option value="01">শিশু খুব কান্নাকাটি করছিল</option>
<option value="02">এই পরিমাপ এর জন্য, পরিবার সম্মতি দেয়নি</option>
<option value="03">শিশু খুব নড়াচড়া করছিল</option>
<option value="04">মা সম্পূর্ণ পরিমাপ না করে চলে গেছে</option>
<option value="05">শারীরিক কোন সমস্যা</option>
<option value="06">শিশু হঠাৎ অজ্ঞান হয়েগেছে</option>
</select>

</div> 
</div>


<script>
function handler27(){
	document.getElementById('gpPagePart13').click();
	}
</script>
<div id="page12Button" style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next13" onClick="part9Back();" name="next13" class="dirButton"  style="display:none;"/> 
<input type="button" value="পরের প্রশ্ন" id="next13" onClick="handler27();" name="next13" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part twelve end -->





<fieldset id="part13" class="fieldset" style="display:none; overflow: hidden;"><!--part thirteen-->
<legend style="font-size:1.8vw;"></legend>



<script>
function saveChk(){

if(document.getElementById('visitOutComeSave').value=="6" && document.getElementById('deathDt').value == ""){

$(document).ready( function() {
jAlert('আপনি ভিজিট আউটকাম এ বাচ্চা মৃত নির্বাচন করেছেন, এবং কোন তারিখে মারা গেছে, তা উল্লেখ করেননি। তাই ফর্ম পুনরায় আরম্ভ করে সেভ করুন।', 'শিশুর তথ্য');
});
return false;
}
else
{
	return true;
	}
}



</script>
<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input disabled style="width:30vw;" type="submit" value="SAVE" id="submit" name="submit" onClick="return saveChk();" class="dirButton" /> 
</div><!--nxt pre button end-->



</fieldset><!--part thirteen end -->


</div>
<fieldset id="uInfo" class="fieldset" style="width:91%; display:non; font-size:1.3vw;">
<legend>ব্যবহারকারীর তথ্য</legend>

<!--ডাটা কালেক্টরদের আইডি :--> <input type="hidden" readonly name="userID" id="userID" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" value="<?php echo $row_user['User_ID']; ?>"/> <input type="hidden" readonly name="userID1" id="userID1" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" 
value="<?php echo $_GET['id']; ?>"/> <!--&nbsp; | &nbsp;-->
<!--মোট এন্ট্রি দিয়েছেন :--> <input type="hidden" readonly name="st1" id="st1" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" value="<?php echo $row_CountAll['count(*)']; ?>"/><!--&nbsp; | &nbsp;-->
<!--আজকে মোট এন্ট্রি দিয়েছেন :--> <input type="hidden" readonly name="st2" id="st2" style="background-color: #E1E1E1; height:auto; width:5vw; font-size:1.2vw; font-weight:bold; color:#000;" value="<?php echo $row_OdayEntry['totalToday']; ?>"/>

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

	window.location.href= "TodayEntry.php?id=<?php echo $_GET['id']; ?>";
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

<a href="php/CHW_BackUp.php?id=<?php echo $_GET['id']; ?>">
<input type="hidden" readonly name="backUpNow" id="backUpNow" style="background-color: #FC0; box-shadow:0.4vw 0.4vw 0.2vw #999999; display:block; border-radius:0.3vw; height:2.5vw; width:11vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:left; color:#000;" value="ব্যাকআপ"/>
</a>



<input onClick="ExitFunc();" type="text" readonly name="close" id="close" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #C30; display:block; border-radius:0.3vw; height:2.5vw; width:8vw; font-size:1.2vw; font-weight:bold; text-align:center; float:right; color:#FFF;" value="বাহির"/>


<a href= "schedule.php?unit=<?php echo $_GET['unit'];?>&block=<?php echo $_GET['block'];?>&id=<?php echo $_GET['id'];?>">
<input type="text" readonly name="backList" id="backList" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #FFF; display:block; border-radius:0.3vw; height:2.5vw; width:4vw;  margin-right:5%; font-size:2.6vw; text-align:center; float:right; color:#000;" value="&laquo;"/></a>

<input onClick="ReloadFunc()" type="hidden" readonly name="again" id="again" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #FFF; display:block; border-radius:0.3vw; height:2.5vw; width:11vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:right; color:#000;" value="পুনরায় আরম্ভ"/>


<input onClick="todayEn();" type="hidden" readonly name="again" id="again" style=" box-shadow:0.4vw 0.4vw 0.2vw #999999; background-color: #FFF; display:block; border-radius:0.3vw; height:2.5vw; width:11vw;  margin-right:5%; font-size:1.2vw; text-align:center; float:right; color:#000;" value="আজকের এন্ট্রি"/>


<a href="<?php echo $logoutAction ?>"><input type="hidden" name="logOut" id="logOut"/></a>


</div>

</fieldset>
<input type="hidden" name="MM_insert" value="actSAve">
</form>

<div style=" height:auto; width:100%; background-color:#000; display:none; z-index:-5;">
<input type="button" name="gpPagePart2" id="gpPagePart2" onClick="part2();"/>


<input type="button" name="gpPagePart3" id="gpPagePart3" onClick="part3();"/>

<input type="button" name="gpPagePart4" id="gpPagePart4" onClick="part4();"/>

<input type="button" name="Q21Click" id="Q21Click" onClick="Q21();"/>


<input type="button" name="OutcomeCHnage" id="OutcomeCHnage" onClick="outcome();"/>


<input type="button" name="gpPagePart5" id="gpPagePart5" onClick="part5();"/>

<input type="button" name="gpPagePart6" id="gpPagePart6" onClick="part6();"/>

<input type="button" name="Q341Blur" id="Q341Blur" onClick="Q341();"/>

<input type="button" name="Q342Blur" id="Q342Blur" OnClick="Q342();"/>

<input type="button" name="Q343Blur" id="Q343Blur" onClick="Q343();"/>

<input type="button" name="gpPagePart7" id="gpPagePart7" onClick="part7();"/>


<input type="button" name="Q351Blur" id="Q351Blur" onClick="Q351();"/>

<input type="button" name="Q352Blur" id="Q352Blur" onClick="Q352();"/>

<input type="button" name="Q353Blur" id="Q353Blur" onClick="Q353();"/>

<input type="button" name="gpPagePart8" id="gpPagePart8" onClick="part8();"/>

<input type="button" name="Q361Blur" id="Q361Blur" onClick="Q361();"/>

<input type="button" name="Q362Blur" id="Q362Blur" onClick="Q362();"/>

<input type="button" name="Q363Blur" id="Q363Blur" onClick="Q363();"/>

<input type="button" name="gpPagePart9" id="gpPagePart9" onClick="part9();"/>

<input type="button" name="Q371Blur" id="Q371Blur" onClick="Q371();"/>

<input type="button" name="Q372Blur" id="Q372Blur" onClick="Q372();"/>

<input type="button" name="Q373Blur" id="Q373Blur" onClick="Q373();"/>

<input type="button" name="gpPagePart10" id="gpPagePart10" onClick="part10();"/>

<input type="button" name="Q381Blur" id="Q381Blur" onClick="Q381();"/>

<input type="button" name="Q382Blur" id="Q382Blur" onClick="Q382();"/>

<input type="button" name="Q383Blur" id="Q383Blur" onClick="Q383();"/>

<input type="button" name="gpPagePart11" id="gpPagePart11" onClick="part11();"/>
<input type="button" name="gpPagePart12" id="gpPagePart12" onClick="part12();"/>
<input type="button" name="gpPagePart13" id="gpPagePart13" onClick="part13();"/>
</div>


</body>
</html>
<?php
mysql_free_result($user);

mysql_free_result($CountAll);

mysql_free_result($Tab_Info);

mysql_free_result($user2nd);

mysql_free_result($OdayEntry);
?>
