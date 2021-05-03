<?php
include "koneksi.php";
$id=$_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$semester=$_POST['semester'];
$jeniskelamin=$_POST['jeniskelamin'];
$komentar=$_POST['komentar'];

mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',
	jurusan='$jurusan',
	semester='$semester',
	jeniskelamin='$jeniskelamin',
	komentar='$komentar' WHERE id='$id'");

header('location:index.php');
?>


