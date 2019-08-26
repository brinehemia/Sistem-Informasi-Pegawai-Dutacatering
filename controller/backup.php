<?php
	//CLASS UNTUK CRUD
	require_once '../db/mdl_jobs.php';
	$conn = new mdljobs();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "coba"){	
		$coba = $_POST['bulan'];
		$conn->sumtotal($coba);
		header("location:../admin/anime.php");

	}elseif($action == "addfadmin"){
		// add data Pelamar 
		$idpendaftar = $_POST['postidauto'];
		$idcv = $_POST['postidcvauto'];
		$nama = $_POST['postnama'];
		$email = $_POST['postemail'];
		$password = $_POST['postpassword'];
		$alamat = $_POST['postalamat'];
		$tempatlahir = $_POST['posttempatlahir'];
		$tanggallahir = $_POST['posttanggallahir'];
		$usia = $_POST['postusia'];
		$notelp = $_POST['postnotelp'];
		$jeniskelamin = $_POST['postjekel'];
		$status = "Registrasi";
		$conn->addfadminlamaran($idpendaftar, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin, $idcv, $status );

		// Log add data pelamar
		session_start();
		$loginnama = $_SESSION['nama'];
		$action = "Add Data";
		$keterangan = "Data yang telah di hapus adalah data dengan id pendaftar ".$idpendaftar ." dan Berikut detailnya : <br/>" ."
nama : " .$nama ."<br/>" ."
email : " .$email ."<br/>" ."
alamat : " .$alamat ."<br/>" ."
Nomor Telpon : " .$notelp;
		$log->log($action, $loginnama, $keterangan);
		session_abort();
		// header("location:../admin/DataPelamar.php");		

	}elseif($action == "delfadmin"){ 
		// Log Hapus
		$query = mysqli_query($link, "SELECT * FROM tbpendaftar WHERE idpendaftar = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id pendaftar ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama : " .$data['nama'] ."<br/>" ."
email : " .$data['email'] ."<br/>" ."
alamat : " .$data['alamat'] ."<br/>" ."
Nomor Telpon : " .$data['no_telp'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->log($action, $loginnama, $keterangan);
		session_abort();
		// Hapus	
		$conn->hapus($_GET['postid']);
		header("location:../admin/DataPelamar.php");

	}elseif($action == "upfadmin"){
			$id = $_POST['editid'];
			$nama = $_POST['editnama'];
			$email = $_POST['editemail'];
			$password = $_POST['editpassword'];
			$alamat = $_POST['editalamat'];
			$tempatlahir = $_POST['edittempatlahir'];
			$tanggallahir = $_POST['edittanggallahir'];
			$usia = $_POST['editusia'];
			$notelp = $_POST['editnotelp'];
			$jeniskelamin = $_POST['editjekel'];
			$conn->update($id, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id pendaftar ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama : " .$nama ."<br/>" ."
email : " .$email ."<br/>" ."
alamat : " .$alamat ."<br/>" ."
Nomor Telpon : " .$notelp;
			$log->log($action, $loginnama, $keterangan);
			session_abort();
			header("location:../admin/DataPelamar.php");
			
	}

?>