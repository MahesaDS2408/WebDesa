<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Postingan</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Post</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row justify-content-center mb-4">
            <div class="col-lg-6">
              <div class="row g-2">
                <div class="col">
                  <div class="position-relative mb-3">
                    <input type="text" id="value" onkeyup="filter()" class="form-control form-control-lg bg-light border-light" placeholder="Cari Judul Berita Disini..">
                  </div>
                </div>
                <div class="col-auto">
                  <!-- <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">
                    <i class="mdi mdi-magnify me-1"></i> Cari </button> -->
                </div>
              </div>
            </div>
            <!--end col-->
            <!-- <div class="col-lg-12">
              <h5 class="fs-16 fw-semibold text-center mb-0">Showing results for " <span class="text-primary fw-medium fst-italic">Admin Dashboard</span> " </h5>
            </div> -->
          </div>
          <!--end row-->
        </div>
        <div>
          <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#news" role="tab" aria-selected="false">
                <i class="ri-list-unordered text-muted align-bottom me-1"></i> Berita </a>
            </li>
            <li>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-primary me-md-2" role="button"  href="<?php base_url() ?>/new_post"  aria-selected="false">Tambah Berita </a>
            </div>
            </li>
          </ul>
        </div>
        <div class="card-body p-4">
          <div class="tab-content text-muted">
            <!-- tab-pane-->
            <div class="tab-pane active" id="news" role="tabpanel">
              <div class="row">
                <div class="col-lg-6 berita">
                  <div class="card border">
                    <div class="card-body">
                      <div class="d-sm-flex">
                        <div class="flex-shrink-0">
                          <img src="assets_admin/images/small/img-1.jpg" alt="" width="115" class="rounded-1" />
                        </div>
                        <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                          <ul class="list-inline mb-2">
                            <li class="list-inline-item">
                              <span class="badge badge-soft-success fs-11">Business</span>
                            </li>
                          </ul>
                          <h5 class="fs-15">
                            <a href="javascript:void(0);" class="judul">A mix of friends and strangers heading off to find an adventure</a>
                          </h5>
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <i class="ri-user-3-fill text-success align-middle me-1"></i> James Ballard
                            </li>
                            <li class="list-inline-item">
                              <i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-6 berita">
                  <div class="card border">
                    <div class="card-body">
                      <div class="d-sm-flex">
                        <div class="flex-shrink-0">
                          <img src="assets_admin/images/small/img-2.jpg" alt="" width="115" class="rounded-1" />
                        </div>
                        <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                          <ul class="list-inline mb-2">
                            <li class="list-inline-item">
                              <span class="badge badge-soft-warning fs-11">Development</span>
                            </li>
                          </ul>
                          <h5 class="fs-15">
                            <a href="javascript:void(0);" class="judul">How to get creative in your work ?</a>
                          </h5>
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <i class="ri-user-3-fill text-success align-middle me-1"></i> Ruby Griffin
                            </li>
                            <li class="list-inline-item">
                              <i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-6 berita">
                  <div class="card border">
                    <div class="card-body">
                      <div class="d-sm-flex">
                        <div class="flex-shrink-0">
                          <img src="assets_admin/images/small/img-3.jpg" alt="" width="115" class="rounded-1" />
                        </div>
                        <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                          <ul class="list-inline mb-2">
                            <li class="list-inline-item">
                              <span class="badge badge-soft-info fs-11">Fashion</span>
                            </li>
                          </ul>
                          <h5 class="fs-15">
                            <a href="javascript:void(0);" class="judul">How to become a best sale marketer in a year!</a>
                          </h5>
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <i class="ri-user-3-fill text-success align-middle me-1"></i> Elwood Arter
                            </li>
                            <li class="list-inline-item">
                              <i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-6 berita">
                  <div class="card border">
                    <div class="card-body">
                      <div class="d-sm-flex">
                        <div class="flex-shrink-0">
                          <img src="assets_admin/images/small/img-4.jpg" alt="" width="115" class="rounded-1" />
                        </div>
                        <div class="flex-grow-1 ms-sm-4 mt-3 mt-sm-0">
                          <ul class="list-inline mb-2">
                            <li class="list-inline-item">
                              <span class="badge badge-soft-primary fs-11">Product</span>
                            </li>
                          </ul>
                          <h5 class="fs-15">
                            <a href="javascript:void(0);" class="judul">Manage white space in responsive layouts ?</a>
                          </h5>
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <i class="ri-user-3-fill text-success align-middle me-1"></i> Nancy Martino
                            </li>
                            <li class="list-inline-item">
                              <i class="ri-calendar-2-fill text-success align-middle me-1"></i> 23 Nov, 2021
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                </div>
                <!--end col-->
              </div>
              <!--end row-->
              <!-- <div class="mt-4">
                <ul class="pagination pagination-separated justify-content-center mb-0">
                  <li class="page-item disabled">
                    <a href="javascript:void(0);" class="page-link">
                      <i class="mdi mdi-chevron-left"></i>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a href="javascript:void(0);" class="page-link">1</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">2</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">3</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">4</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">5</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript:void(0);" class="page-link">
                      <i class="mdi mdi-chevron-right"></i>
                    </a>
                  </li>
                </ul>
              </div> -->
            </div>
            <!--end tab-pane-->
          </div>
          <!--end tab-content-->
        </div>
        <!--end card-body-->
      </div>
      <!--end card -->
    </div>
    <!--end card -->
  </div>
  <!--end row-->
</div>
<!-- script search box berita -->
<script type="text/javascript">
  function filter() {
    var value,judul,rapat,i;
    value = document.getElementById("value").value.toUpperCase();
    rapat = document.getElementsByClassName("berita");
    for(i=0;i<rapat.length;i++){
      judul = rapat[i].getElementsByClassName("judul");
      if (judul[0].innerHTML.toUpperCase().indexOf(value) > -1) {
        rapat[i].style.display = "";
      }else{
        rapat[i].style.display = "none";
      }
    }
  }
</script>
<?= $this->endSection(); ?>
