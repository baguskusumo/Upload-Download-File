<?php
	session_start();
	include "koneksi.php";
	
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);

	$userCheck = mysql_query("SELECT * FROM users WHERE email = '$email' AND password = MD5('$password')") or die(mysql_error());
	
	if (mysql_num_rows($userCheck) == 1) {
		$row = mysql_fetch_array($userCheck);
		
		$_SESSION['id'] = $row['id'];
		$_SESSION['level'] = $row['level'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		?>
		<script>
			document.location.href = "../index.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert("Incorrect email or password!");
			history.back(-1);
		</script>
		<?php
	}
?>