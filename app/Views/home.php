<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

      <div class="bg-homepage1"></div>
      <section class="section-box">
        <div class="banner-hero hero-1">
          <div class="banner-inner">
            <div class="row">
              <div class="col-xl-8 col-lg-12">
                <div class="block-banner">
                  <h1 class="heading6-banner wow animate__animated animate__fadeInUp">Hallo <span class="color-brand-2">Selamat Datang</span> di Web Desa Sidodadi <br class="d-none d-lg-block"> </h1>
                  <h6 class="heading6-banner wow animate__animated animate__fadeInUp"> Kecamatan Teluk Pandan Kabupaten Pesawaran </h6>
                  <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Terbangunnya Tata Kelola Pemerintahan Desa yang baik dan bersih guna mewujudkan Desa Sidodadi yang adil, makmur dan sejahtera</div>
                  <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                    <form>
                      <input class="form-input input-keysearch mr-10" type="text" placeholder="Apa yang ingin di cari...? ">
                      <button class="btn btn-default btn-find font-sm">Cari</button>
                    </form>
                  </div>
                  <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <a href="#">Pengumunan</a>, <a href="#">Berita</a></div>
                  <!-- <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong style="color: red;">Mohon maaf untuk sementara layanan sedang dalam pengembangan.</strong></div> -->
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                <div class="banner-imgs">
                  <div class="block-1 shape-1"><img class="img-responsive" alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/banner1.png"></div>
                  <div class="block-2 shape-2"><img class="img-responsive" alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/banner2.png"></div>
                  <div class="block-3 shape-3"><img class="img-responsive" alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/icon-top-banner.png"></div>
                  <div class="block-4 shape-3"><img class="img-responsive" alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/icon-bottom-banner.png"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Berita -->
      <section class="section-box mt-50 mb-50">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Berita Terkini</h2>
            <!-- <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Berita Terbaru Desa</p> -->
          </div>
        </div>
        <div class="container">
          <div class="mt-50">
            <div class="box-swiper style-nav-top">
              <div class="swiper-container swiper-group-3 swiper">
                <div class="swiper-wrapper pb-70 pt-5">
                  <?php foreach($artikel as $art){ 
                     $num_char_isi = 200;
                     $isi = $art['isi_artikel'];
                     $nama_panggilan = explode(' ',trim($art['nama_user']));
                    ?>
                    <div class="swiper-slide">
                      <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                        <div class="text-center card-grid-3-image"><a href="<?php base_url() ?>/berita/<?= strftime('%Y', strtotime($art['tgl_artikel'])); ?>/<?= $art['judul_artikel'] ?>">
                            <figure><img alt="Webdesa" src="<?php base_url() ?>/assets/images_berita/<?= $art['tumbnail_artikel'] ?>" height="254"></figure></a></div>
                        <div class="card-block-info">
                          <div class="tags mb-15"><a class="btn btn-tag" href="javascript:void(0);"><?= ucwords($art['nama_artikel_kategori']) ?></a></div>
                          <h5><a href="<?php base_url() ?>/berita/<?= strftime('%Y', strtotime($art['tgl_artikel'])); ?>/<?= $art['judul_artikel'] ?>"><?= ucwords($art['judul_artikel']) ?></a></h5>
                          <p class="mt-10 color-text-paragraph font-sm"><?= substr($isi, 0, $num_char_isi) . '...'; ?></p>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-6 col-6">
                                <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="Webdesa">
                                  <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70"><?= ucwords($nama_panggilan[0]) ?></span><br><span class="font-xs color-text-paragraph-2"><?= strftime('%A, %d %B %Y', strtotime($art['tgl_artikel'])); ?></span></div>
                                </div>
                              </div>
                              <!-- <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>

                  <!-- <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                          <figure><img alt="Webdesa" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Kategori</a></div>
                        <h5><a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judul">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="Webdesa">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                          <figure><img alt="Webdesa" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Kategori</a></div>
                        <h5><a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judul">Interview Question: Why Dont You Have a Degree?</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="Webdesa">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->

                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="<?php base_url() ?>/berita">Lihat Berita Lain</a></div>
          </div>
        </div>
      </section>
      <!-- <script src="assets/js/plugins/counterup.js"></script> -->
<?= $this->endSection(); ?>