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
      <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-question-circle"></i></i></a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-plus">&nbsp</i>Tambah penguji wawancara</a></li>
              
              <li class="pull-left header"><i class="fa fa-black-tie"></i>Form penguji wawancara</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
                <div class="box-body">
                <form class="form-horizontal" action="../controller/jobscontroller.php?action=addpenguji" Method="POST">

                <input name="postidauto" type="hidden" value="<?php $conn->autocode_penguji() ?>" readonly>

                    <label class="col-sm-2 control-label" for="fornama">Penguji :</label>
                    <div class="col-sm-7 form-group input-group">
                         <select name="postidpegawai" id="postname" class="form-control " onchange="changeValue(this.value)" >
                            <option value=''>Pilih</option>
                            <?php 
                            $result = mysqli_query($link, "select * from tbpegawai where kodedivisi = 'HR' 
                            AND NOT EXISTS (SELECT * FROM tbpenguji WHERE tbpegawai.idpegawai = tbpenguji.idpegawai)
                            ");    
                            $jsArray = "var dtpenguji = new Array();";        
                            while ($row = mysqli_fetch_array($result)) {    
                            echo '
                            <option value="' . $row['idpegawai'] . '">' . $row['idpegawai']  .' - ' .$row['namapegawai']   .'</option>';    
                            $jsArray .= "dtpenguji['" . $row['idpegawai'] . "'] = {
                            readnama:'" . addslashes($row['namapegawai']) . "',
                            readalamat:'".addslashes($row['alamat'])."',
                            reademail:'".addslashes($row['email'])."',
                            readnohp:'".addslashes($row['nohp'])."',
                            readjeniskel:'".addslashes($row['jeniskelamin'])."'};
                            ";    
                            }      
                            ?>    
                          </select>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama :</label>
                      <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="readnama" placeholder="Nama calon penguji">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat :</label>
                      <div class="col-sm-8">
                        <textarea readonly style="resize:none;" rows="3"  type="text" class="form-control" id="readalamat" >Alamat</textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email :</label>
                      <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="reademail" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">No hp :</label>
                      <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="readnohp" placeholder="No hp">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin :</label>
                      <div class="col-sm-8">
                        <input readonly type="text" class="form-control" id="readjeniskel" placeholder="Jenis Kelamin">
                      </div>
                    </div>                

                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Daftarkan Penguji</button>
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

<script type="text/javascript">    
    <?php 
    echo $jsArray; 
    ?>  
      function changeValue(postname){  
      document.getElementById('readnama').value = dtpenguji[postname].readnama;  
      document.getElementById('readalamat').value = dtpenguji[postname].readalamat; 
      document.getElementById('reademail').value = dtpenguji[postname].reademail;
      document.getElementById('readnohp').value = dtpenguji[postname].readnohp;
      document.getElementById('readjeniskel').value = dtpenguji[postname].readjeniskel;
      };  
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