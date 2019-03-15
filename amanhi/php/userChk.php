<!--Used script plugin for customized alert boxes-->
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.ui.draggable.js" type="text/javascript"></script>

<script src="../js/jquery.alerts.js" type="text/javascript"></script>
<link href="../css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<!--end Used script plugin for customized alert boxes-->

<?php require_once('../Connections/amanhi.php'); ?>
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



error_reporting(E_ALL ^ E_NOTICE);
$reg = $_POST['reg'];


mysql_select_db($database_amanhi, $amanhi);
$query_Recordset1 = "SELECT * from user_info";
$Recordset1 = mysql_query($query_Recordset1, $amanhi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$dt = $row_Recordset1['visitDT'];
if(isset($_POST['reg']))
{

$reg=mysql_real_escape_string($_POST['reg']);
//$visit=mysql_real_escape_string($_POST['visit']);
//$cpid=mysql_real_escape_string($_POST['cpid']);
//$EnDt=mysql_real_escape_string($_POST['EnDt']);



$query=mysql_query("select * from user_info where User_ID = '$reg'") or die(mysql_error());

$row=mysql_num_rows($query);
$row_rec = mysql_fetch_assoc($query);
if($row==0)
{

echo '<script language="javascript">';
echo      'document.getElementById("userID1").value=""';
echo '</script>';

echo '<script type="text/javascript">';
echo ' $(document).ready( function() {';
echo 'jAlert("দ্বিতীয়  ইউজার আইডি সঠিক নয়। সঠিক দ্বিতীয় ইউজার আইডি দিন। ")';
echo '});';
echo '</script>';


}
else
{




//alert("এই আইডি এন্ট্রি দিয়েছেন '.$User.', '.$visitDT.'  তারিখে, পরের এন্ট্রি '.$NxtVisit.' তারিখ থেকে প্রযোজ্য হবে");


}
}
mysql_free_result($Recordset1);
?>