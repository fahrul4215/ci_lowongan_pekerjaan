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
							Profile
						</h1>	
						<p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/profil') ?>"> Profile</a>
					</div>											
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

        <!-- Start Perusahaan Area -->
        <section class="blog-posts-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 post-list blog-post-list">
                        <div class="single-post">
                            <!-- <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/p1.jpg" alt=""> -->
                            <h1>
                                <?= $user[0]->namaPerusahaan ?>
                            </h1>
                            <div class="content-wrap">
                                <h4>Visi</h4>
                                <blockquote class="generic-blockquote">
                                    <?= $user[0]->visi ?>
                                </blockquote>

                                <h4>Misi</h4>
                                <blockquote class="generic-blockquote">
                                    <?= $user[0]->misi ?>
                                </blockquote>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                    <h4>Alamat</h4>
                                    <p><?= $user[0]->alamat ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                    <h4>No. Telepon</h4>
                                    <p><?= $user[0]->noTelp ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                    <h4>Email</h4>
                                    <p><?= $user[0]->email ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                    <h4>Website</h4>
                                    <p><?= $user[0]->website ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                    <h4>Tahun Berdiri</h4>
                                    <p><?= date('Y', strtotime($user[0]->tahunBerdiri)) ?></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float: left;">
                                    <h4>Jenis Perusahaan</h4>
                                    <p><?= $user[0]->jenisPerusahaan ?></p>
                                </div>
                            </div>
                        </div>                                                                      
                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="single-widget protfolio-widget">
                            <img src="<?= base_url('assets/home/img/perusahaan/'.$user[0]->fotoPerusahaan) ?>" alt="Foto Perusahaan" heigt="150" width="150">
                        </div>
                        <div class="single-widget recent-posts-widget">
                            <h4 class="title">Lowongan <?= $user[0]->namaPerusahaan ?></h4>
                            <div class="blog-list ">
                                <div class="single-recent-post d-flex flex-row">
                                    <div class="recent-thumb">
                                        <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/r1.jpg" alt="">
                                    </div>
                                    <div class="recent-details">
                                        <a href="blog-single.html">
                                            <h4>
                                                Home Audio Recording
                                                For Everyone
                                            </h4>
                                        </a>
                                        <p>
                                            02 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>                              
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <!-- End Perusahaan Area -->

        <!-- Start Member Area -->
        <!--<section class="blog-posts-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 post-list blog-post-list">
						<div class="single-post">
							<img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/p1.jpg" alt="">
							<a href="#">
								<h1>
									Cartridge Is Better Than Ever
									A Discount Toner
								</h1>
							</a>
							<div class="content-wrap">
								<p>
									MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
								</p>

								<p>
									MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
								</p>

								<blockquote class="generic-blockquote">
									“Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government.banking” 
								</blockquote>
								
								<p>
									MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
								</p>

								<p>
									MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
								</p>									


							</div>
							<div class="bottom-meta">
								<div class="user-details row align-items-center">
									<div class="comment-wrap col-lg-6 col-sm-6">
										<ul>
											<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
										</ul>
									</div>
									<div class="social-wrap col-lg-6">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
										</ul>
										
									</div>
								</div>
							</div>

                        
                        <section class="nav-area pt-50 pb-100">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 nav-left justify-content-start d-flex">
                                        <div class="thumb">
                                            <img src="<?= base_url('assets/home/') ?>img/blog/prev.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <p>Prev Post</p>
                                            <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 nav-right justify-content-end d-flex">
                                        <div class="post-details">
                                            <p>Prev Post</p>
                                            <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                                        </div>             
                                        <div class="thumb">
                                            <img src="<?= base_url('assets/home/') ?>img/blog/next.jpg" alt="">
                                        </div>                         
                                    </div>
                                </div>
                            </div>    
                        </section>
                        
                        <section class="comment-sec-area pt-80 pb-80">
                            <div class="container">
                                <div class="row flex-column">
                                    <h5 class="text-uppercase pb-80">05 Comments</h5>
                                    <br>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="<?= base_url('assets/home/') ?>img/blog/c1.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="<?= base_url('assets/home/') ?>img/blog/c2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="<?= base_url('assets/home/') ?>img/blog/c3.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="<?= base_url('assets/home/') ?>img/blog/c4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="<?= base_url('assets/home/') ?>img/blog/c5.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a> 
                                            </div>
                                        </div>
                                    </div>                                                                                                                                                                
                                </div>
                            </div>    
                        </section>
                        
                        <section class="commentform-area pt-80">
                            <div class="container">
                                <h5 class="pb-50">Leave a Reply</h5>
                                <div class="row flex-row d-flex">
                                    <div class="col-lg-4 col-md-6">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                        <input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="email">
                                        <input name="Subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Subject'" class="common-input mb-20 form-control" required="" type="text">

                                    </div>
                                    <div class="col-lg-8 col-md-6">
                                        <textarea class="form-control mb-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                        <a class="primary-btn mt-20" href="#">Comment</a>
                                    </div>
                                </div>
                            </div>    
                        </section>
                        


						</div>																		
					</div>
					<div class="col-lg-4 sidebar">
						<div class="single-widget search-widget">
							<form class="example" action="#" style="margin:auto;max-width:300px">
							  <input type="text" placeholder="Search Posts" name="search2">
							  <button type="submit"><i class="fa fa-search"></i></button>
							</form>								
						</div>

						<div class="single-widget protfolio-widget">
							<img src="<?= base_url('assets/home/') ?>img/blog/user2.jpg" alt="">
							<a href="#"><h4>Adele Gonzalez</h4></a>
							<p>
								MCSE boot camps have its supporters and
								its detractors. Some people do not understand why you should have to spend money
								on boot camp when you can get.
							</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>								
						</div>

						<div class="single-widget category-widget">
							<h4 class="title">Post Categories</h4>
							<ul>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Techlology</h6> <span>37</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Lifestyle</h6> <span>24</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Fashion</h6> <span>59</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Art</h6> <span>29</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Food</h6> <span>15</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Architecture</h6> <span>09</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Adventure</h6> <span>44</span></a></li>
							</ul>
						</div>

                        <div class="single-widget recent-posts-widget">
                            <h4 class="title">Recent Posts</h4>
                            <div class="blog-list ">
                                <div class="single-recent-post d-flex flex-row">
                                    <div class="recent-thumb">
                                        <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/r1.jpg" alt="">
                                    </div>
                                    <div class="recent-details">
                                        <a href="blog-single.html">
                                            <h4>
                                                Home Audio Recording
                                                For Everyone
                                            </h4>
                                        </a>
                                        <p>
                                            02 hours ago
                                        </p>
                                    </div>
                                </div>  
                                <div class="single-recent-post d-flex flex-row">
                                    <div class="recent-thumb">
                                        <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/r2.jpg" alt="">
                                    </div>
                                    <div class="recent-details">
                                        <a href="blog-single.html">
                                            <h4>
                                                Home Audio Recording
                                                For Everyone
                                            </h4>
                                        </a>
                                        <p>
                                            02 hours ago
                                        </p>
                                    </div>
                                </div>  
                                <div class="single-recent-post d-flex flex-row">
                                    <div class="recent-thumb">
                                        <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/r3.jpg" alt="">
                                    </div>
                                    <div class="recent-details">
                                        <a href="blog-single.html">
                                            <h4>
                                                Home Audio Recording
                                                For Everyone
                                            </h4>
                                        </a>
                                        <p>
                                            02 hours ago
                                        </p>
                                    </div>
                                </div>  
                                <div class="single-recent-post d-flex flex-row">
                                    <div class="recent-thumb">
                                        <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/r4.jpg" alt="">
                                    </div>
                                    <div class="recent-details">
                                        <a href="blog-single.html">
                                            <h4>
                                                Home Audio Recording
                                                For Everyone
                                            </h4>
                                        </a>
                                        <p>
                                            02 hours ago
                                        </p>
                                    </div>
                                </div>                                                                                                                                                  
                            </div>                              
                        </div>

						<div class="single-widget category-widget">
							<h4 class="title">Post Archive</h4>
							<ul>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Dec '17</h6> <span>37</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov '17</h6> <span>24</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Oct '17</h6> <span>59</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Sep '17</h6> <span>29</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Aug '17</h6> <span>15</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jul '17</h6> <span>09</span></a></li>
								<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jun '17</h6> <span>44</span></a></li>
							</ul>
						</div>			

						<div class="single-widget tags-widget">
							<h4 class="title">Tag Clouds</h4>
							 <ul>
							 	<li><a href="#">Lifestyle</a></li>
							 	<li><a href="#">Art</a></li>
							 	<li><a href="#">Adventure</a></li>
							 	<li><a href="#">Food</a></li>
							 	<li><a href="#">Techlology</a></li>
							 	<li><a href="#">Fashion</a></li>
							 	<li><a href="#">Architecture</a></li>
							 	<li><a href="#">Food</a></li>
							 	<li><a href="#">Technology</a></li>
							 </ul>
						</div>				

					</div>
				</div>
			</div>	
        </section> -->
        <!-- End Member Area -->

        <?php include 'foot.php'; ?>
	</body>
</html>