<!-- Main content -->
<section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-2">
	            <div class="card-header bg-primary">
	              Edit Struktur
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <div class="mb-3 row">
	                 <label for="periode" class="col-sm-2 col-form-label">Periode</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="periode" name="periode" value="<?= $struktur->periode ?>">
	                   <div class="form-text text-danger"><?= form_error('periode') ?></div>
	                 </div>
	               </div>
                   <div class="mb-3 row">
	                 <label for="periode" class="col-sm-2 col-form-label">Gambar Sebelumnya</label>
	                 <div class="col-sm-10">
                        <img src="<?= base_url('public/img/struktur/'.$struktur->img) ?>" alt="" width="100">
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="struktur" class="col-sm-2 col-form-label">Struktur</label>
	                 <div class="col-sm-10">
					 <input type="file" class="form-control" id="struktur" name="struktur">
	                   <div class="form-text text-danger"><?= form_error('struktur') ?></div>
	                 </div>
	               </div>
				   <a href="<?= base_url("admin/struktur") ?>" class="btn btn-danger float-right me-3">
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