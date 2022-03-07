<!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row">
      	<div class="col-md-8">
          <div class="card">
            <div class="card-header bg-primary">
              Tambah Data Galeri
            </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
               <div class="mb-3 row">
                 <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="kegiatan" name="kegiatan">
                 </div>
                 <div class="form-text text-danger"><?= form_error('kegiatan') ?></div>
               </div>
               <div class="mb-3 row">
                 <label for="sampul_kegiatan" class="col-sm-2 col-form-label">Sampul</label>
                 <div class="col-sm-10">
                   <input type="file" class="form-control" id="sampul_kegiatan" name="sampul_kegiatan">
                 </div>
                 <div class="form-text text-danger"><?= form_error('sampul_kegiatan') ?></div>
               </div>
                <a href="<?= base_url("admin/galeri") ?>" class="btn btn-danger float-right me-3">
                  Batal
                </a>
               <button type="submit" class="btn btn-primary float-right me-5">Simpan</button>
              </form>
            </div>
          </div>	
      	</div>
      </div>
      <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
	CKEDITOR.replace('editor');
</script>