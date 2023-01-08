<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<section class="section-box">
  <div>
    <img src="<?php base_url() ?>/assets/imgs/page/blog/img-single.png">
  </div>
</section>
<section class="section-box">
  <div class="archive-header pt-50 text-center">
    <div class="container">
      <div class="box-white">
        <div class="max-width-single">
          <a class="btn btn-tag" href="#">Berita</a>
          <h2 class="mb-30 mt-20 text-center">Pembagian Sembako Oleh Kepala Desa</h2>
          <div class="post-meta text-muted d-flex align-items-center mx-auto justify-content-center">
            <div class="author d-flex align-items-center mr-30">
              <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user3.png">
              <span>Admin</span>
            </div>
            <div class="date">
              <span class="font-xs color-text-paragraph-2 mr-20 d-inline-block">
                <img class="img-middle mr-5" src="<?php base_url() ?>/assets/imgs/page/blog/calendar.svg"> 06 Sep 2022 </span>
              <span class="font-xs color-text-paragraph-2 d-inline-block">
                <img class="img-middle mr-5" src="<?php base_url() ?>/assets/imgs/template/icons/time.svg"> 8 mins to read </span>
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
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare pellentesque sollicitudin. Suspendisse potenti. Fusce ex risus, iaculis sit amet sapien nec, finibus malesuada mi. Proin at turpis eget sapien pulvinar luctus. Vestibulum bibendum pharetra lorem eu aliquam. In feugiat placerat risus, sed rutrum neque mattis sit amet. Nullam vestibulum ante ac quam tempor, id venenatis velit eleifend. Duis id iaculis risus, quis ullamcorper augue. Nunc tristique venenatis ipsum at euismod. Pellentesque id arcu est. </p>
              <h4>In ut odio libero</h4>
              <ul>
                <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                <li>5+ years of industry experience in interactive design and / or visual design</li>
                <li>Excellent interpersonal skills&#x202F;</li>
                <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
                <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>
                <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently</li>
                <li>History of impacting shipping products with your work</li>
                <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional experience</li>
                <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
              </ul>
              <p></p>
              <p> Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>
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

<?= $this->endSection(); ?>