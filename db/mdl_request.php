<?php
	require_once('../db/config.php');

	class mdlrequest extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
		
		public function autocode_reqpegawai(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idrequestpegawai),4) as kodeawal From requestpegawai");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 2);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "SRPGW000";
			}elseif ($kodetambah < 100) {
				$sub = "SRPGW00";
			}elseif ($kodetambah < 1000) {
				$sub = "SRPGW0";
			}elseif ($kodetambah < 10000) {
				$sub = "SRPGW";
			}
			echo $sub.$kodetambah;
		} 
		
		public function autocode_balasan(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idbalasanpengajuan),3) as kodeawal From tbbalasanpengajuan");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "PNK000";
			}elseif ($kodetambah < 100) {
				$sub = "PNKW00";
			}elseif ($kodetambah < 1000) {
				$sub = "PNK0";
			}elseif ($kodetambah < 10000) {
				$sub = "PNK";
			}
			echo $sub.$kodetambah;
		} 
	
        
        public function readrequest(){
			$con = $this->conn;
			$result = mysqli_query($con ,"SELECT * 
			FROM (requestpegawai
			INNER JOIN tbdivisi ON requestpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE statuspengajuan = 'Menunggu Keputusan'
			");
			return $result;
		}

		public function readrequestdone(){
			$con = $this->conn;
			$result = mysqli_query($con ,"SELECT * 
			FROM (requestpegawai
			INNER JOIN tbdivisi ON requestpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE statuspengajuan = 'Done' ORDER BY tanggal ASC
			");
			return $result;
		}

		public function readreqpenolakan($nomorsurat){
			$con = $this->conn;
			$result = mysqli_query($con ,"SELECT * 
			FROM ((tbbalasanpengajuan
			INNER JOIN requestpegawai ON tbbalasanpengajuan.idrequestpegawai = requestpegawai.idrequestpegawai)
			INNER JOIN tbdivisi ON requestpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE tbbalasanpengajuan.idrequestpegawai = '$nomorsurat'
			");
			return $result;
		}

		
		public function addreqpegawai($nomorsurat, $divisi, $namapekerjaan, $jumlah, $alasan, $syarat, $status){
			$stmt = $this->conn->prepare("INSERT INTO `requestpegawai` (`idrequestpegawai`, `Kodedivisi`, `namapekerjaan`, `jumlahdibutuhkan`, `alasan`, `syarat`, `statuspengajuan` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssssss", $nomorsurat, $divisi, $namapekerjaan, $jumlah, $alasan, $syarat, $status);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
		}
		
		public function balasanpenolakan($idbalasan, $idreqsurat, $isi){
			$stmt = $this->conn->prepare("INSERT INTO `tbbalasanpengajuan` (`idbalasanpengajuan`, `idrequestpegawai`, `isi` ) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $idbalasan, $idreqsurat, $isi);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
		
		public function readreq($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"SELECT * 
			FROM (requestpegawai 
			INNER JOIN tbdivisi ON requestpegawai.kodedivisi = tbdivisi.kodedivisi)
			where idrequestpegawai = '$postid'");
			return $result;
		}

		public function countdatapermohonan(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idrequestpegawai) as 'total' from requestpegawai WHERE statuspengajuan = 'Menunggu Keputusan'");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

		public function countdatadone(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idrequestpegawai) as 'total' from requestpegawai WHERE statuspengajuan = 'Done'");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

		public function updatepengajuan($idreqsurat, $Status, $Keputusan){
			$con = $this->conn;
			$result = mysqli_query($con,"UPDATE requestpegawai set statuspengajuan='$Status', keputusan='$Keputusan'
			WHERE idrequestpegawai='$idreqsurat'");
			return $result;
		}

	}	
?>