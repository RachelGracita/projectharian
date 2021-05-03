<?php
include "koneksi.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$semester=$_POST['semester'];
$jeniskelamin=$_POST['jeniskelamin'];
$komentar=$_POST['komentar'];

mysqli_query($koneksi,"insert into mahasiswa
	values('','$nim','$nama','$jurusan','$semester','$jeniskelamin','$komentar')");
	
header ('location:index.php');
?>