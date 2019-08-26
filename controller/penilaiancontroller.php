<?php
	//CLASS UNTUK CRUD
	require_once '../db/mdl_penilaian.php';
	$conn = new penilaian();
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



// INI REKAP PENILAIAN
	}elseif($action == "addrekappenilaian"){	
			$idrekap = $_POST['postidrekap'];
			$idpegawai = $_POST['postidpegawai'];
			$totalskor = "0";
			$idtahun = $_POST['postidtahun'];
		
		
			$conn->adddatarekappenilaian($idrekap, $idpegawai, $totalskor, $idtahun);	
			header('location: ../admin/datarekappenilaian.php');



	}elseif($action == "addpenilaian"){	
        
        $nilaikeaktifan = $_POST['postkeaktifan'];
		if ($nilaikeaktifan == "1") {
			$keaktifan = "Sangat Kurang";
		} elseif ($nilaikeaktifan == "2") {
			$keaktifan = "Kurang";
		}elseif ($nilaikeaktifan == "3") {
			$keaktifan = "Baik";
		}elseif ($nilaikeaktifan == "4") {
			$keaktifan = "Cukup Baik";
		}elseif ($nilaikeaktifan == "5") {
			$keaktifan = "Sangat Baik";
		}
// ketepatan waktu
		$nilaiketepatanwaktu = $_POST['postketepatanwaktu'];
		if ($nilaiketepatanwaktu == "1") {
			$ketepatanwaktu = "Sangat Kurang";
		} elseif ($nilaiketepatanwaktu == "2") {
			$ketepatanwaktu = "Kurang";
		}elseif ($nilaiketepatanwaktu == "3") {
			$ketepatanwaktu = "Baik";
		}elseif ($nilaiketepatanwaktu == "4") {
			$ketepatanwaktu = "Cukup Baik";
		}elseif ($nilaiketepatanwaktu == "5") {
			$ketepatanwaktu = "Sangat Baik";
        }
        
        // kesalahan
		$nilaikesalahan = $_POST['postkesalahan'];
		if ($nilaikesalahan == "1") {
			$kesalahan = "Sangat Kurang";
		} elseif ($nilaikesalahan == "2") {
			$kesalahan = "Kurang";
		}elseif ($nilaikesalahan == "3") {
			$kesalahan = "Baik";
		}elseif ($nilaikesalahan == "4") {
			$kesalahan = "Cukup Baik";
		}elseif ($nilaikesalahan == "5") {
			$kesalahan = "Sangat Baik";
        }
        
         // perilaku
		$nilaiperilaku = $_POST['postperilaku'];
		if ($nilaiperilaku == "1") {
			$perilaku = "Sangat Kurang";
		} elseif ($nilaiperilaku == "2") {
			$perilaku = "Kurang";
		}elseif ($nilaiperilaku == "3") {
			$perilaku = "Baik";
		}elseif ($nilaiperilaku == "4") {
			$perilaku = "Cukup Baik";
		}elseif ($nilaiperilaku == "5") {
			$perilaku = "Sangat Baik";
        }
        
        // kebersihan
		$nilaikebersihan = $_POST['postkebersihan'];
		if ($nilaikebersihan == "1") {
			$kebersihan = "Sangat Kurang";
		} elseif ($nilaikebersihan == "2") {
			$kebersihan = "Kurang";
		}elseif ($nilaikebersihan == "3") {
			$kebersihan = "Baik";
		}elseif ($nilaikebersihan == "4") {
			$kebersihan = "Cukup Baik";
		}elseif ($nilaikebersihan == "5") {
			$kebersihan = "Sangat Baik";
        }
        
         // kualitashasil
		$nilaikualitashasil = $_POST['postkualitashasil'];
		if ($nilaikualitashasil == "1") {
			$kualitashasil = "Sangat Kurang";
		} elseif ($nilaikualitashasil == "2") {
			$kualitashasil = "Kurang";
		}elseif ($nilaikualitashasil == "3") {
			$kualitashasil = "Baik";
		}elseif ($nilaikualitashasil == "4") {
			$kualitashasil = "Cukup Baik";
		}elseif ($nilaikualitashasil == "5") {
			$kualitashasil = "Sangat Baik";
        }
        
         // absensi
		$nilaiabsensi = $_POST['postabsensi'];
		if ($nilaiabsensi == "1") {
			$absensi = "Sangat Kurang";
		} elseif ($nilaiabsensi == "2") {
			$absensi = "Kurang";
		}elseif ($nilaiabsensi == "3") {
			$absensi = "Baik";
		}elseif ($nilaiabsensi == "4") {
			$absensi = "Cukup Baik";
		}elseif ($nilaiabsensi == "5") {
			$absensi = "Sangat Baik";
        }
        
         // inisiatif
		$nilaiinisiatif = $_POST['postinisiatif'];
		if ($nilaiinisiatif == "1") {
			$inisiatif = "Sangat Kurang";
		} elseif ($nilaiinisiatif == "2") {
			$inisiatif = "Kurang";
		}elseif ($nilaiinisiatif == "3") {
			$inisiatif = "Baik";
		}elseif ($nilaiinisiatif == "4") {
			$inisiatif = "Cukup Baik";
		}elseif ($nilaiinisiatif == "5") {
			$inisiatif = "Sangat Baik";
        }
        
         // kerjasama
		$nilaikerjasama = $_POST['postkerjasama'];
		if ($nilaikerjasama == "1") {
			$kerjasama = "Sangat Kurang";
		} elseif ($nilaikerjasama == "2") {
			$kerjasama = "Kurang";
		}elseif ($nilaikerjasama == "3") {
			$kerjasama = "Baik";
		}elseif ($nilaikerjasama == "4") {
			$kerjasama = "Cukup Baik";
		}elseif ($nilaikerjasama == "5") {
			$kerjasama = "Sangat Baik";
        }
        
         // pengetahuan
		$nilaipengetahuan = $_POST['postpengetahuan'];
		if ($nilaipengetahuan == "1") {
			$pengetahuan = "Sangat Kurang";
		} elseif ($nilaipengetahuan == "2") {
			$pengetahuan = "Kurang";
		}elseif ($nilaipengetahuan == "3") {
			$pengetahuan = "Baik";
		}elseif ($nilaipengetahuan == "4") {
			$pengetahuan = "Cukup Baik";
		}elseif ($nilaipengetahuan == "5") {
			$pengetahuan = "Sangat Baik";
		}

		$idpenilaianpegawai = $_POST['postidpenilaianpegawai'];
		$idpegawai = $_POST['postidpegawai'];
        $hasilpenilaian = $nilaikeaktifan + $nilaiketepatanwaktu + $nilaikesalahan + $nilaiperilaku + $nilaikebersihan + $nilaikualitashasil + $nilaiabsensi + $nilaiinisiatif + $nilaikerjasama + $nilaipengetahuan;
		$keterangan = $_POST['postcatatan'];
        $idbulan = $_POST['postbulan'];
        $idtahun = $_POST['posttahun'];
		
        $conn->addpenilaianpegawai($idpenilaianpegawai, $idpegawai, $keterangan ,$keaktifan, $ketepatanwaktu, $kesalahan, $perilaku, $kebersihan, $kualitashasil, $absensi, $inisiatif, $kerjasama, $pengetahuan, $nilaikeaktifan, $nilaiketepatanwaktu, $nilaikesalahan, $nilaiperilaku, $nilaikebersihan, $nilaikualitashasil, $nilaiabsensi, $nilaiinisiatif, $nilaikerjasama, $nilaipengetahuan, $hasilpenilaian, $idbulan, $idtahun);	
		header('location: ../admin/datapenilaian.php');

	

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

	}elseif($action == "hitungdatarekap"){
		$idrekap = $_GET['idrekap'];
		$idpegawai = $_GET['idpegawai'];
		$idtahun = $_GET['idtahun'];
		
		$data=mysqli_fetch_assoc($conn->hitungrekappenilaian($idpegawai, $idtahun));		
		$totalskor = $data['totalrekap'];
		$conn->updaterekapdata($idrekap, $totalskor);
		header("location:../admin/datarekappenilaian.php");
	}	

?>