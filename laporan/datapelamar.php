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
          <h3 class="box-title">Laporan Data pelamar</h3>
        </div>

        <div class="box-body" >

           <table  id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No. HP</th>
                  <th>Skill</th>
                  <th>Pengalaman</th>
                  <th>Lowongan dilamar</th>
                  <th>Tanggal daftar</th>
               
                </tr>
                </thead>
                <tbody>
                
                <?php
                require('../db/mdl_laporan.php');
                $consaja = new mdllaporan();
                $read = $consaja->laporanpelamar();    
					      while($fetch = $read->fetch_array()){ 
                  $decodenotelp = base64_decode($fetch['no_telp']);
                  $decodenamapelamar = base64_decode($fetch['namapelamar']);
				        ?>

                <tr>
				        <td><?php echo $decodenamapelamar?></td>
                <td><?php echo $fetch['alamat']?></td>
                <td><?php echo $fetch['email']?></td>
                <td><?php echo $decodenotelp?></td>
                <td><?php echo $fetch['skill']?></td> 
                <td><?php echo $fetch['pengalamankerja']?></td>                  
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
              <b><p align="center" class="pull-right">Mengetahui,</b><br>
              Ketua Divisi Kepegawaian</p>
              <br><br><br><br><br>
              <p align="center" class="pull-right">(..........................................)</p>
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

<!-- <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'scrollX'     : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script> -->


 