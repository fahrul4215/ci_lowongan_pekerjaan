<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
 <!-- Site Title -->
 <title>My Lowongan</title>

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
       My Lowongan
     </h1>	
     <p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/lowongan') ?>"> My Lowongan</a>   <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/pendaftar/'.$this->uri->segment(3)) ?>"> Pendaftar</a>
     </div>											
   </div>
 </div>
</section>
<!-- End banner Area -->	

<!-- Start Perusahaan Area -->
<section class="blog-posts-area" style="margin: 5%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 post-list blog-post-list">
        <table id="lowongan" class="table table-hover">
          <thead>
            <tr>
              <th>Tgl Daftar</th>
              <th>Lowongan</th>
              <th>Member</th>
              <th>CV</th>
              <th>Status</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pendaftar as $value): ?> 
              <tr>
                <td><?= date('d-m-Y', strtotime($value->tglDaftar)) ?></td>
                <td><?= $value->lowongan ?></td>
                <td><?= $value->namaMember ?></td>
                <td><a href="<?= base_url('assets/cv/'.$value->cv) ?>" target="_blank"><?= $value->cv ?></a></td>
                <td><?= $value->statusDaftar ?></td>
                <td><?= $value->keterangan ?></td>
                <td>
                  <?php if ($value->keterangan == 'Belum di verifikasi'): ?>
                    <a href="<?= base_url('index.php/home/verifikasi/'.$value->idLowongan.'/'.$value->idPendaftar.'/terima') ?>" class="btn btn-success">Terima</a>
                    <a href="<?= base_url('index.php/home/verifikasi/'.$value->idLowongan.'/'.$value->idPendaftar.'/tolak') ?>" class="btn btn-danger">Tolak</a>
                  <?php else: ?>
                    
                  <?php endif ?>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>  
</section>
<!-- End Perusahaan Area -->

<?php include 'foot.php'; ?>
</body>
</html>