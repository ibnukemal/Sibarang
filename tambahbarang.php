<?php
include "otorisasi.php";
include "koneksi.php";
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type='text/javascript'>$(document).ready(function() {
		//$("#search_results").slideUp();
		$("#button_find").click(function(event) {
			event.preventDefault();
			//search_ajax_way();
			ajax_search();
		});
		$("#kd_barang").keyup(function(event) {
			event.preventDefault();
			//search_ajax_way();
			ajax_search();
		});
	});
	function ajax_search() {

		var kd_barang = $("#kd_barang").val();
		$.ajax({
			url : "caribarang.php",
			data : "kd_barang=" + kd_barang,
			success : function(data) {
				// jika data sukses diambil dari server, tampilkan di <select id=kota>
				$("#display_results").html(data);
			}
		});

	}</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Barang</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
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
	<h3>Tambah Barang</h3>
	</label>
	<form class="form-inline" role="form" method="post" action="tambahbarang.php" enctype="multipart/form-data">
	<div class="form-group has-info">
	<div class="col-md-4">
	<br><input type="text" class="form-control input-md" placeholder="Masukkan Kode Barang" name="kd_barang" id="kd_barang" required>
	<span id="display_results"></span>
	<br><input type="text" class="form-control input-md" placeholder="Masukkan Nama Barang" name="namabarang" required>
	<br><input type="text" class="form-control input-md" placeholder="Masukkan Merk" name="merk" required>
	<br><input type="text" class="form-control input-md" placeholder="Masukkan Harga" name="harga" onkeypress="return isNumberKey(event)">
	<br><input type="text" class="form-control input-md" placeholder="Masukkan Jumlah" name="jumlah" onkeypress="return isNumberKey(event)">
	<br><input type="file" class="form-control input-md" name="foto">
	</div>
	</div>
	<br>
	<br>&nbsp;&nbsp;&nbsp;
	<div class="btn-group btn-group-md">
	<button type="submit" class="btn btn-success" name="tambah">Simpan</button>
	</div>
	<div class="btn-group btn-group-md">
	<button type="reset" class="btn btn-warning">Batal</button>
	</div>
	</form>
	<?php
	if(isset($_POST['tambah']))
	{
		$kd_barang= $_POST['kd_barang'];
		$namabarang = $_POST['namabarang'];
		$merk = $_POST['merk'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
		
		include "koneksi.php";
		include "upload.php";
		$sambung = "insert into barang values ('$kd_barang','$namabarang','$merk','$harga','$jumlah','$uploadfoto')";
		mysql_query($sambung);
		header("location:barang.php");
	}
	?>
	
	
	
	
</td>
</tr>

<tr>
<td align="center" valign="middle"><?php include "footer.php" ?></td>
</tr>

</table>
</body>
</html>