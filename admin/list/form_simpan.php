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
	<title>Form Tambah List</title>
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
					<legend><center>Tambah Jasa Service</center></legend>
					<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="id" class="form-control" placeholder="Masukan ID"><br>
					</div>
					<div class="form-group">
						<textarea type="text" name="keterangan" class="form-control" rows="5" placeholder="Masukan Keterangan Jasa Servicenya"></textarea><br>
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Service">
					</div>
					<div class="form-group">
					Foto
							<input type="file" name="foto">
					</div>

					</table>

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
