<!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
        	<div class="col-md-8">
	          <div class="card mt-3">
	            <div class="card-header bg-primary">
	              Tambah Artikel
	            </div>
	            <div class="card-body">
	              <form action="" method="post" enctype="multipart/form-data">
	               <div class="mb-3 row">
	                 <label for="judul" class="col-sm-4 col-form-label">
	                 	Judul
	                 </label>
	                 <div class="col-sm-10">
	                   <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul') ?>">
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
	                 	 	<?= set_value('konten') ?>
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
	                   <input type="text" class="form-control" id="author" name="author" value="<?= set_value('author') ?>">
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
		 	                   <option value="<?= $kategori->id ?>">
		 	                   	<?= $kategori->nama_kategori ?>
		 	                   </option>
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
	               		  <input class="form-check-input" type="checkbox" value="<?= $subKategori->id ?>" id="subkategori" name="id_subkategori[]">
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