<?php
//include "otorisasi.php";
include "koneksi2.php";
	
	$sql = "SELECT * FROM barang";
	$result = $koneksi->query($sql);
	$jsonArray = array();
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$jsonArrayItem = array();
			$jsonArrayItem['label'] = $row['kd_barang'];
			$jsonArrayItem['value'] = $row['harga'];
			array_push($jsonArray, $jsonArrayItem);
		}
	}
$koneksi->close();
header('Content-type: application/json');
echo json_encode($jsonArray);
?>