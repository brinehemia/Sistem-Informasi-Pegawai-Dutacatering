<?php
	require_once('../db/config.php');

	class jobdesktim extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

		public function autocode_tim(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idtim),3) as kodeawal From tbtim");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "TIM00";
			}elseif ($kodetambah < 100) {
				$sub = "TIM0";
			}elseif ($kodetambah < 1000) {
				$sub = "TIM";
			}
			echo $sub.$kodetambah;
		} 

		public function autocode_jobdesk(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idjobdesk),3) as kodeawal From tbjobdesk");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "JBD00";
			}elseif ($kodetambah < 100) {
				$sub = "JBD0";
			}elseif ($kodetambah < 1000) {
				$sub = "JBD";
			}
			echo $sub.$kodetambah;
		}

		
		
		// READ // READ // READ // READ // READ // READ // READ // READ // READ // READ // READ // READ
		// READ // READ // READ // READ // READ // READ // READ // READ // READ // READ // READ // READ

		public function readtim1(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT tbtim.*, tbjobdesk.* 
			FROM tbtim, tbjobdesk
			WHERE tbtim.idjobdesk = tbjobdesk.idjobdesk
			AND tbtim.idtim is not null 
			");
			return $result;
		}

		

		public function readjobdesk(){
			$con = $this->conn;
			$result = mysqli_query($con ,"SELECT * FROM tbjobdesk WHERE idjobdesk IS NOT NULL");
			return $result;
		}


		public function readtimid($idtim){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM (tbtim
			INNER JOIN tbjobdesk ON tbtim.idjobdesk = tbjobdesk.idjobdesk)
			WHERE tbtim.idtim = '$idtim'
			");
			return $result;
		}

		public function readpegawaitim(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM (tbpegawai
			INNER JOIN tbdivisi ON tbpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE idtim = '' OR idtim IS NULL 
			");
			return $result;
		}

		public function readdetailjobdesk($idjobdesk){
            $con = $this->conn;
			
			$result = mysqli_query($con ,"SELECT * FROM tbjobdesk WHERE idjobdesk = '$idjobdesk'");
			return $result;
			
		}
		

		// END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE


		//Dipake
		public function addjobdesk($idjobdesk, $namafungsi, $jobdesk1, $jobdesk2, $jobdesk3, $jobdesk4, $jobdesk5, $jobdesk6, $jobdesk7, $jobdesk8, $jobdesk9, $jobdesk10, $tanngalmulai, $deadline, $detailwaktu, $catatan){
			
	
			$stmt = $this->conn->prepare("INSERT INTO `tbjobdesk` ( `idjobdesk`, `namajobdesk`, `jobdesk1`,`jobdesk2`,`jobdesk3`, `jobdesk4`,`jobdesk5`,`jobdesk6`, `jobdesk7`,`jobdesk8`,`jobdesk9`, `jobdesk10`, `tanggalmulai`, `deadline`, `detailwaktu`, `keterangan` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssssssss", $idjobdesk, $namafungsi,  $jobdesk1, $jobdesk2, $jobdesk3, $jobdesk4, $jobdesk5, $jobdesk6, $jobdesk7, $jobdesk8, $jobdesk9, $jobdesk10,  $tanngalmulai, $deadline, $detailwaktu, $catatan);
			$stmt->execute(); 
			return true;
		}

		//Dipake
		public function addtim($idtim, $jobdesk, $nama, $deskripsi){
			
			$stmt = $this->conn->prepare("INSERT INTO `tbtim` ( `idtim`, `idjobdesk`, `namatim`, `deskripsi` ) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $idtim, $jobdesk, $nama, $deskripsi);
			$stmt->execute(); 
			return true;
		}

		// READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING
        
		
		
// HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA 
// HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA

		public function hapustim($idtim){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbtim where idtim = '$idtim'");
			mysqli_query($con ,"UPDATE tbpegawai SET `idtim` = '' WHERE `idtim` = '$idtim'");
		}

// Update data // Update data // Update data // Update data // Update data // Update data // Update data // Update data 
// Update data // Update data // Update data // Update data // Update data // Update data // Update data // Update data 

		public function updatetim($idpegawai, $idtim){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbpegawai set idtim ='$idtim'
			where idpegawai ='$idpegawai'");
			return $result;
		}
		
		public function keputusanwawancara($id, $status){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbpendaftar set status='$status' where idpendaftar='$id'");
			return $result;
		}

//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 
//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 

		public function countdatapelamar(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idpendaftar) as 'total' from tbpendaftar WHERE status = 'registrasi'");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

		public function countdatawawancara(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idpendaftar) as 'total' from tbpendaftar WHERE status = 'Terjadwal'");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

		public function countdatalowongan(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idlowongan) as 'total' from tblowonganpekerjaan");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

		public function countditerima(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idpendaftar) as 'total' from tbpendaftar WHERE status = 'diterima pekerjaan'");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

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