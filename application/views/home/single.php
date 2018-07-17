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
												<li><a href="<?= base_url('index.php/home/apply/'.$lowongan[0]->idLowongan.'/'.$userMasuk[0]->idMember) ?>">Apply</a></li>
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


		<!-- Start callto-action Area -->
		<!-- <section class="callto-action-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-9">
						<div class="title text-center">
							<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
							<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							<a class="primary-btn" href="#">I am a Candidate</a>
							<a class="primary-btn" href="#">We are an Employer</a>
						</div>
					</div>
				</div>	
			</div>	
		</section> -->
		<!-- End calto-action Area -->

		<?php include 'foot.php'; ?>
	</body>
</html>