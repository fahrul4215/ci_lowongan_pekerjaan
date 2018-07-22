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

 <section class="blog-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 post-list blog-post-list">
                <div class="single-post">
                    <div class="content-wrap">
                        <div class="container">
                            <h1 class="text-center">Perusahaan</h1>
                            <h1> <?= $this->session->userdata('masuk')['username']; ?></h1>
                            <h3 class="text-center text-danger"><?= validation_errors() ?></h3>
                            <?php if (isset($error)): ?>
                                <h3 class="text-center text-danger"><?= $error ?></h3>
                            <?php endif ?>
                            <hr>

                            <div class="row">
                                <!-- left column -->
                                <?php echo form_open_multipart('home/updatefotoP'); ?>
                                <div class="row">
                                  <!-- left column -->
                                  <div class="col-md-3">
                                    <div class="text-center">
                                       <img src="<?= base_url('assets/home/img/perusahaan/'.$user[0]->fotoPerusahaan) ?>" alt="Foto Perusahaan" heigt="150" width="150">
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
                                Mohon semua <strong>Data</strong> diisi sesuai dengan identitas perusahaan.
                            </div>
                            <h3>Company info</h3>
                            <?php 
                            $attributes = array('class' => 'form-horizontal','role' => 'form');
                            echo form_open('home/updateperusahaan',$attributes); ?>

                            <div class="form-group">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Nama Perusahaan</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?= $user[0]->namaPerusahaan ?>" name="namaPerusahaan" placeholder="Masukkan Nama Perusahaan anda" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Alamat</label>
                                    <div class="col-lg-8">
                                        <textarea name="alamat" class="form-control" required placeholder="Masukkan Alamat Perusahaan anda"> <?= $user[0]->alamat ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">No Telp</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?= $user[0]->noTelp ?>" name="noTelp" placeholder="Masukkan No Telpon Perusahaan anda" required maxlength="12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">E-mail </label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="email" value="<?= $user[0]->email ?>" name="email" placeholder="Masukkan email Perusahaan anda" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Website </label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?= $user[0]->website ?>" name="website" placeholder="Masukkan Website Perusahaan anda" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Tanggal Berdiri</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" value="<?= $user[0]->tahunBerdiri?>" name="tahunBerdiri" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Visi</label>
                                    <div class="col-lg-8">
                                        <textarea name="visi" class="form-control" required placeholder="Masukkan Visi Perusahaan anda">  <?= $user[0]->visi ?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Misi</label>
                                    <div class="col-lg-8">
                                        <textarea name="misi" class="form-control" required placeholder="Masukkan Misi Perusahaan anda">  <?= $user[0]->misi ?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-primary" value="Save Changes" name="inputProfil">
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- End Perusahaan Area -->
<?php include 'foot.php'; ?>
</body>
</html>