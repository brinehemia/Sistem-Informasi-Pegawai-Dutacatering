<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "cateringbrian";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$link) {
	die("GAGAL KONEKSI".mysqli_connect_errno(). " - ". mysqli_connect_error() );
}else{
}

 ?>