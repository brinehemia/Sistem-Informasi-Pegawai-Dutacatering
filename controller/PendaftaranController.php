<?php
	//CLASS UNTUK CRUD
	require_once '../db/mdl_pendaftaran.php';
	$conn = new pendaftaran();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
		$nama = $_POST['nama'];
		$email  = $_POST['email'];
		$notelp = $_POST['phone'];
		$password = $_POST['password'];
		$conn->create($nama, $email,  $password, $notelp);	
		header('location: signup.php');


	// ADD PELAMAR

	}elseif($action == "addfadmin"){
		// data Pelamar 
		$idpendaftar = $_POST['postidauto'];
		$idcv = $_POST['postidcvauto'];
		$idcv1 = $_POST['postid1cvauto'];
		$idlow = $_POST['postlowong'];
		$nama = $_POST['postnama'];
		$email = $_POST['postemail'];
		$password = $_POST['postpassword'];
		$alamat = $_POST['postalamat'];
		$tempatlahir = $_POST['posttempatlahir'];
		$tanggallahir = $_POST['posttanggallahir'];
		$usia = $_POST['postusia'];
		$notelp = $_POST['postnotelp'];
		$jeniskelamin = $_POST['postjenkel'];
		$tgl = date('Y-m-d');
		$status = "Registrasi";
		$level = "pelamar";

		// data cv
		$pendidikan = $_POST['postpendidikan'];
		$skill = $_POST['postskill'];
		$pengalaman = $_POST['postpengalaman'];
		$tentangdiri = $_POST['postdiri'];
		$alasan = $_POST['postalasan'];
		
		//add datapelamar dan datacv
		$conn->addlamaran($idpendaftar, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin, $idcv, $idlow, $tgl, $status, $level, $idcv1, $pendidikan, $skill, $pengalaman, $tentangdiri, $alasan);
		
		header("location:../login.html");



	}

?>