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
<tr bgcolor="lightpurple">
<td>NIK</td>
<td>Nama Karyawan</td>
<td>Alamat</td>
<td>Bagian</td>
<td>Aksi</td>
</tr>
<?php
include "koneksi.php";
include "paginationkaryawanatas.php";
//$sambung = "select * from karyawan";
//$sambung2 = mysql_query($sambung);
$sambung3 = mysql_fetch_array($sambung2);
do
{
	
?>
<tr bgcolor="cyan">
<td><?php echo $sambung3['nik'] ?></td>
<td><?php echo $sambung3['nama'] ?></td>
<td><?php echo $sambung3['alamat'] ?></td>
<td><?php echo $sambung3['bagian'] ?></td>
<td>
<a href="editkaryawan.php?nik=<?php echo $sambung3['nik'] ?>">Ubah</a> / 
<a onClick="return confirm('Yakin ingin dihapus?')" href="hapuskaryawan.php?nik=<?php echo $sambung3['nik'] ?>">Hapus<a>
</td>
</tr>
<?php
}
while($sambung3 = mysql_fetch_array($sambung2))
?>
</table>
<a href="tambahkaryawan.php">
<button type="button" class="btn btn-info">
<span class="glyphicon glyphicon-plus"></span>
Tambah 
</button>
</a>
<br>
<br>
<br>
<?php
include "paginationkaryawanbawah.php";
?>
</td>
</tr>

<tr>
<td align="center" valign="middle"><?php include "footer.php" ?></td>
</tr>

</table>
</body>
</html>