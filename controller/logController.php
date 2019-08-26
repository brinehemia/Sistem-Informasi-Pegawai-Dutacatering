<?php
	require_once '../db/mdl_log.php';
    $conn = new mdllog();

    $aksi = $_GET['action'];
	if($aksi == "logout"){
        session_start();
        $loginnama = $_SESSION['nama'];	
		$action = "Logout";
		$keterangan = "";
        $conn->Log($action, $loginnama, $keterangan);
        session_destroy();
        header('location: ../login.html');
    }
      
?>