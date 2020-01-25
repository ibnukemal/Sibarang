<?php
include "koneksi.php";
echo "Halaman";
for($i=1; $i<=$banyakhalaman; $i++)
{
	if($page !=$i)
	{
		echo "<a href='barang.php?page=$i'>$i</a>";
	}
	else
	{
		echo $i;
	}
}
?>
