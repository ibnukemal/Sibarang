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
<td height=320 align="center">
<table class="table table-hover">
<tr bgcolor="limegreen">
<td>Kode Barang</td>
<td>Nama Barang</td>
<td>Merk</td>
<td>Harga</td>
<td>Jumlah</td>
<td>Gambar</td>
<td>Aksi</td>
</tr>
<?php
include "koneksi.php";
include "paginationbarangatas.php";
//$sambung = "select * from barang";
//$sambung2 = mysql_query($sambung);

$sambung3 = mysql_fetch_array($sambung2);
do
{
	
?>
<tr bgcolor="lightblue">
<td><?php echo $sambung3['kd_barang'] ?></td>
<td><?php echo $sambung3['nm_barang'] ?></td>
<td><?php echo $sambung3['merk'] ?></td>
<td>Rp.<?php echo $sambung3['harga'] ?></td>
<td><?php echo $sambung3['jumlah'] ?> Unit</td>
<td>
<img src="<?php echo $sambung3['foto'] ?>" width="100" height="100"/>
</td>
<td>
<a href="editbarang.php?kd_barang=<?php echo $sambung3['kd_barang'] ?>">Ubah</a> / 
<a onClick="return confirm('Yakin ingin dihapus?')" href="hapusbarang.php?kd_barang=<?php echo $sambung3['kd_barang'] ?>">Hapus<a>
</td>
</tr>
<?php
}
while($sambung3 = mysql_fetch_array($sambung2))
?>
</table>
<a href="tambahbarang.php">
<button type="button" class="btn btn-success">
<span class="glyphicon glyphicon-plus"></span>
Tambah 
</button>
</a>
<a href="printbarang.php">
<button type ="button" class="btn btn-primary">
<span class="glyphicon glyphicon-print"></span>
Cetak
</button>
</a>
<a href="chart.html">
<button type ="button" class="btn btn-info">
<span class="glyphicon glyphicon-stats"></span>
Grafik 
</button>
</a>
<br>
<br>
<br>
<?php
include "paginationbarangbawah.php";
?>
</td>
</tr>
<tr>
<td align="center" valign="middle"><?php include "footer.php" ?></td>
</tr>
</table>
</body>
</html>