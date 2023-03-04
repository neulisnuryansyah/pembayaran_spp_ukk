<?php 
session_start();
if(empty($_SESSION['nisn'])){
	echo "<script>
			alert('Maaf Anda Belum Login'); 
			document.location.href = '../index.php';
	</script>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin - Aplikasi pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
	<h3>Aplikasi pembayaran SPP</h3>
	<div class="alert alert-info">
		Anda login sebagai Siswa <b><?= $_SESSION['nama'] ?></b> Aplikasi pembayaran SPP.
	</div>
	<a href="siswa.php" class="btn btn-primary">siswa</a>
	<a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>

	<div class="card mt-2">
		<div class="card-body">
			<!-- ini isi web kita -->
			<?php 
			$file = @$_GET['url'];
				if(empty($file)){
					echo "<h4>Selamat datang di halaman Siswa.</h4>";
					echo "Aplikasi pembayaran SPP digunakan untuk mempermudahdalam mencatat pembayaran siswa / siswi di sekolah";
					echo "<hr>";
					include'history-pembayaran.php';
				}else{
					include $file. ".php";
				}
			 ?>
		</div>
	</div>
</div>


<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>