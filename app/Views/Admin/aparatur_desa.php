<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Profil Aparatur Desa</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Profil Desa</a>
            </li>
            <li class="breadcrumb-item active">Aparatur Desa</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="row">
    <div class="col-12">
        <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
            <a class="btn btn-danger btn-sm me-md-2" role="button"  href="#"  aria-selected="false">Tambah Kepala Desa</a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary me-md-2" role="button"  href="#"  aria-selected="false">Tambah Aparatur</a>
            </div>
        </div>
        <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
            <div class="col">
                <div class="card card-body">
                    <div class="d-flex mb-4 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="<?php base_url() ?>/assets_admin/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <h5 class="card-title mb-1">Asep Rahmat</h5>
                            <p class="text-muted mb-0">Kepala Desa</p>
                        </div>
                    </div>
                    <h6 class="mb-1">Periode</h6>
                    <p class="card-text text-muted">2018 - 2024</p>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div><!-- end col -->
            <div class="col">
                <div class="card card-body">
                    <div class="d-flex mb-4 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="<?php base_url() ?>/assets_admin/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <h5 class="card-title mb-1">Neni Sutirah</h5>
                            <p class="text-muted mb-0">Sekertaris Desa</p>
                        </div>
                    </div>
                    <h6 class="mb-1">Periode</h6>
                    <p class="card-text text-muted">2018 - 2024</p>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div>
  <!--end row-->
</div>


<!-- image review -->
<script>
  imgInp.onchange = evt => {
    const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
<?= $this->endSection(); ?>
