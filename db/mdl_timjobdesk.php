<?php
	require_once('../db/config.php');

	class timjobdesk extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

		// READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING
		
		public function readtim(){
			$stmt = $this->conn->prepare("SELECT * FROM tim ORDER BY idtim ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
        
        public function readtim1(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT tbtim.*, tbjobdesk.* 
			FROM tbtim, tbjobdesk
			WHERE tbtim.idjobdesk = tbjobdesk.idjobdesk
			AND tbtim.idtim is not null 
			");
			return $result;
		}




	}
?>