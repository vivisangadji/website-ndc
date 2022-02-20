<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card">
	            <div class="card-header bg-primary">
	              Ubah Visi Misi
	            </div>
	            <div class="card-body">
	              <form action="" method="post">
	               <input type="hidden" name="id" value="<?= $visi_misi->id ?>">
	               <div class="mb-3 row">
	                 <label for="visi" class="col-sm-2 col-form-label">Visi</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="visi" name="visi" value="<?= $visi_misi->visi ?>">
	                   <div class="form-text text-danger"><?= form_error('visi') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="editor" class="col-sm-2 col-form-label">Misi</label>
	                 <div class="col-sm-10">
	                   <textarea type="text" class="form-control" id="editor" name="misi" rows="4"><?= $visi_misi->misi ?></textarea>
	                   <div class="form-text text-danger"><?= form_error('misi') ?></div>
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