<?php
//aktifkan session
session_start();
//menghapus semua sesion
session_destroy();

//alihkan ke index
header("location:../index.php?pesan=logout");

?>