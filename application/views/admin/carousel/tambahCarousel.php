<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card">
	            <div class="card-header bg-primary">
	              Tambah Carousel
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <div class="mb-3 row">
	                 <label for="judul" class="col-sm-2 col-form-label">Judul</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="judul" name="judul">
	                   <div class="form-text text-danger"><?= form_error('judul') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="deskripsi" name="deskripsi">
	                   <div class="form-text text-danger"><?= form_error('deskripsi') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="deskripsi" class="col-sm-2 col-form-label">Gambar</label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="deskripsi" name="gambar">
	                   <div class="form-text text-danger"><?= form_error('gambar') ?></div>
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