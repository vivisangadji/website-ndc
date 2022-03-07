<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Tambah Konsentrasi
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <div class="mb-3 row">
	                 <label for="konsentrasi" class="col-sm-2 col-form-label">Konsentrasi</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="konsentrasi" name="konsentrasi">
	                   <div class="form-text text-danger"><?= form_error('konsentrasi') ?></div>
	                 </div>
	               </div>
				   <a href="<?= base_url("admin/konsentrasi") ?>" class="btn btn-danger float-right me-3">
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