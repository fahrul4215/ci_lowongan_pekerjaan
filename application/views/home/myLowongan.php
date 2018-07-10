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
<section class="blog-posts-area section-gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 post-list blog-post-list">
                <div id="lowonganGrid"></div>
            </div>
        </div>
    </div>  
</section>
<!-- End Perusahaan Area -->

<?php include 'foot.php'; ?>
</body>
</html>