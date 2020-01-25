<?php
include "koneksi.php";
$nik = $_GET['nik'];
$sambung = "delete from karyawan where nik='$nik'";
mysql_query($sambung);
header("location:karyawan.php");
?>