<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Tambah Data Galeri Detail
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <div class="mb-3 row">
	                 <label for="id_galeri" class="col-sm-2 col-form-label">Kegiatan</label>
	                 <div class="col-sm-10">
	                 	 <input type="hidden" name="id_galeri" value="<?= $galeri['id'] ?>">
	                   <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $galeri['kegiatan'] ?>" disabled readonly>
	                 </div>
                   <div class="form-text text-danger"><?= form_error('id_galeri') ?></div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="gambar" name="gambar">
	                 </div>
	                 <div class="form-text text-danger"><?= form_error('gambar') ?></div>
	               </div>
				   	<a href="<?= base_url("admin/detail-galeri/".$galeri['id']) ?>" class="btn btn-danger float-right me-3">
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