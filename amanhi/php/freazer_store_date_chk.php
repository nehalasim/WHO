<?php require_once('../Connections/BMC.php'); ?>
<!--Used script plugin for customized alert boxes-->
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.ui.draggable.js" type="text/javascript"></script>

<script src="../js/jquery.alerts.js" type="text/javascript"></script>
<link href="../css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<!--end Used script plugin for customized alert boxes-->
<?php require_once('../Connections/DuplicateChk.php'); ?>
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

$sid = trim($_GET['sid']);
//$cpid = trim($_GET['cpid']);


mysql_select_db($database_DuplicateChk, $DuplicateChk);
$query_Recordset1 = "SELECT * FROM bm where BIOBANK_ID = '$sid'";
$Recordset1 = mysql_query($query_Recordset1, $DuplicateChk) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_BMC, $BMC);
$query_Recordset2 = "select * from bm_master m inner join breastfeeding.qr_assigned a on m.WOMAN_ID = a.BIOBANK_ID WHERE m.WOMAN_ID = '$sid'";
$Recordset2 = mysql_query($query_Recordset2, $BMC) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

//+'.$row_Recordset1['Q105'].'" "'.$row_Recordset1['Q104'].'" is already entered on "'.$row_Recordset1['EnDt'].'" "







if($totalRows_Recordset1 > 0) {

		
		
		echo '<script type="text/javascript">';
		echo ' $(document).ready( function() {';
		echo 'jAlert("Woman "+ "'.$row_Recordset1['Q105'].' " + "'.$row_Recordset1['Q104'].'"+" was entered on "+ "'.$row_Recordset1['EnDt'].'")';
		echo '});';
		echo '</script>';	
		echo '<script>document.getElementById("whowid").value = ""</script>';
		echo '<script>document.getElementById("ChildSerial").value = ""</script>';
		echo '<script>document.getElementById("Q101").value = ""</script>';
		echo '<script>document.getElementById("Q102").value = ""</script>';
		echo '<script>document.getElementById("Q103").value = ""</script>';
		echo '<script>document.getElementById("Q104").value = ""</script>';
		echo '<script>document.getElementById("Q105").value = ""</script>';
		echo '<script>document.getElementById("Q106").value = ""</script>';
		
	}
	else if($totalRows_Recordset2 < 1){
		echo '<script type="text/javascript">';
		echo ' $(document).ready( function() {';
		echo 'jAlert("QR code is not assigned for this woman, please assign the QR code for this ID at first, then try to enter the data.")';
		echo '});';
		echo '</script>';	
		echo '<script>document.getElementById("whowid").value = ""</script>';
		echo '<script>document.getElementById("ChildSerial").value = ""</script>';
		echo '<script>document.getElementById("Q101").value = ""</script>';
		echo '<script>document.getElementById("Q102").value = ""</script>';
		echo '<script>document.getElementById("Q103").value = ""</script>';
		echo '<script>document.getElementById("Q104").value = ""</script>';
		echo '<script>document.getElementById("Q105").value = ""</script>';
		echo '<script>document.getElementById("Q106").value = ""</script>';
		
		}
	else{
		echo '<script type="text/javascript">
		 
		 $(document).ready( function() {
		  
        $("#page1st").slideUp();
		$("#page2nd").slideDown();
		$("#page3rd").slideUp();
		$("#page4th").slideUp();
		$("#page5th").slideUp();
		$("#page6th").slideUp();
		$("#page7th").slideUp();
		$("#page8th").slideUp();
		$("#page9th").slideUp();
		$("#page10th").slideUp();
		$("#page11th").slideUp();
		$("#page12th").slideUp();
		$("#page13th").slideUp();
		$("#page14th").slideUp();
		$("#page15th").slideUp();
		$("#page16th").slideUp();
		$("#page17th").slideUp();
		$("#page18th").slideUp();
		$("#page19th").slideUp();
		$("#page20th").slideUp();
		$("#page21st").slideUp();
		$("#page22nd").slideUp();
		$("#page23rd").slideUp();
		
		
	var d = new Date();
    var h = d.getHours();
    var m = d.getMinutes();
    if (m<10){
    m="0"+m;
    }
    else{
    m=m;
    }
	
	if (h<10){
    h="0"+h;
    }
    else{
    h=h;
    }
	

	var day = d.getDate();
	var Gmon = d.getMonth()+1;
	var Gyer = d.getFullYear();	
	
	if (day<10){
    day="0"+day;
    }
    else{
    day=day;
    }
	
	if (Gmon<10){
    Gmon="0"+Gmon;
    }
    else{
    Gmon=Gmon;
    }
	
	
	
	document.getElementById("Q112").value = h+":"+m;
	document.getElementById("Q111").value = day+"-"+Gmon+"-"+Gyer;
	document.getElementById("Q111_for_save").value = Gyer+"-"+Gmon+"-"+day;
	
		});
		</script>';
		}


?>
<?php // echo $row_Recordset1['CPID']; ?>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
