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

mysql_select_db($database_amanhi, $amanhi);
$query_Recordset1 = "SELECT Tab_ID,MAX( EnDt) FROM tab_info where EnDt=(select max(EnDt) from tab_info)";
$Recordset1 = mysql_query($query_Recordset1, $amanhi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$var = $row_Recordset1['Tab_ID'];
?>
<!doctype html>
<html>
<head>
<script>document.write("<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js?v=" + Date.now() + "'><\/script>");</script>
<meta charset="utf-8">
<title>Untitled Document</title>

<script>
function incr(){
document.getElementById('innerBar').style.width="100%";
}
</script>
<script>
function GoBack(){
	var u = 1;
	if(typeof jQuery!='undefined'){
		u = 2;
		}
	if(u==1){
	 document.getElementById('IfOnline').style.backgroundColor = "#FFDFDF";
document.getElementById('IfOnline').innerHTML = "আপনার ট্যাব এ এখন ইন্টারনেট কানেকশন নেই। ইন্টারনেট কানেকশন চেক করুণ এবং REFRESH এ চাপুন। যদি ৩০ সেকেন্ড এর মধ্যে না হয়, তাহলে এন্ট্রি সিস্টেমে চলে যাবে। "; 
document.getElementById('refresh').style.display = "block";
setTimeout(function(){
window.location='../system.php';
    }, 30000);
		}
		else{
			
document.getElementById('IfOnline').innerHTML = "আপনার ট্যাব এ এখন ইন্টারনেট কানেকশন আছে, একটু অপেক্ষা করুণ, আপনার এন্ট্রি এখন সিলেট এর সার্ভার এ আপলোড হবে।"; 
document.getElementById('refresh').style.display = "none";
document.getElementById('innerBar').style.display="block";



  setTimeout(function(){	  
window.location='dataUpload.php?id=<?php echo $_GET['id']; ?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>';

    }, 8000);
	
			}
}
</script>

</head>


<body style="background-color: #3CF; font-size:1vw; color:#FFF;" onLoad="GoBack();">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'act_study';
error_reporting(E_ALL ^ E_DEPRECATED);



function backup_tables($host,$user,$pass,$name,$tables = '*')
{
$amanhi1 = mysql_pconnect('localhost', 'root', '') or trigger_error(mysql_error(),E_USER_ERROR); 	
mysql_select_db('act_study', $amanhi1);
$query_Recordset11 = "SELECT Tab_ID,MAX( EnDt) FROM tab_info where EnDt=(select max(EnDt) from tab_info)";
$Recordset11 = mysql_query($query_Recordset11, $amanhi1) or die(mysql_error());
$row_Recordset11 = mysql_fetch_assoc($Recordset11);
$totalRows_Recordset11 = mysql_num_rows($Recordset11);
$var1 = $row_Recordset11['Tab_ID'];	
	
	
	

    $link = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$link);
    mysql_query("SET NAMES 'utf8'");

    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
		
        $result = mysql_query("SHOW TABLES FROM act_study LIKE 'frm_act'");
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
		
		
		
        $result = mysql_query('SELECT * FROM '.$table.' HAVING EnDt >= DATE_SUB(NOW(), INTERVAL 30 DAY) and TabID = '.$var1.'');
        $num_fields = mysql_num_fields($result);

//Warning: mysql_num_fields() expects parameter 1 to be resource, boolean given in C:\xampp\htdocs\PCV\backup.php on line 95



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
    $handle = fopen('c:/DataBase_BackUp/Dropbox/backUp/'.'ACT_Tab-'.$var.'.sql','w+');
	$handle1 = fopen('d:/DataBackUp/DailyBackUp/'.'ACT_Tab-'.$var.'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
	fwrite($handle1,$return);
    fclose($handle1);

}

backup_tables($dbhost,$dbuser,$dbpass,$dbname);

?>



<!--<div style="margin-left:auto; margin-right:auto; height:auto; width:80%; margin-top:10%; font-size:2vw; text-align:center;">
আপনার এন্ট্রি ব্যাকআপ সম্পূর্ণ হয়েছে।<?php echo $row_Recordset1['Tab_ID']; ?>
</div>
-->
<style>
.signal_Yes{
	-webkit-animation-name: yes_I; /* Chrome, Safari, Opera */
    -webkit-animation-duration:8s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: 1; /* Chrome, Safari, Opera */
    -webkit-animation-direction: normal; /* Chrome, Safari, Opera */
	animation-name: yes_I;
	animation-duration:8s;
	animation-iteration-count: 1;
	animation-direction: normal;
}
	@-webkit-keyframes yes_I{
	
    from{ width:0%  ;} /* Safari */
    to {width:100%;} /* Standard syntax */

		}
	</style>	
        
<div style="height:1.7vw; width:80%; overflow:hidden; background-color:#FFF; margin-left:auto; margin-right:auto;">
<div class="signal_Yes" id="innerBar" style="width:0%; height:100%; display:none; background-color: #F00;"></div>
</div>

<div id="IfOnline" style="margin-left:auto; color:#333; background-color: #CCEBFF; margin-right:auto; height:auto; width:80%; margin-top:5%; font-size:2vw; text-align:center;">
</div>

<script>
function ReloadFunc() {
 	window.location.reload();
	}
</script>
<div onClick="ReloadFunc();" id="refresh" style=" display:none; padding-top:2vw; margin-left:18vw; color:#333; border:1vw solid #FFF; background-color: #F90; float:left; height:5vw; width:20%; margin-top:5%; font-size:3vw; text-align:center;">
Refresh
</div>


<a href="../schedule.php?id=<?php echo $_GET['id']; ?>&block=<?php echo $_GET['block'];?>&unit=<?php echo $_GET['unit'];?>">
<div id="IfOnlineButton" style=" padding-top:2vw; margin-right:18vw; color:#333; border:1vw solid #FFF; background-color: #F90; float:right; height:5vw; width:20%; margin-top:5%; font-size:3vw; text-align:center;">
Entry system
</div>
</a>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>