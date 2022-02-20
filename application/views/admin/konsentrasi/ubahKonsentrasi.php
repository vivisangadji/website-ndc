<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Ubah Data Konsentrasi
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <input type="hidden" name="id" value="<?= $konsentrasi->id ?>">
	               <div class="mb-3 row">
	                 <label for="judul" class="col-sm-2 col-form-label">Konsentrasi</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="konsentrasi" name="konsentrasi" value="<?= $konsentrasi->nama ?>">
	                   <div class="form-text text-danger"><?= form_error('konsentrasi') ?></div>
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