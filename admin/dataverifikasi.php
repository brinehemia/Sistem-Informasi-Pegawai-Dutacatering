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
          <h3 class="box-title">Daftar Verifikasi akun baru</h3>
        </div>
        
        <div class="box-body" >
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>username</th>
                  <th>password</th>
                  <th>Nama </th>
                  <th>Tanggal lahir</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No hp</th>
                  <th>Jenis Kelamin</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                
                  $read = $conn->readdataverifikasi();
				while($fetch = $read->fetch_array()){ 
                  // $decodepass = base64_decode($fetch['password']);
				    ?>
            
                <tr>
				    
					          <td><?php echo $fetch['username']?></td>
                    <td><?php echo $fetch['password']?></td>
                    <td><?php echo $fetch['namapegawai'] ?></td>
                    <td><?php echo $fetch['tanggallahir'] ?></td>
                    <td><?php echo $fetch['alamat'] ?></td>
                    <td><?php echo $fetch['email'] ?></td>
                    <td><?php echo $fetch['nohp'] ?></td>
                    <td><?php echo $fetch['jeniskelamin']?></td>
                    <td>
                        <a class="btn btn-danger" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idverifikasipelamar'];?>&action=delfadmin"><i class="fa fa-trash"></i></a> 
                        <a class="btn btn-primary" href="../controller/jobscontroller.php?postuser=<?php echo $fetch['idverifikasipelamar'];?>&action=pengaktifanakun&postiduser=<?php $conn->autocode_pegawai()?>&postidrekap=<?php $conn->autocode_rekappegawai()?>"><i style="width:12px;" class="fa fa-check-circle"></i>&nbsp&nbspAktifkan akun</a>
    
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
