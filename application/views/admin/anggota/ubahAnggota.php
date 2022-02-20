<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card">
	            <div class="card-header bg-primary">
	              Ubah Anggota
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <input type="hidden" name="id" value="<?= $anggota->id ?>">
	               <div class="mb-3 row">
	                 <label for="nama" class="col-sm-2 col-form-label">Nama</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="nama" name="nama" value="<?= $anggota->nama ?>">
	                   <div class="form-text text-danger"><?= form_error('nama') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="nra" class="col-sm-2 col-form-label">NRA</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="nra" name="nra" value="<?= $anggota->nra ?>">
	                   <div class="form-text text-danger"><?= form_error('nra') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="angkatan_ndc" class="col-sm-2 col-form-label">Angkatan NDC</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="angkatan_ndc" name="angkatan_ndc" value="<?= $anggota->angkatan_ndc ?>">
	                   <div class="form-text text-danger"><?= form_error('angkatan_ndc') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="angkatan_kampus" class="col-sm-2 col-form-label">Angkatan Kampus</label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="angkatan_kampus" name="angkatan_kampus" value="<?= $anggota->angkatan_kampus ?>">
	                   <div class="form-text text-danger"><?= form_error('angkatan_kampus') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="editor" class="col-sm-2 col-form-label">Jabatan</label>
	                 <div class="col-sm-10">
	                   <textarea type="text" class="form-control" id="editor" name="jabatan"><?= $anggota->jabatan ?></textarea>
	                   <div class="form-text text-danger"><?= form_error('jabatan') ?></div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="gambar" class="col-sm-2 col-form-label">Gambar Sebelumnya</label>
	                 <div class="col-sm-10">
	                   <img src="<?= base_url('public/img/anggota/'.$anggota->gambar) ?>" alt="<?= $anggota->nama?>" width="250">
	                 </div>
	               </div>
				   <div class="mb-3 row">
	                 <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
	                 <div class="col-sm-10">
	                   <input type="file" class="form-control" id="gambar" name="gambar" value="<?= base_url('public/img/anggota/'.$anggota->gambar) ?>">
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
  <script>
  	CKEDITOR.replace('editor');
  </script>