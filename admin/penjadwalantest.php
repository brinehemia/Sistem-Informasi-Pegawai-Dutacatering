<?php 
include 'header.php';
$page= 'hiringjob';
include 'adminsidebar.php';
?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Calon Pelamar</h3>
        </div>
        
        <div class="box-body" >
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Pendaftaran</th>
                  <th>Nama</th>
                  
                  <th>Lowongan dilamar</th>
                  <th>No Telp</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  $read = $conn->readpenjadwalan();
					        while($fetch = $read->fetch_array()){ 
                   
                  
                  $decodenama = base64_decode($fetch['namapelamar']);
                  $decodenotelp = base64_decode($fetch['no_telp']);
                  $decodepass = base64_decode($fetch['password']);
				        ?>
            
                <tr>
                  <td><?php echo $fetch['idpendaftar'];?></td>
				  <td><?php echo $decodenama?></td>
                 
				
                <td><?php echo $fetch['namalowongan']?></td>
                  <td><?php echo $decodenotelp ?></td>
                  <td><?php echo $fetch['jenis_kelamin']?></td>
                  <td><a class="btn btn-warning bg-orange"><i style="width:12px;" class="fa fa-close"></i>&nbspBelum terjadwal</a></td>
                  <td>
                    <a class="btn btn-success " style="font-size:14px;" href="formwawancara.php?postid=<?php echo $fetch['idpendaftar']; ?>"><i style="width:12px;" class="fa fa-calendar"></i>&nbspJadwalkan</a>

                 </td>
					      </tr>
                <?php
					      }
				        ?>
                </tbody>
              </table>
            
            </div>
        <!-- /.box-body -->
       

        <div class="box-footer">
       
        <a class="btn btn-primary" href="jadwalwawancara.php"><i style="width:12px;" class="fa fa-copy"></i>&nbsp&nbspData Jadwal wawancara</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
include 'footer.php';
 ?>

<script>
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
</script>
