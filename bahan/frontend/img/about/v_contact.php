<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
  <meta name="title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
  <meta property="og:title" content="<?php echo $identitas->nama_website?> <?php echo $identitas->no_telp?> | <?php echo $identitas->meta_keyword?>">
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


<body class="has-spotlight ashade-smooth-scroll">
    <?php $this->load->view('frontend/menu')?>
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Who am I?</span>
            About Me
        </h1>
    </div>

    <main class="ashade-content-wrap">
    <div class="ashade-content-scroll">
      <div class="ashade-content">
        <!-- About Section for Desktop Layout Only -->
        <section class="ashade-section">
          <div class="ashade-row ashade-row-fullheight exclude-header">
            <div class="ashade-col col-6">
              <h2>
                <span>Few Words About Myself</span>
                Nice to Meet You
              </h2>
              <p>Nice to meet you, friend! My name is Andrew Shade. I’m a professional photographer from Denver, state Colorado. I hope, that you will enjoy with my photo portfolio and after that we can create something great together!</p>
              <p>Through the lens the world looks different and i would like to show you this difference. I learned that from age 10, when I was first time take photos on manual camera with my Dad. After that with years of practice and tons of experience I learned the techniques, that helps me in my work with modern brands and companies. And all of this may be yours, just get in touch.</p>
              <div class="align-right ashade-signature-wrap">
                <img src="<?php echo base_url()?>bahan/frontend/img/about/signature.png" alt="Signature" width="200" height="116">
              </div>
            </div>
            <div class="ashade-col col-6 align-bottom hide-on-tablet-port hide-on-phone">
              <img src="<?php echo base_url()?>bahan/frontend/img/about/about-me.jpg" alt="Andrew Shade" width="1240" height="1500">
            </div>
          </div><!-- .ashade-row -->
        </section>
        <section class="ashade-section">
          <div class="ashade-row">
                        <div class="ashade-col col-12 align-center">
                          <h3>
                            <span>How does this happen</span>
                            Photo Processing
                          </h3>
                            <p class="ashade-intro">Here I like to show you photo processing. Sometimes you can not see result without direct comparsion. So I'll show you direct compare photo before and after processing, where I made retouching photo, removed background noise and improve color brightness.</p>
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
          <div class="ashade-row">
                        <div class="ashade-col col-12">
                          <div class="ashade-before-after" data-img-before="img/general/before.jpg" data-img-after="img/general/after.jpg">
                            <img src="img/general/before.jpg" alt="Photo Processing" width="1920" height="1280">
                          </div><!-- .ashade-before-after -->
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
        </section>
      </div><!-- .ashade-content -->

      <?php $this->load->view('frontend/bottom2')?>
    </div><!-- .ashade-content-scroll -->
    </main>

<div class="ashade-to-top-wrap ashade-back-wrap">
    <div class="ashade-back is-to-top">
        <span>Back to</span>
        <span>Top</span>
    </div>
</div>
<?php $this->load->view('frontend/aside')?>
<?php $this->load->view('frontend/js')?>
</div>
</body>
</html>




<body class="has-spotlight ashade-smooth-scroll no-top-padding">

    <?php $this->load->view('frontend/menu')?>


    <!-- Contact Area -->
    <section class="contact-page-wrapper section-padding">
      <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <h4>Contact Info:</h4>

                        <div class="ci-single">
                            <div class="cis-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="cis-text">
                                <p><?php echo $identitas->no_telp?> [Dhawy]</p>
                                <p>0812 8266 6219 [Jojo]</p>
                            </div>
                        </div>
                        <div class="ci-single">
                            <div class="cis-icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="cis-text">
                                <p><?php echo $identitas->email?></p>
                            </div>
                        </div>
                        <div class="ci-single">
                            <div class="cis-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="cis-text">
                                <p><?php echo $identitas->alamat?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="cp-wrapper">
                        <h4>Leave A Message!</h4>
                        <form class="cf" method="post" action="#" id="cf">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name*</label>
                                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Your Name Here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address*</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address Here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject Line*</label>
                                        <input type="text" class="form-control" id="subjectName" name="subjectName" placeholder="Subject Of Massage">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telephone Number*</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Your Message*</label>
                                        <textarea class="form-control" id="msg" name="msg" placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" id="submit" name="submit" class="cf-btn">Send Now</button>
                                    <div class="cf-msg" style="display: none;"></div>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Area -->
    <?php $this->load->view('frontend/bottom')?>
    <?php $this->load->view('frontend/js')?>

</body>
</html>
