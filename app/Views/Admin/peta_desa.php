<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Peta Desa</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Profile Desa</a>
            </li>
            <li class="breadcrumb-item active">Peta</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header align-items-center d-flex">
          <h4 class="card-title mb-0 flex-grow-1">Form Peta</h4>
        </div>
        <!-- end card header -->
        <div class="card-body">
          <div class="live-preview">
            <form action="<?= htmlentities( base_url('/dashboard/peta_desa') , ENT_QUOTES) ?>" method="POST" enctype="multipart/form-data">
                <div class="row gy-4">
                    
                    <div class="col-xxl-12 col-md-6">
                        <label for="Jberita" class="form-label">Link Maps Desa</label>
                        <textarea type="text" class="form-control" id="peta" name="peta" required><?php foreach($peta as $pet){ ?><?= $pet['value_web_option'] ?><?php } ?></textarea>
                    </div>
                    <!--end col-->
                    <!-- Button -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit" >Simpan</button>
                    </div>
                    
                </div>
                <!--end row-->
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--end col-->
  </div>
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header align-items-center d-flex">
          <h4 class="card-title mb-0 flex-grow-1">View Peta</h4>
        </div>
        <!-- end card header -->
        <div class="card-body">
          <div class="live-preview">
          <?php foreach($peta as $pet){ ?>
            <iframe src="<?= $pet['value_web_option'] ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!--end col-->
  </div>
  <!--end row-->
</div>



<?= $this->endSection(); ?>
