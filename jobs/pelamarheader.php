<?php 
session_start();
      // include '../db/ceklogin.php';
			if(isset($_SESSION['namapendaftar'])){
      $loginnama = $_SESSION['namapendaftar'];
      $loginid = $_SESSION['idpendaftar'];
      
}else{
	$loginnama = "";
}		
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Komaldev Indonesia | EZ TA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="../assets/image/favicon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/e3ec40cc39.js"></script>
  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
 
  <link rel="stylesheet" href="../assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
 <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/_all-skins.css">

  <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img height="40" src="../assets/image/favicon1.png"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img height="47" style="margin-bottom:25px; margin-left: 30px; "  src=""></span>
      <p></p>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/image/admin.jpg" class="user-image" alt="#">
              <span class="hidden-xs">
              	<!--sessions login-->
              	<?php
				echo "$loginnama";
   				?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/image/admin.jpg" class="img-circle" alt="#">
                <p>
                Halo, 
                <?php
				        echo "$loginnama";
   				      ?>
                  <small>No.pegawai : 
                    <?php 
                    
                    echo "$loginid";
                   
                     
                    
                    ?>
                  </small>
                </p>
              </li>
        
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../jobs/profile.php?iduser=<?php echo $loginid?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../controller/logController.php?action=logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>