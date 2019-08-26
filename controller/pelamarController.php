<?php
	//CLASS UNTUK CRUD
	require_once '../db/mdl_pelamar.php';
	$conn = new pelamar();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "addverifikasi"){	
		$idverifikasi = $_POST['postidverifikasi'];
		$idwawawancara = $_POST['postidwawancara'];
		$username = $_POST['postusername'];
		$password  = $_POST['postpassword'];
		$nama = $_POST['postnama'];
        $tanggallahir = $_POST['posttanggal'];
        $alamat = $_POST['postalamat'];
        $email = $_POST['postemail'];
        $nohp = $_POST['postnohp'];
		$jenkel = $_POST['postjenkel'];
		$idstatus = "STS07";
        $tanggalverifikasi = date('Y-m-d');
		$conn->addverifikasi($idverifikasi, $username,  $password, $nama, $tanggallahir, $alamat,  $email, $nohp, $jenkel, $tanggalverifikasi, $idstatus, $idwawawancara);	
		header('location: ../jobs/profile.php');

	// DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN

	}elseif($action == "addpenilaianpelamar"){	
		$nilaikompetesi = $_POST['postkompetensi'];
		if ($nilaikompetesi == "1") {
			$kompetensi = "kurang";
		} elseif ($nilaikompetesi == "2") {
			$kompetensi = "Baik";
		}elseif ($nilaikompetesi == "3") {
			$kompetensi = "Sangat Baik";
		}

		$nilaiatitude = $_POST['postatitude'];
		if ($nilaiatitude == "1") {
			$atitude = "kurang";
		} elseif ($nilaiatitude == "2") {
			$atitude = "Baik";
		}elseif ($nilaiatitude == "3") {
			$atitude = "Sangat Baik";
		}

		$nilaikomunikasi = $_POST['postkomunikasi'];
		if ($nilaikomunikasi == "1") {
			$komunikasi = "kurang";
		} elseif ($nilaikomunikasi == "2") {
			$komunikasi = "Baik";
		}elseif ($nilaikomunikasi == "3") {
			$komunikasi = "Sangat Baik";
		}

		$nilaigrooming = $_POST['postgrooming'];
		if ($nilaigrooming == "1") {
			$grooming = "kurang";
		}elseif ($nilaigrooming == "2") {
			$grooming = "Baik";
		}elseif ($nilaigrooming == "3") {
			$grooming = "Sangat Baik";
		}

		$nilaiantusiasme = $_POST['postantusiasme'];
		if ($nilaiantusiasme == "1") {
			$antusiasme = "kurang";
		} elseif ($nilaiantusiasme == "2") {
			$antusiasme = "Baik";
		}elseif ($nilaiantusiasme == "3") {
			$antusiasme = "Sangat Baik";
		}

		$idpenilaianpelamar = $_POST['postidpenilaianpelamar'];
		$idwawawancara = $_POST['postidwawancara'];
		$hasilpenilaian = $nilaikompetesi + $nilaiatitude + $nilaikomunikasi + $nilaigrooming + $nilaiantusiasme;
		$Catatanlain = $_POST['postcatatanlain'];

		$idpelamar = $_POST['postlink'];
		$conn->addpenilaianpelamar($idpenilaianpelamar, $idwawawancara ,$kompetensi, $nilaikompetesi, $atitude, $nilaiatitude, $komunikasi, $nilaikomunikasi, $grooming, $nilaigrooming, $antusiasme, $nilaiantusiasme, $hasilpenilaian, $Catatanlain );	
		header('location: ../wawancara/room.php?iduser='.$idpelamar);

	

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


// EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN // EDIT FORM ADMIN 

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

	}	

?>