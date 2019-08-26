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
$pdf->Cell(50,6,'id pegawai',1,0);
$pdf->Cell(30,6,'username',1,0);
$pdf->Cell(30,6,'Nomor hp',1,0);
$pdf->Cell(25,6,'Divisi',1,0);
$pdf->Cell(25,6,'Total skor',1,0);
$pdf->Cell(30,6,'Lama bekerja',1,1);

 
// TABEL BODY MULAI
    $pdf->SetFont('Arial','',10);
    $con = new mdllaporan();
    $tahunini = $_GET['tahun'];
    $read = $con->laporanprestasi($tahunini);
	while($fetch = $read->fetch_array()){
        $pdf->Cell(15,6,'',0,0);
        $pdf->Cell(40,6,$fetch['namapegawai'],1,0);
        $pdf->Cell(50,6,$fetch['idpegawai'],1,0);
        $pdf->Cell(30,6,$fetch['username'],1,0);
        $pdf->Cell(30,6,$fetch['nohp'],1,0);
        $pdf->Cell(25,6,$fetch['namadivisi'],1,0);
        $pdf->Cell(25,6,$fetch['totalskor'],1,0);
        $pdf->Cell(30,6,$fetch['jumlahhari'],1,1);
        
    }
   
// END TABEL DISINI
$pdf->Cell(250,6,'',0,1);

$pdf->Cell(250,6,'Berdasarkan penilaian kinerja pegawai dan data yang kami peroleh dalam 1 tahun (12 kali penilaian),Daftar nama pegawai diatas merupakan data pegawai ',0,1,'L');
$pdf->Cell(250,6,'yang layak mendapat bonus upah kinerja atau reward karena kinerja yang baik selama 1 tahun bekerja di perusahaan adapun penilaian yang kami lakukan ' ,0,1,'L');
$pdf->Cell(250,6,'adalah dengan menilai langsung berdasarkan 10 indikator penilaian yang divisi kepegawaian tetapkan. oleh karena itu kami harap Divisi Keuangan dapat ' ,0,1,'L');
$pdf->Cell(250,6,'mempertimbangkan daftar nama diatas untuk mendapat reward.' ,0,1,'L');




$pdf->Cell(270,45,'Malang,'.date("d M Y") ,0,1,'R');
$pdf->Cell(270,7,'Divisi Kepegawaian Duta catering Malang' ,0,1,'R');
$pdf->Cell(270,45,'(______________________)',0,1,'R');


$pdf->Output();
?>


