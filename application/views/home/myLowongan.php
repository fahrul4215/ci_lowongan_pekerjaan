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
          <p class="text-white link-nav"><a href="<?= base_url() ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('index.php/home/lowongan') ?>"> My Lowongan</a>
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
          <?php if ($userMasuk[0]->level == 3): ?>
            <hr>
            <div id="lowonganGrid"></div>                  
          <?php else: ?>
            <table id="lowongan" class="table table-hover">
              <thead>
                <tr>
                  <th>Tgl Daftar</th>
                  <th>Lowongan</th>
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
                    <td><?= $value->statusDaftar ?></td>
                    <td><?= $value->keterangan ?></td>
                    <td>
                      <a href="<?= base_url('index.php/home/single/'.$value->idLowongan) ?>" class="btn btn-success">Lihat</a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          <?php endif ?>
        </div>
      </div>
    </div>  
  </section>
  <!-- End Perusahaan Area -->

  <?php include 'foot.php'; ?>
</body>
</html>