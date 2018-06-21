<?php $level = $this->uri->segment(3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up</title>
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
					<div class="login100-more" style="background-image: url('<?= base_url('assets/images/job.jpg') ?>');">
					</div>

					<?php echo form_open('login/create/'.$level, 'class="login100-form validate-form"'); ?>
						<span class="login100-form-title p-b-43">
							Daftar Sebagai
							<?= ($level == 2 ) ? 'Member' : 'Perusahaan'; ?>
						</span>

						<div class="text-danger text-center">
							<?= validation_errors(); ?>
						</div>

						<div class="wrap-input100">
							<input class="input100" type="text" name="username" value="<?= set_value('username') ?>">
							<span class="focus-input100"></span>
							<span class="label-input100">Username</span>
						</div>
						<div class="wrap-input100">
							<input class="input100" type="password" name="password" value="<?= set_value('password') ?>">
							<span class="focus-input100"></span>
							<span class="label-input100">Password</span>
						</div>
						<div class="wrap-input100">
							<input class="input100" type="password" name="konfirmasiPassword">
							<span class="focus-input100"></span>
							<span class="label-input100">Kofirmasi Password</span>
						</div>
						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn">Sign Up</button>
						</div>
						<p class="text-center">Or</p>
						<div class="container-login100-form-btn">
							<a href="<?= base_url('index.php/login') ?>" class="login100-form-btn" style="background-color: #0d0">Login</a>
						</div>

					<!-- <?php form_close(); ?> -->
					</form>
				</div>
			</div>
		</div>
		
		<!--===============================================================================================-->
		<?php include 'foot.php'; ?>
		<!--===============================================================================================-->
	</body>
</html>