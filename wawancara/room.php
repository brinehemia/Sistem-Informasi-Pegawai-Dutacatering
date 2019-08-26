<?php  
 session_start();
 $loginlevel = $_SESSION['level'];
 
include 'wawancaraheader.php';
include 'sidebarwawancara.php';


                include_once '../db/mdl_pelamar.php';
                $con = new pelamar();
               
               $read1 = $con->readprofil($_GET['iduser']); 
               $data1 = mysqli_fetch_array($read1);

                $read = $con->readprofile($_GET['iduser']); 
                $data = mysqli_fetch_array($read);
              
         
?>
 <meta http-equiv="refresh" content="120; URL=room.php">
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
    <!-- <br/><br/> -->
        <h3 style="margin-left:10px;">Dashboard Wawancara <small> Duta catering Malang
         Pelamar <a href="#"><?php echo base64_decode($data['namapelamar']); ?></a> - Penguji <a href="#"><?php echo $data1['namapegawai']; ?>.</a></small>
        </h3>
<a style="margin-left:10px" class="btn btn-primary" type="button" onclick="history.back()"><i style="width:12px;" class="fa fa-mail-reply"></i>&nbsp&nbspKembali</a>
        <section class="content">
        <div class="row">
        
        

        <div class="col-md-5">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../assets/image/user.png" alt="User Image">
                <span class="username">Kamera 1 Anda</span>
                <span class="description">Siapkan & Cek inputan audio sebelum wawancara </span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

        <style>
            .videoContainer {
                position: relative;
                width: 470px;
                height: 470px;
            }
            .videoContainer video {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .volume_bar {
                position: absolute;
                width: 6px;
                height: 70px;
                right: 0px;
                bottom: 0px;
                margin-bottom :45px;
                margin-right :-20px;
                background-color: #12acef;
            }
        </style>
        <!-- <button id="screenShareButton"></button> -->
        <!-- <form id="createRoom">
            <input id="sessionInput"/>
            <button type="submit">Create it!</button>
        </form> -->
        <div style="margin-top:-50px;" class="videoContainer">
            <video id="localVideo" style="width : 485px; height: 485px;" oncontextmenu="return false;"></video>
            <div id="localVolume" class="volume_bar"></div>
        </div>



            </div>
            <!-- /.box-body -->
            
           
            <div class="box-footer">
           
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>






        <div class="col-md-5">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../assets/image/user.png" alt="User Image">
                <span class="username">Kamera 2 wawancara</span>
                <span class="description">Siapkan & Cek inputan audio sebelum wawancara</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <div style="margin-top:-50px;" id="remotes"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="out/simplewebrtc-with-adapter.bundle.js"></script>
        <script>
            // grab the room from the URL
            var room = location.search && location.search.split('?')[1];

            // create our webrtc connection
            var webrtc = new SimpleWebRTC({
                // the id/element dom element that will hold "our" video
                localVideoEl: 'localVideo',
                // the id/element dom element that will hold remote videos
                remoteVideosEl: '',
                // immediately ask for camera access
                autoRequestMedia: true,
                debug: false,
                detectSpeakingEvents: true
            });

            // when it's ready, join if we got a room from the URL
            webrtc.on('readyToCall', function () {
                // you can name it anything
                if (room) webrtc.joinRoom(room);
            });

            function showVolume(el, volume) {
                if (!el) return;
                if (volume < -45) { // vary between -45 and -20
                    el.style.height = '0px';
                } else if (volume > -20) {
                    el.style.height = '100%';
                } else {
                    el.style.height = '' + Math.floor((volume + 100) * 100 / 25 - 220) + '%';
                }
            }
            webrtc.on('channelMessage', function (peer, label, data) {
                if (data.type == 'volume') {
                    showVolume(document.getElementById('volume_' + peer.id), data.volume);
                }
            });
            webrtc.on('videoAdded', function (video, peer) {
                console.log('video added', peer);
                var remotes = document.getElementById('remotes');
                if (remotes) {
                    var d = document.createElement('div');
                    d.className = 'videoContainer';
                    d.id = 'container_' + webrtc.getDomId(peer);
                    d.appendChild(video);
                    var vol = document.createElement('div');
                    vol.id = 'volume_' + peer.id;
                    vol.className = 'volume_bar';
                   
                        video.style.width = '485px';
                        video.style.height = '485px';
                 
                    d.appendChild(vol);
                    remotes.appendChild(d);
                }
            });
            webrtc.on('videoRemoved', function (video, peer) {
                console.log('video removed ', peer);
                var remotes = document.getElementById('remotes');
                var el = document.getElementById('container_' + webrtc.getDomId(peer));
                if (remotes && el) {
                    remotes.removeChild(el);
                }
            });
            webrtc.on('volumeChange', function (volume, treshold) {
                //console.log('own volume', volume);
                showVolume(document.getElementById('localVolume'), volume);
            });

            // Since we use this twice we put it here
            function setRoom(name) {
                $('form').remove();
                // $('h1').text(name);
                // $('#subTitle').text('Link to join: ' + location.href);
                $('body').addClass('active');
            }

            if (room) {
                setRoom(room);
            } else {
                $('form').submit(function () {
                    var val = $('#sessionInput').val().toLowerCase().replace(/\s/g, '-').replace(/[^A-Za-z0-9_\-]/g, '');
                    webrtc.createRoom(val, function (err, name) {
                        console.log(' create room cb', arguments);

                        var newUrl = location.pathname + '?' + name;
                        if (!err) {
                            history.replaceState({foo: 'bar'}, null, newUrl);
                            setRoom(name);
                        } else {
                            console.log(err);
                        }
                    });
                    return false;
                });
            }

            var button = $('#screenShareButton'),
                setButton = function (bool) {
                    button.text(bool ? 'share screen' : 'stop sharing');
                };
            webrtc.on('localScreenStopped', function () {
                setButton(true);
            });

            setButton(true);

            button.click(function () {
                if (webrtc.getLocalScreen()) {
                    webrtc.stopScreenShare();
                    setButton(true);
                } else {
                    webrtc.shareScreen(function (err) {
                        if (err) {
                            setButton(true);
                        } else {
                            setButton(false);
                        }
                    });

                }
            });
        </script>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
            
            
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>



<!-- INI FORM PENILAIAN -->


        
      <div 
      <?php 

       if ( $loginlevel == 'pelamar' ) {
        echo 'style="display: none"'; 
       } 
       ?>
       class="col-md-7">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
            <li style="margin-right:10px;"><a href="#tab_4" data-toggle="tab"><i class="fa fa-file-text-o"></i></i>&nbsp&nbspData Pelamar</a></li>
              <li style="margin-right:10px;"><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-file-text-o"></i></i>&nbsp&nbspCatatan pelamar</a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-file-text">&nbsp&nbsp</i>Penilaian Pelamar</a></li>
              
              <li class="pull-left header"><i class="fa fa-black-tie"></i>Form Penilaian Pegawai</li>
            </ul>
            <div class="tab-content">
             <!-- form start -->
                
            <!-- /.tab-pane 1 -->
            <div class="tab-pane active" id="tab_1-1">
            
              <div class="box-body">

              
                <form class="form-horizontal" action="../controller/pelamarcontroller.php?action=addpenilaianpelamar" Method="POST">

                <input name="postidpenilaianpelamar" type="hidden" value="<?php $con->autocode_penilaianpelamar() ?>" readonly>
                <input name="postidwawancara" type="hidden" value="<?php echo $data1["idwawancara"]; ?>" readonly>
                <input name="postlink" type="hidden" value="<?php echo $_GET['iduser']; ?>" readonly>
                  
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Penilaian Kompetensi :</label>
                      <div class="col-sm-3">
                        <select name="postkompetensi" id="kategori" class="form-control" >
                        <Option value="0">Pilih</Option>
                        <Option value="1">Kurang</Option>
                        <Option value="2">Baik</Option>
                        <Option value="3">Sangat Baik</Option>
                        </select>
                       
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Penilaian Atitude :</label>
                      <div class="col-sm-3">
                        <select name="postatitude" id="kategori" class="form-control" >
                        <Option value="0">Pilih</Option>
                        <Option value="1">Kurang</Option>
                        <Option value="2">Baik</Option>
                        <Option value="3">Sangat Baik</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Penilaian Komunikasi :</label>
                      <div class="col-sm-3">
                        <select name="postkomunikasi" id="kategori" class="form-control" >
                        <Option value="0">Pilih</Option>
                        <Option value="1">Kurang</Option>
                        <Option value="2">Baik</Option>
                        <Option value="3">Sangat Baik</Option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Penilaian Grooming :</label>
                      <div class="col-sm-3">
                        <select name="postgrooming" id="kategori" class="form-control" >
                        <Option value="0">Pilih</Option>
                        <Option value="1">Kurang</Option>
                        <Option value="2">Baik</Option>
                        <Option value="3">Sangat Baik</Option>
                        </select>
                       
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Penilaian antusiasme :</label>
                      <div class="col-sm-3">
                        <select name="postantusiasme" id="kategori" class="form-control" >
                        <Option value="">Pilih</Option>
                        <Option value="1">Kurang</Option>
                        <Option value="2">Baik</Option>
                        <Option value="3">Sangat Baik</Option>
                        </select>
                       
                      </div>
                    </div>
                 

                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="pull-right btn btn-primary">Simpan penilaian</button>
                </div>
               
                  
              </div>              


                <!-- /.tab-pane 3 -->
                <div class="tab-pane" id="tab_3-2">
                        <b>Catatan wawancara:</b><br><br>

                      <Textarea style="resize: none;" id="editor1" name="postcatatanlain" class="form-control"></Textarea>  
                </div>

                 <!-- /.tab-pane 4 -->
                 <div class="tab-pane" id="tab_4">

                 <b>Data Diri Pelamar:</b><br>
                 <table height="170px" border="0" width="100%">
                
                <tr>
                    <td width="110px"><i  class="fa fa-user-o"></i>&nbsp&nbsp<b>Nama</b></td>
                    <td><b>:</b>&nbsp <?php echo base64_decode($data['namapelamar']) ?></td>
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
                    <td><b>:</b>&nbsp <?php echo base64_decode($data['password'])?></td>
                </tr>

                <tr>
                    <td ><i style="width:10px;" class="fa fa-phone-square"></i>&nbsp&nbsp&nbsp<b>No Telp</b> </td>
                    <td><b>:</b>&nbsp <?php echo base64_decode($data['no_telp']) ?></td>
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
                    <td ><i style="width:9px;" class="fa fa-venus-mars custom"></i>&nbsp&nbsp&nbsp<b>Perkerjaan dilamar</b> </td>
                    <td><b>:</b>&nbsp <?php echo $data['namapekerjaan']?></td>
                </tr>
            </table>
            <br><br>     
              
              <b>Data CV Pelamar:</b>
              <table  height="170px" width="100%">
                
                <tr>
                    <td width="200px"><i  class="fa fa-graduation-cap"></i>&nbsp&nbsp<b>Riwayat Pendidikan:</b></td>
                    <td>&nbsp <?php echo $data['pendidikan']?></td>
                </tr>

                <tr>
                    <td ><i  class="fa fa-gears"></i>&nbsp&nbsp&nbsp<b>Skill dimiliki:</b> </td>
                    <td>&nbsp <?php echo $data['skill']?></td>
                </tr>

                <tr>
                    <td ><i  class="fa fa-book"></i>&nbsp&nbsp&nbsp<b>pengalaman kerja:</b> </td>
                    <td>&nbsp <?php echo $data['pengalamankerja']?></td>
                </tr>

                <tr>
                    <td ><i  class="fa fa-file-text-o"></i>&nbsp&nbsp&nbsp<b>tentang diri:</b> </td>
                    <td>&nbsp <?php echo $data['tentangdiri']?></td>
                    <br> <br>
                </tr>

                <tr>
               
                    <td ><i  class="fa fa-file-text-o"></i>&nbsp&nbsp&nbsp<b>Alasan:</b> </td>
                    <td><br><p>&nbsp <?php echo $data['alasan']?> <br></p></td>
                </tr>

              
            </table>

                       
                </div>
                </form>
          </div>
      </div> 
    
    
     
    </div>



    <!-- /.END Section CONTENT -->
    </section>

  </div>
  <!-- /.content-wrapper -->

  

<?php 
include 'wawancarafooter.php';
 ?>



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
setTimeout(function(){
   window.location.reload(1);
}, 120000);
</script>