<!-- Main content -->
<section class="content">
      <div class="container">
        <!-- Main row -->
        
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Tambah Agenda
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <div class="mb-3 row">
	                 <label for="nama" class="col-sm-4 col-form-label">
	                 	Nama Agenda
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>" autofocus="on">
	                   <div class="form-text text-danger">
	                   	<?= form_error('nama') ?>
	                   </div>
	                 </div>
	               </div> 
	               <div class="mb-3 row">
	                 <label for="deskripsi" class="col-sm-4 col-form-label">
	                 	Deskripsi agenda
	                 </label>
	                 <div class="col-sm-10">
	                 	 <textarea class="form-control" id="deskripsi" name="deskripsi">
	                 	 	<?= set_value('deskripsi') ?>
	                 	 </textarea>
	                   <div class="form-text text-danger">
	                   	<?= form_error('deskripsi') ?>
	                   </div>
	                 </div>
	               </div>
                   <div class="mb-3 row">
	                 <label for="waktu" class="col-sm-4 col-form-label">
	                 	Waktu Agenda
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="date" class="form-control" id="waktu" name="waktu" value="<?= set_value('waktu') ?>">
	                   <div class="form-text text-danger">
	                   	<?= form_error('waktu') ?>
	                   </div>
	                 </div>
	               </div>
				   <div class="mb-3 row">
	                 <label for="lokasi" class="col-sm-4 col-form-label">
	                 	Lokasi Agenda
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= set_value('lokasi') ?>" autofocus="on">
	                   <div class="form-text text-danger">
	                   	<?= form_error('lokasi') ?>
	                   </div>
	                 </div>
	               </div> 
	               <div class="mb-3 row">
	                 <label for="img" class="col-sm-4 col-form-label">
	                 	Gambar Agenda
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="img" name="img" value="<?= set_value('img') ?>">
	                   <div class="form-text text-danger">
	                   	<?= form_error('img') ?>
	                   </div>
	                 </div>
	               </div>
				   <a href="<?= base_url("admin/agenda") ?>" class="btn btn-danger float-right me-3">
					   Batal
				   </a>
	               <button type="submit" class="btn btn-primary float-right me-5">
					   Simpan
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
