<?php  
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
    
        <section class="content">
    <div class="row">
        <div class="col-lg-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                 <h2 class="box-title"><b>Edit data calon pelamar</b>
                     <small>'edit data pelamar oleh admin'</small>
                </h2>
                </div>
             <!-- form start -->

                <?php
                    $con = new mdljobs();
                    $tampil = $con->veditpelamar($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                ?>                    
                    
                <form role="form" action="../controller/jobscontroller.php?action=upfadmin" Method="POST">
                <div class="box-body">
                    <input type="hidden" name="editid" value="<?php echo $fetch['idpendaftar'] ?>">
                     <label for="fornama">Nama</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="editnama" type="text" class="form-control" id="fornama" value="<?php echo $fetch['namapelamar'] ?>" placeholder="Enter nama lengkap">
                    </div>

                    <label for="foremail">Email</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="editemail" type="email" class="form-control" id="foremail" value="<?php echo $fetch['email']?>" placeholder="Enter email" >
                    </div>

                    <label for="forpassword">password</label>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                        <input name="editpassword" type="text" class="form-control" id="forpassword" value="<?php echo $fetch['password']?>" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <Textarea name="editalamat" style="resize: none;" class="form-control" rows="3" placeholder="Enter email"><?php echo $fetch['alamat']?></Textarea>
                    </div>

                    <label for="fortempatlahir">tempat lahir</label>
                   <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input name="edittempatlahir" type="text" class="form-control" id="fortempatlahir" value="<?php echo $fetch['tempat_lahir']?>" placeholder="Kota lahir">
                    </div>

                    <label for="fortanggallahir">Tanggal lahir</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input name="edittanggallahir" type="date" class="form-control" id="fortanggallahir" > 
                    </div>

                    <label for="forusia">Usia</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <input style="width : 90px;" name="editusia" type="text" class="form-control" id="forusia" value="<?php echo $fetch['usia']?>" placeholder="Tahun">
                    </div>

                    <label for="fornotelp">No telpon</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                        <input name="editnotelp" type="text" class="form-control" id="fornotelp" value="<?php echo $fetch['no_telp']?>" placeholder="+6280000xxxx / 0800000xxxx">
                    </div>

                    <label for="fornotelp">Jenis kelamin</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-venus-mars custom"></i></span>
                        <select style="width : 200px;" name="editjekel" class="form-control" placeholder="">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inifoto">Foto calon pelamar</label>
                        <input type="file" id="inifoto">
                        <p class="help-block">upload foto anda disini.</p>
                    </div>

                    <?php
                    }
                    ?>
                   
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                    </form>
        
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