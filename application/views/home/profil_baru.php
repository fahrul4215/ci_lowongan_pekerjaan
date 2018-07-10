<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
	<!-- Site Title -->
	<title>Profile</title>

	<?php include 'head.php'; ?>
</head>
<body>
	<!-- start banner Area -->
	<section class="banner-area relative" id="home" style="padding: 5% 0">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-lg-12 text-center">
					<h1 class="text-white">
						User Baru
					</h1>
					<h5 class="text-white">
						silahkan lengkapi profil anda
					</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<?php if ($level == 2): ?>
		<!-- Member Area -->
		<section class="blog-posts-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 post-list blog-post-list">
						<div class="single-post">
							<div class="content-wrap">
								<div class="container">
									<h1 class="text-center">Member</h1>
									<h1> <?= $this->session->userdata('masuk')['username']; ?></h1>
									<?= validation_errors() ?>
									<?php if (isset($error)): ?>
										<h3 class="text-center text-danger"><?= $error ?></h3>
									<?php endif ?>
									<hr>
									<?php echo form_open_multipart('home/profilBaru/'.$this->uri->segment(3), array('class' => 'form-horizontal','role' => 'form')); ?>
									<div class="row">
										<!-- left column -->
										<div class="col-md-3">
											<div class="text-center">
												<h6>Upload Foto Anda</h6>
												<input type="file" name="gambar" class="form-control" required>
											</div>
										</div>
										<!-- edit form column -->
										<div class="col-md-9 personal-info">
											<div class="alert alert-info alert-dismissable">
												<a class="panel-close close" data-dismiss="alert">×</a>
												<i class="fa fa-coffee"></i>
												Mohon semua <strong>Data</strong> diisi sesuai dengan identitas anda.
											</div>
											<h3>Personal info</h3>
											<div class="form-group">
												<div class="form-group">
													<label class="col-lg-3 control-label">Nama </label>
													<div class="col-lg-8">
														<input class="form-control" type="text" name="nama" placeholder="Masukkan nama anda" required>
													</div>
													<label class="col-lg-3 control-label">E-mail </label>
													<div class="col-lg-8">
														<input class="form-control" type="email" name="email" placeholder="Masukkan email anda" required>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Jenis Kelamin </label>
														<div class="col-lg-8">
															<input type="radio" name="jkl" value="L" checked> Laki-Laki
															<input type="radio" name="jkl" value="P"> Perempuan
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Tanggal Lahir</label>
														<div class="col-lg-8">
															<input class="form-control" type="date" name="tanggalLahir" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Agama</label>
														<div class="col-lg-8">
															<select name="agama" class="form-control" required>
																<option value="islam">Islam</option>
																<option value="kristen">Kristen</option>
																<option value="hindu">Hindu</option>
																<option value="budha">Budha</option>
																<option value="konghucu">Kong Hu Cu</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">No Telp</label>
														<div class="col-lg-8">
															<input class="form-control" type="text" name="notelp" placeholder="Masukkan No Telpon anda" required maxlength="12">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Alamat</label>
														<div class="col-lg-8">
															<textarea name="alamat" class="form-control" required placeholder="Masukkan Alamat anda"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"></label>
														<div class="col-md-8">
															<input type="submit" class="btn btn-primary" value="Save Changes" name="inputProfil">
														</div>
													</div>
												</div>
											</div>
											<?php echo form_close(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php else: ?>
			<!-- Perusahaan Area -->
			<section class="blog-posts-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 post-list blog-post-list">
							<div class="single-post">
								<div class="content-wrap">
									<div class="container">
										<h1 class="text-center">Perusahaan</h1>
										<h1> <?= $this->session->userdata('masuk')['username']; ?></h1>
										<?= validation_errors() ?>
										<?php if (isset($error)): ?>
											<h3 class="text-center text-danger"><?= $error ?></h3>
										<?php endif ?>
										<hr>
										<?php echo form_open_multipart('home/profilBaru/'.$this->uri->segment(3), array('class' => 'form-horizontal','role' => 'form')); ?>
										<div class="row">
											<!-- left column -->
											<div class="col-md-3">
												<div class="text-center">
													<h6>Upload Logo Perusahaan Anda</h6>
													<input type="file" name="gambar" class="form-control" required>
												</div>
											</div>
											<!-- edit form column -->
											<div class="col-md-9 personal-info">
												<div class="alert alert-info alert-dismissable">
													<a class="panel-close close" data-dismiss="alert">×</a>
													<i class="fa fa-coffee"></i>
													Mohon semua <strong>Data</strong> diisi sesuai dengan identitas perusahaan.
												</div>
												<h3>Company info</h3>
												<div class="form-group">
													<div class="form-group">
														<label class="col-lg-3 control-label">Nama Perusahaan</label>
														<div class="col-lg-8">
															<input class="form-control" type="text" name="namaPerusahaan" placeholder="Masukkan Nama Perusahaan anda" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Alamat</label>
														<div class="col-lg-8">
															<textarea name="alamat" class="form-control" required placeholder="Masukkan Alamat Perusahaan anda"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">No Telp</label>
														<div class="col-lg-8">
															<input class="form-control" type="text" name="noTelp" placeholder="Masukkan No Telpon Perusahaan anda" required maxlength="12">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">E-mail </label>
														<div class="col-lg-8">
															<input class="form-control" type="email" name="email" placeholder="Masukkan email Perusahaan anda" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Website </label>
														<div class="col-lg-8">
															<input class="form-control" type="text" name="website" placeholder="Masukkan Website Perusahaan anda" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Tahun Berdiri</label>
														<div class="col-lg-8">
															<input class="form-control" type="date" name="tahunBerdiri" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Jenis Perusahaan</label>
														<div class="col-lg-8">
															<select name="idJenisPerusahaan" class="form-control" required>
																<?php foreach ($jenisPerusahaan as $value): ?>
																	<option value="<?= $value->idJenisPerusahaan ?>"><?= $value->jenisPerusahaan ?></option>
																<?php endforeach ?>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Visi</label>
														<div class="col-lg-8">
															<textarea name="visi" class="form-control" required placeholder="Masukkan Visi Perusahaan anda"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Misi</label>
														<div class="col-lg-8">
															<textarea name="misi" class="form-control" required placeholder="Masukkan Misi Perusahaan anda"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"></label>
														<div class="col-md-8">
															<input type="submit" class="btn btn-primary" value="Save Changes" name="inputProfil">
														</div>
													</div>
												</div>
												<?php echo form_close(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif ?>
		<?php include 'foot.php'; ?>
	</body>
	</html>