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
         <?php foreach($user as $row){  ?>	
       
        <section class="blog-posts-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 post-list blog-post-list">
                        <div class="single-post">
                            <!-- <img class="img-fluid" src="<?= base_url('assets/home/') ?>img/blog/p1.jpg" alt=""> -->

                            <div class="content-wrap">
                               

                                <div class="container">
  <h1> <?php echo $row->username; ?></h1>
    <hr>
    <?php echo form_open_multipart('home/updatefoto'); ?>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?= base_url('assets/home/img/').$row->fotoMember; ?>" heigt="100" width="100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" name="gambar" class="form-control">
           <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
          </div>
        </div>
      </div>
    <?php echo form_close(); ?>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Mohon <strong>Data</strong> diisi semua dengan benar.
        </div>
        <h3>Personal info</h3>
        <?php 
   $attributes = array('class' => 'form-horizontal','role' => 'form');
        echo form_open('home/updatemember',$attributes); ?>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama </label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="nama" value="<?= $row->namaMember ?>">
            </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">E-mail </label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="email" value="<?= $row->email ?>">
            </div>
              <div class="form-group">
            <label class="col-lg-3 control-label">Jenis Kelamin </label>
            <div class="col-lg-8">
                <?php
                 if($row->jenisKelamin == "L"){
                    $L = "checked";
                    $P = "";
                }
                 if($row->jenisKelamin == "P"){
                    $P = "checked";
                    $L = "";
                } ?>
              <input class="" type="radio" <?= $L ?> name="jkl" value="<?= $row->jenisKelamin ?>">Laki-Laki
              <input class="" type="radio" <?= $P ?> name="jkl" value="<?= $row->jenisKelamin ?>">Perempuan
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Tanggal Lahir</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="tanggalLahir" value="<?= $row->tanggalLahir ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Agama</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="agama" value="<?= $row->agama ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No Telp</label>
            <div class="col-lg-8">
                  <input class="form-control" type="text" name="notelp" value="<?= $row->noTelp ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat</label>
            <div class="col-lg-8">
            <textarea name="alamat" class="form-control">
            <?= $row->alamat ?>
            </textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
          </div>
         <?php echo form_close(); ?>
      </div>
  </div>
</div>
<hr>

        </section>
        <?php } ?>
        <?php include 'foot.php'; ?>
	</body>
</html>