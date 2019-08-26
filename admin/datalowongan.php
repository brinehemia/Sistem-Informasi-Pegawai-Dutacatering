<?php 
include 'header.php';
$page= 'hiringjob';
$subpage = 'datapenerimaan';
include 'adminsidebar.php';
?>
 <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
                  <th>kode Lowongan dibuka</th>
                  <th>Lowongan dibuka</th>
                  <th>Keterangan</th>
                  <th >Jumlah</th>
                  <th>syarat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                $read = $conn->readlowongan();
				        while($fetch = $read->fetch_array()){ 
				        ?>
            
                <tr>
                <td><?php echo $fetch['idlowongan']?></td>
                <td><?php echo $fetch['namalowongan']?></td>
                <td><?php echo $fetch['deskripsipekerjaan']?></td>
                <td><?php echo $fetch['jumlah']?> orang</td>
                <td><?php echo $fetch['syarat']?></td>
               
                <td>
                  <a class="btn btn-danger" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idlowongan'];?>&action=dellowongan"><i class="fa fa-trash"></i></a> 
                  <?php $idlowongan = $fetch['idlowongan'] ?>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-default<?php echo $idlowongan; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>
                 
                </td>
                </tr>
                <?php
                  $hasil = $conn->readeditlowongan($idlowongan);
                  $datalow = mysqli_fetch_array($hasil); 
                ?>


        <!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT -->
        <!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT -->
                  
                  
                <div class="modal fade" id="modal-default<?php echo $idlowongan; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><img width="170px" src="../assets/image/mankepblack.png"><b>&nbsp&nbsp&nbspEdit Data Lowongan Pekerjaan</b> </h4>
              </div>
              <div class="modal-body">
              <form action="../controller/jobscontroller.php?action=updatelowongan" Method="POST">
                <input name="editidauto" type="hidden" value="<?php echo $idlowongan ?>" readonly>
                
                <small><label class="pull-right" for="fornama">No lowongan: <?php echo $datalow['idlowongan'] ?></label></small><br>
                    <label for="fornama">Nama Pekerjaan:</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-list"></i></span>
                        <input value="<?php echo $datalow['namalowongan'] ?>" name="editnama" type="text" class="form-control" id="fornama" placeholder="lowongan yang akan dibuka">
                    </div>

                    <label for="forpassword">Jumlah:</label><small>   <a color="red">*)</a> Masukkan angka lowongan yang dibutuhkan</small>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input value=" <?php echo $datalow['jumlah'] ?>" name="editjumlah" type="text" style="width:100px;" class="form-control" id="forpassword" placeholder="Jumlah kuota"> 
                        <input readonly value="Divisi <?php echo $datalow['namadivisi'] ?>" type="text" style="width:200px;" class="form-control"  >  
                   </div>


                    <label for="forpassword">Syarat dibutuhkan:</label>
                   <div class="form-group input-group">
                        <textarea name="editsyarat" style="resize: none;" cols="120" rows="6" type="text" class="compose-textarea form-control" id="" ><?php echo $datalow['syarat'] ?></textarea>
                    </div>

                    <label for="forket">Deskripsi pekerjaan</label> <small>  *) Masukkan Keterangan singkat tentang lowongan terkait</small>
                    <div class="form-group input-group">
                        
                      <textarea name="editketerangan" style="resize: none;" cols="125" rows="6"  class="form-control" id="forket" ><?php echo $datalow['deskripsipekerjaan'] ?></textarea>
                    </div>

              
              
              </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan Edit</button>
                <button type="button" class="btn btn-warning pull-right" data-dismiss="modal">Tutup</button>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
 <!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT -->
        <!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT --><!-- INI MODAL EDIT -->

                <?php
					          }
				        ?>
                </tbody>
              </table>
            
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <a class="btn bg-olive" type="button" onclick="location.href='../laporan/laporandatapelamar.php'">Laporan pembukaan lowongan pekerjaan</a>
        <a class="btn btn-primary" href="formlowongan.php"><i style="width:12px;" class="fa fa-file-o"></i> form lowongan pekerjaan</a>
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
      'autoWidth'   : true
    })
  })
</script>
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    //Add text editor
    $(".compose-textarea").wysihtml5();
    $("#syarat-textarea").wysihtml5();
  });
</script>


