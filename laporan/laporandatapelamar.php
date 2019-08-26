<?php

// Koneksi library FPDF
require('../assets/fpdf/fpdf.php');
require('../db/mdl_laporan.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16); 
//  width, Height, Size
$pdf->Image('../assets/image/mankepblack.png',10,10,-500);
// Membuat string
$pdf->Cell(275,7,'Laporan Data Penerimaan Pegawai',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(275,7,'Duta Catering Malang.',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);


// TABEL HEAD MULAI
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'',0,0);
$pdf->Cell(40,6,'Nama',1,0);
$pdf->Cell(50,6,'Email',1,0);
$pdf->Cell(30,6,'password',1,0);
$pdf->Cell(30,6,'tempat lahir',1,0);
$pdf->Cell(25,6,'tanggal lahir',1,0);
$pdf->Cell(15,6,'usia',1,0);
$pdf->Cell(30,6,'No Telpon',1,0);
$pdf->Cell(30,6,'Jenis Kelamin',1,1);
 
// TABEL BODY MULAI
    $pdf->SetFont('Arial','',10);
    $con = new mdllaporan();
    $read = $con->laporanpelamar();
	while($fetch = $read->fetch_array()){
        $pdf->Cell(15,6,'',0,0);
        $pdf->Cell(40,6,$fetch['namapelamar'],1,0);
        $pdf->Cell(50,6,$fetch['email'],1,0);
        $pdf->Cell(30,6,$fetch['password'],1,0);
        $pdf->Cell(30,6,$fetch['tempat_lahir'],1,0);
        $pdf->Cell(25,6,$fetch['tanggal_lahir'],1,0);
        $pdf->Cell(15,6,$fetch['usia'],1,0);
        $pdf->Cell(30,6,$fetch['no_telp'],1,0);
        $pdf->Cell(30,6,$fetch['jenis_kelamin'],1,1);
    }

// END TABEL DISINI
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(190,6,'Malang,'.date("d M Y"),0,1,'C');
$pdf->Cell(190,45,'Divisi Kepegawaian Duta catering Malang',0,1,'C');

$pdf->Cell(190,7,'(______________________)',0,1,'C');


$pdf->Output();
?>


