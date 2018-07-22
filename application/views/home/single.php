<!DOCTYPE html>
<html lang="id" class="no-js">
	<head>
		<!-- Site Title -->
		<title>Detail Lowongan Pekerjaan</title>

		<?php include 'head.php'; ?>
	</head>
	<body>
		<?php include 'header.php'; ?>
		<!-- start banner Area -->
		<section class="banner-area relative" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Detail Pekerjaan
						</h1>	
						<p class="text-white link-nav"><a href="<?= base_url('index.php/home') ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url('index.php/home/single/'.$this->uri->segment(3)) ?>"> Detail Pekerjaan</a></p>
					</div>											
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start post Area -->
		<section class="post-area section-gap">
			<?php if (isset($error)): ?>
			<div class="container">
				<div class="col-md-12 text-danger text-center">
					<h2 class="text-danger"><?= $error ?></h2>
				</div>
			</div>
			<?php endif ?>
			<div class="container">
				<div class="row justify-content-center d-flex">
					<div class="col-lg-8 post-list">
						<div class="single-post d-flex flex-row">
							<div class="thumb">
								<img src="<?= base_url('assets/home/img/post.png') ?>">
							</div>
							<div class="details">
								<div class="title d-flex flex-row justify-content-between">
									<div class="titles">
										<h4><?= $lowongan[0]->lowongan ?></h4>
										<br>
									</div>
									<ul class="btns">
										<li><?= date('d-m-Y', strtotime($lowongan[0]->tglPost)) ?></li>
										<?php if (isset($userMasuk[0]->level) && $userMasuk[0]->level == 2): ?>
											<?php 
												$terdaftar = false;
												foreach ($pendaftar as $value) {
													if ($value->idLowongan == $lowongan[0]->idLowongan && $value->idMember == $userMasuk[0]->idMember) {
														$terdaftar = true;
													}
												}
											?>
											<?php if ($terdaftar): ?>
												<li><a href="#">Applied</a></li>										
											<?php else: ?>
												<li><a class="" data-toggle="modal" href='#modal-id'>Apply</a></li>
											<?php endif ?>
										<?php endif ?>
										<li><a href="<?= site_url('home/single/'.$this->uri->segment(3).'/'.$lowongan[0]->idPerusahaan) ?>">Profil Perusahaan</a></li>
									</ul>
								</div>
								<p>
									<?= $lowongan[0]->deskripsi ?>
								</p>
								<h5>Jam Kerja : <?= $lowongan[0]->jamKerja ?></h5>
								<p class="address">
									<span class="lnr lnr-map"></span> <?= $lowongan[0]->kota ?>
								</p>
								<p class="address">
									<span class="lnr lnr-database"></span> Rp <?= $lowongan[0]->gaji ?>
								</p>
							</div>
						</div>	
						<div class="single-post job-details">
							<h4 class="single-title">Persyaratan</h4>
							<p>
								<?= $lowongan[0]->persyaratan ?>
							</p>
						</div>				
					</div>
					<div class="col-lg-4 sidebar">
						<div class="single-slidebar">
							<h4>Pekerjaan Terkait</h4>
							<?php foreach ($lowonganTerkait as $value): ?>
								<div class="blog-list">
									<div class="single-blog " style="background:#000 url(<?= base_url('assets/home/') ?>img/blog1.jpg);">
										<a href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>"><h4><?= $value->lowongan ?></h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												<?= date('d-m-Y', strtotime($value->tglPost)) ?>
											</p>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<!-- End post Area -->

		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<?= form_open_multipart(base_url('index.php/home/apply/'.$lowongan[0]->idLowongan.'/'.$userMasuk[0]->idMember)); ?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"> Select your CV</h4>
					</div>
					<div class="modal-body">
						<input type="file" name="cv" placeholder="Select CV" class="form-control">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" value="Apply" name="submit" class="btn btn-primary">
					</div>
					<?= form_close(); ?>
				</div>
			</div>
		</div>

		<?php include 'foot.php'; ?>
	</body>
</html>