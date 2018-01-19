<?php
  include 'koneksi.php';

  $nama = $_POST['nama'];
  $username = md5()$_POST['username']);
  $password = md5($_POST['password']);

if (!empty($nama)) {
  if (!empty($username)) {
    if (!empty($password)) {
  $insert = mysqli_query($connect,"INSERT INTO admin (nama,username,password) values('$nama','$username','$password')");
  echo "<script>
        alert('Berhasil Regist');
        window.location.href='list/index.php';
        </script>";
}else{
  echo "<script>
        alert('Password Tidak Boleh Kosong');
        window.location.href='tambah_admin.php';
        </script>";
}
}else{
  echo "<script>
        alert('Username Tidak Boleh Kosong');
        window.location.href='tambah_admin.php';
        </script>";
}
}else{
  echo "<script>
        alert('Nama Tidak Boleh Kosong');
        window.location.href='tambah_admin.php';
        </script>";
}
?>
