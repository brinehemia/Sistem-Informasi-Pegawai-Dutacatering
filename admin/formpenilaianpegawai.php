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
      <div class="col-md-8">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-question-circle"></i></i></a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-plus">&nbsp&nbsp</i>Isi Data Dibawah</a></li>
              
              <li class="pull-left header"><i class="fa fa-list-ul"></i>Form Penilaian pegawai</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
              <div class="box-body">
                <form class="form-horizontal" action="../controller/penilaiancontroller.php?action=addpenilaian" Method="POST">

                 <?php
                    include '../db/mdl_penilaian.php';
                    $kon = new penilaian();
                ?>
                 <label class="pull-right control-label">Keterangan waktu penilaian :</label><br><br>
                <input name="postidpenilaianpegawai" type="text" value="<?php $kon->autocode_penilaianpegawai() ?>" readonly>
                <input name="postidpegawai" type="text" value="<?php echo $_GET['idpegawai'] ?>" readonly>
                    
              

                        <select name="posttahun" style="height:30px; width:150px; font-family:Source Sans Pro;" class="pull-right"    id="">
                        <Option value="">Tahun penilaian :</Option>
                            <?php
                             $read = $kon->readtahun();
                             while($fetch = $read->fetch_array()){ 
                            ?>
                            <Option value="<?php echo $fetch['idtahun'];?>"><?php echo $fetch['namatahun'];?></Option>
                            <?php
                             }
                            ?>
                        </select>
                        <select name="postbulan" style="height:30px; width:150px;" class="pull-right"   id="">
                            <Option value="">Bulan penilaian:</Option>
                            <?php
                             $read = $kon->readbulan();
                             while($fetch = $read->fetch_array()){ 
                            ?>
                            <Option value="<?php echo $fetch['idbulan'];?>"><?php echo $fetch['namabulan'];?></Option>
                            <?php
                             }
                            ?>
                            
                        </select>

                         <br> <br><br> 
                    

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian Keaktifan :</label>
                      <div class="col-sm-5">
                        <select name="postkeaktifan" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian ketepatan waktu :</label>
                      <div class="col-sm-5">
                        <select name="postketepatanwaktu" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian minimalisir kesalahan :</label>
                      <div class="col-sm-5">
                        <select name="postkesalahan" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian perilaku :</label>
                      <div class="col-sm-5">
                        <select name="postperilaku" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian kebersihan :</label>
                      <div class="col-sm-5">
                        <select name="postkebersihan" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian kualitas hasil :</label>
                      <div class="col-sm-5">
                        <select name="postkualitashasil" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian absensi :</label>
                      <div class="col-sm-5">
                        <select name="postabsensi" class="form-control" id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian inisiatif :</label>
                      <div class="col-sm-5">
                        <select name="postinisiatif" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian kerjasama :</label>
                      <div class="col-sm-5">
                        <select name="postkerjasama" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Penilaian pengetahuan :</label>
                      <div class="col-sm-5">
                        <select name="postpengetahuan" class="form-control"  id="">
                            <Option value="0">Pilih :</Option>
                            <Option value="5">Sangat Baik</Option>
                            <Option value="4">cukup Baik</Option>
                            <Option value="3">Baik</Option>
                            <Option value="2">Kurang</Option>
                            <Option value="2">Sangat Kurang</Option>
                        </select>
                      </div>
                    </div>

                   <div class="form-group">
                      <label class="col-sm-4 control-label">Catatan lain :</label>
                      <div class="col-sm-7">
                        <textarea name="postcatatan" placeholder="Isi bila ada pesan untuk anggota tim..."style="resize:none;" rows="6"  type="text" class="form-control"  ></textarea>
                      </div>
                    </div>


                    <hr size="3px">

                    <div class="form-group">
                    <?php
                    $read = $kon->readpegawai($_GET['idpegawai']);
                    $datapegawai = mysqli_fetch_array($read); 
                    ?>
                    <label class="col-sm-4 control-label">Data pegawai :</label>
                    <div class="col-sm-5">
                    <input class="form-control" readonly type="text" value="Idpegawai: <?php echo $_GET['idpegawai'] ?>">
                    <input class="form-control" readonly type="text" value="Nama pegawai: <?php echo $datapegawai['namapegawai'] ?>">
                    <input class="form-control" readonly type="text" value="No hp: <?php echo $datapegawai['nohp'] ?>">
                    <input class="form-control" readonly type="text" value="Dari divisi <?php echo $datapegawai['namadivisi'] ?>">
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
</script>


<script>
$('.datepicker').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd'
    })
</script>

<script>
$('.datepicker1').datepicker({
      autoclose: true,
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
  
  <script>
  $(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
  var x = 1;
  var y = 2;
  var z = 2;
	var postjobdesk = "postjobdesk" + x++;
	
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x <= max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><br />Jobdesk&nbsp' + z++ + '&nbsp:<textarea style="resize:none;" rows="6" class="form-control" type="text" name="postjobdesk' + y++ + '"/></textarea><a style="height:30px;" href="#" class="btn btn-warning form-control remove_field">Hapus</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--; y--; z--;
	})
});
</script>