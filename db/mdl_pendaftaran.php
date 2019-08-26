<?php
	require_once('../db/config.php');

	class pendaftaran extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

		public function autocode_pelamar(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idpendaftar),2) as kodeawal From tbpendaftar");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "PN00";
			}elseif ($kodetambah < 100) {
				$sub = "PN0";
			}elseif ($kodetambah < 1000) {
				$sub = "PN";
			}
			echo $sub.$kodetambah;
        } 
        
        public function autocode_cv(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idcv),2) as kodeawal From tbpendaftar");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "CV000";
			}elseif ($kodetambah < 100) {
				$sub = "CV00";
			}elseif ($kodetambah < 1000) {
				$sub = "CV0";
			}elseif ($kodetambah < 10000) {
				$sub = "CV";
			}
			echo $sub.$kodetambah;
		}



		// END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE

		

		public function addlamaran($idpendaftar, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin, $idcv, $idlow, $tgl, $status, $level, $idcv1, $pendidikan, $skill, $pengalaman, $tentangdiri, $alasan){
			//encrypt
			$encodenama = base64_encode($nama);
			$encodepass = base64_encode($password);	
			$encodenotelp = base64_encode($notelp);	

			$stmt1 = $this->conn->prepare("INSERT INTO `tbcv` ( `idcv`,`pendidikan`, `skill`, `pengalamankerja`, `tentangdiri`, `alasan` ) 
            VALUES (?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt1->bind_param("ssssss", $idcv1, $pendidikan, $skill, $pengalaman, $tentangdiri, $alasan);
			$stmt1->execute();

			$stmt = $this->conn->prepare("INSERT INTO `tbpendaftar` (`idpendaftar`, `namapelamar`, `email`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `usia`, `no_telp`, `jenis_kelamin`, `idcv`, `idlowongan`, `tanggaldaftar`, `status`, `level` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)") or die($this->conn->error);
			$stmt->bind_param("sssssssssssssss", $idpendaftar, $encodenama, $email, $encodepass, $alamat, $tempatlahir, $tanggallahir, $usia, $encodenotelp, $jeniskelamin, $idcv, $idlow, $tgl, $status, $level);
			$stmt->execute();
		}

		public function addpenguji($idpenguji, $idpegawai){
			//encrypt
			$stmt = $this->conn->prepare("INSERT INTO `tbpenguji` ( `idpenguji`, `idpegawai` ) 
            VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ss", $idpenguji, $idpegawai);
			$stmt->execute(); 
			return true;
		}

		public function addwawancara($idwawancara, $idpendaftar, $idpenguji, $tgl, $jam, $tempat, $keterangan){
			//encrypt
			$stmt = $this->conn->prepare("INSERT INTO `tbwawancara` ( `idwawancara`, `idpendaftar`, `idpenguji`, `tgl_wawancara`, `jam`, `tempat_wawancara`, `keterangan` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssssss", $idwawancara, $idpendaftar, $idpenguji, $tgl, $jam, $tempat, $keterangan);
			$stmt->execute(); 
			
			$stmt1 = $this->conn->prepare("update tbpendaftar set status= 'Terjadwal' where idpendaftar='$idpendaftar'") or die($this->conn->error);
			$stmt1->execute();
		}

		public function addverifikasiakun($idwawancara, $idpendaftar, $idpenguji, $tgl, $jam, $tempat, $keterangan){
			//encrypt
			$stmt = $this->conn->prepare("INSERT INTO `tbwawancara` ( `idwawancara`, `idpendaftar`, `idpenguji`, `tgl_wawancara`, `jam`, `tempat_wawancara`, `keterangan` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssssss", $idwawancara, $idpendaftar, $idpenguji, $tgl, $jam, $tempat, $keterangan);
			$stmt->execute(); 
			
			$stmt1 = $this->conn->prepare("update tbpendaftar set status= 'Terjadwal' where idpendaftar='$idpendaftar'") or die($this->conn->error);
			$stmt1->execute();
		}

		// READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING
		
		

		public function readlowongan(){
			$stmt = $this->conn->prepare("SELECT * FROM `tblowonganpekerjaan` ") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 
//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 

		
		

		// READ SUM	// READ SUM	// READ SUM	// READ SUM

		
	}
?>