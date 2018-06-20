<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
		<?php include 'head.php'; ?>
		<!--===============================================================================================-->	
	</head>
	<body style="background-color: #666666;">
		
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<?php echo form_open('login/cekLogin', 'class="login100-form validate-form"'); ?>
						<span class="login100-form-title p-b-43">
							Login untuk Melanjutkan
						</span>

						<div class="text-danger text-center">
							<?= validation_errors(); ?>
						</div>

						<div class="wrap-input100">
							<input class="input100" type="text" name="username">
							<span class="focus-input100"></span>
							<span class="label-input100">Username</span>
						</div>
						<div class="wrap-input100">
							<input class="input100" type="password" name="password">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn">Login</button>
						</div>
						<p class="text-center">Or</p>
						<div class="container-login100-form-btn">
							<a href="#modal-id" data-toggle="modal" class="login100-form-btn" style="background-color: #0d0">Sign Up</a>
						</div>

					<!-- <?php form_close(); ?> -->
					</form>

					<div class="login100-more" style="background-image: url('<?= base_url('assets/images/job.jpg') ?>');">
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Belum Punya Akun?</h4>
					</div>
					<div class="modal-body text-center">
						<h3>Daftar Sebagai</h3>
						<br>
						<a href="<?php echo base_url() ?>index.php/login/daftar/3" class="btn btn-primary">
							Member
						</a>
						<a href="<?php echo base_url() ?>index.php/login/daftar/2" class="btn btn-primary">
							Perusahaan
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<!--===============================================================================================-->
		<?php include 'foot.php'; ?>
		<!--===============================================================================================-->
	</body>
</html>