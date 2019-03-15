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
$visit = $_POST['visit'];
$cpid = trim($_POST['cpid']);

mysql_select_db($database_amanhi, $amanhi);
$query_Recordset1 = "SELECT * from frm_act where StudyID = $reg and visit = $visit and Q112 = $cpid";
$Recordset1 = mysql_query($query_Recordset1, $amanhi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$dt = $row_Recordset1['visitDT'];
if(isset($_POST['reg']))
{

$reg=mysql_real_escape_string($_POST['reg']);
$visit=mysql_real_escape_string($_POST['visit']);
$cpid=mysql_real_escape_string($_POST['cpid']);
//$EnDt=mysql_real_escape_string($_POST['EnDt']);

$queryInEle=mysql_query("select * from frm_act where StudyID = '$reg' and Q112 = '$cpid' and visitOutCome in ('6','7')") or die(mysql_error());
$rowInEle=mysql_num_rows($queryInEle);
$row_recInEle = mysql_fetch_assoc($queryInEle);




$query=mysql_query("select * from frm_act where StudyID = '$reg' and Q112 = '$cpid' and visit = '$visit' and visitOutCome in ('1' ,'2')") or die(mysql_error());
$row=mysql_num_rows($query);
$row_rec = mysql_fetch_assoc($query);

if ($rowInEle > 0){
echo '<script type="text/javascript">';
echo ' $(document).ready( function() {';
echo 'jAlert("এই বাচ্চাটি একবার মৃত অথবা স্থান পরিবর্তন অথবা সম্মতি প্রত্যাহার হিসেবে এন্ট্রি হয়েছে। তাই এই বাচ্চাটি আর এন্ট্রি দিতে পারবেন না এবং প্রযোজ্য নয়।")';
echo '});';
echo '</script>';	

echo '<script language="javascript">';
echo      'document.getElementsByName("visit")[0].checked=false;';
echo      'document.getElementsByName("visit")[1].checked=false;';
echo      'document.getElementsByName("visit")[2].checked=false;';
echo      'document.getElementsByName("visit")[3].checked=false;';
echo      'document.getElementsByName("visit")[4].checked=false;';
echo      'document.getElementsByName("visit")[5].checked=false;';
echo      'document.getElementsByName("visit")[6].checked=false;';
echo      'document.getElementsByName("visit")[7].checked=false;';
echo      'document.getElementById("sno").value = "";';
echo      'document.getElementById("sid").value = "";';
//echo      'document.getElementById("site").value = "";';
echo      'document.getElementById("upazila").value = "";';
echo      'document.getElementById("upazilaName").value = "";';
echo      'document.getElementById("union").value = "";';
echo      'document.getElementById("unionName").value = "";';
echo      'document.getElementById("village").value = "";';
echo      'document.getElementById("villageName").value = "";';
echo      'document.getElementById("bari").value = "";';
echo      'document.getElementById("bariName").value = "";';
echo      'document.getElementById("household").value = "";';
echo      'document.getElementById("householdName").value = "";';
echo      'document.getElementById("pid").value = "";';
echo      'document.getElementById("cid").value = "";';
echo      'document.getElementById("mname").value = "";';
echo      'document.getElementById("fname").value = "";';
echo      'document.getElementById("cname").value = "";';
echo      'document.getElementById("cpid").value = "";';
echo      'document.getElementById("cdob").value = "";';
echo      'document.getElementById("cdobForCal").value = "";';
echo      'document.getElementById("ageYear").value = "";';
echo      'document.getElementById("ageMonth").value = "";';
echo      'document.getElementById("ageDay").value = "";';



echo '</script>';



	}
else if($row==0)
{

}

else
{


echo '<script language="javascript">';
echo      'document.getElementsByName("visit")[0].checked=false;';
echo      'document.getElementsByName("visit")[1].checked=false;';
echo      'document.getElementsByName("visit")[2].checked=false;';
echo      'document.getElementsByName("visit")[3].checked=false;';
echo      'document.getElementsByName("visit")[4].checked=false;';
echo      'document.getElementsByName("visit")[5].checked=false;';
echo      'document.getElementsByName("visit")[6].checked=false;';
echo      'document.getElementsByName("visit")[7].checked=false;';
echo      'document.getElementById("sno").value = "";';
echo      'document.getElementById("sid").value = "";';
//echo      'document.getElementById("site").value = "";';
echo      'document.getElementById("upazila").value = "";';
echo      'document.getElementById("upazilaName").value = "";';
echo      'document.getElementById("union").value = "";';
echo      'document.getElementById("unionName").value = "";';
echo      'document.getElementById("village").value = "";';
echo      'document.getElementById("villageName").value = "";';
echo      'document.getElementById("bari").value = "";';
echo      'document.getElementById("bariName").value = "";';
echo      'document.getElementById("household").value = "";';
echo      'document.getElementById("householdName").value = "";';
echo      'document.getElementById("pid").value = "";';
echo      'document.getElementById("cid").value = "";';
echo      'document.getElementById("mname").value = "";';
echo      'document.getElementById("fname").value = "";';
echo      'document.getElementById("cname").value = "";';
echo      'document.getElementById("cpid").value = "";';
echo      'document.getElementById("cdob").value = "";';
echo      'document.getElementById("cdobForCal").value = "";';
echo      'document.getElementById("ageYear").value = "";';
echo      'document.getElementById("ageMonth").value = "";';
echo      'document.getElementById("ageDay").value = "";';



echo '</script>';

$vdt = $row_Recordset1['visitDT'];
echo '<script type="text/javascript">';
echo ' $(document).ready( function() {';
echo 'jAlert("এই আইডি এবং ভিজিট একবার এন্ট্রি হয়ে গেছে।")';
echo '});';
echo '</script>';

//alert("এই আইডি এন্ট্রি দিয়েছেন '.$User.', '.$visitDT.'  তারিখে, পরের এন্ট্রি '.$NxtVisit.' তারিখ থেকে প্রযোজ্য হবে");


}


}


mysql_free_result($Recordset1);
?>