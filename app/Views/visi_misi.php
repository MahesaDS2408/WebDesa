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
          <?php foreach($web_option as $vismis){ ?>
          
          <?php if($vismis['name_web_option'] == "visi_desa"){ ?>
            <h4>Visi</h4>
            <?= $vismis['value_web_option'] ?>
          <?php } ?>
          <?php if($vismis['name_web_option'] == "misi_desa"){ ?>
            <h4>Misi</h4>
            <?= $vismis['value_web_option'] ?>
          <?php } ?>
          <?php } ?>
        </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>