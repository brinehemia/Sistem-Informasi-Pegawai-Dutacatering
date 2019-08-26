<?php
	require_once('../db/config.php');

	class training extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

		// READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING
		
		public function readtraining(){
			$stmt = $this->conn->prepare("SELECT * FROM tbpegawai WHERE idstatuspegawai = 'STS04' ORDER BY idpegawai ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function readwawancara(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT tbwawancara.*, tbpenguji.*, tbpegawai.*, tbpendaftar.* 
			FROM tbwawancara, tbpenguji, tbpegawai, tbpendaftar
			WHERE tbwawancara.idpendaftar = tbpendaftar.idpendaftar
			AND tbwawancara.idpenguji = tbpenguji.idpenguji 
			AND tbpenguji.idpegawai = tbpegawai.idpegawai
			AND tbpendaftar.status = 'Terjadwal'
			AND tbwawancara.idwawancara is not null 
			");
			return $result;
		}

	}
?>