<?php  
$page= 'hiringjob';
include 'header.php';
include 'adminsidebar.php';
?>

  <!-- ====================== CONTENT ============================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>
    <br/><br/>
        <section class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-question-circle"></i></i></a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-plus">&nbsp</i>Tentukan jadwal wawancara</a></li>
              
              <li class="pull-left header"><i class="fa fa-black-tie"></i>Form jadwal wawancara calon pegawai</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
                <div class="box-body">
                <form action="../controller/jobscontroller.php?action=addwawancara" Method="POST">
                <input name="postidauto" type="hidden" value="<?php $conn->autocode_wawancara() ?>" readonly>

                    <?php
                    $con = new mdljobs();
                    $tampil = $con->veditpelamar($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                      ?>
                    <input type="hidden" name="postidpelamar" value="<?php echo $fetch['idpendaftar'] ?>">
                    <label for="fornama">Nama pelamar</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input readonly name="postnama" type="text" class="form-control" id="fornama" value="<?php echo base64_decode($fetch['namapelamar']) ?>">
                    </div>
                   <?php
                    }
                   ?>

                 <label for="forpenguji">Penguji</label><small>  *) Pilih penguji yang akan wawancara</small>
                  <div class="form-group input-group">
                    <select style="width : 400px;" name="postpenguji" class="form-control" >
                        <option value="">Pilih penguji</option>
                        <?php
                          $read = $conn->readpenguji();
                          while($fetch = $read->fetch_array()){ 
                          ?>
                          <option value="<?php echo $fetch['idpenguji']?>"><?php echo $fetch['namapegawai'] .' Divisi HRD'  ?></option>
                      <?php
                      }
                      ?>
                   </select>
                </div>

                    <label for="fortgl">Tanggal wawancara</label><small>  *) Tentukan tanggal wawancara & jam wawancara <B>(WIB)</B>, contoh : 16.00</small>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input name="posttanggal" type="DATE" style="width:150px;" class="form-control"> 
                        <input name="postjam" type="time" style="width:100px;" class="pull-left form-control" >
                   </div>

                   

                    <label for="forketerangan">Keterangan lain</label><small>  *) abaikan bila tidak ada</small>
                   <div class="form-group input-group">
                        <textarea name="postket" style="resize: none;" cols="90" rows="6" type="text" class="form-control" ></textarea>
                    </div>
                    
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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

  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>

<script>
$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1'),
    CKEDITOR.config.width = 850;
    CKEDITOR.replace('editor2'),
    CKEDITOR.replace('editor3')
  })
  </script>