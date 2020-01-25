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
$sqlcount = "SELECT COUNT(nik)FROM karyawan";
$rscount = mysql_fetch_array(mysql_query($sqlcount));
$banyakdata = $rscount[0];
$page = isset($_GET['page'])? $_GET['page']: 1;
$limit = 3;
$mulai_dari = $limit * ($page -1);

$sambung = "SELECT * FROM karyawan ORDER BY nik ASC limit $mulai_dari, $limit";
$sambung2 = mysql_query($sambung);
$no = ($page * $limit)-2;

$banyakhalaman = ceil($banyakdata / $limit);
?>
</body>
</html>