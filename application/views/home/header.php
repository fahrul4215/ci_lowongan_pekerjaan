<header id="header" id="home">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="<?= base_url() ?>"><img src="<?= base_url('assets/home/img/logo.png') ?>"/></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="<?= base_url() ?>">Home</a></li>
					<li><a href="<?= base_url('index.php/home/profil') ?>">Profil</a></li>
					<!-- <li class="menu-has-children"><a href="">Pages</a>
						<ul>
							<li><a href="elements.html">elements</a></li>
							<li><a href="search.html">search</a></li>
							<li><a href="single.html">single</a></li>
						</ul>
					</li> -->
					<li><a class="ticker-btn" href="<?= base_url('index.php/login') ?>">Login / SignUp</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->		    		
		</div>
	</div>
</header><!-- #header -->