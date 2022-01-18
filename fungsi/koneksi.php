<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db_name = "tugasbesar";
	
	$koneksi = mysql_connect($host, $user, $password, $db_name) or die(mysql_error());
	$select_db = mysql_select_db($db_name);
?>