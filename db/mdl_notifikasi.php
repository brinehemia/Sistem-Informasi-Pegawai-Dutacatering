<?php
	require_once('../db/config.php');

	class mdljobs extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 
//COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF //COUNT GAWE NOTIF 

		public function countdatapelamar(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idpendaftar) as 'total' from tbpendaftar");
			$data=mysqli_fetch_assoc($coba);
			echo $data['total'];
		}

		public function countjadwal(){
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

		public function countpengaktifanakun(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idverifikasipelamar) as 'total' from tbverifikasipegawai ");
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