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
                  <th>hasil</th>
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
                        <?php $idnyawawancara = $fetch['idwawancara'];?>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-default<?php echo $idnyawawancara; ?>"><i style="width:12px;" class="fa fa-copy"></i>&nbsp&nbspLihat penilaian</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idpendaftar'];?>&action=diterima"><i style="width:12px;" class="fa fa-check-square-o"></i> Diterima</a>
                        <a class="btn btn-warning" href="../controller/jobscontroller.php?postid=<?php echo $fetch['idpendaftar'];?>&action=tidakditerima"><i style="width:12px;" class="fa fa-close"></i> Tidak diterima</a>
                            
                            <?php 
                            
                            $penilaian = $conn->readpenilaianpelamar($idnyawawancara);
                            $datapenilaian = mysqli_fetch_array($penilaian); ?>

                           
                    </td>
                </tr>
                
 <!-- MODALSMODALSMODALSMODALS -->  <!-- MODALSMODALSMODALSMODALS -->  <!-- MODALSMODALSMODALSMODALS -->

        <?php 
         $read1 = $conn->readwawancara();
        $data = mysqli_fetch_array($read1); 

        ?>
        <div class="modal fade" id="modal-default<?php echo $idnyawawancara; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><img width="170px" src="../assets/image/mankepblack.png"><b>&nbsp&nbsp&nbspHasil Penilaian Pelamar <?php echo base64_decode($data['namapelamar']) ?></b> </h4>
              </div>
              <div class="modal-body">
                   <p><b>Penilaian kompetensi :</b> <?php echo $datapenilaian['kompetensi']; ?><br>
                  <b>Penilaian Atitude :</b> <?php echo $datapenilaian['atitude']; ?><br>
                  <b>Penilaian kompetensi :</b> <?php echo $datapenilaian['komunikasi']; ?><br>
                  <b>Penilaian kompetensi :</b> <?php echo $datapenilaian['grooming']; ?><br>
                  <b>Penilaian kompetensi :</b> <?php echo $datapenilaian['antusiasme']; ?></p>
                    <p><b>Hasil Nilai :</b> <?php echo $datapenilaian['hasilpenilaianpelamar']; ?></p>

                <?php
                $perhitungan = $datapenilaian['hasilpenilaianpelamar'];
                if ($perhitungan <= 5 ) {
                    echo "<p>Kategori Nilai <b>kurang baik</b> </p>";
                } elseif ($perhitungan <=10 && $perhitungan > 5) {
                    echo "<p>Kategori Nilai <b>Cukup baik</b></p>";
                } elseif ($perhitungan <=15 && $perhitungan > 10) {
                    echo "<p>Kategori Nilai <b>Sangat baik</b></p>";
                }
                
                
                ?>
              
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
        <?php
                
            }
            ?>   
               
                </tbody>
              </table>
            
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <!-- <a class="btn btn-primary" href="penjadwalantest.php"><i style="width:12px;" class="fa fa-table"></i>&nbsp Set jadwal lainnya</a> -->
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

                                <script type="text/javascript">
                               
                               $('#openmodal').click(function(){
                                var loc = location.href;  
                                loc += loc.indexOf("?") === -1 ? "?" : "&";
                                location.href = loc + "ts=<?php echo $idnyawawancara ?>";
                                });
                            
                            </script>
