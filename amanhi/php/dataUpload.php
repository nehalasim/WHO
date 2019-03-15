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

$er = "<div style=' background-color:#F00; margin-left:auto; margin-right:auto; height:auto; width:80%; margin-top:10%; font-size:2vw; text-align:center;'>
 ডাটা ব্যাকআপ আপলোড হয়নি। আবার REFRESH বাটনএ চাপুন। 
</div>
<a href='../schedule.php?id='".$_GET['id']."'&block=''".$_GET['block']."'&unit='".$_GET['unit']."'><div style='margin-left:auto; background-color:#0c9; margin-right:auto; padding-top:1vw;; padding-bottom:1vw; height:auto; width:80%; margin-top:5%; font-size:2vw; text-align:center;'>
BACK
</div></a>
<div onClick='window.location.reload()' style='margin-left:auto; background-color:#0cC; margin-right:auto; padding-top:1vw;; padding-bottom:1vw; height:auto; width:80%; margin-top:5%; font-size:2vw; text-align:center;'>
Refresh
</div>

";


mysql_select_db($database_amanhi, $amanhi);
$query_tabName = "SELECT Tab_ID,MAX( EnDt) FROM tab_info where EnDt=(select max(EnDt) from tab_info)";
$tabName = mysql_query($query_tabName, $amanhi) or die(mysql_error());
$row_tabName = mysql_fetch_assoc($tabName);
$totalRows_tabName = mysql_num_rows($tabName);

error_reporting(0);

$var = $row_tabName['Tab_ID'];
// Name of the file
$filename = 'c:/DataBase_BackUp/Dropbox/backUp/'.'ACT_Tab-'.$var.'.sql';
// MySQL host
$mysql_host = 'xxx.xxx.xxx.xxx';
// MySQL username
$mysql_username = 'xxxx';
// MySQL password
$mysql_password = 'xxxx';
// Database name
$mysql_database = 'act_study';

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die($er . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
 echo "<div style='margin-left:auto; margin-right:auto; height:auto; width:80%; margin-top:10%; font-size:2vw; text-align:center;'>
 ডাটা ব্যাকআপ সফল ভাবে আপলোড হয়েছে
</div>
<a href='../schedule.php?id=".$_GET['id'].'&block='.$_GET['block']."&unit=".$_GET['unit']."'><div style='margin-left:auto; background-color:#0c9; margin-right:auto; padding-top:1vw;; padding-bottom:1vw; height:auto; width:80%; margin-top:5%; font-size:2vw; text-align:center;'>
BACK
</div></a>
<div onClick='window.location.reload()' style='margin-left:auto; background-color:#0cC; margin-right:auto; padding-top:1vw;; padding-bottom:1vw; height:auto; width:80%; margin-top:5%; font-size:2vw; text-align:center;'>
Refresh
</div>

";

mysql_free_result($tabName);
?>






<?php 
error_reporting(0);
$var = $row_tabName['Tab_ID'];
// Name of the file
$filename = 'c:/DataBase_BackUp/Dropbox/backUp/'.'Tab-Elg-'.$var.'.sql';
// MySQL host
$mysql_host = 'xxx.xxx.xxx.xxx';
// MySQL username
$mysql_username = 'xxxx';
// MySQL password
$mysql_password = 'xxxxx';
// Database name
$mysql_database = 'pcvmain';

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die($er . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}


?>



<?php 
error_reporting(0);
$var = $row_tabName['Tab_ID'];
// Name of the file
$filename = 'c:/DataBase_BackUp/Dropbox/backUp/'.'Tab-SES-'.$var.'.sql';
// MySQL host
$mysql_host = 'xxx.xxx.xxx.xxx';
// MySQL username
$mysql_username = 'xxx';
// MySQL password
$mysql_password = 'xxx';
// Database name
$mysql_database = 'pcvmain';

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die($er . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}


?>


<html>
<body style="background-color:#FFF;">

</body>
</html>
