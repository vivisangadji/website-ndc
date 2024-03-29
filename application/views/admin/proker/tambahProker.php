<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card">
	            <div class="card-header bg-primary">
	              Tambah Program Kerja
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <div class="mb-3 row">
	                 <label for="proker" class="col-sm-2 col-form-label">Proker</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="proker" name="proker">
	                   <div class="form-text text-danger"><?= form_error('proker') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="pjawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="pjawab" name="pjawab">
	                   <div class="form-text text-danger"><?= form_error('pjawab') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="sasaran" class="col-sm-2 col-form-label">Sasaran</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="sasaran" name="sasaran">
	                   <div class="form-text text-danger"><?= form_error('sasaran') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="tujuan" name="tujuan">
	                   <div class="form-text text-danger"><?= form_error('tujuan') ?></div>
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