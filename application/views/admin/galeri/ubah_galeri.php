<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Ubah Data Galeri
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <input type="hidden" name="id" value="<?= $galeri['id'] ?>">
	               <div class="mb-3 row">
	                 <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
	                 <div class="col-sm-10">
		                 <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?= $galeri['kegiatan'] ?>">
	                 </div>
                   <div class="form-text text-danger"><?= form_error('kegiatan') ?></div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="dis_gambar" class="col-sm-2 col-form-label">Sampul Sebelumnya</label>
	                 <div class="col-sm-10">
	                   <img src="<?= base_url('public/img/galeri/'.$galeri['sampul']) ?>" width="35%">
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="sampul_kegiatan" class="col-sm-2 col-form-label">Sampul</label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="sampul_kegiatan" name="sampul_kegiatan">
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
  <script>
  	CKEDITOR.replace('editor');
  </script>