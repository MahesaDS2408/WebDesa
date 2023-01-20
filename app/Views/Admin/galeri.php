<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Galeri</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Galeri</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="row">
  <div class="col-lg-12">
    <div class="">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <ul class="list-inline categories-filter animation-nav" id="filter">
                <li class="list-inline-item">
                  <a class="categories active" data-filter="*">Semua</a>
                </li>
                <li class="list-inline-item">
                  <a class="categories" data-filter=".foto">Foto</a>
                </li>
                <li class="list-inline-item">
                  <a class="categories" data-filter=".video">Video</a>
                </li>
                <li>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary me-md-2" role="button"  href="<?php base_url() ?>/dashboard/galeri/new_galeri"  aria-selected="false">Tambah Galeri </a>
                    </div>
                </li>
                <!-- <li class="list-inline-item">
                  <a class="categories" data-filter=".photography">Photography</a>
                </li>
                <li class="list-inline-item">
                  <a class="categories" data-filter=".development">Development</a>
                </li> -->
              </ul>
            </div>
            <div class="row gallery-wrapper">
              <?php foreach($galeri as $gal){ ?>
                <?php if($gal['kategori_galeri'] == "foto"){ ?>

                  <?php if($gal['group_galeri'] == "tidak"){ ?>

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 foto " data-category="foto">
                      <div class="gallery-box card">
                        <div class="gallery-container">
                          <a class="image-popup" href="<?php base_url() ?>/assets/images_galeri/<?= $gal['file_galeri'] ?>" title="">
                            <img class="gallery-img img-fluid mx-auto" src="<?php base_url() ?>/assets/images_galeri/<?= $gal['file_galeri'] ?>" alt="" />
                            <div class="gallery-overlay">
                              <h5 class="overlay-caption"><?= ucwords($gal['judul_galeri']) ?></h5>
                            </div>
                          </a>
                        </div>
                        <div class="box-content">
                          <div class="d-flex align-items-center mt-1">
                            <div class="flex-grow-1 text-muted">by 
                              <?php foreach($all_user as $allus){ ?>
                                <?php if($allus['id_user_detail'] == $gal['id_pembuat_galeri']){ ?>
                                  <a href="" class="text-body text-truncate"><?= ucwords($allus['nama_user']) ?></a>
                                <?php } ?>
                              <?php } ?>
                            </div>
                            <div class="flex-shrink-0">
                              <div class="d-flex gap-3">
                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                  <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> <?= ucwords($gal['kategori_galeri']) ?></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php }elseif($gal['group_galeri'] == "ya"){ ?>

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 foto " data-category="foto">
                      <div class="gallery-box card">
                        <div class="gallery-container">
                          <a data-bs-toggle="modal" data-bs-target="#ModalFoto<?= $gal['id_galeri'] ?>" href="javascript: void(0);">
                            <img class="gallery-img img-fluid mx-auto" src="<?php base_url() ?>/assets/images_galeri/<?= $gal['file_galeri'] ?>" alt="" />
                            <div class="gallery-overlay">
                              <h5 class="overlay-caption"><?= ucwords($gal['judul_galeri']) ?></h5>
                            </div>
                          </a>
                        </div>
                        <div class="box-content">
                          <div class="d-flex align-items-center mt-1">
                            <div class="flex-grow-1 text-muted">by 
                              <?php foreach($all_user as $allus){ ?>
                                <?php if($allus['id_user_detail'] == $gal['id_pembuat_galeri']){ ?>
                                  <a href="" class="text-body text-truncate"><?= ucwords($allus['nama_user']) ?></a>
                                <?php } ?>
                              <?php } ?>
                            </div>
                            <div class="flex-shrink-0">
                              <div class="d-flex gap-3">
                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                  <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 
                                    <?php $i = 1;
                                    foreach($sub_galeri as $sgal){
                                      if($sgal['id_galeri'] == $gal['id_galeri']){
                                        $i++;
                                      }
                                    } 
                                    echo "$i";
                                    ?>
                                   <?= ucwords($gal['kategori_galeri']) ?>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                  <!-- end col -->
                <?php }elseif($gal['kategori_galeri'] == "video"){ ?>

                  <div class="element-item col-xxl-3 col-xl-4 col-sm-6 video" data-category="video">
                    <div class="gallery-box card">
                      <div class="gallery-container">
                        <a data-bs-toggle="modal" data-bs-target="#ModalVideo<?= $gal['id_galeri'] ?>" href="javascript: void(0);">
                          <img class="gallery-img img-fluid mx-auto" src="<?= $gal['tumbnail_video'] ?>" alt="" />
                          <div class="gallery-overlay">
                            <h5 class="overlay-caption"><?= ucwords($gal['judul_galeri']) ?></h5>
                          </div>
                        </a>
                      </div>
                      <div class="box-content">
                        <div class="d-flex align-items-center mt-1">
                          <div class="flex-grow-1 text-muted">by 
                            <?php foreach($all_user as $allus){ ?>
                              <?php if($allus['id_user_detail'] == $gal['id_pembuat_galeri']){ ?>
                                <a href="" class="text-body text-truncate"><?= ucwords($allus['nama_user']) ?></a>
                              <?php } ?>
                            <?php } ?>
                          </div>
                          <div class="flex-shrink-0">
                            <div class="d-flex gap-3">
                              <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> <?= ucwords($gal['kategori_galeri']) ?> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end col -->
                
                <?php } ?>
              
              
              <?php } ?>
              
              
              
            </div>
            <!-- end row -->
            <!-- <div class="text-center my-2">
              <a href="javascript:void(0);" class="text-success">
                <i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </a>
            </div> -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- ene card body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
  <!--end row-->
</div>


<!--modals -->
<?php foreach($galeri as $galm){ ?>
  <?php if($galm['kategori_galeri'] == "video"){ ?>
    <div class="modal fade" id="ModalVideo<?= $galm['id_galeri'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= ucwords($galm['judul_galeri']) ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="ratio ratio-16x9">
                      <iframe src="<?= $galm['file_galeri'] ?>" frameborder="0" title="YouTube video" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
        </div>
    </div>
  <?php }elseif($galm['kategori_galeri'] == "foto" && $galm['group_galeri'] == "ya"){ ?>
    <div class="modal fade" id="ModalFoto<?= $galm['id_galeri'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalFotoLabel"><?= ucwords($galm['judul_galeri']) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                  <div class="col-xxl-6">
                      <div>
                        <img src="<?php base_url() ?>/assets/images_galeri/<?= $galm['file_galeri'] ?>" class="img-fluid" alt="Responsive image">
                      </div>
                  </div><!--end col-->
                  <?php
                    foreach($sub_galeri as $sgal){
                      if($sgal['id_galeri'] == $galm['id_galeri']){ ?>
                        <div class="col-xxl-6">
                            <div>
                              <img src="<?php base_url() ?>/assets/images_galeri/<?= $sgal['file_foto_galeri'] ?>" class="img-fluid" alt="Responsive image">
                            </div>
                        </div><!--end col-->
                  <?php }
                    }
                    ?>
                   
                </div><!--end row-->
            </div>
        </div>
    </div>
  </div>
  <?php } ?>
<?php } ?>







<!-- script search box berita -->
<script type="text/javascript">
  function filter() {
    var value,judul,berita,i;
    value = document.getElementById("value").value.toUpperCase();
    berita = document.getElementsByClassName("berita");
    for(i=0;i<berita.length;i++){
      judul = berita[i].getElementsByClassName("judul");
      if (judul[0].innerHTML.toUpperCase().indexOf(value) > -1) {
        berita[i].style.display = "";
      }else{
        berita[i].style.display = "none";
      }
    }
  }
</script>



<?= $this->endSection(); ?>
