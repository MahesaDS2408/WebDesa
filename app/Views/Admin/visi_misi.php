<?= $this->extend('Admin/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Halaman Visi dan Misi</h4>
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Profil Desa</a>
            </li>
            <li class="breadcrumb-item active">Visi dan Misi</li>
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
          <h4 class="card-title mb-0 flex-grow-1">Form Visi dan Misi</h4>
        </div>
        <!-- end card header -->
        <div class="card-body">
          <div class="live-preview">
            <form action="<?= htmlentities( base_url('/dashboard/visi_misi') , ENT_QUOTES) ?>" method="POST" enctype="multipart/form-data">
                <div class="row gy-4">
                    
                    
                    <div class="col-xxl-12 col-md-6">
                        <label for="isi_artikel" class="form-label">Visi Desa</label>
                        <table align="center" cellpadding = "5">
                            <tr>
                                <td><textarea name="visi" id="visi"><?php foreach($visi as $vis){ ?> <?= $vis['value_web_option'] ?> <?php } ?></textarea>
                                    <script>
                                    CKEDITOR.replace( 'visi', {
                                    height:150,
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
                    <div class="col-xxl-12 col-md-6">
                        <label for="misi" class="form-label">Misi Desa</label>
                        <table align="center" cellpadding = "5">
                            <tr>
                                <td><textarea name="misi" id="misi"><?php foreach($misi as $mis){ ?> <?= $mis['value_web_option'] ?> <?php } ?></textarea>
                                    <script>
                                    CKEDITOR.replace( 'misi', {
                                    height: 300,
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
  <!--end row-->
</div>

<?= $this->endSection(); ?>
