<?php
	require_once('../db/config.php');

	class penilaian extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

		public function autocode_penilaianpegawai(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idpenilaianpegawai),3) as kodeawal From tbpenilaianpegawai");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "PNP000";
			}elseif($kodetambah < 100){
				$sub = "PNP00";
			}elseif ($kodetambah < 1000) {
				$sub = "PNP0";
			}elseif ($kodetambah < 10000) {
				$sub = "PNP";
			}
			echo $sub.$kodetambah;
		}

		public function autocode_rekappegawai(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idrekappenilaian),3) as kodeawal From tbrekappenilaian");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "RKP000";
			}elseif ($kodetambah < 100) {
				$sub = "RKP00";
			}elseif ($kodetambah < 1000) {
				$sub = "RKP0";
			}elseif ($kodetambah < 10000) {
				$sub = "RKP";
			}
			echo $sub.$kodetambah;
		} 



		// input	// input	// input	// input	// input	// input	// input	// input	// input

		public function addpenilaianpegawai($idpenilaianpegawai,  $idpegawai, $keterangan, $keaktifan, $ketepatanwaktu, $kesalahan, $perilaku, $kebersihan, $kualitashasil, $absensi, $inisiatif, $kerjasama, $pengetahuan, $nilaikeaktifan, $nilaiketepatanwaktu, $nilaikesalahan, $nilaiperilaku, $nilaikebersihan, $nilaikualitashasil, $nilaiabsensi, $nilaiinisiatif, $nilaikerjasama, $nilaipengetahuan, $hasilpenilaian, $idbulan, $idtahun){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tbpenilaianpegawai` (`idpenilaianpegawai`, `idpegawai`,`keterangan`, `keaktifan`, `ketepatanwaktu`, `kesalahankerja`, `perilaku`, `kebersihan`, `kualitashasil`, `absensi`, `inisiatif`, `kerjasama`,`pengetahuan` , `nilai_keaktifan`, `nilai_ketepatanwaktu`, `nilai_kesalahankerja`, `nilai_perilaku` , `nilai_kebersihan`, `nilai_kualitashasil`, `nilai_absensi`, `nilai_inisiatif`, `nilai_kerjasama`, `nilai_pengetahuan`, `jumlahnilai`, `idbulan`, `idtahun` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssssssssssssssssss", $idpenilaianpegawai, $idpegawai, $keterangan, $keaktifan, $ketepatanwaktu, $kesalahan, $perilaku, $kebersihan, $kualitashasil, $absensi, $inisiatif, $kerjasama, $pengetahuan, $nilaikeaktifan, $nilaiketepatanwaktu, $nilaikesalahan, $nilaiperilaku, $nilaikebersihan, $nilaikualitashasil, $nilaiabsensi, $nilaiinisiatif, $nilaikerjasama, $nilaipengetahuan, $hasilpenilaian, $idbulan, $idtahun);
			$stmt->execute(); 
			return true;
		}

		public function adddatarekappenilaian($idrekap, $idpegawai, $totalskor, $idtahun){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tbrekappenilaian` (`idrekappenilaian`, `idpegawai`, `totalskor`, `idtahun`) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $idrekap, $idpegawai, $totalskor, $idtahun);
			$stmt->execute(); 
			return true;
		}

		


		// READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING  // READ DISINI NJING
		
		public function readpenilaian(){
			$stmt = $this->conn->prepare("SELECT * FROM tbpegawai ORDER BY idtim ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
        
        public function readpenilaian1(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT tbpegawai.*, tbdivisi.* 
			FROM tbpegawai, tbdivisi
			WHERE tbpegawai.kodedivisi = tbdivisi.kodedivisi
			AND tbpegawai.kodedivisi is not null 
			");
			return $result;
		}

		public function readpegawai($idpegawai){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT * 
			FROM (tbpegawai
			INNER JOIN tbdivisi ON tbpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE tbpegawai.idpegawai = '$idpegawai'
			");
			return $result;
		}

		public function dropdownpegawai(){
			$con = $this->conn;
			
			$result = mysqli_query($con , "SELECT DISTINCT tbpenilaianpegawai.idpegawai, tbpenilaianpegawai.idtahun , tbpegawai.namapegawai, tbtahun.namatahun
			FROM ((tbpenilaianpegawai 
			INNER JOIN tbpegawai ON tbpenilaianpegawai.idpegawai = tbpegawai.idpegawai)
			INNER JOIN tbtahun ON tbpenilaianpegawai.idtahun = tbtahun.idtahun)
			WHERE tbpenilaianpegawai.idpegawai IS NOT NULL 
			AND NOT EXISTS (SELECT * FROM tbrekappenilaian WHERE tbpenilaianpegawai.idpegawai = tbrekappenilaian.idpegawai AND tbpenilaianpegawai.idtahun = tbrekappenilaian.idtahun)
			");	
			return $result;
		}
	
// READ UNTUK REKAP PENILAIAN PEGAWAI
		public function readrekappenilaian(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT * 
			FROM ((tbrekappenilaian
			INNER JOIN tbpegawai ON tbrekappenilaian.idpegawai = tbpegawai.idpegawai)
			INNER JOIN tbtahun ON tbrekappenilaian.idtahun = tbtahun.idtahun)
			WHERE tbrekappenilaian.idrekappenilaian is not null 
			ORDER BY totalskor DESC, namatahun DESC
			");
			return $result;
		}

		public function hitungrekappenilaian($idpegawai, $idtahun){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT SUM(jumlahnilai) AS totalrekap FROM tbpenilaianpegawai WHERE idpegawai = '$idpegawai' AND idtahun = '$idtahun'
			");

			return $result;
			
		}

		public function updaterekapdata($idrekap, $totalskor){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbrekappenilaian set totalskor='$totalskor' where idrekappenilaian='$idrekap'");
			return $result;
		}

		public function readbulan(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT * FROM tbbulan");
			return $result;
		}

		public function readtahun(){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT * FROM tbtahun");
			return $result;
		}

		public function readprestasi($tahunini){
            $con = $this->conn;
			$result = mysqli_query($con , "SELECT *, DATEDIFF(NOW(), tbpegawai.tanggalaktifkerja) AS jumlahhari  
			FROM ((tbrekappenilaian 
			INNER JOIN tbpegawai ON tbrekappenilaian.idpegawai = tbpegawai.idpegawai)
			INNER JOIN tbdivisi ON tbpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE idtahun = '$tahunini' HAVING totalskor > 200 AND jumlahhari > 350
			ORDER BY totalskor DESC LIMIT 50
			
			");
			return $result;
		}

		
		
	}
?>