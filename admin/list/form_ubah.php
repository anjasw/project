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
	<title>Halaman Admin</title>
	<!-- Bootstrap Core CSS -->
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
	<?php
	// Load file koneksi.php
	include "koneksi.php";

	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];

	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM list WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
<div class="col-lg-4">

</div>
<div class="col-lg-4">
	<h3><legend><center>Ubah List Service</center></legend></h3>
	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
		<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" rows="5"><?php echo $data['keterangan']; ?></textarea>
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo $data['nama'] ?>">
	</div>
	<div class="form-group">
		<p>Foto</p><input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
	</div>

	<hr><center>
	<a><button type="submit" name="button" class="btn btn-info">Ubah</button></a>
	<a href="index.php"><button type="button" name="button" class="btn btn-danger">Batal</button></a>
</center></form>
</div>
</body>
</html>
