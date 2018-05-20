<?php
session_start();
include 'koneksi.php';
include 'fungsi.php';

$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$tgl_lahir   	= $_POST['tgl_lahir'];
$bagian        = $_POST['bagian'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$no_tlp         = $_POST['no_tlp'];
$agama         = $_POST['agama'];		
$email         = $_POST['email'];

$query="INSERT INTO data_pegawai SET nik='$nik',nama='$nama',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',bagian='$bagian',alamat='$alamat',no_tlp='$no_tlp',agama='$agama',email='$email', foto='$foto'";
$sql = mysqli_query($koneksi, $query);
	if($sql){
		msgbox("Sudah Terdaftar","homeadmin.php");
	}else{
		msgbox("Gagal Terdaftar","input.php");
}
?>