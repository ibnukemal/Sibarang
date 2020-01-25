<?php
include "otorisasi.php";
include "koneksi.php";
?>
<?php
	include "koneksi.php";
	if(isset($_POST['ubah']))
	{
		$kodebarang = $_POST['kodebarang'];
		$namabarang = $_POST['namabarang'];
		$merk = $_POST['merk'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
		$sambung = "update barang set nm_barang='$namabarang',merk='$merk',harga='$harga',jumlah='$jumlah' where kd_barang='$kodebarang'";
		mysql_query($sambung);
		header("location:barang.php");
	}
?>
<?php
	$kodebarang = $_GET['kd_barang'];
	$sambung = "select * from barang where kd_barang='$kodebarang'";
	$sambung2 = mysql_query($sambung);
	while($sambung3 = mysql_fetch_array($sambung2))
	{
		$kodebarang = $sambung3['kd_barang'];
		$namabarang = $sambung3['nm_barang'];
		$merk = $sambung3['merk'];
		$harga = $sambung3['harga'];
		$jumlah = $sambung3['jumlah'];		
	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Barang</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script language="javascript">
function isNumberKey (evt)
{
var charCode= (evt.wich)? evt.which : event.keyCode
if(charCode > 31 && (charCode < 48 || charCode > 57))
return false ;
return true;

}
</script>
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
<td height=320>
	<label>
	<h3>Ubah Barang</h3>
	</label>

	<form class="form-inline" role="form" method="post" action="editbarang.php">
	<div class="form-group has-info">
	<div class="col-md-4">
	<br><input type="text" class="form-control input-md" name="kodebarang" required value="<?php echo $kodebarang ?>" readonly>
	<br><input type="text" class="form-control input-md" name="namabarang" required value="<?php echo $namabarang ?>">
	<br><input type="text" class="form-control input-md" name="merk" required value="<?php echo $merk ?>">
	<br><input type="text" class="form-control input-md" name="harga" onkeypress="return isNumberKey(event)" value="<?php echo $harga ?>">
	<br><input type="text" class="form-control input-md" name="jumlah" onkeypress="return isNumberKey(event)" value="<?php echo $jumlah ?>">
	</div>
	</div>
	<br>
	<br>&nbsp;&nbsp;&nbsp;
	<input type="hidden" name="kodebarang" value="<?php echo $_GET['kd_barang'] ?>">
	<div class="btn-group btn-group-md">
	<button type="submit" class="btn btn-success" name="ubah">Simpan</button>
	</div>
	<div class="btn-group btn-group-md">
	<button type="reset" class="btn btn-warning">Batal</button>
	</div>
	</form>

	
	
	
	
</td>
</tr>

<tr>
<td align="center" valign="middle"><?php include "footer.php" ?></td>
</tr>

</table>
</body>
</html>