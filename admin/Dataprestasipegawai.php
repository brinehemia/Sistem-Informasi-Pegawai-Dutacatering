<?php 
include 'header.php';
$page= 'kepegawaian';
$subpage= 'prestasi';
include 'adminsidebar.php';
require '../db/mdl_penilaian.php';
$conn = new penilaian();
?>
 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Prestasi pegawai
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
      <div class="box"><br>
        <div class="box-header with-border">
        <div style="margin-top:25px; margin-left:30px;" class="pull-left">
            <img  src="../assets/image/mankepblack.png" width="205px"></div>
            <br><center> <h2 style="font-size:25px; margin-right:150px;"   class="box-title"><b>Laporan Rekomendasi Reward Kinerja Pegawai</b><br> </h2> 
             <br><p style="margin-right:170px; margin-top:3px;" >Jl. Ir. Soekarno No.26, Dadaprejo, Kec. Junrejo, Kota Batu, Jawa Timur 65233<br>
              No.Telp (0341) 467077, Fax: (0341) 467077, HP: 0816556351(WA)</center><p>
        </div>
        <br><br>
        <div style="padding-right:100px;" class="pull-right">
        <form method="GET">
            <div>
    <Select name="tahun"  style="text-align:center width:300px; height:33px;">
        <option value="">-  Pilih tahun akan dikelola  - </option>
        <?php
               
               $tahun = $conn->readtahun();
               while($datatahun = $tahun->fetch_array()){ 
                    ?>
    <option value="<?php echo $datatahun['idtahun'] ?>"><?php echo $datatahun['namatahun'] ?></option>
    <?php
               }
    ?>
    </Select>
    <button type="submit" class="  btn btn-primary">proses</button>
            </div>
        </form>

    </div>
        
        <div class="box-body" >
       
           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Id Pegawai</th>
                  <th>Alamat</th>
                  <th>Username</th>
                  <th>Nomor hp</th>
                  <th>Dari Divisi</th>
                  <th>Total penilaian</th>
                  <th>Lama bekerja</th>
                 
              
                 
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
               $tahunini= $_GET['tahun'];
                $read = $conn->readprestasi($tahunini);
				while($fetch = $read->fetch_array()){ 
				        ?>
            
                <tr>
                    
                  <td><?php echo $fetch['namapegawai'];?></td>
                  <td><?php echo $fetch['idpegawai'];?></td>
                  <td><?php echo $fetch['alamat'];?></td>
                  <td><?php echo $fetch['username'];?></td>
                  <td><?php echo $fetch['nohp']?></td>
                  <td><?php echo $fetch['namadivisi']?></td>
                  <td><?php echo $fetch['totalskor']?> Skor <i class="fa fa-check-circle text-primary"></i></td>
                  <td><?php echo $fetch['jumlahhari']?> Hari <i  class="fa fa-check-circle text-primary"></td>
                  
                  
                  <td>
                    <a class="btn btn-success">Berhak mendapat reward</a>
                 </td>
				</tr>
                <?php
					      }
				        ?>
                </tbody>
              </table>
            
            </div>
        <!-- /.box-body -->
       

        <div class="box-footer">
       
        <p style=" padding-left:70px; padding-right:70px;">Berdasarkan penilaian kinerja pegawai dan data yang kami peroleh dalam 1 tahun (12 kali penilaian), Daftar nama pegawai diatas merupakan data pegawai yang layak mendapat bonus upah kinerja atau reward 
            karena kinerja yang baik selama 1 tahun bekerja di perusahaan adapun penilaian yang kami lakukan adalah dengan menilai langsung berdasarkan 10 indikator penilaian yang divisi kepegawaian tetapkan. oleh karena itu kami 
            harap Divisi Keuangan dapat mempertimbangkan daftar nama diatas untuk mendapat reward.
        </p><br>
        <p class="pull-right" style="text-align:right; padding-left:70px; padding-right:70px;"><b>Malang, <?php echo date("d M Y") ?><br>
        Hormat kami, Divisi Kepegawaian</br> </p><br><br><br><br><br><br>
        <div class="pull-right">
        
        <p style=" padding-right:70px;">(________________________)</p>
        </div>
       
         
        <a class="btn bg-olive" type="button" href="../laporan/laporandataprestasi.php?tahun=<?php echo $_GET['tahun'] ?>"><i style="width:12px;" class="fa fa-file-o"></i>  Laporan rekap penilaian</a>
        
      </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


    </section>

    
  </div>
  <!-- /.content-wrapper -->

<?php 
include 'footer.php';
 ?>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'scrollX'     : true,
      "pageLength": 50,
      "lengthMenu": [ 10, 25, 50 ],
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
