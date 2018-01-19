<?php
  include 'admin/koneksi.php';

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $komentar = $_POST['komentar'];

if (!empty($nama)) {
  if (!empty($email)) {
    if (!empty($komentar)) {
  $insert = mysqli_query($connect,"INSERT INTO komentar values('','".$nama."','".$email."','".$komentar."')");
  echo "<script>
        alert('Berhasil komen');
        window.location.href='contact.php';
        </script>";
}else{
  echo "<script>
        alert('Komentar Tidak Boleh Kosong');
        window.location.href='contact.php';
        </script>";
}
}else{
  echo "<script>
        alert('Email Tidak Boleh Kosong');
        window.location.href='contact.php';
        </script>";
}
}else{
  echo "<script>
        alert('Nama Tidak Boleh Kosong');
        window.location.href='contact.php';
        </script>";
}
?>
