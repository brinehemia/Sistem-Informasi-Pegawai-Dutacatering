  <?php
  require '../db/mdl_jobs.php';
              $conn = new mdljobs();
  ?>
  <!-- =============================================== -->


  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="<?php if ($page == 'dashboard') {echo 'active';} ?>">

          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="<?php if ($page == 'hiringjob') {echo 'active';} ?> treeview">
          <a href="#">
          <i class="fa fa-black-tie"></i>
            <span>Penerimaan pegawai </span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">

          <!-- Request Pegawai -->
          <li class="<?php if ($subpage == 'admin') {echo 'active';} ?> treeview">
              <a href="#"><i class="fa fa-user-circle "></i> Request Pegawai
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a style="margin-left:-10px;" href="mailreqpegawai.php"><i class="fa  fa-envelope-square text-yellow"></i> Mail Request <span class="pull-right-container">
                          <span class="label label-danger text-white pull-right">
                            <?php
                            
                                $read = $conn->countmail();
                              ?>
                            </span>
                          </span></a></li>

                <li><a style="margin-left:-10px;" href="formreqpegawai.php"><i class="fa fa-file-text-o text-yellow"></i> Pengajuan penambahan</a></li>
              </ul>
            </li>

              <!-- Data penerimaan -->
        <li class="<?php if ($subpage == 'datapenerimaan') {echo 'active';} ?> treeview">
              <a href="#"><i class="fa fa-copy "></i> Data penerimaan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                
                              <!-- DAFTAR LOWONGAN -->
                        <li><a href="../admin/datalowongan.php"><i class="fa fa-check-square-o text-yellow"></i>Daftar Lowongan <span class="pull-right-container">
                          <span class="label label-primary text-white pull-right">
                            <?php
                            
                                $read = $conn->countdatalowongan();
                              ?>
                            </span>
                          </span></a></li>


              <!-- ListPelamar -->
            <li><a href="../admin/datapelamar.php"><i class="fa fa-list text-yellow"></i> Daftar Pelamar <span class="pull-right-container">
              <span class="label label-warning text-white pull-right">
              <?php
                  $read = $conn->countdatapelamar();
                ?>
              </span>
            </span></a></li>

            <li><a href="datapenguji.php"><i class="fa fa-files-o text-yellow"></i>Data Penguji</a></li>

              <!-- END DISINI -->
        </ul></li>


             <!-- DAFTAR LOWONGAN -->
             <li><a href="../admin/penjadwalantest.php"><i class="fa fa-check-square-o"></i>Penjadwalan <span class="pull-right-container">
                <span class="label label-primary text-white pull-right">
                <?php         
                   $read = $conn->countjadwal();
                ?>
                </span>
                 </span></a></li>

        

            <!-- MENU JADWAL WAWANCARA -->
            <li><a href="../admin/jadwalwawancara.php"><i class="fa fa-list"></i> Seleksi wawancara <span class="pull-right-container">
              <span class="label label-success text-white pull-right">
              <?php
                  $read = $conn->countdatawawancara();
                ?>
              </span>
            </span></a></li>
            
            <!-- MENU JADWAL WAWANCARA -->
            <li><a href="../admin/datahasilseleksi.php"><i class="fa fa-file-text-o"></i> Hasil Seleksi <span class="pull-right-container">
              <span class="label label-danger text-white pull-right">
              <?php
                  $read = $conn->countdatawawancara();
                ?>
              </span>
            </span></a></li>

            <!-- MENU JADWAL WAWANCARA -->
            <li><a href="../admin/dataverifikasi.php"><i class="fa fa-file-text-o"></i> Pengaktifan Akun <span class="pull-right-container">
              <span class="label label-danger bg-orange text-white pull-right">
              <?php
                  $read = $conn->countpengaktifanakun();
                ?>
              </span>
            </span></a></li>
               
           <!-- Form List -->
         <li class="treeview">
              <a href="#"><i class="fa fa-copy "></i> Form list
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a style="margin-left:-10px;" href="../admin/formjob.php"><i class="fa fa-file-text-o text-yellow"></i>form pendaftaran</a></li>
                <li><a style="margin-left:-10px;" href="../admin/formlowongan.php"><i class="fa fa-file-text-o text-yellow"></i>form lowongan pekerjaan</a></li>
                <li><a style="margin-left:-10px;" href="../admin/formpenguji.php"><i class="fa fa-file-text-o text-yellow"></i>form penguji</a></li>
                <li><a style="margin-left:-10px;" href="../admin/formwawancara.php"><i class="fa fa-file-text-o text-yellow"></i>form wawancara</a></li>
              </ul>
          </ul>
        </li>


        <!-- KEPEGAWAIAN -->
        <li class="<?php if ($page == 'kepegawaian') {echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Kepegawaian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          
            
            <!-- JOBDESK DAN TIM -->

            <li class="<?php if ($subpage == 'jobdesk') {echo 'active';} ?> treeview">
              <a href="#"><i class="fa fa-tasks"></i> Jobdesk dan Tim
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a style="margin-left:-10px;" href="formjobdesk.php"><i class="fa fa-paste text-yellow"></i>Buat jobdesk baru </a></li>
              <li><a style="margin-left:-10px;" href="formtim.php"><i class="fa fa-users text-yellow"></i>Buat tim </a></li>
              <li><a style="margin-left:-10px;" href="datatim.php"><i class="fa fa-sitemap text-yellow"></i>Pembagian tim & jobdesk</a></li>
              
              
              </ul>
            </li>

             <!-- PENILAIAN    -->

             <li class="<?php if ($subpage == 'penilaian') {echo 'active';} ?> treeview">
              <a href="#"><i class="fa fa-list-alt"></i>  Penilaian Pegawai
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a style="margin-left:-10px;" href="datapenilaian.php"><i class="fa fa-list text-yellow"></i>Data Penilaian</a></li>
              <li><a style="margin-left:-10px;" href="datarekappenilaian.php"><i class="fa fa-book text-yellow"></i>Rekap total skor </a></li>

              </ul>
            </li>

           

             <!-- Prestasi dan pelanggaran -->
          <li class="<?php if ($subpage == 'prestasi') {echo 'active';} ?> treeview">
              <a href="#"><i class="fa fa-user-circle "></i> Prestasi dan pelanggaran
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a style="margin-left:-10px;" href="dataprestasipegawai.php?tahun="><i class="fa fa-certificate text-yellow"></i>Data reward</a></li>
              <!-- <li><a style="margin-left:-10px;" href="#"><i class="fa fa-copy text-yellow"></i>Data kinerja kurang  </a></li>
              <li><a style="margin-left:-10px;" href="#"><i class="fa fa-copy text-yellow"></i>Form teguran  </a></li> -->
              
           
              </ul>
            </li>

             <!-- Training pegawai -->
            <li class="<?php if ($subpage == 'training') {echo 'active';} ?> treeview">
              <a href="#"><i class="fa fa-user-circle "></i> Training pegawai baru
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a style="margin-left:-10px;" href="datatraining.php"><i class="fa fa-circle-o text-yellow"></i>Data pegawai Training</a></li>
              <!-- <li><a style="margin-left:-10px;" href="#"><i class="fa fa-circle-o text-yellow"></i>Pembagian jobdesk & tim  </a></li>
              <li><a style="margin-left:-10px;" href="#"><i class="fa fa-circle-o text-yellow"></i>Pemilihan PJ tim </a></li>
              <li><a style="margin-left:-10px;" href="#"><i class="fa fa-circle-o text-yellow"></i>Penilaian HRD </a></li>
              <li><a style="margin-left:-10px;" href="#"><i class="fa fa-circle-o text-yellow"></i>Penilaian PJ  </a></li> -->
              </ul>
            </li>

            
            <!-- <a class="<?php if ($subpage == 'evaluasi') {echo 'active';} ?>"><a href="dataevaluasi.php"><i class="fa fa-circle-o"></i> Evaluasi & Jenjang Karir</a></li> -->
            
          </ul>
        </li>

      

        <!-- Menu Data User -->
         <!-- <li class="<?php if ($page == 'datauser') {echo 'active';} ?> treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Data User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li class="" ><a href="../admin/DataPelamar.php"><i class="fa fa-user"></i> Admin</a></li>
            <li><a href="../layout/top-nav.html"><i class="fa fa-user"></i> Karyawan</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-user"></i> Magang</a></li>
          </ul>
          </li> -->

          <!-- END LIST  -->
        <!-- </li> -->

        <li class="<?php if ($page == 'dashboard') {echo 'active';} ?>">

          <a href="Datapegawai.php">
            <i class="fa fa-user"></i> <span>Data Pegawai</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../laporan/datapelamar.php"><i class="fa fa-files-o text-orange"></i> Laporan data pelamar</a></li>
            <li><a href="../laporan/penerimaanpegawai.php"><i class="fa fa-files-o text-orange"></i> Laporan penerimaan pegawai</a>
            <li><a href="../admin/datarekappenilaian.php"><i class="fa fa-files-o text-orange"></i> Laporan Rekap penilaian</a>
            <li><a href="../admin/dataprestasipegawai.php"><i class="fa fa-files-o text-orange"></i> Laporan penghargaan</a>
            </li>
          </ul>
        </li>

       
        

        





        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
