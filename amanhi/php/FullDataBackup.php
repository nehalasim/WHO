<?php require_once('Connections/newBorn.php'); ?>
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

mysql_select_db($database_newBorn, $newBorn);
$query_Recordset1 = "SELECT Tab_ID,MAX( EnDt) FROM tab_info where EnDt=(select max(EnDt) from tab_info)";
$Recordset1 = mysql_query($query_Recordset1, $newBorn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$var = $row_Recordset1['Tab_ID'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function GoBack(){
    setTimeout(function(){
       window.location='TabLog.php';
    }, 3000);
}
</script>
</head>
<body style="background-color: #36F; font-size:1vw; color:#FFF;" onLoad="GoBack();">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'pcvmain';
error_reporting(E_ALL ^ E_DEPRECATED);



function backup_tables($host,$user,$pass,$name,$tables = '*')
{

    $link = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$link);
    mysql_query("SET NAMES 'utf8'");

    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysql_query("SHOW TABLES");
        while($row = mysql_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    $return='';
    //cycle through
    foreach($tables as $table)
    {
        $result = mysql_query('SELECT * FROM '.$table);
        $num_fields = mysql_num_fields($result);




      //  $return.= 'DROP TABLE '.$table.';';
      //  $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
      //  $return.= "\n\n".$row2[1].";\n\n";

        for ($i = 0; $i < $num_fields; $i++) 
        {
            while($row = mysql_fetch_row($result))
            {
                $return.= 'INSERT IGNORE INTO '.$table.' VALUES(';
                for($j=0; $j<$num_fields; $j++) 
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = str_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j<($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
		    }
        }
        $return.="\n\n\n";

    }

    //save file
	 

	global $var;	
    $handle = fopen('c:/DataBase_BackUp/FullDataBase_BackUp/'.'Tab-'.$var.'_'.date("d-m-Y ").time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	$handle1 = fopen('d:/DataBackUp/FullBackUp/'.'Tab-'.$var.'_'.date("d-m-Y ").time().'-'.(md5(implode(',',$tables))).'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
	fwrite($handle1,$return);
    fclose($handle1);

}

backup_tables($dbhost,$dbuser,$dbpass,$dbname);

?>
<div id="contentk" style="margin-left:auto; margin-right:auto; height:auto; width:80%; margin-top:20%; font-size:2vw; text-align:center;">ব্যাকআপ সম্পূর্ণ হয়েছে। একটু অপেক্ষা করুন। 
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
