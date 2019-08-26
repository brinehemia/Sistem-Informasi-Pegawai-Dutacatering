<?php  
$page= 'kepegawaian';
$subpage= 'jobdesk';
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
              
              <li class="pull-left header"><i class="fa fa-list-ul"></i>Form pembagian tim </li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
              <div class="box-body">
                <form class="form-horizontal" action="../controller/jobdesktimcontroller.php?action=updatetim" Method="POST">

                 <?php
                    include '../db/mdl_jobdesktim.php';
                    $kon = new jobdesktim();

                    $tampildata = $kon->readtimid($_GET['idtim']); 
                    $datatim = mysqli_fetch_array($tampildata);
                ?>

                  <input name="postidtim" type="hidden" value="<?php echo $_GET['idtim']?>" readonly>

                  <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Tim:</label>
                      <div class="col-sm-6">
                        <input readonly type="text" class="form-control" id="fornama" name="" value=" <?php echo $datatim['namatim']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">deskripsi :</label>
                      <div class="col-sm-8">
                        <textarea readonly name="" placeholder="Isi pesan untuk anggota tim..."style="resize:none;" rows="5"  type="text" class="form-control"  ><?php echo $datatim['deskripsi'] ?></textarea>
                      </div>
                    </div>
                    <!-- DATA JOBDESK -->
                    <div class="form-group">
                    <label class="col-sm-3 control-label" for="fornama">Pilih anggota :</label>
                    <div class="col-sm-6 ">
                         <select name="postidpegawai" id="postidpegawai" class="form-control " onchange="changeValue(this.value)" >
                            <option value=''>Pilih</option>
                            <?php 
                            $readjobdesk = $kon->readpegawaitim();
                            $jsArray1 = "var dtpegawai = new Array();";        
                            while ($row = mysqli_fetch_array($readjobdesk)) {    
                            echo '
                            <option value="' . $row['idpegawai'] . '">' . $row['namapegawai']  .' - Divisi ' .$row['namadivisi']   .'</option>';    
                            $jsArray1 .= "dtpegawai['" . $row['idpegawai'] . "'] = {
                            readnamapegawai:'" . addslashes($row['namapegawai']) . "',
                            readdivisi:'".addslashes($row['namadivisi'])."',
                            readnohp:'".addslashes($row['nohp'])."'
                            };";    
                            }      
                            ?>    
                          </select>
                    </div>
                </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama pegawai:</label>
                      <div class="col-sm-5">
                        <input readonly  type="text" class="form-control" id="readnamapegawai" name="" placeholder="Enter nama atau fungsi jobdesk">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Divisi:</label>
                      <div class="col-sm-5">
                        <input readonly  type="text" class="form-control" id="readdivisi" name="" placeholder="Enter nama atau fungsi jobdesk">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">No hp:</label>
                      <div class="col-sm-5">
                        <input readonly  type="text" class="form-control" id="readnohp" name="" placeholder="Enter nama atau fungsi jobdesk">
                      </div>
                    </div>

                    <button style="margin-right:70px;" type="submit" class="pull-right btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan data</button>
                  


                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    
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


<script type="text/javascript">    
    <?php 
    echo $jsArray1; 
    ?>  
      function changeValue(postidpegawai){  
      document.getElementById('readnamapegawai').value = dtpegawai[postidpegawai].readnamapegawai;  
      document.getElementById('readdivisi').value = dtpegawai[postidpegawai].readdivisi;
      document.getElementById('readnohp').value = dtpegawai[postidpegawai].readnohp;


      };  
</script>