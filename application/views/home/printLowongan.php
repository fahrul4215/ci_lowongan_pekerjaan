<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
	<!-- Site Title -->
	<title>Lowongan Pekerjaan</title>

	<?php include 'head.php'; ?>
</head>
<body>

	<!-- Start post Area -->
	<h1 class="text-center">
		Lowongan Pekerjaan
	</h1>
	<section class="">
		<div class="container-fluid">
			<div class="row">
				<div class="">
					<table id="" class="table table-bordered">
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
							</tr>
						</thead>
						<tbody style="color: #000;">
							<?php foreach ($lowongan as $value): ?>	
								<tr>
									<td><?= date('d-m-Y', strtotime($lowongan[0]->tglPost)) ?></td>
									<td><?= $value->lowongan ?></td>
									<td><?= $value->deskripsi ?></td>
									<td><?= $value->namaPerusahaan ?></td>
									<td><?= $value->gaji ?></td>
									<td><?= $value->kota ?></td>
									<td><?= $value->jamKerja ?></td>
									<td><?= $value->kuota ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</section>

	<!-- ======= JS ======== -->
	<script src="<?= base_url('assets/home/js/vendor/jquery-2.2.4.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/home/js/vendor/bootstrap.min.js') ?>"></script>
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
</body>
</html>