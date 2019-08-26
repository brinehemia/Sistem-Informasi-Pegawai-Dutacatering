<?php 
include 'header.php';
$page= 'kepegawaian';
$subpage= 'training';
include 'adminsidebar.php';
?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Training Pegawai
        <small></small>
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
          <h3 class="box-title">Daftar Training Pegawai Baru</h3>
        </div>
        
        <div class="box-body" >
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Pegawai</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th >Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>No hp</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                 require '../db/mdl_training.php';
                 $conn = new training();
                $read = $conn->readtraining();
					        while($fetch = $read->fetch_array()){ 
				        ?>
            
                <tr>
                    <td><?php echo $fetch['namapegawai'];?></td>
                    <td><?php echo $fetch['email']?></td>
                    <td><?php echo $fetch['username'];?></td>
					          <td><?php echo $fetch['alamat']?></td>
                    <td><?php echo $fetch['jeniskelamin']?></td>
                    <td><?php echo $fetch['nohp']?></td>
                    <td>Training</td>
                  <td>
                    <a class="btn btn-danger" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idpendaftar'];?>&action=delfadmin"><i class="fa fa-trash"></i></a> 
                    <a class="btn btn-primary" href="#"><i style="width:12px;" class="fa fa-search"></i></a>
                    

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
        <a class="btn bg-olive" type="button" onclick="location.href='#'"><i style="width:12px;" class="fa fa-file-o"></i>  Pembagian Jobdesk</a>
        <a class="btn btn-primary" href="#"><i style="width:12px;" class="fa fa-file-o"></i>  Pembagian tim</a>
        <a class="btn btn-info" type="button" onclick="location.href='#'"><i style="width:12px;" class="fa fa-file-o"></i>  Penilaian Dari HRD</a>
        <a class="btn btn-warning bg-orange" href="#"><i style="width:12px;" class="fa fa-file-o"></i>  Penilaian Dari PJ</a>
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
