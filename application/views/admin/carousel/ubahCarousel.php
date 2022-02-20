<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card">
	            <div class="card-header bg-primary">
	              Ubah Carousel
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <input type="hidden" name="id" value="<?= $carousel->id ?>">
	               <div class="mb-3 row">
	                 <label for="judul" class="col-sm-2 col-form-label">Judul</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="judul" name="judul" value="<?= $carousel->judul ?>">
	                   <div class="form-text text-danger"><?= form_error('judul') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $carousel->deskripsi ?>">
	                   <div class="form-text text-danger"><?= form_error('deskripsi') ?></div>
	                 </div>
	               </div>
				   <div class="mb-3 row">
	                 <label for="deskripsi" class="col-sm-2 col-form-label">Gambar Sebelumnya</label>
	                 <div class="col-sm-10">
						<img src="<?= base_url('public/img/carousel/'.$carousel->img) ?>" alt="<?= $carousel->judul ?>" width="250">
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="deskripsi" class="col-sm-2 col-form-label">Gambar</label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $carousel->img ?>">
	                   <div class="form-text text-danger"><?= form_error('gambar') ?></div>
	                 </div>
	               </div>
	               <button type="submit" name="ubah" class="btn btn-primary float-right me-5">Ubah</button>
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