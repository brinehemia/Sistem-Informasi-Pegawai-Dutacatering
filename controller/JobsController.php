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
		$jeniskelamin = $_POST['postjekel'];
		$tgl = date('Y-m-d');
		$status = "Registrasi";

		// data cv
		$pendidikan = $_POST['postpendidikan'];
		$skill = $_POST['postskill'];
		$pengalaman = $_POST['postpengalaman'];
		$tentangdiri = $_POST['postdiri'];
		$alasan = $_POST['postalasan'];
		
		//add datapelamar dan datacv
		$conn->addfadminlamaran($idpendaftar, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin, $idcv, $idlow, $tgl, $status, $idcv1, $pendidikan, $skill, $pengalaman, $tentangdiri, $alasan);
		
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
		header("location:../admin/DataPelamar.php");

// ADD LOWONGAN PEKERJAAN // ADD LOWONGAN PEKERJAAN // ADD LOWONGAN PEKERJAAN // ADD LOWONGAN PEKERJAAN // ADD LOWONGAN PEKERJAAN 

	}elseif($action == "addlowonganpekerjaan"){
		// data Pelamar
		$idlowongan = $_POST['postidauto'];
		$nama = $_POST['postnama'];
		$keterangan = $_POST['postketerangan'];
		$syarat = $_POST['postsyarat'];
		$jumlah = $_POST['postjumlah'];
		$kodedivisi = $_POST['postkodedivisi'];
		
		// add datapelamar dan datacv
		$conn->addlamaran($idlowongan, $nama, $keterangan, $jumlah, $syarat, $kodedivisi);
		header("location:../admin/datalowongan.php");

// ADD PENGUJI WAWANCARA // ADD PENGUJI WAWANCARA // ADD PENGUJI WAWANCARA // ADD PENGUJI WAWANCARA // ADD PENGUJI WAWANCARA // ADD PENGUJI WAWANCARA

	}elseif($action == "addpenguji"){
		// data Pelamar
		$idpenguji = $_POST['postidauto'];
		$idpegawai = $_POST['postidpegawai'];
		
		// add datapelamar dan datacv
		$conn->addpenguji($idpenguji, $idpegawai);
		header("location:../admin/formpenguji.php");

	}elseif($action == "addwawancara"){
		// data Pelamar
		$idwawancara = $_POST['postidauto'];
		$idpendaftar = $_POST['postidpelamar'];
		$idpenguji = $_POST['postpenguji'];
		$tgl = $_POST['posttanggal'];
		$jam = $_POST['postjam'];
		$keterangan = $_POST['postket'];
		
		// add datapelamar dan datacv
		$conn->addwawancara($idwawancara, $idpendaftar, $idpenguji, $tgl, $jam,  $keterangan);
		header("location:../admin/jadwalwawancara.php");
		
// UNTUK DATA PENGAKTIFAN AKUN PEGAWAI // UNTUK DATA PENGAKTIFAN AKUN PEGAWAI // UNTUK DATA PENGAKTIFAN AKUN PEGAWAI


	}elseif($action == "pengaktifanakun"){	
		

			$iduser = $_GET['postuser'];

			$dataverifikasi = $conn->readpengaktifan($iduser); 
			$data = mysqli_fetch_array($dataverifikasi);

			$idpegawai = $_GET['postiduser'];
			$username = $data['username'];
			$password  = $data['password'];
			$nama = $data['namapegawai'];
			$email = $data['email'];
			$alamat = $data['alamat'];
			$tanggallahir = $data['tanggallahir'];
			$jenkel = $data['jeniskelamin'];
			$nohp = $data['nohp'];
			$tanggalaktifkerja = date('Y-m-d');
			$level = "Pegawai";
			$idstatus = "STS04";
			$idrekappegawai = $_GET['postidrekap'];



			$conn->addpengaktifan($idpegawai, $username,  $password, $nama, $email, $alamat, $tanggallahir, $jenkel, $nohp, $tanggalaktifkerja, $level, $idstatus);	
			$conn->addrekapnilai($idrekappegawai, $idpegawai);
			$conn->hapusdataverifikasi($iduser);
			header('location: ../admin/dataverifikasi.php');
		

	// DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN // DELETE FROM ADMIN

	}elseif($action == "delfadmin"){ 
	
		// Hapus	
		$conn->hapus($_GET['postid']);
		header("location:../admin/DataPelamar.php");

	}elseif($action == "dellowongan"){ 
	
		// Hapus	
		$conn->deletelowongan($_GET['postid']);
		header("location:../admin/datalowongan.php");


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

	}elseif($action == "updatelowongan"){
		// data Pelamar
		$idlowongan = $_POST['editidauto'];
		$nama = $_POST['editnama'];
		$keterangan = $_POST['editketerangan'];
		$syarat = $_POST['editsyarat'];
		$jumlah = $_POST['editjumlah'];
		
		
		// add datapelamar dan datacv
		$conn->updatelowongan($idlowongan, $nama, $keterangan, $jumlah, $syarat);
		header("location:../admin/datalowongan.php");

	}elseif($action == "diterima"){
		$id = $_GET['postid'];
		$status = "Diterima pekerjaan";
		$conn->keputusanwawancara($id, $status);
		header("location:../admin/jadwalwawancara.php");

	}elseif($action == "tidakditerima"){
		$id = $_GET['postid'];
		$status = "Tidak diterima";
		$conn->keputusanwawancara($id, $status);
		header("location:../admin/jadwalwawancara.php");

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