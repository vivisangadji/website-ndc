<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Ubah Data Kontak & Medsos
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <input type="hidden" name="id" value="<?= $kontak_medsos->id ?>">
	               <div class="mb-3 row">
	                 <label for="nama" class="col-sm-4 col-form-label">Kontak Medsos</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="nama" name="nama" value="<?= $kontak_medsos->nama ?>">
	                   <div class="form-text text-danger"><?= form_error('nama') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="icon" class="col-sm-4 col-form-label">Class Icon</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="icon" name="icon" value="<?= $kontak_medsos->icon_class ?>">
	                   <div class="form-text text-danger"><?= form_error('icon') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="url" class="col-sm-4 col-form-label">URL</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="url" name="url" value="<?= $kontak_medsos->url ?>">
	                   <div class="form-text text-danger"><?= form_error('url') ?></div>
	                 </div>
	               </div>
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