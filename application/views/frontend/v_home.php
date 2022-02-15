<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
    <meta name="title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta property="og:title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta name="site_url" content="<?php echo base_url()?>">
    <meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
    <meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
    <meta name="web_author" content="arkansys.com">
    <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
    <link href='<?php echo base_url()?>' rel='canonical'/>
    <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
    <meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:image" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
    <meta property="og:image:url" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
    <meta property="og:type" content="article">
    <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
    <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body  class="ashade-home-template has-spotlight ashade-smooth-scroll">
<?php $this->load->view('frontend/menu')?>
	<div class="ashade-home-background ashade-page-background is-image" data-src="<?php echo base_url()?>bahan/frontend/img/bg/bg-home01.jpg"></div>
<div class="ashade-home-link--works ashade-home-link-wrap">
  <div class="ashade-home-link is-link">
    <span>Our Photo Portfolio</span>
    <span>Explore Works</span>
  </div>
</div><!-- .ashade-home-link-wrap -->
<div class="ashade-home-link--contacts ashade-home-link-wrap">
  <div class="ashade-home-link is-link">
    <span>How to find us</span>
    <span>Contact Me</span>
  </div>
</div><!-- .ashade-home-link-wrap -->

 <!-- Home Title and Back Button -->
  <div class="ashade-page-title-wrap is-inactive ">
      <h1 class="ashade-page-title">&nbsp;</h1>
  </div><!-- .ashade-page-title-wrap -->

  <div class="ashade-home-return ashade-back-wrap is-inactive">
      <div class="ashade-back is-home-return">
          <span>Return</span>
          <span>Back</span>
      </div>
  </div><!-- .ashade-to-top-wrap -->

  <!-- Home Contacts Block -->
  <div id="ashade-home-contacts">
  <div class="ashade-row">
  </div><!-- .ashade-row -->
  <div class="ashade-row">
    <div class="ashade-col col-4">
      <div class="ashade-contact-details">
        <h4 class="ashade-contact-details__title">
          <span>Contacts and Socials</span>
          How to Find Us
        </h4>
        <ul class="ashade-contact-details__list">
          <li>
            <i class="ashade-contact-icon la la-map-marker"></i>
              <?php echo $identitas->alamat?>
          </li>
          <li>
            <i class="ashade-contact-icon la la-phone"></i>
            <a href="tel:+<?php echo $identitas->no_telp?>"><?php echo $identitas->no_telp?></a>
          </li>
          <li>
            <i class="ashade-contact-icon la la-envelope"></i>
            <a href="mailto:<?php echo $identitas->email?>"><?php echo $identitas->email?></a>
          </li>
          <li class="ashade-contact-socials">
            <i class="ashade-contact-icon la la-share-alt"></i>
           <a href="<?php echo $identitas->facebook?>" target="_blank"><i class="ashade-icon la la-facebook"></i></a>
          <a href="<?php echo $identitas->instagram?>" target="_blank"><i class="ashade-icon la la-instagram"></i></a>
          <a href="<?php echo $identitas->youtube?>" target="_blank"><i class="ashade-icon la la-youtube"></i></a>
          </li>
        </ul>
      </div><!-- .ashade-contact-details -->
    </div>
    <div class="ashade-col col-8">
      <iframe src="<?php echo $identitas->maps?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  </div><!-- #ashade-home-contacts -->

  <!-- Home Works Block -->
  <div id="ashade-home-works">
    <div class="ashade-row">
      <div class="ashade-col col-12">
        <p class="ashade-intro">Photography is my passion. Through the lens the world looks different and i would like to show you this difference. You can see it in my albums that are presented here.</p>
      <div class="ashade-albums-grid ashade-grid ashade-grid-3cols is-masonry">

        <?php  foreach ($posts_product as $post_new){
                       $isi = character_limiter($post_new->products_desk,200);
                       $harga_disc = $post_new->products_harga-(($post_new->products_harga_disc/100)*$post_new->products_harga);
                       ?>
        <div class="ashade-album-item ashade-grid-item">
          <div class="ashade-album-item__image">
            <img <?php
                if(empty($post_new->products_gambar)) {
                  echo "<img src='".base_url()."bahan/layout_foto_promo.png'>";
                }else {
                  echo " <img src='".base_url()."bahan/foto_products/".$post_new->products_gambar."'> ";}
                ?>
          </div>
          <h5>
            <span><?php echo $post_new->products_cat_judul?></span>
            <?php echo $post_new->products_judul?>
          </h5>
          <a href="<?php echo base_url("works/$post_new->products_judul_seo ") ?>" class="ashade-album-item__link"></a>
        </div><!-- .ashade-album-item -->
      <?php } ?>

      </div><!-- .ashade-albums-grid -->
    </div><!-- .ashade-col -->
  </div><!-- .ashade-row -->
  </div><!-- #ashade-home-works -->

  <?php $this->load->view('frontend/bottom')?>
  <?php $this->load->view('frontend/js')?>

</body>
</html>
