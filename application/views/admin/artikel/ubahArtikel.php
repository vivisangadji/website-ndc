<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Ubah Artikel
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <div class="mb-3 row">
	                 <label for="judul" class="col-sm-4 col-form-label">
	                 	Judul
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="judul" name="judul" value="<?= $artikel->judul ?>">
	                   <div class="form-text text-danger">
	                   	<?= form_error('judul') ?>
	                   </div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="konten" class="col-sm-4 col-form-label">
	                 	Isi Konten
	                 </label>
	                 <div class="col-sm-10">
	                 	 <textarea class="form-control" id="konten" name="konten">
	                 	 	<?= $artikel->konten ?>
	                 	 </textarea>
	                   <div class="form-text text-danger">
	                   	<?= form_error('konten') ?>
	                   </div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="sampul" class="col-sm-4 col-form-label">
	                 	Sampul Artikel
	                 </label>
	                 <div class="col-sm-10">
	                 	 <img src="<?= base_url('public/img/artikel/'.$artikel->sampul) ?>" width="100">
	                 	 <div class="form-text text-secondary">*Gambar sebelumnya</div>
	                   <input type="file" class="form-control" id="sampul" name="sampul" value="<?= set_value('sampul') ?>">
	                   <div class="form-text text-danger">
	                   	<?= form_error('sampul') ?>
	                   </div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="author" class="col-sm-4 col-form-label">
	                 	Author
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="author" name="author" value="<?= $artikel->author ?>">
	                   <div class="form-text text-danger">
	                   	<?= form_error('author') ?>
	                   	</div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	                 <label for="author_sampul" class="col-sm-4 col-form-label">
	                 	Gambar Author
	                 </label>
	                 <div class="col-sm-10">
	                 	 <img src="<?= base_url('public/img/artikel/'.$artikel->author_sampul) ?>" width="100">
	                 	 <div class="form-text text-secondary">*Gambar sebelumnya</div>
	                   <input type="file" class="form-control" id="author_sampul" name="author_sampul" value="<?= set_value('author_sampul') ?>">
	                   <div class="form-text text-danger">
	                   	<?= form_error('author_sampul') ?>
	                   </div>
	                 </div>
	               </div>
	               <div class="mb-3 row">
	 	               <label for="id_kategori" class="col-sm-8 col-form-label">
	 	                	Kategori
	 	               </label>
	               	 <div class="col-sm-10">
		               		<select class="form-control col-sm-10" aria-label="Default select example" name="id_kategori">
	 	                 		<?php foreach ($kategoris as $kategori): ?>
	 	                 			<?php if ($kategori->id == $artikel->id_kategori): ?>
			 	                   <option value="<?= $kategori->id ?>" selected>
			 	                   	<?= $kategori->nama_kategori ?>
			 	                   </option>
	 	                 			<?php else : ?>
	 	                 				<option value="<?= $kategori->id ?>">
			 	                   	<?= $kategori->nama_kategori ?>
			 	                   </option>
	 	                 			<?php endif ?>
	 	                 		<?php endforeach ?>
	 	                 	</select>
	                    <div class="form-text text-danger">
	                    	<?= form_error('id_kategori') ?>
	                    </div>
	               	  </div>
	               </div>
	               <div class="mb-3 row">
 	                <label for="id_subkategori" class="col-sm-8 col-form-label">
 	                	Sub Kategori
 	                </label>
	               	<div class="col-sm-10">
	               		<?php foreach ($subKategoris as $subKategori): ?>
	               		<div class="form-check">
							<?php if($artikel->id_subkategori == $subKategori->id) : ?>
							<input class="form-check-input" type="checkbox" value="<?= $subKategori->id ?>" id="subkategori" name="id_subkategori[]" checked>
							<?php else : ?>
							<input class="form-check-input" type="checkbox" value="<?= $subKategori->id ?>" id="subkategori" name="id_subkategori[]">
							<?php endif; ?>
							<label class="form-check-label" for="subkategori">
								<?= $subKategori->nama ?>
							</label>
	               		</div>
	               		<?php endforeach ?>
                    <div class="form-text text-danger">
                    	<?= form_error('id_subkategori') ?>
                     </div>
	               	</div>
	               </div>
				   <a href="<?= base_url("admin/artikel") ?>" class="btn btn-danger float-right me-3">
						Batal
					</a>
	               <button type="submit" class="btn btn-primary float-right me-5">Ubah
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