<!DOCTYPE html>
<html lang="id" class="no-js">
	<head>
		<!-- Site Title -->
		<title>Lowongan Pekerjaan</title>

		<?php include 'head.php'; ?>
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<!-- start banner Area -->
		<section class="banner-area relative" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner-content col-lg-12">
						<h1 class="text-white">
							<span><?= $numLowongan ?></span> Jobs Ready to Apply
						</h1>
					</div>
					<div class="container">
						<div class="row align-items-center">
							<div class="active-popular-post-carusel">
								<?php foreach ($newLowongan as $value): ?>
									<div class="single-popular-post d-flex flex-row">
										<div class="thumb">
											<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/i8.jpg" alt="">
											<a class="btns text-uppercase" href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>">view job post</a>
										</div>
										<div class="details">
											<h4><?= $value->lowongan ?></h4>
											<h6><?= $value->kota ?></h6>
											<p>
												<?= $value->deskripsi ?>
											</p>
										</div>
									</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start feature-cat Area -->
		<section class="feature-cat-area pt-100" id="category">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">Kategori Pekerjaan</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
				</div>						
				<div class="row">
					<?php foreach ($kategori as $value): ?>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="#<?= $value->idKategori ?>">
									<img src="<?= base_url('assets/home/img/'.$value->gambar) ?>">
								</a>
								<p><?= $value->namaKategori ?></p>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>	
		</section>
		<!-- End feature-cat Area -->
		
		<!-- Start post Area -->
		<section class="post-area section-gap">
			<div class="container">
				<div class="row justify-content-center d-flex">
					<div class="col-lg-12 post-list">
						<!-- <ul class="cat-list">
							<li><a href="#">Recent</a></li>
							<li><a href="#">Full Time</a></li>
							<li><a href="#">Part Time</a></li>
							<li><a href="#">Magang</a></li>
						</ul> -->
						<table id="lowongan" class="table table-hover">
							<thead>
					            <tr>
					            	<th>Tgl</th>
					                <th>Lowongan</th>
					                <th>Deskripsi</th>
					                <th>Perusahaan</th>
					                <th>Gaji</th>
					                <th>Kota</th>
					                <th>Jam Kerja</th>
					                <th>Kuota</th>
					                <th>Kategori</th>
					                <th>Aksi</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<?php foreach ($lowongan as $value): ?>	
									<tr>
										<td><?= date('d-m-Y', strtotime($value->tglPost)) ?></td>
										<td><?= $value->lowongan ?></td>
										<td><?= $value->deskripsi ?></td>
										<td><?= $value->namaPerusahaan ?></td>
										<td><?= $value->gaji ?></td>
										<td><?= $value->kota ?></td>
										<td>
											<?php 
												if ($value->jamKerja == 0) {
													echo 'Full Time';
												} elseif ($value->jamKerja == 1) {
													echo 'Part Time';
												} else {
													echo 'Magang';
												}
											?>											
										</td>
										<td><?= $value->kuota ?></td>
										<td><?= $value->namaKategori ?></td>
										<td>
											<?php if (isset($userMasuk) && $userMasuk[0]->level == 3): ?>
												<a href="<?= base_url('index.php/home/pendaftar/'.$value->idLowongan) ?>" class="btn btn-primary">List Pendaftar</a>
											<?php else: ?>
												<a href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>" class="btn btn-success">Lihat</a>
											<?php endif ?>
										</td>
						            </tr>
					        	<?php endforeach ?>
					        </tbody>
						</table>
					</div>
				</div>
			</div>	
		</section>
		<!-- End post Area -->
	<?php include 'foot.php'; ?>
	</body>
</html>