<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
<h2> Halaman Admin </h2>
<!-- cek apakah sudah login -->
<?php
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
?>
<h4>Selamat Datang <?php echo $_SESSION['username'];?>! Anda Telah Berhasil LOGIN. </h4>
<br>
<br>

<a href="logout.php">LOGOUT</a>


</body>
</html>