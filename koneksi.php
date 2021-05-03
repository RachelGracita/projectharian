<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_stekom";

$koneksi = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if (mysqli_connect_errno()){
	echo 'gagal konek dengan database : ' . mysqli_connect_errno();
}
?>
