<?php
	require_once('../db/config.php');

	class mdllog extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function log($action, $loginnama, $keterangan){
			$stmt = $this->conn->prepare("INSERT INTO `log` (`action`, `user`, `keterangan`) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $action, $loginnama, $keterangan);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function addpelamar($action, $loginnama, $keterangan){
			$stmt = $this->conn->prepare("INSERT INTO `log` (`action`, `user`, `keterangan`) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $action, $loginnama, $keterangan);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function readlog(){
			$stmt = $this->conn->prepare("SELECT * FROM `log` ORDER BY `idlog` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
	}	
?>