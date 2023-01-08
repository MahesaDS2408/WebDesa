<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboards</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row project-wrapper">
    <div class="col-xxl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Rekap Data Desa</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                <script>document.write(new Date().getFullYear())</script>
                            </button>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-header p-0 border-0 bg-soft-light">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="35">0</span></h5>
                                    <p class="text-muted mb-0">Kartu Keluarga</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="5">0</span></h5>
                                    <p class="text-muted mb-0">Layanan Kesehatan</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="20">0</span></h5>
                                    <p class="text-muted mb-0">Aparatur Desa</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value" data-target="500">0</span></h5>
                                    <p class="text-muted mb-0">Masyarakat</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body p-0 pb-2">
                        <div>
                            <div id="projects-overview-chart" data-colors='["--vz-primary", "--vz-warning", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
        
            <div class="col-xl-4">
                <a href="#!" style="text-decoration: none;">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="hard-drive" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                    Penyimpanan</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="4">0</span> Data</h4>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">drive desa, gambar dan dokumen</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div><!-- end col -->
            <div class="col-xl-4">
                <a href="<?php base_url() ?>/post" style="text-decoration: none;">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="airplay" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                    Postingan</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="4">0</span> Postingan</h4>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Postingan berita dan pengumuman</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div><!-- end col -->
            <div class="col-xl-4">
                <a href="#!" style="text-decoration: none;">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="image" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                    Galeri</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="4">0</span> Data</h4>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">media publikasi berupa gambar dan video</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div><!-- end col -->

        </div><!-- end row -->

        
    </div><!-- end col -->

</div><!-- end row -->


</div>

<?= $this->endSection(); ?>
