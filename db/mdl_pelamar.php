<?php
	require_once('../db/config.php');

	class pelamar extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}
 

		public function autocode_penilaianpelamar(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idpenilaianpelamar),3) as kodeawal From tbpenilaianpelamar");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "PNL000";
			}elseif ($kodetambah < 100) {
				$sub = "PNL00";
			}elseif ($kodetambah < 1000) {
				$sub = "PNL0";
			}elseif ($kodetambah < 10000) {
				$sub = "PNL";
			}
			echo $sub.$kodetambah;
		} 

		public function autocode_verifikasi(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idverifikasipelamar),3) as kodeawal From tbverifikasipegawai");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "VFK000";
			}elseif ($kodetambah < 100) {
				$sub = "VFK00";
			}elseif ($kodetambah < 1000) {
				$sub = "VFK0";
			}elseif ($kodetambah < 10000) {
				$sub = "VFK";
			}
			echo $sub.$kodetambah;
		} 

	

		// END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE

		public function addverifikasi($idverifikasi, $username,  $password, $nama, $tanggallahir, $alamat,  $email, $nohp, $jenkel, $tanggalverifikasi, $idstatus, $idwawawancara){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tbverifikasipegawai` ( `idverifikasipelamar`, `username`, `password`, `namapegawai`, `tanggallahir`, `alamat`, `email`, `nohp`, `jeniskelamin`, `tanggalverifikasi`, `idstatuspegawai`, idwawancara ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssss", $idverifikasi, $username,  $password, $nama, $tanggallahir, $alamat,  $email, $nohp, $jenkel, $tanggalverifikasi, $idstatus, $idwawawancara);
			$stmt->execute(); 
			return true;
		}

		
		public function addpenilaianpelamar($idpenilaianpelamar, $idwawawancara ,$kompetensi, $nilaikompetesi, $atitude, $nilaiatitude, $komunikasi, $nilaikomunikasi,  $grooming, $nilaigrooming, $antusiasme, $nilaiantusiasme, $hasilpenilaian, $Catatanlain){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tbpenilaianpelamar` (`idpenilaianpelamar`, `idwawancara`,`kompetensi`, `nilai_kompetensi`, `atitude`, `nilai_atitude`, `komunikasi`, `nilai_komunikasi`, `grooming`, `nilai_grooming`, `antusiasme`, `nilai_antusiasme`,`hasilpenilaianpelamar` , `catatanlain` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssssss", $idpenilaianpelamar, $idwawawancara ,$kompetensi, $nilaikompetesi, $atitude, $nilaiatitude, $komunikasi, $nilaikomunikasi, $grooming, $nilaigrooming, $antusiasme, $nilaiantusiasme, $hasilpenilaian, $Catatanlain);
			$stmt->execute(); 
			return true;
		}

		// READ DISINI   // READ DISINI   // READ DISINI   // READ DISINI   // READ DISINI 
        
		public function readrangepenilaianwawancara(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT * FROM tbrangenilaipelamar");
			return $result;
		}
// dipake
		public function readidwawancara($idpendaftar){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT * FROM tbwawancara WHERE idpendaftar = '$idpendaftar'");
			return $result;
		}
		
		
// dipake
		public function readwawancara(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT tbwawancara.*, tbpenguji.*, tbpegawai.*, tbpendaftar.* 
			FROM tbwawancara, tbpenguji, tbpegawai, tbpendaftar
			WHERE tbwawancara.idpendaftar = tbpendaftar.idpendaftar
			AND tbwawancara.idpenguji = tbpenguji.idpenguji 
			AND tbpenguji.idpegawai = tbpegawai.idpegawai
			AND tbwawancara.idwawancara is not null 
			");
			return $result;
		}
// dipake
		public function readprofile($loginid){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM ((tbpendaftar
			INNER JOIN tbcv ON tbpendaftar.idcv = tbcv.idcv)
			INNER JOIN tblowonganpekerjaan ON tbpendaftar.idlowongan = tblowonganpekerjaan.idlowongan)
			WHERE tbpendaftar.idpendaftar = '$loginid'
			");
			return $result;
		}
// dipake
		public function readprofilepenguji($loginid){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM ((tbwawancara, tbpegawai
			INNER JOIN tbpenguji ON tbwawancara.idpenguji = tbpenguji.idpenguji)
			INNER JOIN tbpegawai ON tbpenguji.idpegawai = tbpegawai.idpegawai)
			WHERE tbwawancara.idpendaftar = '$loginid' 
			AND tbpenguji.idpegawai = tbpegawai.idpegawai
			");
			return $result;
}

// dipake

		public function readprofil($loginid){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM ((tbwawancara
			INNER JOIN tbpenguji ON tbwawancara.idpenguji = tbpenguji.idpenguji)
			INNER JOIN tbpegawai ON tbpenguji.idpegawai = tbpegawai.idpegawai)
			
			WHERE tbwawancara.idpendaftar = '$loginid'
			");
			return $result;
		}

// dipake
		public function readdataverifikasi(){
			$stmt = $this->conn->prepare("SELECT * FROM tbverifikasipegawai ORDER BY idverifikasipelamar ASC ") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		// dipake
		public function readpegawai($loginid){
			$stmt = $this->conn->prepare("SELECT * FROM tbpegawai WHERE idpegawai = '$loginid'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

// dipake
		public function hideverifikai($loginid){
			$stmt = $this->conn->prepare("SELECT * FROM tbpendaftar WHERE idpendaftar = '$loginid'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hidepenilaian($loginid){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM ((tbwawancara
			INNER JOIN tbpendaftar ON tbpendaftar.idpendaftar = tbwawancara.idpendaftar)
			INNER JOIN tbpenguji ON tbwawancara.idpenguji = tbpenguji.idpenguji)
			INNER JOIN tbpegawai ON tbpenguji.idpegawai = tbpegawai.idpegawai)
			
			WHERE tbwawancara.idpendaftar = '$loginid'
			");
			return $result;
		}

		
		
// HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA 
// HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbpendaftar where idpendaftar = '$postid'");
		}

		public function veditpelamar($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbpendaftar where idpendaftar = '$postid'");
			return $result;
		}

		public function update($id, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbpendaftar set nama='$nama', email='$email', password='$password', alamat='$alamat', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir', usia='$usia', no_telp='$notelp', jenis_kelamin='$jeniskelamin'
			where idpendaftar='$id'");
			return $result;
		}

		public function keputusanwawancara($id, $status){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbpendaftar set status='$status' where idpendaftar='$id'");
			return $result;
		}

//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 
//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 

		

		public function counttidakditerima(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idpendaftar) as 'total' from tbpendaftar WHERE status = 'Tidak diterima'");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}
		

		// READ SUM	// READ SUM	// READ SUM	// READ SUM

		public function sumtotal($coba){
			$con = $this->conn;
			$result = mysqli_query($con, "SELECT MONTH(tanggal) as 'bulan', SUM(pengeluaran) as 'total' 
			FROM tbcoba WHERE MONTH(tanggal) = '$coba'");
			return $result;
		} 
	}
?>