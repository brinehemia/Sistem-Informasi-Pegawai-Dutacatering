<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form pendaftaran pegawai</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<script src="https://use.fontawesome.com/e3ec40cc39.js"></script>
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="wizard-heading">Form pendaftaran pegawai</div>
		<div class="wizard-v6-content">
			<div class="wizard-form">
		        <form class="form-register" name="form" id="form" action="../controller/pendaftarancontroller.php?action=addfadmin" method="POST">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>1</span></p>
			            	<span class="step-text">Data diri</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Personal Info</h3>
			                		<span>1/3</span>
								</div>

								<?php
							
								require '../db/mdl_pendaftaran.php';
								$conn = new pendaftaran();
								?>

								<input name="postidauto" type="hidden" value="<?php $conn->autocode_pelamar() ?>" readonly>
								<input name="postidcvauto" type="hidden" value="<?php $conn->autocode_cv()  ?>" readonly>
								<input name="postid1cvauto" type="hidden" value="<?php $conn->autocode_cv()  ?>" readonly>


								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="nama" name="postnama" required>
											<span class="label">Nama:</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="email" name="postemail" required>
											<span class="label">Email:</span>
										</label>
									</div>
								</div>
								<!-- End row div -->

								<div class="form-row">
									<div style="padding-top: 24px" class="form-holder">
										<label class="form-row-inner">
											<input type="password" class="form-control" id="Password" name="postpassword" required>
											<span class="label">Password:</span>
										</label>
									</div>
									<div class="form-holder">
										<label for="day" class="special-label-1">Jenis Kelamin: </label>
										<select name="postjenkel" id="day" class="form-control">
											<option value="" selected>Pilih:</option>
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
								</div>
								<!-- End row div -->

								<div style="padding-top: 24px" class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" name="posttempatlahir" id="Tempatlahir" class="form-control"  required>
											<span class="label">Tempat Lahir</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input placeholder="Tanggal Lahir" onfocus="(this.type='date')" type="text" class="form-control" id="tanggal" name="posttanggallahir" required>
											<span class="label"></span>
										</label>
									</div>	
								</div>
								<!-- End row div -->

								<div class="form-row" style="padding-top: 24px">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="postalamat" id="alamatlengkap" class="form-control"  required>
											<span class="label">Alamat Lengkap:</span>
										</label>
									</div>
								</div>
								<!-- End row div -->

								<div style="padding-top: 24px; padding-bottom: 24px;" class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="usia" name="postusia" required>
											<span class="label">Usia:</span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="notelp" name="postnotelp" required>
											<span class="label">No telp:</span>
										</label>
									</div>
								</div>
								<label style="font-family: Arial; font-size: 14px; color:rgb(255, 219, 14);"><i class="fa fa-warning"></i>  Cek kembali data diri anda</label>
								<!-- End row div -->	
							</div>
						</section>
						




						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>2</span></p>
			            	<span class="step-text">Curriculum vitae</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Data pelamar</h3>
			                		<span>2/3</span>
			                	</div>
		                		<div class="form-images">
		                			<img src="images/wall1.jpg" alt="wall1">
		                		</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Pilih Lowongan pekerjaan </label>
										<select name="postlowong" id="room" class="form-control">
										<?php
												$read = $conn->readlowongan();
												while($fetch = $read->fetch_array()){ 
												?>
												<option value="<?php echo $fetch['idlowongan']?>"><?php echo $fetch['namalowongan'].' - kuota pegawai yang dibutuhkan : '.$fetch['jumlah'].' Orang'  ?></option>
												<?php
												}
												?>									
										</select>
										<span class="select-btn">
											<i class="zmdi zmdi-chevron-down"></i>
										</span>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Riwayat pendidikan </label><br><br>
										<textarea placeholder="Describe yourself here..." id="editor1" name="postpendidikan" width="auto" cols="110" class="form-control"  placeholder="Enter Keterangan Untuk Kategori Soal"></textarea>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Deskripsi skill </label><br><br>
										<textarea id="editor2" name="postskill" style="resize: none;" rows="6" cols="130" class="form-control"  placeholder="Enter Keterangan Untuk Kategori Soal"></textarea>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Riwayat pengalaman </label><br><br>
										<textarea id="editor3" name="postpengalaman" style="resize: none;" rows="6" cols="130" class="form-control"  placeholder="Enter pengalaman kerja Anda"></textarea>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Tentang diri Anda </label><br><br>
										<textarea name="postdiri" style="resize: none;" rows="6" cols="110" class="form-control"  placeholder="Ceritakan singkat tentang diri Anda"></textarea>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1"> Ceritakan singakat alasan Anda memilih lowongan di atas </label><br><br>
										<textarea name="postalasan" style="resize: none;" rows="6" cols="110" class="form-control"  placeholder="Alasan anda ingin bergabung dengan perusahaan kami"></textarea>
									</div>
								</div>
								
							</div>
						</section>
						


			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>3</span></p>
			            	<span class="step-text">Konfirmasi</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Konfirmasi Detail</h3>
			                		<span>3/3</span>
			                	</div>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											
										</tbody>
									</table>
									
								</div>
							</div>
			            </section>
					</div>
				
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
	<script src="../assets/dist/js/adminlte.min.js"></script>
	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor1'),
			CKEDITOR.config.width = 800;
			CKEDITOR.replace('editor2'),
			CKEDITOR.replace('editor3')
		  })
		  </script>
</body>
</html>