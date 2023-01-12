<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<section class="section-box">
  <div>
    <img src="<?php base_url() ?>/assets/imgs/page/blog/img-single.png">
  </div>
</section>
<?php foreach($one_artikel as $one_art){ ?>
<section class="section-box">
  <div class="archive-header pt-50 text-center">
    <div class="container">
      <div class="box-white">
        <div class="max-width-single">
          <a class="btn btn-tag" href="#"><?= ucwords($one_art['nama_artikel_kategori']) ?></a>
          <h2 class="mb-30 mt-20 text-center"><?= ucwords($one_art['judul_artikel']) ?></h2>
          <div class="post-meta text-muted d-flex align-items-center mx-auto justify-content-center">
            <div class="author d-flex align-items-center mr-30">
              <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user3.png">
              <span>Admin</span>
            </div>
            <div class="date">
              <span class="font-xs color-text-paragraph-2 mr-20 d-inline-block">
                <img class="img-middle mr-5" src="<?php base_url() ?>/assets/imgs/page/blog/calendar.svg"><?= strftime('%A, %d %B %Y', strtotime($one_art['tgl_artikel'])); ?></span>
              <span class="font-xs color-text-paragraph-2 d-inline-block">
                <!-- <img class="img-middle mr-5" src="<?php base_url() ?>/assets/imgs/template/icons/time.svg"> 8 mins to read </span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="post-loop-grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="single-body">
          <div class="max-width-single"></div>
          <figure>
            <img src="<?php base_url() ?>/assets/imgs/page/blog/img-content.png">
          </figure>
          <div class="max-width-single">
            <div class="content-single">
              <p></p>
              <p><?= $one_art['isi_artikel'] ?></p>
              </div>
            <div class="single-apply-jobs mt-20">
              <div class="row">
                <div class="col-lg-7">
                  <!-- <a class="btn btn-border-3 mr-10 hover-up" href="#"># Tags</a>
                  <a class="btn btn-border-3 mr-10 hover-up" href="#"># Tags</a>
                  <a class="btn btn-border-3 hover-up" href="#"># Tags</a> -->
                </div>
                <div class="col-md-5 text-lg-end social-share">
                  <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-20 mt-10">Share</h6>
                  <a class="mr-20 d-inline-block d-middle hover-up" href="#">
                    <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/blog/fb.svg">
                  </a>
                  <a class="mr-20 d-inline-block d-middle hover-up" href="#">
                    <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/blog/tw.svg">
                  </a>
                  <a class="mr-0 d-inline-block d-middle hover-up" href="#">
                    <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/blog/pi.svg">
                  </a>
                </div>
              </div>
            </div>
            <!-- Comment -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<?= $this->endSection(); ?>