<?php
	session_start();
	include "koneksi.php";
	
	$lokasi_file = $_FILES['file']['tmp_name'];
	$id = $_POST['kategori'];	
	$tipe_file = $_FILES['file']['type'];
	$nama_file = $_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$direktori = "../css/file/$nama_file";
	
	if(!empty($lokasi_file)){
		if($file_size < 20044070){
		move_uploaded_file($lokasi_file,$direktori);
		//Masukkan ke dalam database
		$query = mysql_query("INSERT INTO categories values('id','','$nama_file')");
			if($query)
			{
				?>
					<script language ="javascript">
					var nama = "<?php echo $name; ?>";
					alert("Data Product dengan nama "+nama+" berhasil ditambahkan.");
					document.location.href = "../tes.php";
					</script>
				<?php
			}
			else
			{
			?>			<script language ="javascript">
						alert("Data Product gagal ditambahkan. !!");
						document.location.href = "../tes.php";
						</script>
			<?php
			}
		}
	}
		else{ echo "File yang dituju kosong !!"; }
		
		?>	