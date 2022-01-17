<?php
	session_start();
	unset($_SESSION['name']);
?>
<script>
			alert("Anda Telah Berhasil Keluar");
			document.location.href = "../index.php";
</script>