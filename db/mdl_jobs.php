<?php
	require_once('../db/config.php');

	class mdljobs extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}
 
		public function create($nama, $email,  $password, $notelp){
			$encodenama = base64_encode($nama);
			$stmt = $this->conn->prepare("INSERT INTO `tbpendaftar` (`nama`, `email`, `password`, `no_telp`) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $encodenama, $email,  $password, $notelp);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
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

		public function autocode_lowongan(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idlowongan),2) as kodeawal From tblowonganpekerjaan");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "LW000";
			}elseif ($kodetambah < 100) {
				$sub = "LW00";
			}elseif ($kodetambah < 1000) {
				$sub = "LW0";
			}elseif ($kodetambah < 10000) {
				$sub = "LW";
			}
			echo $sub.$kodetambah;
		} 

		

		public function autocode_pegawai(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idpegawai),3) as kodeawal From tbpegawai");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "PGW000";
			}elseif ($kodetambah < 100) {
				$sub = "PGW00";
			}elseif ($kodetambah < 1000) {
				$sub = "PGW0";
			}elseif ($kodetambah < 10000) {
				$sub = "PGW";
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

		public function autocode_penguji(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idpenguji),3) as kodeawal From tbpenguji");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "PGJ00";
			}elseif ($kodetambah < 100) {
				$sub = "PGJ0";
			}elseif ($kodetambah < 1000) {
				$sub = "PGJ";
			}
			echo $sub.$kodetambah;
		} 

		public function autocode_wawancara(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idwawancara),3) as kodeawal From tbwawancara");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "WCR00";
			}elseif ($kodetambah < 100) {
				$sub = "WCR0";
			}elseif ($kodetambah < 1000) {
				$sub = "WCR";
			}
			echo $sub.$kodetambah;
		} 

		public function auto_trainingtime(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(idwawancara),4) as kodeawal From tbwawancara");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "TRNG00";
			}elseif ($kodetambah < 100) {
				$sub = "TRNG0";
			}elseif ($kodetambah < 1000) {
				$sub = "TRNG";
			}
			echo $sub.$kodetambah;
		} 



		// END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE // END AUTO CODE

		public function addlamaran($idlowongan, $nama, $keterangan, $jumlah, $syarat, $kodedivisi){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tblowonganpekerjaan` ( `idlowongan`, `namalowongan`, `deskripsipekerjaan`, `jumlah`, `syarat`, `kodedivisi` ) 
            VALUES (?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssss", $idlowongan, $nama, $keterangan, $jumlah, $syarat, $kodedivisi);
			$stmt->execute(); 
			return true;
		}

		public function addfadminlamaran($idpendaftar, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin, $idcv, $idlow, $tgl, $status, $idcv1, $pendidikan, $skill, $pengalaman, $tentangdiri, $alasan){
			//encrypt
			$encodenama = base64_encode($nama);
			$encodepass = base64_encode($password);	
			$encodenotelp = base64_encode($notelp);	

			$stmt1 = $this->conn->prepare("INSERT INTO `tbcv` ( `idcv`,`pendidikan`, `skill`, `pengalamankerja`, `tentangdiri`, `alasan` ) 
            VALUES (?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt1->bind_param("ssssss", $idcv1, $pendidikan, $skill, $pengalaman, $tentangdiri, $alasan);
			$stmt1->execute();

			$stmt = $this->conn->prepare("INSERT INTO `tbpendaftar` (`idpendaftar`, `namapelamar`, `email`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `usia`, `no_telp`, `jenis_kelamin`, `idcv`, `idlowongan`, `tanggaldaftar`, `status` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssssss", $idpendaftar, $encodenama, $email, $encodepass, $alamat, $tempatlahir, $tanggallahir, $usia, $encodenotelp, $jeniskelamin, $idcv, $idlow, $tgl, $status);
			$stmt->execute();
		}




		// DATA VERIFIKASI PEGAWAI
		public function addpengaktifan($idpegawai, $username,  $password, $nama, $email, $alamat, $tanggallahir, $jenkel, $nohp, $tanggalaktifkerja, $level, $idstatus){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tbpegawai` ( `idpegawai`, `username`, `password`, `namapegawai`, `email`, `alamat`, `tanggallahir`, `jeniskelamin`, `nohp`, `tanggalaktifkerja`, `level`, `idstatuspegawai` ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssssss", $idpegawai, $username,  $password, $nama, $email, $alamat, $tanggallahir, $jenkel, $nohp, $tanggalaktifkerja, $level, $idstatus);
			$stmt->execute(); 
			return true;
		}

		public function addrekapnilai($idrekappegawai, $idpegawai){
			//encrypt
	
			$stmt = $this->conn->prepare("INSERT INTO `tbrekappenilaian` ( `idrekappenilaian`, `idpegawai` ) 
            VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ss", $idrekappegawai, $idpegawai);
			$stmt->execute(); 
			return true;
		}

		// END DATA VERIFIKASI PEGAWAI// END DATA VERIFIKASI PEGAWAI// END DATA VERIFIKASI PEGAWAI// END DATA VERIFIKASI PEGAWAI
		// END DATA VERIFIKASI PEGAWAI// END DATA VERIFIKASI PEGAWAI// END DATA VERIFIKASI PEGAWAI// END DATA VERIFIKASI PEGAWAI




		public function addpenguji($idpenguji, $idpegawai){
			//encrypt
			$stmt = $this->conn->prepare("INSERT INTO `tbpenguji` ( `idpenguji`, `idpegawai` ) 
            VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ss", $idpenguji, $idpegawai);
			$stmt->execute(); 
			return true;
		}

		public function addwawancara($idwawancara, $idpendaftar, $idpenguji, $tgl, $jam,  $keterangan){
			//encrypt
			$stmt = $this->conn->prepare("INSERT INTO `tbwawancara` ( `idwawancara`, `idpendaftar`, `idpenguji`, `tgl_wawancara`, `jam`, `keterangan` ) 
            VALUES (?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssss", $idwawancara, $idpendaftar, $idpenguji, $tgl, $jam,  $keterangan);
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
		
		public function readpelamar(){
			$stmt = $this->conn->prepare("SELECT * FROM tbpendaftar ORDER BY idpendaftar ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function readpegawai(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT * 
			FROM ((tbpegawai
			INNER JOIN tbdivisi ON tbpegawai.kodedivisi = tbdivisi.kodedivisi)
			INNER JOIN tbstatuspegawai ON tbpegawai.idstatuspegawai = tbstatuspegawai.idstatuspegawai)
			WHERE tbpegawai.idpegawai IS NOT NULL
			
			");
			return $result;
		}

		public function readlowongan(){
			$stmt = $this->conn->prepare("SELECT * FROM `tblowonganpekerjaan` ") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		public function readeditlowongan($idlowongan){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT * 
			FROM (tblowonganpekerjaan
			INNER JOIN tbdivisi ON tblowonganpekerjaan.kodedivisi = tbdivisi.kodedivisi)
			WHERE tblowonganpekerjaan.idlowongan = '$idlowongan'
			
			");
			return $result;
		}

		public function readreqpegawai($nomorsurat){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT * 
			FROM (requestpegawai
			INNER JOIN tbdivisi ON requestpegawai.kodedivisi = tbdivisi.kodedivisi)
			WHERE requestpegawai.idrequestpegawai = '$nomorsurat';
			
			");
			return $result;
		}

		public function readdivisi(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT * FROM tbdivisi");
			return $result;
		}

		public function readpenjadwalan(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM (tbpendaftar
			INNER JOIN tblowonganpekerjaan ON tbpendaftar.idlowongan = tblowonganpekerjaan.idlowongan)
			WHERE tbpendaftar.idpendaftar is not null 
			AND tbpendaftar.status = 'registrasi'
			");
			return $result;
		}

		public function readpenguji(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM (tbpenguji
			INNER JOIN tbpegawai ON tbpenguji.idpegawai = tbpegawai.idpegawai)
			WHERE tbpenguji.idpenguji is not null
			");
			return $result;
		}

		public function readpenilaianpelamar($idwawancara){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT *
			FROM tbpenilaianpelamar
			WHERE idwawancara = '$idwawancara'
			");
			return $result;
		}
		

		public function readwawancara(){
			$con = $this->conn;
			$result = mysqli_query($con , "SELECT tbwawancara.*, tbpenguji.*, tbpegawai.*, tbpendaftar.*, tblowonganpekerjaan.*
			FROM tbwawancara, tbpenguji, tbpegawai, tbpendaftar, tblowonganpekerjaan
			WHERE tbwawancara.idpendaftar = tbpendaftar.idpendaftar
			AND tbwawancara.idpenguji = tbpenguji.idpenguji 
			AND tbpenguji.idpegawai = tbpegawai.idpegawai
			AND tbpendaftar.status = 'Terjadwal'
			AND tbpendaftar.idlowongan = tblowonganpekerjaan.idlowongan
			AND tbwawancara.idwawancara is not null 
			");
			return $result;
		}

		// dipake
		public function readpengaktifan($iduser){
			$stmt = $this->conn->prepare("SELECT * FROM tbverifikasipegawai WHERE idverifikasipelamar = '$iduser' ") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		// dipake
		public function readdataverifikasi(){
			$stmt = $this->conn->prepare("SELECT * FROM tbverifikasipegawai ORDER BY idverifikasipelamar ASC ") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function readverifikasiakun(){
			$stmt = $this->conn->prepare("SELECT * FROM tbpendaftar WHERE status = 'diterima pekerjaan'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}
		
// HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA 
// HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA // HAPUS DATA

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbpendaftar where idpendaftar = '$postid'");
		}

		public function deletelowongan($idlowongan){
			$con = $this->conn;
			mysqli_query($con ,"delete from tblowonganpekerjaan where idlowongan = '$idlowongan'");
		}

		public function hapusdataverifikasi($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbverifikasipegawai where idverifikasipelamar = '$postid'");
		}

		public function veditpelamar($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbpendaftar where idpendaftar = '$postid'");
			return $result;
		}
		

// UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE
// UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE // UPDATE

		public function update($id, $nama, $email, $password, $alamat, $tempatlahir, $tanggallahir, $usia, $notelp, $jeniskelamin){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbpendaftar set nama='$nama', email='$email', password='$password', alamat='$alamat', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir', usia='$usia', no_telp='$notelp', jenis_kelamin='$jeniskelamin'
			where idpendaftar='$id'");
			return $result;
		}

		public function updatelowongan($idlowongan, $nama, $keterangan, $jumlah, $syarat){
			$con = $this->conn;
			$result = mysqli_query($con,"update tblowonganpekerjaan set namalowongan='$nama', deskripsipekerjaan='$keterangan', jumlah='$jumlah', syarat='$syarat'
			where idlowongan='$idlowongan'");
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

		public function countmail(){
			$con = $this->conn;
			$coba = mysqli_query($con, "SELECT COUNT(idrequestpegawai) as 'total' from requestpegawai 
			WHERE statuspengajuan = 'Menunggu Keputusan'
			");
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