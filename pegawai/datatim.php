<?php 
include 'pegawaiheader.php';
$page= 'tim';

include 'pegawaisidebar.php';
?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Manajemen Tim
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
          <h3 class="box-title">Data tim & jobdesk</h3>
        </div>
        
        <div class="box-body" >
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>id tim</th>
                  <th>Nama tim</th>
                  <th>Deskripsi</th>
                  <th >Jobdesk</th>
                  <th>Tanggal mulai</th>
                  <th>Deadline</th>
                  <th>Detail waktu</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                 require '../db/mdl_jobdesktim.php';
                 $conn = new jobdesktim();
                $read = $conn->readtim1();
					        while($fetch = $read->fetch_array()){ 
				        ?>
            
                <tr>
                <td><?php echo $fetch['idtim']?></td>
                    <td><?php echo $fetch['namatim']?></td>
                    <td><?php echo $fetch['deskripsi'];?></td>
					          <td> <?php $idnyajobdesk = $fetch['idjobdesk'];?>
                    <input type="hidden" value="<?php echo $fetch['idjobdesk'];?>">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Detailjobdesk<?php echo $idnyajobdesk; ?>">
                        <i style="width:12px;" class="fa fa-search"></i>&nbsp&nbspDetail jobdesk</a>
                    
                    </td>
                    <td><?php echo $fetch['tanggalmulai']?></td>
                    <td><?php echo $fetch['deadline']?></td>
                    <td><?php echo $fetch['Detailwaktu']?></td>
                    <td><?php echo $fetch['keterangan']?></td>
                    
                  <td>
                    
                    <a class="btn btn-primary" href="#"><i style="width:12px;" class="fa fa-search"></i>&nbsp&nbspDetail Anggota</a>

                 </td>
					      </tr>
                <?php
					      }
				        ?>
                </tbody>

                <!-- END INI TABLE -->
                <!-- END INI TABLE -->

                <?php 
         $readdetailjobdesk = $conn->readdetailjobdesk($idnyajobdesk);
        $datajobdesk = mysqli_fetch_array($readdetailjobdesk); 

        ?>
        <div class="modal fade" id="Detailjobdesk<?php echo $idnyajobdesk; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><img width="170px" src="../assets/image/mankepblack.png">
                <b>&nbsp&nbsp&nbspDetail Jobdesk "<?php echo $datajobdesk['namajobdesk'] ?>"</b> </h4>
              </div>
              
              <div class="modal-body">
              <b><p>Tanggal Mulai - Deadline(Detail waktu) :</p></b>
                  <?php echo date("l, d M Y", strtotime($datajobdesk['tanggalmulai']))?> <b> - </b> <?php echo date("l, d M Y", strtotime($datajobdesk['deadline']))?>( <?php echo date("H:s", strtotime($datajobdesk['Detailwaktu']))?> WIB )
                  <br><br>
                  <p><b>Keterangan/Catatan jobdesk :</b> <?php echo $datajobdesk['keterangan']; ?></p>
                  <hr >
                  
                  <p>
                  <b>Jobdesk ke-1:</b> <?php echo $datajobdesk['jobdesk1']; ?><br>
                  <b>Jobdesk ke-2:</b> <?php echo $datajobdesk['jobdesk2']; ?><br>
                  <b>Jobdesk ke-3:</b> <?php echo $datajobdesk['jobdesk3']; ?><br>
                  <b>Jobdesk ke-4:</b> <?php echo $datajobdesk['jobdesk4']; ?><br>
                  <b>Jobdesk ke-5:</b> <?php echo $datajobdesk['jobdesk5']; ?><br>
                  <b>Jobdesk ke-6:</b> <?php echo $datajobdesk['jobdesk6']; ?><br>
                  <b>Jobdesk ke-7:</b> <?php echo $datajobdesk['jobdesk7']; ?><br>
                  <b>Jobdesk ke-8:</b> <?php echo $datajobdesk['jobdesk8']; ?><br>
                  <b>Jobdesk ke-9:</b> <?php echo $datajobdesk['jobdesk9']; ?><br>
                  <b>Jobdesk ke-10:</b> <?php echo $datajobdesk['jobdesk10']; ?>
                  </p>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Tutup</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->





                <!-- INI TABLE --> 
                <!-- INI TABLE -->
                <!-- INI TABLE -->
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
include 'pegawaifooter.php';
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
