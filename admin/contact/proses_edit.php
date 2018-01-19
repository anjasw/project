<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$no_wa = $_POST['no_wa'];

    $query = "SELECT * FROM contact WHERE id='".$id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Proses ubah data ke Database
		$query = "UPDATE contact SET nama='".$nama."', no_telepon='".$no_telepon."', no_wa='".$no_wa."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='edit.php'>Kembali Ke Form</a>";
		}

?>
