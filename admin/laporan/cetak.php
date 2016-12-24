<?php
include "fpdf.php";
include "koneksi.php";

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'CV.FAWAIQ JAYA MOBIL','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'CV.FAWAIQ JAYA MOBIL','0','1','C',false);
$pdf->Cell(0,2,'CV.FAWAIQ JAYA MOBIL','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','L',false);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,'CV.FAWAIQ JAYA MOBIL','0','1','C',false);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(8,6,'No.',1,0,'C');
$pdf->Cell(35,6,'Kode Mobil',1,0,'C');
$pdf->Cell(37,6,'Merk Mobil',1,0,'C');
$pdf->Cell(35,6,'Type Mobil',1,0,'C');
$pdf->Cell(35,6,'Warna Mobil',1,0,'C');
$pdf->Cell(40,6,'Harga Mobil',1,0,'C');
$pdf->Ln(2);
$no = 0;
$sql = mysqli_query("select * from trayek order by kode_trayek asc");
while($data = mysql_fetch_array($sql))
{
	$no++;
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(8,4,$no.".",1,0,'C');
	$pdf->Cell(35,4,$data['kode_trayek'],1,0,'L');
	$pdf->Cell(37,4,$data['nama'],1,0,'L');
	$pdf->Cell(35,4,$data['jarak'],1,0,'L');
	$pdf->Cell(35,4,$data['lintasan'],1,0,'L');
	$pdf->Cell(40,4,$data['tanggal_berlaku'],1,0,'R');
}
$pdf->Output();
?>