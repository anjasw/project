<?php
include 'koneksi.php';

$username = md5($_POST['username']);
$password = md5($_POST['password']);

$login = mysqli_query($connect,"SELECT * FROM admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:list/index.php");
}else{
	header("location:login.php");
}

?>
