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

          <a href="../jobs/index.php?iduser=<?php echo $loginid?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="<?php if ($page == 'profile') {echo 'active';} ?>">

          <a href="../jobs/profile.php?iduser=<?php echo $loginid?>">
            <i class="fa fa-user"></i> <span>Profile Saya</span>
          </a>
        </li>
        
        
        <!-- MENU ROOM WAWANCARA -->
        <li class="<?php if ($page == 'wawancara') {echo 'active';} ?>">

          <a href="../wawancara/room.php?iduser=<?php echo $loginid?>">
            <i class="fa fa-users"></i> <span>Wawancara</span>
          </a>
          </li>

          <!-- MENU VERIFIKASI AKUN -->
       <li class="<?php if ($page == 'verifikasi') {echo 'active';} ?>"  
       
       <?php 
        
       $tampilverifikasi = $con->hideverifikai($loginid); 
       $dataverifikasi = mysqli_fetch_array($tampilverifikasi); 
       
       if ($dataverifikasi['status'] == 'Tidak Diterima pekerjaan') {
        echo 'style="display: none"'; 
       } else if ($dataverifikasi['status'] == 'Terjadwal' || $dataverifikasi['status'] = 'Registrasi') {
        echo 'style = "display:none"';
       } else if ($dataverifikasi['status'] == '') {
          echo 'style = "display:none"';
       }
       ?>>
        <!-- END class-->


          <a href="../jobs/verifikasiakun.php?iduser=<?php echo $loginid?>">
            <i class="fa fa-check-circle"></i> <span>Verifikasi akun</span>
          </a>
        </li>

        

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
