<?php  
$page= 'hiringjob';
$subpage = 'admin';
include 'header.php';
include 'adminsidebar.php';

require_once '../db/mdl_request.php';
$konini = new mdlrequest();
?>
<link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- ====================== CONTENT ============================== -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>13 new messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="mailreqpegawai.php" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailreqpegawai.php"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right"><?php $konini->countdatapermohonan() ?></span></a></li>
                <li><a href="maildone.php"><i class="fa fa-check-square"></i> Done Pengajuan <span class="label label-warning pull-right"><?php $konini->countdatadone() ?></span></a>
                </li>
               
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-spinner"></i> Form Pengajuan Penambahan Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <form method="POST" action="../controller/requestcontroller.php?aksi=pegawai">

                    <?php 
                  
                    ?>
                    
                    <input name="postidrequest" type="hidden" value="<?php $read = $konini->autocode_reqpegawai() ?>">
                    <br>
                    <div  class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-group"></i></span>
                        <select style="width : 190px; height:35px;" name="postdivisi" class="form-control" placeholder="">
                            <option value="">Divisi pemohon :</option>
                            <?php
                              $read = $conn->readdivisi();
                              while($fetch = $read->fetch_array()){ 
                               ?>
                            <option value="<?php echo $fetch['kodedivisi'] ?>">Divisi&nbsp<?php echo $fetch['namadivisi'] ?></option>
                           <?php
                              }
                           ?>
                        </select>
                        <div class="col-sm-2 input-group">
                      <input style="margin-letf:10px; width:140px;" type="text" name="postjumlah" class="form-control" placeholder="Jumlah dibutuhkan:">
                      <span class="input-group-addon"><b>Orang</b></span>
                    </div>
                    </div>

              <div class="form-group">
            
             <i class="fa fa-check-circle-o"></i>&nbsp
                           

                  <label class="form-group">Nama Pekerjaan :</label>
                    <Input placeholder="Isi nama pekerjaan yang diajukan ..." name="postnamapekerjaan" style="margin-top:-10px;width:350px;" class="form-control">
              </div>


              <div class="form-group">
              <i class="fa fa-check-circle-o"></i>&nbsp
                  <label stye="padding-left:50px;" class="form-group">Alasan pengajuan :</label>
                    <textarea name="postalasan" id="" class="form-control" style="height: 130px"></textarea>
              </div>
              
             
              <div class="form-group">
                <i class="fa  fa-check-circle-o"></i>&nbsp
                  <label stye="padding-left:50px;" class="form-group">Persyaratan pegawai baru :</label>
                    <textarea name="postsyarat" id="syarat-textarea" class="form-control" style="height: 200px"></textarea>
              </div>
            
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div> <small><p class="help-block">Max. 32MB</p></small>
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <input type="submit" value="Kirim Pengajuan" class="btn btn-primary">
              </div>
</form>              
            </div>

            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>





<?php 
include 'footer.php';
 ?>
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
    $("#syarat-textarea").wysihtml5();
  });
</script>