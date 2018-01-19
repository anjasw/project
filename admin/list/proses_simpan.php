<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$keterangan = $_POST['keterangan'];
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
if (!empty($keterangan) && !empty($nama)) {

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO list VALUES('".$id."', '".$fotobaru."','".$nama."','".$keterangan."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		echo "<script>
					alert('Berhasil menambahkan');
					window.location.href='index.php';
					</script>"; // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "<script>
					alert('ID harus Angka');
					window.location.href='form_simpan.php';
					</script>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "<script>
				alert('Gambar harus ada');
				window.location.href='form_simpan.php';
				</script>";
}
}else{
	echo "<script>
				alert('nama dan komentar harus ada');
				window.location.href='form_simpan.php';
				</script>";
}
?>
