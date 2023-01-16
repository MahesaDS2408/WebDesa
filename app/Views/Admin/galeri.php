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
                                <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 4 Foto</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end col -->
                <?php } ?>
              <!-- <div class="element-item col-xxl-3 col-xl-4 col-sm-6 video" data-category="video">
                <div class="gallery-box card">
                  <div class="gallery-container">
                    <a class="image-popup" href="<?php base_url() ?>/assets_admin/images/small/img-2.jpg" title="">
                      <img class="gallery-img img-fluid mx-auto" src="<?php base_url() ?>/assets_admin/images/small/img-2.jpg" alt="" />
                      <div class="gallery-overlay">
                        <h5 class="overlay-caption">Working at a coffee shop</h5>
                      </div>
                    </a>
                  </div>
                  <div class="box-content">
                    <div class="d-flex align-items-center mt-1">
                      <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a>
                      </div>
                      <div class="flex-shrink-0">
                        <div class="d-flex gap-3">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- end col -->
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
