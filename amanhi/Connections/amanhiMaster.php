<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_amanhi = "localhost";
$database_amanhi = "amanhi_master";
$username_amanhi = "root";
$password_amanhi = "";
$amanhi = mysql_pconnect($hostname_amanhi, $username_amanhi, $password_amanhi) or trigger_error(mysql_error(),E_USER_ERROR); 
?>