<?php 
	include 'koneksi.php';
	if (isset($_POST['log'])) {
		// iki                                         POST IKI PODO AMBEK <INPUT NAME="username"> NENG file login.html line 40 neng folder joboh DA
		$user = mysqli_real_escape_string($link, $_POST['username']);
		$pass = mysqli_real_escape_string($link, $_POST['password']); // IKI PISAN podo neng file login.html line 44
		$encodepass = base64_encode($pass); 
		$action = "Login"; // IKI NGK USAH
		$keterangan = ""; // IKI NGK USAH

		$query = mysqli_query($link, "SELECT * FROM tbpegawai 
		WHERE username='$user' OR email='$user' AND password='$pass'"); // Iki GAWE JUPUK NENG TABEL usermu & Neng tabelmu kudu enek field jenenge level

		$query2 = mysqli_query($link, "SELECT * FROM tbpendaftar 
		WHERE email='$user' AND password='$encodepass'"); // IKI NGK USAH

		//link log login
		$query1 = mysqli_query($link, "INSERT INTO `log` ( `user`, `action`, `keterangan` ) 
		VALUES ( '$user', '$action','$keterangan')");
		
		$data = mysqli_fetch_array($query);
		$datapendaftar = mysqli_fetch_array($query2);
		$username = $data['username'];
		$namapegawai = $data['namapegawai'];
		$password = $data['password'];
		$email = $data['email'];
		$level = $data['level']; // IKI WAJIB DA Seng jero petik, PODO NO AMBEK Jeneng field mu neng tabel database
		$idpegawai = $data['idpegawai'];
		$kodedivisi = $data['kodedivisi'];

		$emailpendaftar = $datapendaftar['email'];
		//  $decodepass = base64_decode($fetch['password']);
		$passpendaftar = $datapendaftar['password'];
		$namapendaftar = $datapendaftar['namapelamar'];
		$levelpendaftar = $datapendaftar['level'];
		$idpendaftar = $datapendaftar['idpendaftar'];

		if (($user==$username || $user==$email) && $pass==$password || $user==$emailpendaftar && $encodepass==$passpendaftar) {

			if ($level === 'admin') { // IKI JERO PETIK SESUAI NO KARO SENG ONOK NENG FIELD LEVEL MU NENG DB, MISAL JENENG LEVEL MU
				session_start();
				$_SESSION['nama'] = $namapegawai;
				$_SESSION['level'] = $level;
				$_SESSION['idpegawai'] = $idpegawai;
				$_SESSION['kodedivisi'] = $kodedivisi;
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../admin/dashboard.php'>"; // URL = ISI EN  
				
			}elseif ($level === 'Pegawai') { // IKI JERO PETIK SESUAI NO KARO SENG ONOK NENG FIELD LEVEL MU NENG DB Tapi Seng bedo karo dukur
				session_start();
				$_SESSION['nama'] = $namapegawai;
				$_SESSION['level'] = $level;
				$_SESSION['idpegawai'] = $idpegawai;
				$_SESSION['kodedivisi'] = $kodedivisi;
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../pegawai/index.php'>";
				
			}elseif ($levelpendaftar === 'pelamar') { // IKI PODO TAPI GAWE USER ke 3 Nek enek, Nek ngk enek hapus en
				session_start();
				$_SESSION['namapendaftar'] = $namapendaftar;
				$_SESSION['level'] = $levelpendaftar;
				$_SESSION['idpendaftar'] = $idpendaftar;
				echo "<script> alert('Anda login sebagai $levelpendaftar'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../jobs/index.php?iduser=$idpendaftar'>";
			} // SAMPEK KENE HAPUS E
		}
		else {
			echo "<script> alert('username atau password salah'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=../login.html'>";// iki balek neng halaman login mu
			}
			
		
		
				
	}

 ?>