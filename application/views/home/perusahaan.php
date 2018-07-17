<!DOCTYPE html>
<html lang="id" class="no-js">
    <head>
    	<!-- Site Title -->
    	<title>Profile</title>

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
							Profil Perusahaan
						</h1>	
						<p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/single/'.$this->uri->segment(3)) ?>"> Detail Pekerjaan</a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/singlePerusahaan/'.$this->uri->segment(4)) ?>"> Profil Perusahaan</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

         <section class="blog-posts-area section-gap">
                <div class="container">
                    <div class="col-md-12">

                    </div>
                    <div class="row">
                        <div class="col-lg-8 post-list blog-post-list">
                            <div class="single-post">
                                <!-- <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/p1.jpg" alt=""> -->
                                <h1>
                                    <?= $perusahaan[0]->namaPerusahaan ?>
                                </h1>
                                <div class="content-wrap">
                                    <h4>Visi</h4>
                                    <blockquote class="generic-blockquote">
                                        <?= $perusahaan[0]->visi ?>
                                    </blockquote>

                                    <h4>Misi</h4>
                                    <blockquote class="generic-blockquote">
                                        <?= $perusahaan[0]->misi ?>
                                    </blockquote>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                        <h4>Alamat</h4>
                                        <p><?= $perusahaan[0]->alamat ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                        <h4>No. Telepon</h4>
                                        <p><?= $perusahaan[0]->noTelp ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                        <h4>Email</h4>
                                        <p><?= $perusahaan[0]->email ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                        <h4>Website</h4>
                                        <p><?= $perusahaan[0]->website ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                        <h4>Tahun Berdiri</h4>
                                        <p><?= date('Y', strtotime($perusahaan[0]->tahunBerdiri)) ?></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                        <h4>Jenis Perusahaan</h4>
                                        <p><?= $perusahaan[0]->jenisPerusahaan ?></p>
                                    </div>
                                </div>
                            </div>                                                                      
                        </div>
                        <div class="col-lg-4 sidebar">
                            <div class="single-widget protfolio-widget">
                                <img src="<?= base_url('assets/home/img/perusahaan/'.$perusahaan[0]->fotoPerusahaan) ?>" alt="Foto Perusahaan">
                            </div>
                            <div class="single-widget recent-posts-widget">
                                <h4 class="title">Lowongan <?= $perusahaan[0]->namaPerusahaan ?></h4>
                                <div class="blog-list ">
                                    <?php foreach ($lowongan as $value): ?>
                                        <div class="single-recent-post d-flex flex-row">
                                            <div class="recent-thumb">
                                                <img class="img-fluid" src="<?= base_url('assets/home/img/'.$value->gambar) ?>" alt="">
                                            </div>
                                            <div class="recent-details">
                                                <a href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>">
                                                    <h4>
                                                        <?= $value->lowongan ?>
                                                    </h4>
                                                </a>
                                                <p>
                                                    Kuota : <?= $value->kuota ?>
                                                </p>
                                                <p>
                                                    <?= date('d-M-Y', strtotime($value->tglPost)) ?>
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
        <?php include 'foot.php'; ?>
	</body>
</html>