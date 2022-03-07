<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Tambah Kontak & Medsos
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <div class="mb-3 row">
	                 <label for="nama" class="col-sm-2 col-form-label">Kontak & Medsos</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="nama" name="nama" placeholder="Kontak atau media sosial">
	                   <div class="form-text text-danger"><?= form_error('nama') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="icon" class="col-sm-2 col-form-label">Class Icon</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="icon" name="icon" placeholder="Nama class icon">
	                   <div class="form-text text-danger"><?= form_error('icon') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="url" class="col-sm-2 col-form-label">URL</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="url" name="url" placeholder="Masukan link kontak & sosmed">
	                   <div class="form-text text-danger"><?= form_error('url') ?></div>
	                 </div>
	               </div>
				   <a href="<?= base_url("admin/kontak_medsos") ?>" class="btn btn-danger float-right me-3">
						Batal
					</a>
	               <button type="submit" class="btn btn-primary float-right me-5">Simpan
	               </button>
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