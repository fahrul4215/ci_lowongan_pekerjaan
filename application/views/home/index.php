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
											<a href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>" class="btn btn-success">Lihat</a>
										</td>
						            </tr>
					        	<?php endforeach ?>
					        </tbody>
					        <!-- <tfoot>
					            <tr>
					                <th>Name</th>
					                <th>Position</th>
					                <th>Office</th>
					                <th>Age</th>
					                <th>Start date</th>
					                <th>Salary</th>
					            </tr>
					        </tfoot> -->
						</table>
						
						<!-- <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a> -->

					</div>
					<!-- <div class="col-lg-4 sidebar">
						<div class="single-slidebar">
							<h4>Jobs by Location</h4>
							<ul class="cat-list">
								<li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
							</ul>
						</div>

						<div class="single-slidebar">
							<h4>Top rated job posts</h4>
							<div class="active-relatedjob-carusel">
								<div class="single-rated">
									<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/r1.jpg" alt="">
									<a href="single.html"><h4>Creative Art Designer</h4></a>
									<h6>Premium Labels Limited</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
									<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
									<a href="#" class="btns text-uppercase">Apply job</a>
								</div>
								<div class="single-rated">
									<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/r1.jpg" alt="">
									<a href="single.html"><h4>Creative Art Designer</h4></a>
									<h6>Premium Labels Limited</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
									<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
									<a href="#" class="btns text-uppercase">Apply job</a>
								</div>
								<div class="single-rated">
									<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/r1.jpg" alt="">
									<a href="single.html"><h4>Creative Art Designer</h4></a>
									<h6>Premium Labels Limited</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
									<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
									<a href="#" class="btns text-uppercase">Apply job</a>
								</div>																		
							</div>
						</div>							

						<div class="single-slidebar">
							<h4>Jobs by Category</h4>
							<ul class="cat-list">
								<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
								<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
							</ul>
						</div>

						<div class="single-slidebar">
							<h4>Carrer Advice Blog</h4>
							<div class="blog-list">
								<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
									<a href="single.html"><h4>Home Audio Recording <br>
									For Everyone</h4></a>
									<div class="meta justify-content-between d-flex">
										<p>
											02 Hours ago
										</p>
										<p>
											<span class="lnr lnr-heart"></span>
											06
											 <span class="lnr lnr-bubble"></span>
											02
										</p>
									</div>
								</div>
								<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
									<a href="single.html"><h4>Home Audio Recording <br>
									For Everyone</h4></a>
									<div class="meta justify-content-between d-flex">
										<p>
											02 Hours ago
										</p>
										<p>
											<span class="lnr lnr-heart"></span>
											06
											 <span class="lnr lnr-bubble"></span>
											02
										</p>
									</div>
								</div>
								<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
									<a href="single.html"><h4>Home Audio Recording <br>
									For Everyone</h4></a>
									<div class="meta justify-content-between d-flex">
										<p>
											02 Hours ago
										</p>
										<p>
											<span class="lnr lnr-heart"></span>
											06
											 <span class="lnr lnr-bubble"></span>
											02
										</p>
									</div>
								</div>																		
							</div>
						</div>
					</div> -->
				</div>
			</div>	
		</section>
		<!-- End post Area -->
	<?php include 'foot.php'; ?>
	</body>
</html>