<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Membuat Postingan</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Post</a>
            </li>
            <li class="breadcrumb-item active">Membuat Postingan</li>
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
          <h4 class="card-title mb-0 flex-grow-1">Form Buat Postingan</h4>
        </div>
        <!-- end card header -->
        <div class="card-body">
          <div class="live-preview">
            <form action="<?= htmlentities( base_url('/dashboard/post/new_post') , ENT_QUOTES) ?>" method="POST" enctype="multipart/form-data">
                <div class="row gy-4">
                    
                    <div class="col-xxl-12 col-md-6">
                        <label for="Jberita" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="Jberita" name="Jberita" required>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <label for="kategori" class="form-label">Kategori Berita</label>
                        <select class="form-select" name="kategori" id="kategori" aria-label="Default select example" required>
                            <option disabled selected>Pilih Kategori</option>
                            <?php foreach($kategori as $kat){ ?>
                            <option value="<?= $kat['id_artikel_kategori'] ?>"><?= ucwords($kat['nama_artikel_kategori']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <label for="TglBerita" class="form-label">Tanggal Berita</label>
                        <input type="datetime-local" class="form-control" id="TglBerita" name="TglBerita">
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <label for="file_upload" class="form-label">File Tumbnail Berita</label>
                        <input accept="image/*" class="form-control border-1" id="imgInp" name="file_upload" type="file" required>
                        <div id="passwordHelpBlock" class="form-text"> Ukuran gambar (1160 x 516 px). </div>                
                    </div>
                    <div class="col-xxl-12 col-md-6">
                        <label for="view_file_upload" class="form-label">View Tumbnail Berita</label>
                        <center>
                        <img id="blah" width="100%" height="215vh"/>
                        </center>
                    </div>
                    <div class="col-xxl-12 col-md-6">
                        <label for="isi_artikel" class="form-label">Isi Berita</label>
                        <table align="center" cellpadding = "5">
                            <tr>
                                <td><textarea name="isi_artikel" id="isi_artikel"></textarea>
                                    <script>
                                    CKEDITOR.replace( 'isi_artikel', {
                                    height: 450,
                                    toolbar: [
                                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo' ] },
                                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace' ] },
                                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold' , 'Italic', 'Underline', '-', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ]},
                                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-'] },
                                    { name: 'links', items: [ 'Link', 'Unlink' ] },
                                    { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar' ] },
                                    { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                                    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                                    { name: 'others', items: [ '-' ] },
                                    ]
                                    });
                                    </script>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--end col-->
                    <!-- Button -->
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
<script>
  imgInp.onchange = evt => {
    const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
<?= $this->endSection(); ?>
