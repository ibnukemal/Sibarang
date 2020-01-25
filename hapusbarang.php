<?php
include "koneksi.php";
$kd_barang = $_GET['kd_barang'];
$sambung = "delete from barang where kd_barang='$kd_barang'";
mysql_query($sambung);
header("location:barang.php");
?>