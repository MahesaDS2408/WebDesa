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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.518491447612!2d105.23816695!3d-5.5477931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4127ea34707b9d%3A0x2048b91ac1865ba7!2sSidodadi%2C%20Kec.%20Padang%20Cermin%2C%20Kabupaten%20Pesawaran%2C%20Lampung!5e0!3m2!1sid!2sid!4v1673550666463!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        

        </div>
    </div>
    
</section>

<?= $this->endSection(); ?>