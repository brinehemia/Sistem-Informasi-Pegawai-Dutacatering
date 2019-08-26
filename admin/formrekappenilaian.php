<?php  
$page= 'kepegawaian';
$subpage= 'penilaian';
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
      <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-question-circle"></i></i></a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-plus">&nbsp&nbsp</i>Isi Data Dibawah</a></li>
              
              <li class="pull-left header"><i class="fa fa-list-ul"></i>Form tambah jobdesk</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
              <div class="box-body">
                <form class="form-horizontal" action="../controller/penilaiancontroller.php?action=addrekappenilaian" Method="POST">


                 <?php
                    include '../db/mdl_penilaian.php';
                    $kon = new penilaian();
                ?>
                  

                  <div class="form-group">
                      <label class="col-sm-3 control-label">id Rekap penilaian:</label>
                      <div class="col-sm-6">
                        <input readonly type="text" value="<?php $kon->autocode_rekappegawai()?>" class="form-control" id="fornama" name="postidrekap" placeholder="">
                      </div>
                    </div>

                    <!-- DATA JOBDESK -->
                    <div class="form-group">
                    <label class="col-sm-3 control-label" for="fornama">Pilih pegawai :</label>
                    <div class="col-sm-4 ">
                         <select name="postidpegawai" id="postjobdesk" class="form-control"  >
                            <option value=''>Pilih</option>
                            <?php
                             $read = $kon->dropdownpegawai();
                             while($fetch = $read->fetch_array()){ 
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
                             $read = $kon->dropdownpegawai();
                             while($fetch = $read->fetch_array()){ 
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

  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>





<script src="../assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- 
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script> -->


<script>
$('.datepicker').datepicker({
      autoclose: true
    })
</script>

<script>
$('#datepicker1').datepicker({
      autoclose: true
      format: 'yyyy/mm/dd'
    })
</script>

<script>
$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1'),
    CKEDITOR.config.width = auto;
    CKEDITOR.replace('editor2'),
    CKEDITOR.replace('editor3')
  })
  </script>

<script>
$(function () {
// Select2
  $('.select2').select2()
  
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1'),
    // CKEDITOR.config.width = 850;
    // CKEDITOR.replace('editor2'),
    // CKEDITOR.replace('editor3')
  })
  </script>


