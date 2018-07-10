<!-- start footer Area -->		
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-12">
				<div class="single-footer-widget">
					<h6>Top Products</h6>
					<ul class="footer-nav">
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6  col-md-12">
				<div class="single-footer-widget newsletter">
					<h6>Newsletter</h6>
					<p>You can trust us. we only send promo offers, not a single spam.</p>
					<div id="mc_embed_signup">
						<form target="_blank" novalidate="true" action="" method="get" class="form-inline">

							<div class="form-group row" style="width: 100%">
								<div class="col-lg-8 col-md-12">
									<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>
								</div> 

								<div class="col-lg-4 col-md-12">
									<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
								</div> 
							</div>		
							<div class="info"></div>
						</form>
					</div>		
				</div>
			</div>
			<div class="col-lg-3  col-md-12">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">Instragram Feed</h6>
					<ul class="instafeed d-flex flex-wrap">
						<li><img src="<?= base_url('assets/home/') ?>img/i1.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i2.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i3.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i4.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i5.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i6.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i7.jpg" alt=""></li>
						<li><img src="<?= base_url('assets/home/') ?>img/i8.jpg" alt=""></li>
					</ul>
				</div>
			</div>						
		</div>

		<div class="row footer-bottom d-flex justify-content-between">
			<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Team
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
			<div class="col-lg-4 col-sm-12 footer-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->
<!-- ======= JS ======== -->
<script src="<?= base_url('assets/home/js/vendor/jquery-2.2.4.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/home/js/vendor/bootstrap.min.js') ?>"></script>			
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> -->
<script src="<?= base_url('assets/home/js/easing.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/hoverIntent.js') ?>"></script>
<script src="<?= base_url('assets/home/js/superfish.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/jquery.sticky.js') ?>"></script>
<script src="<?= base_url('assets/home/js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/parallax.min.js') ?>"></script>
<script src="<?= base_url('assets/home/js/mail-script.js') ?>"></script>
<script src="<?= base_url('assets/home/js/main.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script>
<script src="<?= base_url() ?>assets/jsgrid/jsgrid.min.js"></script>
<script src="<?= base_url() ?>assets/jsgrid/lowonganJsGrid.js"></script>
<script>
	$(document).ready(function() {
		$('#lowongan').DataTable();
	} );

	setTimeout(function(){
		document.getElementById('pesan').style.display = 'none';
	}, 5000);
</script>