<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Ubah Data Divisi
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <input type="hidden" name="id" value="<?= $divisi->id ?>">
	               <div class="mb-3 row">
	                 <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $divisi->nama_divisi ?>">
	                   <div class="form-text text-danger"><?= form_error('divisi') ?></div>
	                 </div>
	               </div>
				   <a href="<?= base_url("admin/divisi") ?>" class="btn btn-danger float-right me-3">
						Batal
					</a>
	               <button type="submit" class="btn btn-primary float-right me-5">Ubah</button>
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