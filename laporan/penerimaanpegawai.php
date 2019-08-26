<?php 
include '../admin/header.php';
$page= 'hiringjob';
include '../admin/adminsidebar.php';

?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <br/>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Penerimaan Pegawai</h3>
        </div>

        <div class="box-body" >

           <table  id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama calon pegawai</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No. HP</th>
                  <th>jadwal wawancara</th>
                  <th>Dinyatakan</th>
                  <th>Lowongan dilamar</th>
                  <th>Tanggal daftar</th>
               
                </tr>
                </thead>
                <tbody>
                
                <?php
                require('../db/mdl_laporan.php');
                $consaja = new mdllaporan();
                $read = $consaja->laporanpenerimaan();    
					      while($fetch = $read->fetch_array()){ 
                  $decodenotelp = base64_decode($fetch['no_telp']);
                  $decodenamapelamar = base64_decode($fetch['namapelamar']);
				        ?>

                <tr>
				          <td><?php echo $decodenamapelamar?></td>
                  <td><?php echo $fetch['alamat']?></td>
                  <td><?php echo $fetch['email']?></td>
                  <td><?php echo $decodenotelp?></td>
                  <td><?php echo $fetch['tgl_wawancara']?></td> 
                  <td><?php echo $fetch['status']?></td>                  
                  <td><?php echo $fetch['namalowongan'] ?></td>
                  <td><?php echo $fetch['tanggaldaftar'] ?></td>
					      </tr>
                <?php
					          }
				        ?>
                </tbody>
              </table>
            

              <br/>
              <br/>
              <p class="pull-left"><?php echo date('l, d F Y') ?> </p><br><br>
              <b><p style="margin-left:5px; margin-top:-17px;" align="center"  class="pull-left">Mengetahui,</b><br>Manajer catering mentari</p>    <b><p style="margin-top:-17px;" align="center" class="pull-right">Mengetahui,</b><br>Ketua Divisi Kepegawaian</p>
              <br><br><br><br>
              <p align="center" class="pull-left">(..........................................)</p>      <p align="center" class="pull-right">(..........................................)</p>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
        
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include '../admin/footer.php';
 ?>


 