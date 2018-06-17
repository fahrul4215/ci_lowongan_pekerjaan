<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-theme.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php echo form_open('login/cekLogin'); ?>
					<div class="form-group">
						<legend><h1>Halaman Login</h1></legend>
					</div>
					<div class="text-danger text-center">
						<?= validation_errors(); ?>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control" value="<?= set_value('username') ?>" placeholder="Masukkan Username Anda">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" value="<?= set_value('password') ?>" placeholder="Masukkan Password Anda">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Masuk</button>
					</div>
				<?php form_close(); ?>
					<div class="text-center">
						Belum punya akun? <a href="<?= base_url('daftar') ?>">Daftar</a>
					</div>
			</div>
		</div>

		<!-- JS -->
		<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	</body>
</html>