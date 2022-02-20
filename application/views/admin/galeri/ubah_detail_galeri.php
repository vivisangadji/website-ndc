<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Ubah Detail Galeri
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <input type="hidden" name="id" value="<?= $detail_galeri->id ?>">
	               <div class="mb-3 row">
 	                 <label for="id_galeri" class="col-sm-2 col-form-label">Kegiatan</label>
 	                 <select class="form-select" aria-label="Default select example" name="id_galeri" readonly>
	 	                   <option value="<?= $galeri["id"] ?>"><?= $galeri["kegiatan"] ?>
	 	                   </option>
 	                 </select>
                    <div class="form-text text-danger"><?= form_error('id_galeri') ?></div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="dis_gambar" class="col-sm-2 col-form-label">Gambar Sebelumnya</label>
	                 <div class="col-sm-10">
	                   <img src="<?= base_url('public/img/galeri/'.$detail_galeri->gambar) ?>" width="35%">
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="gambar" class="col-sm-2 col-form-label">Pilih Gambar</label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="gambar" name="gambar">
	                   <div class="form-text text-danger"><?= form_error('gambar') ?></div>
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