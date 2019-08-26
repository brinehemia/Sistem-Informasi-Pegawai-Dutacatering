<?php  
  include 'pelamarheader.php';
  $page= 'profile'; 
  include 'pelamarsidebar.php';
?>

  <!-- ======================CONTENT============================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="profile.php">Profile</a></li>
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
          <?php
    
          
          $read = $con->readprofile($_GET['iduser']); 
          $data = mysqli_fetch_array($read);

          $read1 = $con->readprofil($_GET['iduser']); 
          $data1 = mysqli_fetch_array($read1);
          ?>

              <img class="profile-user-img img-responsive img-circle" src="../assets/image/user.png" alt="User profile picture">

              <h3 class="profile-username text-center">Selamat Datang, <?php echo base64_decode($data['namapelamar'])?></h3>

              <p style="font-size:13px;" class="text-muted text-center"> lowongan yang dilamar adalah sebagai <?php echo $data['namalowongan']?></p>

              <ul class="list-group list-group-unbordered">
                <li style="margin-left:7px; " class="list-group-item">
                  <b>Email :</b> <a style="font-size:12px;" class="pull-right label label-primary right"><?php echo $data['email'];?></a>
                </li>  
                <li style="margin-left:7px;" class="list-group-item">
                  <b>No telepon :</b> <a style="font-size:12px;" class="pull-right label label-danger right"><?php echo $data['no_telp'];?></a>
                </li> 
                <li style="margin-left:7px;" class="list-group-item">
                <b>Status</b> <a style="font-size:12px;" class="pull-right label label-success right"><?php echo $data['status'];?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div style="margin-left:7px;" class="box-body">
              <strong><i class="fa fa-graduation-cap margin-r-5"></i> Riwayat Pendidikan</strong>

              <?php echo $data['pendidikan']?>

              <hr>

              <strong><i class="fa fa-book margin-r-5"></i> Riwayat Pekerjaan</strong>

              <?php echo $data['pengalamankerja']?>

              <hr>

              <strong><i class="fa fa-gears margin-r-5"></i> Skill </strong>

              <?php echo $data['skill']?>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class=""><?php echo $data['alamat']?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Tentang Diri</strong>

              <p><?php echo $data['tentangdiri']?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <!-- COL MD 9 -->   <!-- COL MD 9 -->   <!-- COL MD 9 -->   <!-- COL MD 9 -->

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab"> <i class="fa fa-black-tie"></i>&nbsp Detail profile</a></li>
              <li><a href="#timeline" data-toggle="tab"><i class="fa fa-calendar"></i>&nbsp Timeline</a></li>
            </ul>
            <div class="tab-content">
              <div style="margin-left:10px;" class="active tab-pane" id="activity">
              <br/>
              <p><b>Informasi pribadi</b></p>
                <table height="170px" border="0" width="100%">
                
                    <tr>
                        <td width="110px"><i  class="fa fa-user-o"></i>&nbsp&nbsp<b>Nama</b></td>
                        <td><b>:</b>&nbsp <?php echo base64_decode($data['namapelamar'])?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;"  class="fa fa-map-marker"></i>&nbsp&nbsp&nbsp<b>Alamat</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data['alamat']?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;" class="fa fa-envelope"></i>&nbsp&nbsp&nbsp<b>Email</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data['email']?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;" class="fa fa-unlock-alt"></i>&nbsp&nbsp&nbsp<b>Password</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data['password']?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;" class="fa fa-phone-square"></i>&nbsp&nbsp&nbsp<b>No Telp</b> </td>
                        <td><b>:</b>&nbsp <?php echo base64_decode($data['no_telp'])?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;" class="fa fa-calendar-check-o"></i>&nbsp&nbsp&nbsp<b>TTL & Usia</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data['tempat_lahir']."/". $data['tanggal_lahir']." & ".$data['usia']." Tahun"?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:9px;" class="fa fa-venus-mars custom"></i>&nbsp&nbsp&nbsp<b>Jenis kelamin</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data['jenis_kelamin']?></td>
                    </tr>

                    <tr>
                        <td ><b>Status</b> </td>
                        <td><b>:</b>&nbsp<a class="btn btn-success"> <?php echo $data['status']?></a></td>
                    </tr>
                </table>
                 <br/>

                 <!-- TABEL INFORMASI WAWANCARA -->   <!-- TABEL INFORMASI WAWANCARA -->  <!-- TABEL INFORMASI WAWANCARA -->  <!-- TABEL INFORMASI WAWANCARA -->
               
                  <p><b>Informasi wawancara</b></p>
                  <?php
                    
                  ?>
                  <table height="100px" border="0" width="100%">
                
                    <tr>
                        <td width="110px"><i  class="fa fa-user-o"></i>&nbsp&nbsp<b>Nama Penguji</b></td>
                        <td><b>:</b>&nbsp <?php echo $data1['namapegawai']?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;"  class="fa fa-calendar"></i>&nbsp&nbsp&nbsp<b>Tanggal </b> </td>
                        <td><b>:</b>&nbsp <?php echo $data1['tgl_wawancara']?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;" class="fa fa-clock-o"></i>&nbsp&nbsp&nbsp<b>Jam</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data1['jam']?></td>
                    </tr>

                    <tr>
                        <td ><i style="width:10px;" class="fa fa-unlock-alt"></i>&nbsp&nbsp&nbsp<b>Keterangan</b> </td>
                        <td><b>:</b>&nbsp <?php echo $data1['keterangan']?></td>
                    </tr>

                  
              
                
                </table>
                 

              </div>
              




              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red"> 
                        <?php 
                        
                        $tanggalwawancara = $data1['tgl_wawancara'];
                        $jamwawancara = $data1['jam'];
                        echo date("l, d F Y", strtotime($tanggalwawancara));
                         ?>
                       
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      

                      <h3 class="timeline-header"><a href="#">Divisi Kepegawaian</a> <small style="color:orange;">Harap Diperhatikan</small></h3>

                      <div class="timeline-body">
                        Jadwal wawancara Anda tanggal : <a class="btn btn-success btn-xs"><?php  echo date("d F Y", strtotime($tanggalwawancara));?></a>
                      pada jam : <a class="btn btn-danger btn-xs"><?php echo date("H:i", strtotime($jamwawancara)); ?> WIB</a><br>
                     <br>

                      <p><b>Ketentuan wawancara:</b><p>
                      1.  Pelamar wajib Standby 10 Menit lebih awal dari jam wawancara <br>
                      2.  Pelamar yang terlambat lebih dari 15 Menit dari jadwal akan dinyatakan tidak lolos <br>
                      3.  Keterlambatan akan mempengaruhi penilaian<br>
                      4.  Siapkan alat bantu inputan audio untuk wawancara seperti Headset/Headphone, Mic<br>
                      5.  pastikan koneksi internet Anda lancar<br>
                      6.  jika terjadi Disconect pada internet anda, coba untuk connect kembali dan jika masih sama coba hubungi penguji<br>
                      7.  Pelamar wajib berpakaian rapi<br>
                      8.  keputusan akan diumumkan paling cepat 3 hari setelah wawancara dan bersifat mutlak<br>
                      9.  Pengumuman dapat dilihat pada menu timeline  
                      </div>
                      <div class="timeline-footer">
                        
                        
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      

                      <h3 class="timeline-header no-border"><a href=""> <?php echo $data1['namapegawai']; ?></a> <small>Penguji Wawancara</Small>
                      </h3>
                      <div class="timeline-body">
                      <p><b>Data Penguji:</b><p>
                      <i style="width:10px;" class="fa fa-user"></i> &nbsp&nbspNama : <?php echo $data1['namapegawai'];?><br>
                      <i style="width:10px;" class="fa fa-envelope"></i> &nbsp&nbspEmail : <?php echo $data1['email'];?><br>
                      <i style="width:10px;" class="fa fa-phone-square"></i> &nbsp&nbspNo.hp : <?php echo $data1['nohp'];?><br>
                      
                      </div>
                      <div class="timeline-footer">

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-warning bg-red"></i>

                    <div class="timeline-item">
                    

                      <h3 class="timeline-header"><a href="#">Notice</a></h3>

                      <div class="timeline-body">
                        Jangan lupa untuk mengikuti wawancara pada jadwal yang sudah di tentukan & baca setiap ketentuan yang ada diatas 
                        <br><br><br><br>
                        <p align="right">Hormat kami, <br> Tim divisi Kepegawaian <br> Duta catering malang</p> 
                      </div>
                      <div class="timeline-footer">
                        
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          Pengumuman
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include 'pelamarfooter.php';
 ?>