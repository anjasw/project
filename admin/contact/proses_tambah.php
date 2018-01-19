<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$no_wa = $_POST['no_wa'];

	$sql = mysqli_query($connect,"INSERT INTO contact values('".$id."','".$nama."','".$no_telepon."','".$no_wa."')"); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='tambah.php'>Kembali Ke Form</a>";
	}

?>
