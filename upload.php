<?php
include "koneksi.php";

$foto = $_POST['foto'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$tipe_file = $_FILES['foto']['type'];
$ukuran_file = $_FILES['foto']['size'];
$uploadfoto = preg_replace("/\s+/","_",$foto); //query yang akan diupload ke tabel database
$direktori = "$uploadfoto";

$MAX_FILE_SIZE = 100000; //100kb
if(strlen($foto)<1) 
{
	header("location:tambahbarang.php?foto tidak boleh kosong");
	exit();
}

$format_gambar = array("image/jpg","image/jpeg","image/gif","image/png");
if(!in_array($tipe_file, $format_gambar))
{
	header("location:tambahbarang.php?foto harus berupa jpg jpeg gif png");
	exit();
}

if($ukuran_file > $MAX_FILE_SIZE)
{
header("location:tambahbarang.php?ukuran gambar maksimal 100kb");
exit();	
}

move_uploaded_file($lokasi_file,$direktori); //Untuk memindahkan file ke folder project
?>