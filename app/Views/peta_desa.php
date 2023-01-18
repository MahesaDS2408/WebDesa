<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<section class="section-box">
  <div class="breacrumb-cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="mb-10">Peta Desa</h2>
          <p class="font-lg color-text-paragraph-2">Posisi wilayah desa dalam peta</p>
        </div>
        <div class="col-lg-6 text-end">
          <ul class="breadcrumbs mt-40">
            <li>
              <a class="home-icon" href="<?php base_url() ?>/">Beranda</a>
            </li>
            <li>Peta Desa</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-box mt-80">
    <div class="container">
        <div class="box-info-contact">
            <div class="row">
                <div class="col-md-12 mb-10">
                    <div class="sidebar-list-job">
                        <div class="box-map">
                          <?php foreach($web_option as $vismis){ ?>
                            <?php if($vismis['name_web_option'] == "peta_desa"){ ?>
                              <iframe src="<?= $vismis['value_web_option'] ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <?php } ?>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<?= $this->endSection(); ?>