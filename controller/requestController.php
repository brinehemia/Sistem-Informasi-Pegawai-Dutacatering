<?php
	require_once '../db/mdl_request.php';
	$conn = new mdlrequest();

	$aksi = $_GET['aksi'];
	if($aksi == "pegawai"){	
			
			$nomorsurat = $_POST['postidrequest']."/".$_POST['postdivisi']."/".date("my");
			$divisi = $_POST['postdivisi'];
			$jumlah  = $_POST['postjumlah'];
			$namapekerjaan = $_POST['postnamapekerjaan'];
			$alasan = $_POST['postalasan'];
			$syarat = $_POST['postsyarat'];
			$status = "Menunggu Keputusan";


            $conn->addreqpegawai($nomorsurat, $divisi, $namapekerjaan, $jumlah, $alasan, $syarat, $status);
			header('location: ../admin/mailreqpegawai.php');

	}elseif($aksi == "setujui"){	
		
		$idreqsurat = $_GET['idsurat'];
		$Status = "Done";
		$Keputusan = "SETUJUI";
		
		$conn->updatepengajuan($idreqsurat, $Status, $Keputusan);
		header('location: ../admin/formlowonganauto.php?nomorsurat='.$_GET['idsurat']);



	}elseif($aksi == "penolakan"){	
		
		$idbalasan = $_POST['postidbalasan'];
		$nomorsurat = $_POST['postnomorsurat'];
		$isi = $_POST['postisi'];
		$idreqsurat = $_POST['postidsurat'];
		
		$Status = "Done";
		$Keputusan = "Tidak Setujui";
		$conn->updatepengajuan($idreqsurat, $Status, $Keputusan);
		$conn->balasanpenolakan($idbalasan, $nomorsurat, $isi);
		
		header('location: ../admin/maildone.php');

}elseif($aksi == "readkeputusan"){	
	
	$Keputusan = $_GET['keputusan'];
	$nomorsurat = $_GET['nomorsurat'];
	
	if ( $Keputusan == "SETUJUI" ||  $Keputusan == "setujui") {
		$url = "../admin/balasanreqpegawai.php?nomorsurat=".$nomorsurat;
	}else if ($Keputusan == "Tidak Disetujui" || $Keputusan == "Tidak Setujui"){
		$url = "../admin/readreqpenolakan.php?nomorsurat=".$nomorsurat;
	}
	
	header('location: '.$url);
}






	
?>