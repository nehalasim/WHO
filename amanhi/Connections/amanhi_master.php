<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_amanhi_master = "localhost";
$database_amanhi_master = "amanhi_master";
$username_amanhi_master = "root";
$password_amanhi_master = "";
$amanhi_master = mysql_pconnect($hostname_amanhi_master, $username_amanhi_master, $password_amanhi_master) or trigger_error(mysql_error(),E_USER_ERROR); 
?>