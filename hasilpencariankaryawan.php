<?php
include "otorisasi.php";
include "koneksi.php";
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Barang</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<table>
<tr>
<td><?php include "banner.php" ?></td>
</tr>

<tr>
<td><?php include "menu.php" ?></td>
</tr>

<tr>
<td height=320 bgcolor="lightyellow">
<table class="table table-hover">
<tr bgcolor="cyan">
<td>NIK</td>
<td>Nama</td>
<td>Alamat</td>
<td>Bagian</td>
</tr>
<?php
include "koneksi.php";
$pilih = $_POST['pilih'];
$kriteria = $_POST['kriteria'];

if ($pilih=='nik')
{
	$sambung = "select * from karyawan where nik like '%$kriteria%'";
}
elseif ($pilih=='nama')
{
	$sambung = "select * from karyawan where nama like '%$kriteria%'";
}
elseif ($pilih=='bagian')
{
	$sambung = "select * from karyawan where bagian like '%$kriteria%'";
}

$sambung2 = mysql_query($sambung);
$sambung3 = mysql_fetch_array($sambung2);

do
{
	
?>
<tr bgcolor="lightblue">
<td><?php echo $sambung3['nik'] ?></td>
<td><?php echo $sambung3['nama'] ?></td>
<td><?php echo $sambung3['alamat'] ?></td>
<td><?php echo $sambung3['bagian'] ?></td>
</tr>
<?php
}
while($sambung3 = mysql_fetch_array($sambung2));
?>
</table>
</td>
</tr>

<tr>
<td align="center" valign="middle"><?php include "footer.php" ?></td>
</tr>
</table>
</body>
</html>