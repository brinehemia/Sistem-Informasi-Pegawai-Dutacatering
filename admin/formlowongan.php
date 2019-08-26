<?php  
$page= 'hiringjob';
$subpage = 'datapenerimaan';
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
                <li class="active">Form lowongan pekerjaan</li>
            </ol>
        </section>
    <br/><br/>
        <section class="content">
    <div class="row">
      <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-question-circle"></i></i></a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-plus">&nbsp</i>Tambah lowongan pekerjaan</a></li>
              
              <li class="pull-left header"><i class="fa fa-black-tie"></i>Form lowongan pekerjaan</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
                
                <div class="box-body">
                <form action="../controller/jobscontroller.php?action=addlowonganpekerjaan" Method="POST">
                <input name="postidauto" type="hidden" value="<?php $conn->autocode_lowongan() ?>" readonly>

                    <label for="fornama">Nama Pekerjaan:</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-list"></i></span>
                        <input name="postnama" type="text" class="form-control" id="fornama" placeholder="lowongan yang akan dibuka">
                    </div>

                    <label for="forpassword">Jumlah dibutuhkan:</label><small>  *) Masukkan angka kuota lowongan yang dibutuhkan</small>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postjumlah" type="text" style="width:150px;" class="form-control" id="forpassword" placeholder="Jumlah kuota">
                        
                        <select name="postkodedivisi"  style="width:250px;" class="form-control"  >   
                                <OPtion> - Pilih Divisi terkait - </OPtion>
                                <?php
                                  $read = $conn->readdivisi();
                                  while($fetch = $read->fetch_array()){ 
                                          
                                      ?>
                                  <option value="<?php echo $fetch['kodedivisi'] ?>"><?php echo $fetch['namadivisi'] ?></option>
                                  <?php
                                  }
                                  ?>
                        </select>
                   </div>

                    

                    <label for="forpassword">Syarat:</label>
                   <div class="form-group input-group">
                        <textarea name="postsyarat" style="resize: none;" cols="120" rows="6" type="text" class="form-control" id="editor1" ></textarea>
                    </div>

                    <label for="forket">Deskripsi Pekerjaan:</label> <small>  *) Masukkan Keterangan singkat tentang lowongan terkait</small>
                    <div class="form-group input-group">  
                      <textarea name="postketerangan" style="resize: none;" cols="125" rows="6"  class="form-control" id="forket" ></textarea>
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