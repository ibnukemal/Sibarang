<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "koneksi.php";
echo "Halaman";
for($i=1; $i<=$banyakhalaman; $i++)
{
	if($page !=$i)
	{
		echo "<a style='text-decoration:none' href='karyawan.php?page=$i'><button type='button' class='btn btn-info'>$i</button></a>";
	}
	else
	{
		echo $i;
	}
}
?>
</body>
</html>