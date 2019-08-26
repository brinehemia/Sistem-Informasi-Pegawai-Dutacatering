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
                  <th>Id Daftar</th>
                  <th>Nama</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th >Alamat</th>
                  <th>No Telp</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  $read = $conn->readpelamar();
					        while($fetch = $read->fetch_array()){ 
                   
                  
                  $decodenama = base64_decode($fetch['namapelamar']);
                  $decodenotelp = base64_decode($fetch['no_telp']);
                  $decodepass = base64_decode($fetch['password']);
				        ?>
            
                <tr>
                  <td><?php echo $fetch['idpendaftar'];?></td>
						      <td><?php echo $decodenama?></td>
                  <td><?php echo $decodepass?></td>
						      <td><?php echo $fetch['email']?></td>
                  <td><?php echo $fetch['alamat']?></td>
                  <td><?php echo $decodenotelp ?></td>
                  <td><?php echo $fetch['jenis_kelamin']?></td>
                  <td><a class="btn btn-success"><?php echo $fetch['status']?></a></td>
                  <td>
                    <a class="btn btn-danger" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idpendaftar'];?>&action=delfadmin"><i class="fa fa-trash"></i></a> 
                    <a class="btn btn-info" href="editpelamar.php?postid=<?php echo $fetch['idpendaftar']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>

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
        <a class="btn bg-olive" type="button" onclick="location.href='../laporan/laporandatapelamar.php'">Laporan Penerimaan Pegawai</a>
        <a class="btn btn-primary" href="formjob.php"><i style="width:12px;" class="fa fa-file-o"></i> form pendaftaran</a>
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
