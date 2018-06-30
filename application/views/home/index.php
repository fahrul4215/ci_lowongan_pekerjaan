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
						<!-- <form action="search.html" class="serach-form-area">
							<div class="row justify-content-center form-wrap">
								<div class="col-lg-4 form-cols">
									<input type="text" class="form-control" name="search" placeholder="what are you looging for?">
								</div>
								<div class="col-lg-3 form-cols">
									<div class="default-select" id="default-selects"">
										<select>
											<option value="1">Select area</option>
											<option value="2">Dhaka</option>
											<option value="3">Rajshahi</option>
											<option value="4">Barishal</option>
											<option value="5">Noakhali</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 form-cols">
									<div class="default-select" id="default-selects2">
										<select>
											<option value="1">All Category</option>
											<option value="2">Medical</option>
											<option value="3">Technology</option>
											<option value="4">Goverment</option>
											<option value="5">Development</option>
										</select>
									</div>										
								</div>
								<div class="col-lg-2 form-cols">
								    <button type="button" class="btn btn-info">
								      <span class="lnr lnr-magnifier"></span> Search
								    </button>
								</div>								
							</div>
						</form>	 -->
						<!-- <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p> -->
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

		<!-- Start features Area -->
		<!-- <section class="features-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-feature">
							<h4>Searching</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-feature">
							<h4>Applying</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-feature">
							<h4>Security</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-feature">
							<h4>Notifications</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing.
							</p>
						</div>
					</div>																		
				</div>
			</div>	
		</section> -->
		<!-- End features Area -->
		
		<!-- Start popular-post Area -->
		<!-- <section class="popular-post-area pt-100">
		</section> -->
		<!-- End popular-post Area -->
		
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
						<ul class="cat-list">
							<li><a href="#">Recent</a></li>
							<li><a href="#">Full Time</a></li>
							<li><a href="#">Part Time</a></li>
							<li><a href="#">Magang</a></li>
						</ul>

						<!-- <div class="single-post d-flex flex-row">
							<div class="thumb">
								<img src="<?= base_url('assets/home/') ?>img/post.png" alt="">
								<ul class="tags">
									<li>
										<a href="#">Art</a>
									</li>
									<li>
										<a href="#">Media</a>
									</li>
									<li>
										<a href="#">Design</a>					
									</li>
								</ul>
							</div>
							<div class="details">
								<div class="title d-flex flex-row justify-content-between">
									<div class="titles">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>					
									</div>
									<ul class="btns">
										<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
										<li><a href="#">Apply</a></li>
									</ul>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
							</div>
						</div> -->

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
					                <th>Aksi</th>
					            </tr>
					        </thead>
					        <tbody>
					        	<?php foreach ($lowongan as $value): ?>	
									<tr>
										<td><?= date('d-m-Y', strtotime($lowongan[0]->tglPost)) ?></td>
										<td><?= $value->lowongan ?></td>
										<td><?= $value->deskripsi ?></td>
										<td><?= $value->namaPerusahaan ?></td>
										<td><?= $value->gaji ?></td>
										<td><?= $value->kota ?></td>
										<td><?= $value->jamKerja ?></td>
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

		<!-- Start callto-action Area -->
		<section class="callto-action-area section-gap" id="join">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-9">
						<div class="title text-center">
							<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
							<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							<a class="primary-btn" href="#">I am a Candidate</a>
							<a class="primary-btn" href="#">Request Free Demo</a>
						</div>
					</div>
				</div>	
			</div>	
		</section>
		<!-- End calto-action Area -->

		<!-- Start download Area -->
		<!-- <section class="download-area section-gap" id="app">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 download-left">
						<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/d1.png" alt="">
					</div>
					<div class="col-lg-6 download-right">
						<h1>Download the <br>
						Job Listing App Today!</h1>
						<p class="subs">
							It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
						</p>
						<div class="d-flex flex-row">
							<div class="buttons">
								<i class="fa fa-apple" aria-hidden="true"></i>
								<div class="desc">
									<a href="#">
										<p>
											<span>Available</span> <br>
											on App Store
										</p>
									</a>
								</div>
							</div>
							<div class="buttons">
								<i class="fa fa-android" aria-hidden="true"></i>
								<div class="desc">
									<a href="#">
										<p>
											<span>Available</span> <br>
											on Play Store
										</p>
									</a>
								</div>
							</div>									
						</div>						
					</div>
				</div>
			</div>	
		</section> -->
		<!-- End download Area -->
	
	<?php include 'foot.php'; ?>
	</body>
</html>