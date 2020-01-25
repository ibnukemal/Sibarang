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
<td>Kode Barang</td>
<td>Nama Barang</td>
<td>Merk</td>
<td>Harga</td>
<td>Jumlah</td>
</tr>
<?php
include "koneksi.php";
$pilih = $_POST['pilih'];
$kriteria = $_POST['kriteria'];

if ($pilih=='kd_barang')
{
	$sambung = "select * from barang where kd_barang like '%$kriteria%'";
}
elseif ($pilih=='nm_barang')
{
	$sambung = "select * from barang where nm_barang like '%$kriteria%'";
}
elseif ($pilih=='merk')
{
	$sambung = "select * from barang where merk like '%$kriteria%'";
}

$sambung2 = mysql_query($sambung);
$sambung3 = mysql_fetch_array($sambung2);

do
{
	
?>
<tr bgcolor="lightblue">
<td><?php echo $sambung3['kd_barang'] ?></td>
<td><?php echo $sambung3['nm_barang'] ?></td>
<td><?php echo $sambung3['merk'] ?></td>
<td>Rp.<?php echo $sambung3['harga'] ?></td>
<td><?php echo $sambung3['jumlah'] ?>Unit</td>
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