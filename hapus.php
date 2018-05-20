<?php

include "koneksi.php";
$nik = $_GET['nik'];
$query = "DELETE FROM data_pegawai WHERE nik='$nik'";
mysqli_query($koneksi, $query);
header('location:lihat.php');

?>