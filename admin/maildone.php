<?php  
$page = 'hiringjob';
$subpage = 'admin';
include 'header.php';
include 'adminsidebar.php';
?>

<?php
 require '../db/mdl_request.php';
 $conn = new mdlrequest();
 

?>
<link rel="stylesheet" href="../assets/plugins/iCheck/flat/blue.css">
  <!-- ====================== CONTENT ============================== -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small><?php $conn->countdatapermohonan() ?> new messages</small>
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
          <a href="formreqpegawai.php" class="btn btn-primary btn-block margin-bottom"> <i class="fa fa-envelope"> &nbsp</i>Form Pengajuan</a>

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
                  <span class="label label-primary pull-right"><?php $conn->countdatapermohonan() ?></span></a></li>
                
                <li><a href="maildone.php"><i class="fa fa-check-square"></i> Done Pengajuan <span class="label label-warning pull-right"><?php $conn->countdatadone() ?></span></a>
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
              <h3 class="box-title"> <small><b>Mail pengajuan penembahan pegawai baru</b></small></h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  <small>Total <?php $conn->countdatapermohonan() ?> Permohonan</small>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>

              <!-- mulai mail -->
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                      <td></td> 
                      <td>Dari</td>
                      <td>No. Surat</td> 
                      <td>Perihal Pengajuan</td> 
                      <td>Keputusan</td> 
                      <td>Tanggal pengajuan</td> 
                      
                      </tr>

                  </thead>
                  <tbody>
                <?php
                 
                  $read = $conn->readrequestdone();
                  while($fetch = $read->fetch_array()){ 
                ?>

                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="readreqpegawai.php?postid=<?php echo $fetch['idrequestpegawai']; ?>">Divisi <?php echo $fetch['namadivisi']?></a></td>
                    <td class=""><?php echo $fetch['idrequestpegawai']?></td>
                    <td class="mailbox-subject"><b>Perihal penambahan pegawai</b> - <?php echo $fetch['namapekerjaan']?></td>
                    </td>
                    <td>
                    <a class="btn btn-success"
                    href="../controller/requestcontroller.php?aksi=readkeputusan&nomorsurat=<?php echo $fetch['idrequestpegawai']; ?>&keputusan=<?php echo $fetch['keputusan']; ?>"><i class="fa fa-file-text-o"></i>&nbsp&nbsp Keputusan</a></td>
                    <td class="mailbox-date"><?php echo date("d M Y/H:i", strtotime($fetch['tanggal'])) ?></td>
                  </tr>

                  <?php
                  }
                   ?>

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
              
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
           
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
<script src="../assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    // gawe icheck jqurey
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });


    // gawe all checklist
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    
    // gawe bintang
    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>