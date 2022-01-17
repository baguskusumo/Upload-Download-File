<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db_name = "tugasbesar";
	
	$koneksi = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error());
	$select_db = mysqli_select_db($koneksi, $db_name);
?>