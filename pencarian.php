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
<td height=320 align="center" valign="middle" bgcolor="cyan">
<form method="post" action="hasilpencarianbarang.php">
<p>
<input type="radio" id="pilih" name="pilih" value="kd_barang">Kode Barang
<input type="radio" id="pilih" name="pilih" value="nm_barang">Nama Barang
<input type="radio" id="pilih" name="pilih" value="merk">Merk
<p>
<input type="text" id="kriteria" name="kriteria">
<button type="submit" class="btn btn-info">
<span class="glyphicon glyphicon-search"></span>
Cari Barang
</button>
</form>
<p>
<form method="post" action="hasilpencariankaryawan.php">
<p>
<input type="radio" id="pilih" name="pilih" value="nik">NIK
<input type="radio" id="pilih" name="pilih" value="nama">Nama Karyawan
<input type="radio" id="pilih" name="pilih" value="bagian">Bagian
<p>
<input type="text" id="kriteria" name="kriteria">
<button type="submit" class="btn btn-info">
<span class="glyphicon glyphicon-search"></span>
Cari Karyawan
</button>
</form>
</td>
</tr>

<tr>
<td align="center" valign="middle"><?php include "footer.php" ?></td>
</tr>

</table>
</body>
</html>