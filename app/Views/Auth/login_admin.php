<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar-image="none">
  <head>
    <meta charset="utf-8" />
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Login Dashboard Admin" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets_admin/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="assets_admin/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets_admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets_admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets_admin/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets_admin/css/custom.min.css" rel="stylesheet" type="text/css" />
  </head>
  <!-- Script Alert -->
  <?php if(session()->getFlashdata('akun') == 'salah'){ ?>
  <script>
  function sweet(){
  swal("Peringatan!", "Password Yang anda Masukan Salah", "warning");
  }
  </script> 
  <?php } ?>
  <?php if(session()->getFlashdata('akun') == 'mati'){ ?>
  <script>
  function sweet(){
  swal("Peringatan!", "Akun anda tidak aktif, Silahkan Hubungi Admin", "warning");
  }
  </script> 
  <?php } ?>
  <?php if(session()->getFlashdata('akun') == 'kosong'){ ?>
  <script>
  function sweet(){
  swal("Peringatan!", "Akun anda tidak terdaftar", "warning");
  }
  </script> 
  <?php } ?>
  <!-- End Alert -->
  <body onload="sweet()">
    <div class="auth-page-wrapper pt-5">
      <!-- auth page bg -->
      <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>
        <div class="shape">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
            <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
          </svg>
        </div>
      </div>
      <!-- auth page content -->
      <div class="auth-page-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center mt-sm-5 mb-4 text-white-50">
                <div>
                  <a href="#" class="d-inline-block auth-logo">
                    <img src="assets_admin/images/logo-light.png" alt="" height="20">
                  </a>
                </div>
                <p class="mt-3 fs-15 fw-medium">Login Dashboard Admin</p>
              </div>
            </div>
          </div>
          <!-- end row -->
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="card mt-4">
                <div class="card-body p-4">
                  <div class="text-center mt-2">
                    <h5 class="text-primary">Selamat Datang !</h5>
                    <p class="text-muted">Masuk untuk akses Dashboard.</p>
                  </div>
                  <div class="p-2 mt-4">
                    <form action="<?= htmlentities( base_url('/login_admin') , ENT_QUOTES) ?>" method="post">
                      <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username/email" required>
                      </div>
                      <div class="mb-3">
                        <div class="float-end">
                          <a href="#" class="text-muted">Lupa password?</a>
                        </div>
                        <label class="form-label" for="password-input">Password</label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                          <input type="password" class="form-control pe-5" placeholder="Masukan password" id="password-input" name="password" required>
                          <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon">
                            <i class="ri-eye-fill align-middle"></i>
                          </button>
                        </div>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                        <label class="form-check-label" for="auth-remember-check">Ingat saya</label>
                      </div>
                      <div class="mt-4">
                        <button class="btn btn-success w-100" type="submit">Masuk</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
              <div class="mt-4 text-center">
                <p class="mb-0">Tidak Memiliki Akun ? <a href="#" class="fw-semibold text-primary text-decoration-underline"> Daftar </a>
                </p>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end auth page content -->
      <!-- footer -->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
                <p class="mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> &copy; AdminWebDesa.
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
    <!-- JAVASCRIPT -->
    <script src="assets_admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets_admin/libs/simplebar/simplebar.min.js"></script>
    <script src="assets_admin/libs/node-waves/waves.min.js"></script>
    <script src="assets_admin/libs/feather-icons/feather.min.js"></script>
    <script src="assets_admin/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets_admin/js/plugins.js"></script>
    <!-- particles js -->
    <script src="assets_admin/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets_admin/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="assets_admin/js/pages/password-addon.init.js"></script>
    <!-- Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>