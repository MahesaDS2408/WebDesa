<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Dashboard Admin" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <?php foreach($web_option as $wo): ?>
      <?php if($wo['name_web_option'] == "icon_desa"){ ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php base_url() ?>/assets/imgs/template/<?= $wo['value_web_option'] ?>">
      <?php } ?>
      <?php if($wo['name_web_option'] == "nama_web_desa"){ ?>
        <title>Dashboard Admin | Web  <?= ucwords($wo['value_web_option']) ?></title>
      <?php } ?>
    <?php endforeach; ?>

    <!-- Jquery untuk ADD Remove Field/Form -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <script src="https://cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>

    <link rel="stylesheet" href="<?php base_url() ?>/assets_admin/libs/glightbox/css/glightbox.min.css">

    <!-- Layout config Js -->
    <script src="<?php base_url() ?>/assets_admin/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php base_url() ?>/assets_admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php base_url() ?>/assets_admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php base_url() ?>/assets_admin/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php base_url() ?>/assets_admin/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- Boostrap tambahan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="#!" class="logo logo-light">
                                <span class="logo-lg">
                                <?php foreach($web_option as $wo): ?>
                                    <?php if($wo['name_web_option'] == "nav_icon_desa1"){ ?>
                                    <img src="<?php base_url() ?>/assets/imgs/template/<?= $wo['value_web_option'] ?>" alt="" height="35">
                                    <?php } ?>
                                <?php endforeach; ?>
                                </span>
                            </a>
                        </div>
                        <!-- mode mobile  -->
                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- Search dekstop -->
                        <!-- <form class="app-search d-none d-md-block" action="#!" method="POST">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                            </div>
                        </form> -->
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <!-- <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button> -->
                            <!-- Search mobile -->
                            <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form class="p-3" action="#!" method="POST"> 
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                        <!-- Bendera -->
                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                            <img src="<?php base_url() ?>/assets_admin/images/flags/indonesia.svg" alt="user-image" class="me-2 rounded" height="18">
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>
                        <?php foreach($user as $us){ 
                            $nama_panggilan = explode(' ',trim($us['nama_user']));
                            ?>
                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="<?php base_url() ?>/assets_admin/images/users/avatar-1.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?= ucwords($us['nama_user']) ?></span>
                                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"><?= $us['email'] ?></span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome <?= ucwords($nama_panggilan[0]) ?>!</h6>
                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <!-- <a class="dropdown-item" href="#!"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Pengaturan</span></a> -->
                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Ganti Password</span></a>
                                    <a class="dropdown-item" href="<?php base_url() ?>/logout"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Keluar</span></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <?php foreach($web_option as $wo): ?>
                            <?php if($wo['name_web_option'] == "nav_icon_desa1"){ ?>
                            <img src="<?php base_url() ?>/assets/imgs/template/<?= $wo['value_web_option'] ?>" alt="" height="30">
                            <?php } ?>
                        <?php endforeach; ?>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?php base_url() ?>/dashboard"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="bx bxs-dashboard"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> 
                        <!-- end Dashboard Menu -->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMedia" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="bx bx-layer"></i> <span data-key="t-apps">Media</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMedia">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link"> Penyimpanan </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php base_url() ?>/dashboard/post" class="nav-link"> Post </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php base_url() ?>/dashboard/galeri" class="nav-link"> Galeri </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Profile Desa -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDesa" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="bx bx-arch"></i> <span data-key="t-landing">Profil Desa</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDesa">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" >Potensi Desa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profil Aparatur
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarProfile">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-simple-page"> BPD </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php base_url() ?>/dashboard/aparatur_desa" class="nav-link" data-key="t-settings"> Pemerintah Desa </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php base_url() ?>/dashboard/peta_desa" class="nav-link" >Peta Desa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php base_url() ?>/dashboard/visi_misi" class="nav-link" >Visi dan Misi</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <!-- Data Pengguna -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMasyarakat" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="bx bx-user-circle"></i> <span data-key="t-landing">Data Masyarakat</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMasyarakat">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" >Masyarakat</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Layanan -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayanan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="bx bx-file"></i> <span data-key="t-pages">Layanan</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayanan">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Layanan Desa </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <!-- jangan dihapus -->
            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay jangan di hapus-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                
                <!-- MAIN KONTEN -->
                <?= $this->renderSection('content'); ?>


            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © AdminWebDesa.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                <!-- Design & Develop by Themesbrand -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="<?php base_url() ?>/assets_admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php base_url() ?>/assets_admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php base_url() ?>/assets_admin/libs/node-waves/waves.min.js"></script>
    <script src="<?php base_url() ?>/assets_admin/libs/feather-icons/feather.min.js"></script>
    <script src="<?php base_url() ?>/assets_admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?php base_url() ?>/assets_admin/js/plugins.js"></script>
    <script src="<?php base_url() ?>/assets_admin//libs/glightbox/js/glightbox.min.js"></script>

    <!-- apexcharts -->
    <!-- <script src="<?php base_url() ?>/assets_admin/libs/apexcharts/apexcharts.min.js"></script> -->

    <!-- Vector map-->
    <!-- <script src="<?php base_url() ?>/assets_admin/libs/jsvectormap/js/jsvectormap.min.js"></script> -->
    <!-- <script src="<?php base_url() ?>/assets_admin/libs/jsvectormap/maps/world-merc.js"></script> -->

    <!--Swiper slider js-->
    <!-- <script src="<?php base_url() ?>/assets_admin/libs/swiper/swiper-bundle.min.js"></script> -->

    <!-- Dashboard init -->
    <!-- <script src="<?php base_url() ?>/assets_admin/js/pages/dashboard-ecommerce.init.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="<?php base_url() ?>/assets_admin/js/pages/datatables.init.js"></script>
    <script src="<?php base_url() ?>/assets_admin/js/pages/gallery.init.js"></script>
    <script src="<?php base_url() ?>/assets_admin/libs/glightbox/js/glightbox.min.js"></script>
    <script src="<?php base_url() ?>/assets_admin/libs/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- <script src="<?php base_url(); ?>/assets_admin/js/select2.min.js" crossorigin="anonymous"></script> -->



    <!-- App js -->
    <script src="<?php base_url() ?>/assets_admin/js/app.js"></script>

    <!-- script tambahan boostrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- go back -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    </body>

</html>