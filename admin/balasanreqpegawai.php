<?php  
$page= 'hiringjob';
include 'header.php';
include 'adminsidebar.php';
require '../db/mdl_request.php';
$conn = new mdlrequest();
?>

<link rel="stylesheet" href="../assets/plugins/iCheck/flat/blue.css">
  <!-- ====================== CONTENT ============================== -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Read Mail
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
          <a href="../admin/maildone.php" class="btn btn-primary btn-block margin-bottom">Back to mail done</a>

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
              <ul class="nav nav-pills nav-stacked">
              <li><a href="mailreqpegawai.php"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right"><?php $conn->countdatapermohonan() ?></span></a></li>
                
                <li><a href="maildone.php"><i class="fa fa-check-square"></i> Done Pengajuan <span class="label label-warning pull-right"><?php $conn->countdatadone() ?></span></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
            
            <div style="margin-top:30px; margin-left:30px;" class="pull-left">
            <img  src="../assets/image/mankepblack.png" width="150px"></div>
            <br><center> <h2 style="font-size:27px; margin-right:150px;"   class="box-title"><b>Surat Persetujuan Penambahan Pegawai</b><br> </h2> 
             <br><p style="margin-right:170px; margin-top:3px;" >Jl. Ir. Soekarno No.26, Dadaprejo, Kec. Junrejo, Kota Batu, Jawa Timur 65233<br>
              No.Telp (0341) 467077, Fax: (0341) 467077, HP: 0816556351(WA)</center><p>
 
            </div>
            <!-- /.box-header -->
            <br><br>
            <?php
                 
                  $read = $conn->readreq($_GET['nomorsurat']);
                  while($fetch = $read->fetch_array()){ 
                ?>


            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                
                
                <h5>Perihal : Balasan Keputusan dari No Surat : <b> <?php echo $fetch['idrequestpegawai']?></b></h5>
                <h5>Tentang Penambahan Pegawai baru</h5>
                <h5>Dari Divisi Kepegawaian
                  <span class="mailbox-read-time pull-right">Malang, <?php echo date("d M Y") ?></span></h5>
              </div>
              
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message"><br>
                <p>Kepada Divisi <?php echo $fetch['namadivisi']?>,</p><br>
                <p> Berdasarkan surat pengajuan penambahan pegawai Nomor <?php echo $fetch['idrequestpegawai']?> yang telah kami terima dan Pertimbangkan,
                Dengan ini kami memberitahukan bahwa pengajuan Anda kami <b><?php echo $fetch['keputusan']?></b> dan akan Segera kami proses, Mohon bersabar dan 
                tunggu informasi lanjutan dari divisi Kepegawaian 
                </p>
                
                <p>
                Demikian Surat balasan pengajuan ini kami beritahukan kepada divisi bersangkutan
                </p>
              

                <br/><br/><br/><br><b><p style="text-align:right;">Terima kasih, <br>Hormat kami Divisi Kepegawaian</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->

            <?php
            }
            
            ?>

            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
               
              </div>
            
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