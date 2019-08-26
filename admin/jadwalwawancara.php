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
                  <th>Nama pelamar</th>
                  <th>Nama penguji</th>
                  <th>Lowongan dilamar</th>
                  <th>tanggal & jam wawancara</th>
                  <th>Status</th>
                  <th>Action</th>
               
                </tr>
                </thead>
                <tbody>
                
                <?php
                $read = $conn->readwawancara();
				        while($fetch = $read->fetch_array()){ 
                  // $decodepass = base64_decode($fetch['password']);
				    ?>
            
                <tr>
				            <td><?php echo base64_decode($fetch['namapelamar'])?></td>
				            <td><?php echo $fetch['namapegawai']?></td>
                    <td><?php echo $fetch['namalowongan']?></td>
                    <td><a class="btn-sm btn-primary"><?php echo date('d F Y', strtotime($fetch['tgl_wawancara'])) ?></a>&nbsp & &nbsp
                        <a class="btn-sm btn-primary"><?php echo date('G:i', strtotime($fetch['jam'])) ?>  <b>WIB</b></a></td>
                    <td><a class="btn btn-success"><?php echo $fetch['status']?></a></td>
                    <td>
                        <a class="btn btn-danger" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idpendaftar'];?>&action=delfadmin"><i class="fa fa-trash"></i></a> 
                        <a class="btn btn-primary" href="editpelamar.php?postid=<?php echo $fetch['idpendaftar']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>
                        <a class="btn btn-success" href="../wawancara/room.php?iduser=<?php echo $fetch['idpendaftar'];?>"><i style="width:12px;" class="fa fa-video-camera"></i>&nbsp&nbspUji Sekarang</a>
                        
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
        <a class="btn btn-primary" href="penjadwalantest.php"><i style="width:12px;" class="fa fa-table"></i>&nbsp Set jadwal lainnya</a>
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
