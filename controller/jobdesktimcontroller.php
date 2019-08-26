<?php
	//CLASS UNTUK CRUD
	require_once '../db/mdl_jobdesktim.php';
	$conn = new jobdesktim();
	
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

    }elseif($action == "addjobdesk"){
		
		$jobdesk1  = $_POST['postjobdesk1'];
		$jobdesk2  = $_POST['postjobdesk2'];
		$jobdesk3  = $_POST['postjobdesk3'];
		$jobdesk4  = $_POST['postjobdesk4'];
		$jobdesk5  = $_POST['postjobdesk5'];
		$jobdesk6  = $_POST['postjobdesk6'];
		$jobdesk7  = $_POST['postjobdesk7'];
		$jobdesk8  = $_POST['postjobdesk8'];
		$jobdesk9  = $_POST['postjobdesk9'];
		$jobdesk10  = $_POST['postjobdesk10'];

        $idjobdesk = $_POST['postidjobdesk'];
        $namafungsi = $_POST['postfungsi'];
        $tanngalmulai = $_POST['postmulai'];
        $deadline = $_POST['postdeadline'];
        $detailwaktu = $_POST['postdetailwaktu'];
        $catatan = $_POST['postcatatan'];
        $conn->addjobdesk($idjobdesk, $namafungsi, $jobdesk1, $jobdesk2, $jobdesk3, $jobdesk4, $jobdesk5, $jobdesk6, $jobdesk7, $jobdesk8, $jobdesk9, $jobdesk10, $tanngalmulai, $deadline, $detailwaktu, $catatan);	
        header('location: ../admin/formjobdesk.php');
		

	}elseif($action == "addtim"){	
			$idtim = $_POST['postidauto'];
			$nama  = $_POST['postnamatim'];
			$deskripsi  = $_POST['postdeskripsitim'];
			$jobdesk = $_POST['postjob'];
			
			$conn->addtim($idtim, $jobdesk, $nama, $deskripsi);	
			header('location: ../admin/datatim.php');


		}elseif($action == "updatetim"){	
			$idpegawai = $_POST['postidpegawai'];
			$idtim  = $_POST['postidtim'];
			
			$conn->updatetim($idpegawai, $idtim);	
			header('location: ../admin/datatim.php');
	// DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN

	}elseif($action == "hapustim"){ 
		// Hapus	
		$conn->hapustim($_GET['idtim']);
		
		header("location:../admin/datatim.php");


// EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN 

	}

?>