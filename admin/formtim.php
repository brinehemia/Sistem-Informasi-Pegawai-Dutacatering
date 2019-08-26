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
              
              <li class="pull-left header"><i class="fa fa-list-ul"></i>Form tambah jobdesk</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
              <div class="box-body">
                <form class="form-horizontal" action="../controller/jobdesktimcontroller.php?action=addtim" Method="POST">


                 <?php
                    include '../db/mdl_jobdesktim.php';
                    $kon = new jobdesktim();
                ?>
                  <input name="postidauto" type="hidden" value="<?php $kon->autocode_tim() ?>" readonly>

                  <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Tim:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="fornama" name="postnamatim" placeholder="Tambah #nomor, jika ada 2 tim dengan fungsi yang sama">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">deskripsi :</label>
                      <div class="col-sm-8">
                        <textarea name="postdeskripsitim" placeholder="Isi pesan untuk anggota tim..."style="resize:none;" rows="10"  type="text" class="form-control"  ></textarea>
                      </div>
                    </div>
                    <!-- DATA JOBDESK -->
                    <div class="form-group">
                    <label class="col-sm-3 control-label" for="fornama">Pilih Jobdesk untuk tim :</label>
                    <div class="col-sm-4 ">
                         <select name="postjob" id="postjobdesk" class="form-control " onchange="changeValue(this.value)" >
                            <option value=''>Pilih</option>
                            <?php 
                            $readjobdesk = $kon->readjobdesk();
                            $jsArray1 = "var dtjobdesk = new Array();";        
                            while ($row = mysqli_fetch_array($readjobdesk)) {    
                            echo '
                            <option value="' . $row['idjobdesk'] . '">' . $row['idjobdesk']  .' - ' .$row['namajobdesk']   .'</option>';    
                            $jsArray1 .= "dtjobdesk['" . $row['idjobdesk'] . "'] = {
                            readfungsi:'" . addslashes($row['namajobdesk']) . "',
                            readmulai:'".addslashes($row['tanggalmulai'])."',
                            readdeadline:'".addslashes($row['deadline'])."',
                            readdetailwaktu:'".addslashes($row['Detailwaktu'])."',
                            readcatatan:'".addslashes($row['keterangan'])."',
                            readjobdesk1:'".addslashes($row['jobdesk1'])."',
                            readjobdesk2:'".addslashes($row['jobdesk2'])."',
                            readjobdesk3:'".addslashes($row['jobdesk3'])."',
                            readjobdesk4:'".addslashes($row['jobdesk4'])."',
                            readjobdesk5:'".addslashes($row['jobdesk5'])."',
                            readjobdesk6:'".addslashes($row['jobdesk6'])."',
                            readjobdesk7:'".addslashes($row['jobdesk7'])."',
                            readjobdesk8:'".addslashes($row['jobdesk8'])."',
                            readjobdesk9:'".addslashes($row['jobdesk9'])."',
                            readjobdesk10:'".addslashes($row['jobdesk10'])."',
                            };";    
                            }      
                            ?>    
                          </select>
                    </div>
                </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama/Fungsi Jobdesk :</label>
                      <div class="col-sm-5">
                        <input readonly  type="text" class="form-control" id="readfungsi" name="postfungsi" placeholder="Enter nama atau fungsi jobdesk">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">tanggal Mulai :</label>
                      <div class="col-sm-4">
                      <div class="input-group date">
                      <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                        </div>
                        <input readonly name="postmulai" syle="padding-bottom:100px;" id="readmulai" type="date" class=" form-control pull-right"  placeholder="">
                        </div>
                      </div>
                   </div>


                  <div class="form-group">
                      <label class="col-sm-3 control-label">Deadline :</label>
                      <div class="col-sm-4">
                      <div class="input-group date">
                      <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                        </div>
                        <input readonly name="postdeadline" syle="padding-bottom:100px;" id="readdeadline" type="date" class=" form-control pull-right" placeholder="">
                        </div>
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-sm-3 control-label">Detail waktu deadline :</label>
                      <div class="col-sm-2">
                      <div class="input-group date">
                      <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                        </div>
                        <input readonly name="postdetailwaktu" syle="padding-bottom:100px;" id="readdetailwaktu" type="time" class="form-control pull-right" id="forusername"  placeholder="">
                        </div> 
                      </div><b><p style="padding-top:10px;">WIB</p></b>
                   </div>

                   <div class="form-group">
                      <label class="col-sm-3 control-label">Catatan lain :</label>
                      <div class="col-sm-8">
                        <input readonly name="postcatatan" id="readcatatan" placeholder="Isi bila ada pesan untuk anggota tim..."  type="text" class="form-control"  >
                      </div>
                    </div>
                    <button style="margin-right:70px;" type="submit" class="pull-right btn btn-primary">Simpan data</button><br><br>
                    <label style="padding-left:150px;" class=" control-label">Berikut list jobdesk yang harus diselesaikan:</label> <br><br>
                    
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 1:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk1" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 2:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk2" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 3:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk3" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 4:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk4" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 5:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk5" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 6:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk6" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 7:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk7" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 8:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk8" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 9:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk9" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jobdesk 10:</label>
                      <div class="col-sm-8">
                        <textarea readonly id="readjobdesk10" name="postjobdesk" placeholder="Isi pesan untuk anggota tim..."  type="text" class="form-control"  > </textarea>
                      </div>
                    </div>


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
      function changeValue(postjobdesk){  
      document.getElementById('readfungsi').value = dtjobdesk[postjobdesk].readfungsi;  
      document.getElementById('readmulai').value = dtjobdesk[postjobdesk].readmulai;
      document.getElementById('readdeadline').value = dtjobdesk[postjobdesk].readdeadline;
      document.getElementById('readdetailwaktu').value = dtjobdesk[postjobdesk].readdetailwaktu;
      document.getElementById('readcatatan').value = dtjobdesk[postjobdesk].readcatatan;
      document.getElementById('readjobdesk1').value = dtjobdesk[postjobdesk].readjobdesk1;
      document.getElementById('readjobdesk2').value = dtjobdesk[postjobdesk].readjobdesk2; 
      document.getElementById('readjobdesk3').value = dtjobdesk[postjobdesk].readjobdesk3; 
      document.getElementById('readjobdesk4').value = dtjobdesk[postjobdesk].readjobdesk4; 
      document.getElementById('readjobdesk5').value = dtjobdesk[postjobdesk].readjobdesk5; 
      document.getElementById('readjobdesk6').value = dtjobdesk[postjobdesk].readjobdesk6; 
      document.getElementById('readjobdesk7').value = dtjobdesk[postjobdesk].readjobdesk7; 
      document.getElementById('readjobdesk8').value = dtjobdesk[postjobdesk].readjobdesk8; 
      document.getElementById('readjobdesk9').value = dtjobdesk[postjobdesk].readjobdesk9; 
      document.getElementById('readjobdesk10').value = dtjobdesk[postjobdesk].readjobdesk10;   
      };  
</script>