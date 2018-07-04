<!DOCTYPE html>
<html lang="id" class="no-js">
    <head>
    	<!-- Site Title -->
    	<title>Edit Profile</title>

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
							Edit Profile
						</h1>	
						<p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/profil') ?>"> Profile</a>
					</div>											
				</div>
			</div>
		</section>
		<!-- End banner Area -->

        <div class="container">
            <?= var_dump($userMasuk) ?>
            <?php if ($userMasuk[0]->level == 2): ?>
                <form action="" method="get" accept-charset="utf-8">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama" placeholder="Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama Anda'" required class="form-control" value="<?= $userMasuk[0]->namaMember ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <?php
                                    $jk = true;
                                    ($userMasuk[0]->jenisKelamin == 'L') ? $jk = true : $jk = false;
                                ?>
                                <input type="radio" name="jenisKelamin" value="L" class="form-group" <?= ($jk) ? 'checked' : ''; ?>> Laki-Laki
                                <br>
                                <input type="radio" name="jenisKelamin" value="P" class="form-group" <?= (!$jk) ? 'checked' : ''; ?>> Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="date" name="tanggalLahir" required class="form-control" value="<?= date('m-d-Y', strtotime($userMasuk[0]->tanggalLahir)) ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                                <select name="agama" id="inputAgama" class="form-control" required>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                    <option value="konghucu">Kong Hu Cu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>
                                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Anda"><?= $userMasuk[0]->alamat ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="noTelp" placeholder="No Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan No Telepon Anda'" class="form-control" value="<?= $userMasuk[0]->noTelp ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email Anda'" required class="form-control" value="<?= $userMasuk[0]->email ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Foto Member</td>
                            <td>:</td>
                            <td>
                                <input type="file" name="fotoMember" placeholder="Foto Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Foto Anda'" required class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
            <?php endif ?>
        </div>

        <?php include 'foot.php'; ?>
	</body>
</html>