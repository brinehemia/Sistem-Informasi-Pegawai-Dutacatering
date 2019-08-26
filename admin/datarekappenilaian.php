<?php 
include 'header.php';
$page= 'kepegawaian';
$subpage= 'penilaian';
include 'adminsidebar.php';
?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Penilaian Pegawai
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
          <h3 class="box-title">Data penilaian pegawai</h3>
        </div>
        
        <div class="box-body" >
          
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No rekap penilaian</th>
                  <th>Nama Pegawai</th>
                  <th>Email</th>
                  <th>Kode divisi</th>
                  <th>Total skor</th>
              
                  <th>nama tahun</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                 require '../db/mdl_penilaian.php';
                 $conn = new penilaian();
                $read = $conn->readrekappenilaian();
				while($fetch = $read->fetch_array()){ 
				        ?>
            
                <tr>
                    
                  <td><?php echo $fetch['idrekappenilaian'];?></td>
                  <td><?php echo $fetch['namapegawai'];?></td>
                  <td><?php echo $fetch['email']?></td>
                  <td><?php echo $fetch['kodedivisi']?></td>
                  <td><?php echo $fetch['totalskor']?></td>

                  <td><?php echo $fetch['namatahun']?></td>
                  <td>
                    <a class="btn btn-primary" href="../controller/penilaiancontroller.php?action=hitungdatarekap&idrekap=<?php echo $fetch['idrekappenilaian'];?>&idpegawai=<?php echo $fetch['idpegawai'];?>&idtahun=<?php echo $fetch['idtahun'];?>"><i style="width:12px;" class="fa fa-refresh"></i>&nbsp&nbspUpdate rekap</a>
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
       
        <a class="btn bg-olive" type="button" href="../laporan/laporanrekappenilaian.php"><i style="width:12px;" class="fa fa-file-o"></i>  Laporan rekap penilaian</a>
       
        
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      

    </section>

    <section class="content">
    <div class="row">
      <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-question-circle"></i></i></a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-plus">&nbsp&nbsp</i>Isi Data Dibawah</a></li>
              
              <li class="pull-left header"><i class="fa fa-list-ul"></i>Form tambah rekap</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
              <div class="box-body">
                <form class="form-horizontal" action="../controller/penilaiancontroller.php?action=addrekappenilaian" Method="POST">


                  

                  <div class="form-group">
                      <label class="col-sm-3 control-label">id Rekap penilaian:</label>
                      <div class="col-sm-6">
                        <input readonly type="text" value="<?php $conn->autocode_rekappegawai()?>" class="form-control" id="fornama" name="postidrekap" placeholder="">
                      </div>
                    </div>

                    <!-- DATA JOBDESK -->
                    <div class="form-group">
                    <label class="col-sm-3 control-label" for="fornama">Pilih pegawai :</label>
                    <div class="col-sm-4 ">
                         <select name="postidpegawai" id="postjobdesk" class="form-control"  >
                            <option value=''>Pilih</option>
                            <?php
                             $read2 = $conn->dropdownpegawai();
                             while($fetch = $read2->fetch_array()){ 
                            ?>
                            <Option value="<?php echo $fetch['idpegawai'];?>"><?php echo $fetch['idpegawai'];?> - <?php echo $fetch['namapegawai'];?></Option>
                            <?php
                             }
                            ?>
                          </select>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="fornama">Pilih pegawai :</label>
                    <div class="col-sm-4 ">
                         <select name="postidtahun" id="postjobdesk" class="form-control "  >
                            <option value=''>Pilih</option>
                            <?php
                             $read3 = $conn->dropdownpegawai();
                             while($fetch = $read3->fetch_array()){ 
                            ?>
                            <Option value="<?php echo $fetch['idtahun'];?>"><?php echo $fetch['namatahun'];?></Option>
                            <?php
                             }
                            ?>
                          </select>
                    </div>
                </div>

                    
                    

                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="pull-right btn btn-primary">Simpan data</button>
                </div>
                    </form>
              </div>              


                <!-- /.tab-pane 3 -->
                <div class="tab-pane" id="tab_3-2">
                        <b>How to use:</b>

                        <p>Exactly like the original bootstrap tabs except you should use
                        the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                        A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                        I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy,
                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                        that I neglect my talents. I should be incapable of drawing a single stroke
                        at the present moment; and yet I feel that I never was a greater artist than now.
                </div>

          </div>
        </div> 
    
    
    

    <!-- /.END ROW DISINI BANGSAT -->
    </div>
    <!-- /.END Section CONTENT -->
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
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
