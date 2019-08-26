<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
	<h1>ini halaman admin </h1>
<p>halo world, <?php session_start(); echo $_SESSION['nama']; ?> </p>
<button onclick="<?php session_destroy();?>">coba</button>
</body>
</html>