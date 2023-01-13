<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<section class="section-box">
  <div class="breacrumb-cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="mb-10">Berita / Terkini</h2>
          <p class="font-lg color-text-paragraph-2">Berita terbaru seputar desa</p>
        </div>
        <div class="col-lg-6 text-end">
          <ul class="breadcrumbs mt-40">
            <li>
              <a class="home-icon" href="<?php base_url() ?>">Beranda</a>
            </li>
            <li>Berita</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="section-box mt-50">
  <div class="container">
    <div class="box-improve">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12">
          <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
            <img src="<?php base_url() ?>/assets/imgs/page/job-single-2/img2.png" alt="Webdesa">
          </a>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="pt-40 pb-30 pl-30 pr-30">
            <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Kategori</a>
            <h2 class="mt-20 mb-20">
              <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Improve Your Business With These 8 Simple Tricks</a>
            </h2>
            <p class="font-md mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
            <div>
              <a class="btn btn-arrow-right" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="section-box mt-50">
  <div class="post-loop-grid">
    <div class="container">
      <div class="text-left">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Postingan Terbaru</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Jangan lewatkan berita yang sedang tren</p>
      </div>
      <div class="row mt-30">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6 mb-30">
              <div class="card-grid-3 hover-up">
                <div class="text-center card-grid-3-image">
                  <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <figure>
                      <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/job-single-2/img3.png">
                    </figure>
                  </a>
                </div>
                <div class="card-block-info">
                  <div class="tags mb-15">
                    <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">News</a>
                  </div>
                  <h5>
                    <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">21 Job Interview Tips: How To Make a Great Impression</a>
                  </h5>
                  <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                  <div class="card-2-bottom mt-20">
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <div class="d-flex">
                          <img class="img-rounded" src="<?php base_url() ?>/assets/imgs/page/homepage1/user1.png">
                          <div class="info-right-img">
                            <span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span>
                            <br>
                            <span class="font-xs color-text-paragraph-2">25 April 2022</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 text-end col-6 pt-15">
                        <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-30">
              <div class="card-grid-3 hover-up">
                <div class="text-center card-grid-3-image">
                  <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <figure>
                      <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/job-single-2/img4.png">
                    </figure>
                  </a>
                </div>
                <div class="card-block-info">
                  <div class="tags mb-15">
                    <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Events</a>
                  </div>
                  <h5>
                    <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Email Examples: How To Respond to Employer Interview Requests</a>
                  </h5>
                  <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                  <div class="card-2-bottom mt-20">
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <div class="d-flex">
                          <img class="img-rounded" src="<?php base_url() ?>/assets/imgs/page/homepage1/user2.png">
                          <div class="info-right-img">
                            <span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span>
                            <br>
                            <span class="font-xs color-text-paragraph-2">25 April 2022</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 text-end col-6 pt-15">
                        <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-30">
              <div class="card-grid-3 hover-up">
                <div class="text-center card-grid-3-image">
                  <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <figure>
                      <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/job-single-2/img5.png">
                    </figure>
                  </a>
                </div>
                <div class="card-block-info">
                  <div class="tags mb-15">
                    <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Events</a>
                  </div>
                  <h5>
                    <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">How To Write an Application Letter (With Examples)</a>
                  </h5>
                  <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                  <div class="card-2-bottom mt-20">
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <div class="d-flex">
                          <img class="img-rounded" src="<?php base_url() ?>/assets/imgs/page/homepage1/user3.png">
                          <div class="info-right-img">
                            <span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span>
                            <br>
                            <span class="font-xs color-text-paragraph-2">25 April 2022</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 text-end col-6 pt-15">
                        <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-30">
              <div class="card-grid-3 hover-up">
                <div class="text-center card-grid-3-image">
                  <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <figure>
                      <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/job-single-2/img6.png">
                    </figure>
                  </a>
                </div>
                <div class="card-block-info">
                  <div class="tags mb-15">
                    <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Events</a>
                  </div>
                  <h5>
                    <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">17 Jobs That Hire at Age 15 (and Even 14)</a>
                  </h5>
                  <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                  <div class="card-2-bottom mt-20">
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <div class="d-flex">
                          <img class="img-rounded" src="<?php base_url() ?>/assets/imgs/page/about/user1.png">
                          <div class="info-right-img">
                            <span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span>
                            <br>
                            <span class="font-xs color-text-paragraph-2">25 April 2022</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 text-end col-6 pt-15">
                        <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-30">
              <div class="card-grid-3 hover-up">
                <div class="text-center card-grid-3-image">
                  <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <figure>
                      <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/job-single-2/img7.png">
                    </figure>
                  </a>
                </div>
                <div class="card-block-info">
                  <div class="tags mb-15">
                    <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Events</a>
                  </div>
                  <h5>
                    <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">How To Write a Cover Letter (Plus Tips and Examples)</a>
                  </h5>
                  <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                  <div class="card-2-bottom mt-20">
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <div class="d-flex">
                          <img class="img-rounded" src="<?php base_url() ?>/assets/imgs/page/about/user2.png">
                          <div class="info-right-img">
                            <span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span>
                            <br>
                            <span class="font-xs color-text-paragraph-2">25 April 2022</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 text-end col-6 pt-15">
                        <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-30">
              <div class="card-grid-3 hover-up">
                <div class="text-center card-grid-3-image">
                  <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <figure>
                      <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/job-single-2/img8.png">
                    </figure>
                  </a>
                </div>
                <div class="card-block-info">
                  <div class="tags mb-15">
                    <a class="btn btn-tag" href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">Events</a>
                  </div>
                  <h5>
                    <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">10 Best Skills To Include on a Resume</a>
                  </h5>
                  <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                  <div class="card-2-bottom mt-20">
                    <div class="row">
                      <div class="col-lg-6 col-6">
                        <div class="d-flex">
                          <img class="img-rounded" src="<?php base_url() ?>/assets/imgs/page/about/user3.png">
                          <div class="info-right-img">
                            <span class="font-sm font-bold color-brand-1 op-70">Azumi Rose</span>
                            <br>
                            <span class="font-xs color-text-paragraph-2">25 April 2022</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 text-end col-6 pt-15">
                        <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="paginations">
            <ul class="pager">
              <li>
                <a class="pager-prev" href="#"></a>
              </li>
              <li>
                <a class="pager-number" href="#">1</a>
              </li>
              <li>
                <a class="pager-number" href="#">2</a>
              </li>
              <li>
                <a class="pager-number" href="#">3</a>
              </li>
              <li>
                <a class="pager-number" href="#">4</a>
              </li>
              <li>
                <a class="pager-number" href="#">5</a>
              </li>
              <li>
                <a class="pager-number active" href="#">6</a>
              </li>
              <li>
                <a class="pager-number" href="#">7</a>
              </li>
              <li>
                <a class="pager-next" href="#"></a>
              </li>
            </ul>
          </div> -->
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
          <div class="widget_search mb-40">
            <div class="search-form">
              <form action="#">
                <input type="text" placeholder="Search…">
                <button type="submit">
                  <i class="fi-rr-search"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="sidebar-shadow sidebar-news-small">
            <h5 class="sidebar-title">Trending Now</h5>
            <div class="post-list-small">
                <a href="<?php base_url() ?>/berita/<?= date('Y') ?>/judull">
                    <div class="post-list-small-item d-flex align-items-center">
                        <figure class="thumb mr-15">
                        <img src="<?php base_url() ?>/assets/imgs/page/blog/img-trending.png" alt="Webdesa">
                        </figure>
                        <div class="content">
                        <h5>How to get better agents in New York, USA</h5>
                        <div class="post-meta text-muted d-flex align-items-center mb-15">
                            <div class="author d-flex align-items-center mr-20">
                            <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user1.png">
                            <span>Sugar Rosie</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </a>
                <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery1.png" alt="">
                    </figure>
                    <div class="content">
                    <h5>How To Create a Resume for a Job in Social</h5>
                    <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20">
                        <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user3.png">
                        <span>Harding</span>
                        </div>
                        <div class="date">
                        <span>17 Sep</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery2.png" alt="">
                    </figure>
                    <div class="content">
                    <h5>10 Ways to Avoid a Referee Disaster Zone</h5>
                    <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20">
                        <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user2.png">
                        <span>Steven</span>
                        </div>
                        <div class="date">
                        <span>23 Sep</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery4.png" alt="">
                    </figure>
                    <div class="content">
                    <h5>How To Set Work-Life Boundaries From Any Location</h5>
                    <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20">
                        <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user3.png">
                        <span>Merias</span>
                        </div>
                        <div class="date">
                        <span>14 Sep</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery5.png" alt="">
                    </figure>
                    <div class="content">
                    <h5>How to Land Your Dream Kategori Job</h5>
                    <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20">
                        <img alt="Webdesa" src="<?php base_url() ?>/assets/imgs/page/homepage1/user1.png">
                        <span>Rosie</span>
                        </div>
                        <div class="date">
                        <span>12 Sep</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
          </div>
          <div class="sidebar-shadow sidebar-news-small">
            <h5 class="sidebar-title">Gallery</h5>
            <div class="post-list-small">
              <ul class="gallery-3">
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery1.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery2.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery3.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery4.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery5.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery6.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery7.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery8.png">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php base_url() ?>/assets/imgs/page/blog/gallery9.png">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>