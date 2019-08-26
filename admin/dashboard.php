<?php  
  include 'header.php';
  $page= 'dashboard'; 
  include 'adminsidebar.php';
?>

  <!-- ======================CONTENT============================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel Admin HRD</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php $conn->countdatapelamar(); ?><sup style="font-size: 18px"> orang pendaftar</sup></h3>
              <p><small>Set jadwal wawancara untuk<br/> pendaftar baru!</small></p>
            </div>
            <div class="icon">
            <ion-icon style="margin-top:20px;" name="contacts"></ion-icon>
            </div>
            <a href="datapelamar.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php $conn->countdatawawancara(); ?><sup style="font-size: 18px"> orang terjadwal</sup></h3>

              <p>Yang menunggu jadwal<br> wawancara</p>
            </div>
            <div class="icon">
            <ion-icon style="margin-top:20px;" name="list-box"></ion-icon>
            </div>
            <a href="jadwalwawancara.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $conn->countditerima(); ?><sup style="font-size: 16px"> pegawai diterima</sup></h3>

              <p>Menunggu verifikasi <br> pengaktifan akun pegawai</p>
            </div>
            <div class="icon">
            <ion-icon style="margin-top:20px;" name="contact"></ion-icon>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $conn->counttidakditerima(); ?><sup style="font-size: 14px; margin-top:-50px;"> pegawai tidak diterima</sup></h3>
              <p>Hapus data yang <br>sudah tidak diperlukan</p>
            </div>
            <div class="icon">
            <ion-icon style="margin-top:20px;" name="close-circle"></ion-icon>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>