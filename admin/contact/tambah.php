<?php
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../login.php");
}
?>
<html>
<head>
	<title>Tambah Contact</title>
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->

	<link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet">
	<!-- Morris Charts CSS -->

	<link href="../assets/vendor/morrisjs/morris.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="col-lg-4">

				</div>
				<div class="col-lg-4">
					<legend><center>Tambah Contact</center></legend>
					<form action="proses_tambah.php" method="post">
					<div class="form-group">
						<input type="text" name="id" class="form-control" placeholder="Masukan ID"><br>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Masukan Nama"/><br>
					</div>
					<div class="form-group">
					  <input type="text" name="no_telepon" class="form-control" placeholder="Masukan No Telepon">
					</div>
					<div class="form-group">
					  <input type="text" name="no_wa" class="form-control" placeholder="Masukan No Whatsapp">
					</div>
          <hr><center>
					<a><button  class="btn btn-info" type="submit" name="simpan">Simpan</button></a>
					<a href="index.php"><button type="button" value="Batal" class="btn btn-danger">Batal</button</a>
					</center></form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
