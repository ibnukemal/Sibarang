<select>
<?php
include "otorisasi.php";
include "koneksi.php";
$term = strip_tags(substr($_GET['kd_barang'],0, 100));
$query = mysql_query("select * from barang where kd_barang like '%$term%'");
if (mysql_num_rows($query))
{
while($rows = mysql_fetch_array($query))
{
?>
<option><?php echo $rows['kd_barang'] ?></option>
<?php
echo $hasil;
}
}
?>
</select>