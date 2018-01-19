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
	include "../koneksi.php";

	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];

	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM contact WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
          <legend><center>Tambah Jasa Service</center></legend>
          <form method="post" action="proses_edit.php?id=<?php echo $id; ?>"  enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="id" class="form-control" value="<?php echo $data['id'] ?>" placeholder="Masukan ID"><br>
          </div>
          <div class="form-group">
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" placeholder="Masukan Nama"/><br>
          <div class="form-group">
          </div>
            <input type="text" name="no_telepon" class="form-control" value="<?php echo $data['no_telepon'] ?>" placeholder="Masukan No Telepon">
          </div>
          <div class="form-group">
            <input type="text" name="no_wa" class="form-control" value="<?php echo $data['no_wa'] ?>" placeholder="Masukan No Whatsapp">
          </div>
          <hr><center>
          <a href="#"><button  class="btn btn-info" type="submit" name="simpan">Simpan</button></a>
          <a href="index.php"><button type="button" value="Batal" class="btn btn-danger">Batal</button</a>
          </center></form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
