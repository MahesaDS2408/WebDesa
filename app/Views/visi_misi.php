<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<section class="section-box">
  <div class="breacrumb-cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="mb-10">Visi dan Misi</h2>
          <p class="font-lg color-text-paragraph-2">Desa </p>
        </div>
        <div class="col-lg-6 text-end">
          <ul class="breadcrumbs mt-40">
            <li>
              <a class="home-icon" href="<?php base_url() ?>/">Beranda</a>
            </li>
            <li>Profil Desa</li>
            <li>Visi dan Misi</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-box mt-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="content-single">
          <h4>Visi</h4>
          <p>Terbangunnya tata kelola pemerintahan desa yang baik dan bersih guna mewujudkan desa Sidodadi yang adil, makmur dan sejahtera.</p>
          <h4>Misi</h4>
          <ul>
            <li>Menyelenggarakan pemerintahan desa yang bersih dan pelayanan administrasi yang mudah, murah, dan cepat</li>
            <li>Mengembangkan perekonomian masyarakat melalui potensi desa dan pemberdayaan potensi generasi muda</li>
            <li>Meningkatkan mutu kesejahteraan untuk mencapai taraf kehidupan yang lebih baik dan berpendidikan</li>
            <li>Melestarikan kearifan lokal dan menguatkan lembaga spiritual keagamaan</li>
            <li>Menciptakan keamanan dan keamanan yg persuasif serta terciptanya lingkungan desa Sidodadi yang aman, nyaman dan kondusif.</li>
          </ul>
        </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>