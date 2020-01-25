<?php
include "otorisasi.php";
include "koneksi.php";
?>
<?php
	include "koneksi.php";
	if(isset($_POST['ubah']))
	{
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$bagian = $_POST['bagian'];
		$sambung = "update karyawan set nama='$nama',alamat='$alamat',bagian='$bagian' where nik='$nik'";
		mysql_query($sambung);
		header("location:karyawan.php");
	}
?>
<?php
	$nik = $_GET['nik'];
	$sambung = "select * from karyawan where nik='$nik'";
	$sambung2 = mysql_query($sambung);
	while($sambung3 = mysql_fetch_array($sambung2))
	{
		$nik = $sambung3['nik'];
		$nama = $sambung3['nama'];
		$alamat = $sambung3['alamat'];
		$bagian = $sambung3['bagian'];		
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
	<h3>Ubah Karyawan</h3>
	</label>

	<form class="form-inline" role="form" method="post" action="editkaryawan.php">
	<div class="form-group has-info">
	<div class="col-md-4">
	<br><input type="text" class="form-control input-md" name="nik" required value="<?php echo $nik ?>" readonly>
	<br><input type="text" class="form-control input-md" name="nama" required value="<?php echo $nama ?>">
	<br><input type="text" class="form-control input-md" name="alamat" required value="<?php echo $alamat ?>">
	<br><input type="text" class="form-control input-md" name="bagian" required value="<?php echo $bagian ?>">
	</div>
	</div>
	<br>
	<br>&nbsp;&nbsp;&nbsp;
	<input type="hidden" name="nik" value="<?php echo $_GET['nik'] ?>">
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