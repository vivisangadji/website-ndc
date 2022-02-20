<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Tambah Service
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <div class="mb-3 row">
	                 <label for="service" class="col-sm-2 col-form-label">Service</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="service" name="service">
	                   <div class="form-text text-danger"><?= form_error('service') ?></div>
	                 </div>
	               </div>
	               <button type="submit" class="btn btn-primary float-right me-5">Simpan
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