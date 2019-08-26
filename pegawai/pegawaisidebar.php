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
      <?php
      include_once '../db/mdl_pelamar.php';
      $con = new pelamar();
      
      ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="<?php if ($page == 'dashboard') {echo 'active';} ?>">

          <a href="../pegawai/index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

          

          <li class="<?php if ($page == 'tim') {echo 'active';} ?>">

          <a href="../pegawai/datatim.php">
            <i class="fa fa-users"></i> <span>Daftar tim</span>
          </a>
          </li>

          <!-- MENU Pengajuan -->
          <li class="<?php if ($page == 'wawancara') {echo 'active';} ?>">
          <a href="../pegawai/formpengajuan.php">
            <i class="fa fa-users"></i> <span>pengajuan permohonan</span>
          </a>
          </li>

          <li class="<?php if ($page == 'requestpegawai') {echo 'active';} ?>">

          <a href="../pegawai/formrequestpegawai.php">
            <i class="fa fa-users"></i> <span>Request penambahan pegawai</span>
          </a>
          </li>

         
       

        

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
