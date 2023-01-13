<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Membuat Galeri</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Galeri</a>
            </li>
            <li class="breadcrumb-item active">Membuat Galeri</li>
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
          <h4 class="card-title mb-0 flex-grow-1">Form Buat Galeri</h4>
        </div>
        <!-- end card header -->
        <div class="card-body">
          <div class="live-preview">
            <form action="<?= htmlentities( base_url('/dashboard/galeri/new_galeri') , ENT_QUOTES) ?>" method="POST" enctype="multipart/form-data">
                <div class="row gy-4">
                        <div class="col-xxl-9 col-md-6">
                            <label for="JGaleri" class="form-label">Judul Galeri</label>
                            <input type="text" class="form-control" id="JGaleri" name="JGaleri" required>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <label for="kategori" class="form-label">Kategori Galeri</label>
                            <select class="form-select" name="kategori" id="kategori" aria-label="Default select example" >
                                <option disabled selected>Pilih Kategori</option>
                                <option value="foto">Foto</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <!--end col-->
                        <!-- <div class="col-xxl-3 col-md-6">
                            <label for="TglGaleri" class="form-label">Tanggal Galeri</label>
                            <input type="datetime-local" class="form-control" id="TglGaleri" name="TglGaleri">
                        </div> -->
                        <!-- Field Loop -->
                        <div class="form-foto col-xxl-6 col-md-6 after-add-foto">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="file_upload" class="form-label">File Foto</label>
                                    <input accept="image/*" class="form-control border-1"  name="files[]" type="file" multiple>
                                    <div id="passwordHelpBlock" class="form-text"> Ukuran gambar (500 x 259 px). </div> 
                                </div>
                                <div class="col-md-2">
                                    <!-- Button Add Field -->
                                    <label for="" class="form-label mb-4"></label>
                                        <button class="btn btn-success form-control add-foto" type="button" >Tambah</button>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="copy_foto invisible">
                            <div class="form-foto col-xxl-6 col-md-6">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="file_upload" class="form-label">File Foto</label>
                                        <input accept="image/*" class="form-control border-1"  name="files[]" type="file" multiple>
                                        <div id="passwordHelpBlock" class="form-text"> Ukuran gambar (500 x 259 px). </div> 
                                    </div>
                                    <div class="col-md-2">
                                        <!-- Button Add Field -->
                                        <label for="" class="form-label mb-4"></label>
                                            <button class="btn btn-warning form-control remove_foto" type="button" >Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <!-- Button Posting -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit" >Posting</button>
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
  <!--end row-->
</div>


<!-- image review -->
<!-- <script>
  imgInp.onchange = evt => {
    const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script> -->
<!-- JQuery Foto -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-foto").click(function(){ 
          var html = $(".copy_foto").html();
          $(".after-add-foto").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove_foto",function(){ 
          $(this).parents(".form-foto").remove();
      });
    });
</script>
<?= $this->endSection(); ?>
