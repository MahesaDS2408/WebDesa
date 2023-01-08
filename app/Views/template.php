<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link href="<?php base_url() ?>/assets/css/style.css?version=2.0" rel="stylesheet">
    <?php foreach($web_option as $wo): ?>
      <?php if($wo['name_web_option'] == "icon_desa"){ ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php base_url() ?>/assets/imgs/template/<?= $wo['value_web_option'] ?>">
      <?php } ?>
      <?php if($wo['name_web_option'] == "nama_web_desa"){ ?>
        <title>Web  <?= ucwords($wo['value_web_option']) ?></title>
      <?php } ?>
    <?php endforeach; ?>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="<?php base_url() ?>/assets/imgs/template/loading.gif" alt="Webdesa"></div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo">
            <?php foreach($web_option as $wo): ?>
              <?php if($wo['name_web_option'] == "nav_icon_desa"){ ?>
                <a class="d-flex" href="<?php base_url() ?>/"><img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/template/<?= $wo['value_web_option'] ?>"></a>
              <?php } ?>
            <?php endforeach; ?>
            </div>
          </div>
          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li><a class="active" href="<?php base_url() ?>/">Beranda</a></li>
                <li class="has-children"><a href="#">Profile Desa</a>
                  <ul class="sub-menu">
                    <li><a href="#">Potensi Desa</a></li>
                    <li><a href="#">Peta Desa</a></li>
                    <li><a href="#">Profile Aparatur</a>
                      <ul class="sub-menu">
                        <li><a href="#">BPD</a></li>
                        <li><a href="#">Pemerintah Desa</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Visi dan Misi</a></li>
                  </ul>
                </li>
                <!-- <li class="has-children"><a href="#">Berita</a>
                  <ul class="sub-menu">
                    <li><a href="#">Info 1</a>
                      <ul class="sub-menu">
                        <li><a href="#">Anak Info 1</a></li>
                        <li><a href="#">Anak Info 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Info 2</a></li>
                  </ul>
                </li> -->
                <li><a href="#">Informasi Publik</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Kontak</a></li>
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <div class="header-right">
            <div class="block-signin">
                <!-- <a class="text-link-bd-btom hover-up" href="#">Daftar</a> -->
                <a class="btn btn-default btn-shadow ml-40 hover-up" href="#">Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <!-- <div class="mobile-search mobile-header-border mb-30">
              <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form>
            </div> -->
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                  <li><a class="active" href="<?php base_url() ?>/">Beranda</a></li>
                  <li class="has-children"><a href="#">Profile Desa</a>
                    <ul class="sub-menu">
                      <li><a href="#">Potensi Desa</a></li>
                      <li><a href="#">Peta Desa</a></li>
                      <li><a href="#">Profile Aparatur</a>
                        <ul class="sub-menu-child">
                          <li><a href="#">BPD</a></li>
                          <li><a href="#">Pemerintah Desa</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Visi dan Misi</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Informasi Publik</a></li>
                  <li><a href="#">Galeri</a></li>
                  <li><a href="#">Kontak</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <!-- <div class="mobile-search mobile-header-border mb-30">
              <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form>
            </div> -->
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                  <li><a class="active" href="<?php base_url() ?>/">Beranda</a></li>
                  <li class="has-children"><a href="#">Profile Desa</a>
                    <ul class="sub-menu">
                      <li><a href="#">Potensi Desa</a></li>
                      <li><a href="#">Peta Desa</a></li>
                      <li><a href="#">Profile Aparatur</a>
                        <ul class="sub-menu-child">
                          <li><a href="#">BPD</a></li>
                          <li><a href="#">Pemerintah Desa</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Visi dan Misi</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Informasi Publik</a></li>
                  <li><a href="#">Galeri</a></li>
                  <li><a href="#">Kontak</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <main class="main">
        <!-- MAIN KONTEN -->
        <?= $this->renderSection('content'); ?>
        <!-- END MAIN KONTEN --> 
    </main>
    <footer class="footer mt-50">
      <div class="container">
        <div class="footer-bottom mt-50">
          <div class="row">
            <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Webdesa</span></div>
            <div class="col-md-6 text-md-end text-start">
              <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms &amp; Conditions</a><a class="font-xs color-text-paragraph" href="#">Security</a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php base_url() ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/waypoints.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/wow.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/magnific-popup.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/select2.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/isotope.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/scrollup.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins/counterup.js"></script>
    <script src="<?php base_url() ?>/assets/js/main.js?v=1.0"></script>
  </body>
</html>