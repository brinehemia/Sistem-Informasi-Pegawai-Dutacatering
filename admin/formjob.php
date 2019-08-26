<?php  
$page= 'hiringjob';
include 'header.php';
include 'adminsidebar.php';
?>

  <!-- ======================== CONTENT ============================== -->
  
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
              <li ><a href="#tab_2-2" data-toggle="tab"><i class="fa fa-copy">&nbsp&nbsp</i>Curriculum vitae</a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-user">&nbsp&nbsp</i>Data Diri</a></li>
              
              <li class="pull-left header"><i class="fa fa-th"></i>Form pendaftaran</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
             <div class="tab-pane active" id="tab_1-1">
             <form action="../controller/jobscontroller.php?action=addfadmin" Method="POST">
                <div class="box-body">

                    <input name="postidauto" type="hidden" value="<?php $conn->autocode_pelamar() ?>" readonly>
                    <input name="postidcvauto" type="hidden" value="<?php $conn->autocode_cv()  ?>" readonly>
                    <input name="postid1cvauto" type="hidden" value="<?php $conn->autocode_cv()  ?>" readonly>

                    <small><p align="right">No.Form pelamar : <?php $conn->autocode_pelamar()  ?></p></small><br>
                     <label for="fornama">1. Nama</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postnama" type="text" class="form-control" id="fornama" placeholder="Enter nama lengkap">
                    </div>

                    <label for="foremail">2. Email</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="postemail" type="email" class="form-control" id="foremail" placeholder="Enter email" >
                    </div>

                    <label for="forpassword">3. password</label>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                        <input name="postpassword" type="text" class="form-control" id="forpassword" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label>4. Alamat</label>
                        <Textarea name="postalamat" style="resize: none;" class="form-control" rows="3" placeholder="Enter email"></Textarea>
                    </div>

                    <label for="fortempatlahir">5. tempat lahir</label>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input name="posttempatlahir" type="text" class="form-control" id="fortempatlahir" placeholder="Kota lahir">
                    </div>

                    <label for="fortanggallahir">6. Tanggal lahir</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input name="posttanggallahir" type="date" class="form-control" id="fortanggallahir" > 
                    </div>

                    <label for="forusia">7. Usia</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <input style="width : 90px;" name="postusia" type="text" class="form-control" id="forusia" placeholder="Tahun">
                    </div>

                    <label for="fornotelp">8. No telpon</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                        <input name="postnotelp" type="text" class="form-control" id="fornotelp" placeholder="+6280000xxxx / 0800000xxxx">
                    </div>

                    <label for="fornotelp">9. Jenis Kelamain</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-venus-mars custom"></i></span>
                        <select style="width : 200px;" name="postjekel" class="form-control" placeholder="">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inifoto">10. Foto calon pelamar</label>
                        <input type="file" id="inifoto">
                        <p class="help-block">upload foto anda disini.</p>
                    </div>     
                   
                    <small><p>*) Isi CV Anda untuk melanjutkan pendaftaran dengan mengunjungi halaman diatas</p></small>
                </div>
            </div>    

            <!-- /.tab-pane 2 -->
            <div class="tab-pane" id="tab_2-2">
             
                <div class="box-body">
                    <small><p align="right">No. CV : <?php $conn->autocode_cv()  ?></p></small><br>
                    <label>Lowongan yang dipilih</label>
                     <div class="form-group input-group">
                        <select style="width : 400px;" name="postlowong" class="form-control" >
                            <?php

                             $read = $conn->readlowongan();
                             while($fetch = $read->fetch_array()){ 
                            ?>
                            <option value="<?php echo $fetch['idlowongan']?>"><?php echo $fetch['namalowongan'].' - jumlah yang dibutuhkan : '.$fetch['jumlah'].' Orang'  ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>      

                    <label>1. Pendidikan</label> <small><p>*) Isi riwayat pendidikan anda berserta tahun lulus. contoh "1. namasekolah tahundaftar - tahun lulus", dan seterusnya</p></small>
                     <div class="form-group input-group">
                        <textarea placeholder="Describe yourself here..." id="editor1" name="postpendidikan" width="auto" cols="200" class="form-control"  placeholder="Enter Keterangan Untuk Kategori Soal"></textarea>
                    </div>
                    <label>2. Skill</label>
                     <div class="form-group input-group">
                        <textarea id="editor2" name="postskill" style="resize: none;" rows="6" cols="130" class="form-control"  placeholder="Enter Keterangan Untuk Kategori Soal"></textarea>
                    </div>
                    <label>3. Pengalaman Kerja</label>
                     <div class="form-group input-group">
                        <textarea id="editor3" name="postpengalaman" style="resize: none;" rows="6" cols="130" class="form-control"  placeholder="Enter pengalaman kerja Anda"></textarea>
                    </div>
                    <label>4. Tentang Diri</label>
                     <div class="form-group input-group">
                        <textarea name="postdiri" style="resize: none;" rows="6" cols="130" class="form-control"  placeholder="Ceritakan singkat tentang diri Anda"></textarea>
                    </div>
                    <label>5. Alasan</label>
                     <div class="form-group input-group">
                        <textarea name="postalasan" style="resize: none;" rows="6" cols="130" class="form-control"  placeholder="Alasan anda ingin bergabung dengan perusahaan kami"></textarea>
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
    CKEDITOR.config.width = 750;
    CKEDITOR.replace('editor2'),
    CKEDITOR.replace('editor3')
  })
  </script>