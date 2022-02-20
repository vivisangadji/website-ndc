<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card">
	            <div class="card-header bg-primary">
	              Tambah Sejarah
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <div class="mb-3 row">
	                 <label for="judul" class="col-sm-2 col-form-label">Judul</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="judul" name="judul">
	                   <div class="form-text text-danger"><?= form_error('judul') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="sejarah" class="col-sm-2 col-form-label">Sejarah</label>
	                 <div class="col-sm-10">
	                   <textarea type="text" class="form-control" id="sejarah" name="sejarah"></textarea>
	                   <div class="form-text text-danger"><?= form_error('sejarah') ?></div>
	                 </div>
	               </div>
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