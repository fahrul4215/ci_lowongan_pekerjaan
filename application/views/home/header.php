<!-- <?= var_dump($userMasuk) ?> -->
<header id="header" id="home">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="<?= base_url() ?>"><img src="<?= base_url('assets/home/img/logo.png') ?>"/></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="<?= base_url() ?>">Home</a></li>
					<!-- <li class="menu-has-children"><a href="">Pages</a>
						<ul>
							<li><a href="elements.html">elements</a></li>
							<li><a href="search.html">search</a></li>
							<li><a href="single.html">single</a></li>
						</ul>
					</li> -->
					<?php if ($this->session->userdata('masuk')): ?>
						<li><a href="<?= base_url('index.php/home/profil') ?>">Profile</a></li>
						<li><a href="<?= base_url('index.php/home/lowongan') ?>">My Lowongan</a></li>
						<li style="color: #fff">
							Halo, 
							<?php 
								if (isset($userMasuk[0]->namaMember)) {
									echo $userMasuk[0]->namaMember;
								} else if(isset($userMasuk[0]->namaPerusahaan)) {
									echo $userMasuk[0]->namaPerusahaan;
								} else {
									echo 'Admin';
								}
							?>
							<a class="ticker-btn" href="<?= base_url('index.php/login/logout') ?>">Logout</a>
						</li>
					<?php else: ?>
						<li><a class="ticker-btn" href="<?= base_url('index.php/login') ?>">Login / SignUp</a></li>
					<?php endif ?>
				</ul>
			</nav><!-- #nav-menu-container -->		    		
		</div>
	</div>
	<div class="container-fluid" id="pesan">
		<?php if ($masuk = $this->session->flashdata('dahMasuk')): ?>
			<p class="alert alert-success"><?= $masuk ?></p>
		<?php endif ?>
		<?php if ($applied = $this->session->flashdata('applied')): ?>
			<p class="alert alert-success"><?= $applied ?></p>
		<?php endif ?>
		<?php if ($dahApplied = $this->session->flashdata('dahApplied')): ?>
			<p class="alert alert-danger"><?= $dahApplied ?></p>
		<?php endif ?>
	</div>
</header><!-- #header