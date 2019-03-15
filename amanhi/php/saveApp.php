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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "saveACT")) {
  $insertSQL = sprintf("INSERT INTO frm_act (StudyID, visit, Q101, Q102, Q103, Q104, Q105, Q106, Q107, Q108, Q109, Q110, Q111, Q112, Q113, Q114Y, Q114M, Q114D, Q201, Q201Code, Q201Oth, visitDT, visitOutCome, Oth_OutCome, Q203, Q302a, Q302b, Q303a, Q303b, Q341a, Q341b, Q341c, Q342a, Q342b, Q342c, Q343a, Q343b, Q343c, Q351a, Q351b, Q351c, Q352a, Q352b, Q352c, Q353a, Q353b, Q353c, Q361a, Q361b, Q361c, Q362a, Q362b, Q362c, Q363a, Q363b, Q363c, Q371a, Q371b, Q371c, Q372a, Q372b, Q372c, Q373a, Q373b, Q373c, Q381a, Q381b, Q381c, Q382a, Q382b, Q382c, Q383a, Q383b, Q383c, Q384, Q39a, Q39b, Q311, TabID, UserID_1, UserID_2) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
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
                       GetSQLValueString($_POST['cdob'], "date"),
                       GetSQLValueString($_POST['ageYear'], "text"),
                       GetSQLValueString($_POST['ageMonth'], "text"),
                       GetSQLValueString($_POST['ageDay'], "text"),
                       GetSQLValueString($_POST['Q21'], "text"),
                       GetSQLValueString($_POST['placeCode'], "text"),
                       GetSQLValueString($_POST['otherCode'], "text"),
                       GetSQLValueString($_POST['Q22'], "date"),
                       GetSQLValueString($_POST['visitOutCome'], "text"),
                       GetSQLValueString($_POST['VisitO'], "text"),
                       GetSQLValueString($_POST['deathDt'], "date"),
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
                       GetSQLValueString($_POST['userID1'], "text"));

  mysql_select_db($database_amanhi, $amanhi);
  $Result1 = mysql_query($insertSQL, $amanhi) or die(mysql_error());

  $insertGoTo = "system.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>