<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<section class="section-box">
  <div class="breacrumb-cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="mb-10">Kontak</h2>
          <p class="font-lg color-text-paragraph-2">Kontak yang dapat dihubungi</p>
        </div>
        <div class="col-lg-6 text-end">
          <ul class="breadcrumbs mt-40">
            <li>
              <a class="home-icon" href="<?php base_url() ?>/">Beranda</a>
            </li>
            <li>Kontak</li>
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
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <?php foreach($web_option as $wo): ?>
                    <?php if($wo['name_web_option'] == "nav_icon_desa"){ ?>
                        <a href="#"><img src="<?php base_url() ?>/assets/imgs/template/<?= $wo['value_web_option'] ?>" height="40" alt="WebDesa"></a>

                    <?php } ?>
                <?php endforeach; ?>

                    <div class="font-sm color-text-paragraph">
                <?php foreach($web_option as $wo): ?>
                    <!-- Alamat -->
                    <?php if($wo['name_web_option'] == "alamat_web_desa"){ ?>
                        <?= ucwords($wo['value_web_option']) ?>
                    <?php } ?>
                <?php endforeach; ?>

                        <br> Phone: 
                <?php foreach($web_option as $wo): ?>
                    <?php if($wo['name_web_option'] == "phone_desa"){ ?>
                        <?= ucwords($wo['value_web_option']) ?>
                    <?php } ?>
                <?php endforeach; ?>

                        <br> Email: 
                <?php foreach($web_option as $wo): ?>
                    <?php if($wo['name_web_option'] == "email_desa"){ ?>
                        <?= $wo['value_web_option'] ?>
                    <?php } ?>
                <?php endforeach; ?>
                
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <h6>Sosial Media</h6>
                <div class="mt-10">
                <?php foreach($web_option as $wo): ?>
                    <?php if($wo['name_web_option'] == "facebook"){ 
                        if($wo['value_web_option'] == NULL){
                        ?>
                        
                        <a class="share-facebook social-share-link" href="javascript:void(0);"></a>
                    <?php }else{ ?>
                        <a class="share-facebook social-share-link" href="<?= ucwords($wo['value_web_option']) ?>"></a>
                    <?php }} ?>
                <?php endforeach; ?>
                <?php foreach($web_option as $wo): ?>
                    <?php if($wo['name_web_option'] == "instagram"){ 
                        if($wo['value_web_option'] == NULL){
                        ?>
                        
                        <a class="share-instagram social-share-link" href="javascript:void(0);"></a>
                    <?php }else{ ?>
                        <a class="share-facebook social-share-link" href="<?= ucwords($wo['value_web_option']) ?>"></a>
                    <?php }} ?>
                <?php endforeach; ?>
                <?php foreach($web_option as $wo): ?>
                    <?php if($wo['name_web_option'] == "twitter"){ 
                        if($wo['value_web_option'] == NULL){
                        ?>
                        
                        <a class="share-twitter social-share-link" href="javascript:void(0);"></a>
                    <?php }else{ ?>
                        <a class="share-facebook social-share-link" href="<?= ucwords($wo['value_web_option']) ?>"></a>
                    <?php }} ?>
                <?php endforeach; ?>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
              <h6>Maps</h6>
                <div class="mt-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.518491447612!2d105.23816695!3d-5.5477931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4127ea34707b9d%3A0x2048b91ac1865ba7!2sSidodadi%2C%20Kec.%20Padang%20Cermin%2C%20Kabupaten%20Pesawaran%2C%20Lampung!5e0!3m2!1sid!2sid!4v1673550666463!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                </div>
              </div>
                
            </div>


        

        </div>
    </div>
    
</section>

<?= $this->endSection(); ?>