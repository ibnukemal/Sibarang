<?php
include "otorisasi.php";
include "koneksi.php";
?>
<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('times','B',16);
$pdf->Cell(60);
$pdf->Image('icon.png',15,10,20);
$pdf->Cell(40,10,'Laporan Penjualan Barang');
$pdf->Ln(40);
$pdf->Cell(20);
$pdf->SetFont('times','B',10);
$pdf->SetFillColor(255,250,50);
$pdf->cell(25,7,"Kode Barang",1,0,'C',true);
$pdf->cell(30,7,"Nama Barang",1,0,'C',true);
$pdf->cell(40,7,"Merk",1,0,'C',true);
$pdf->cell(30,7,"Harga",1,0,'C',true);
$pdf->cell(30,7,"Jumlah",1,0,'C',true);
$pdf->Ln();


include"koneksi.php";
$sql = "SELECT * FROM barang";
$result = mysql_query($sql);

while ($rows=mysql_fetch_array($result))
{
	$kd_barang = $rows[0];
	$nm_barang = $rows[1];
	$merk = $rows[2];
	$harga = $rows[3];
	$jumlah = $rows[4];
	$pdf->Cell(20);
	$pdf->SetFont('times','',10);
	$pdf->cell(25,7,$kd_barang,1);
	$pdf->cell(30,7,$nm_barang,1);
	$pdf->cell(40,7,$merk,1);
	$pdf->cell(30,7,$harga,1);
	$pdf->cell(30,7,$jumlah,1);
	$pdf->Ln();
}
$pdf->Output();
?>
