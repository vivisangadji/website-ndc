<div class="content container">
	<div class="d-flex justify-content-end">
		<?php foreach ($medsos as $med): ?>
		<a href="<?= $med->url ?>" target="_blank" >
			<i class="<?= $med->icon_class ?> fs-1 my-2 mx-1" style="color:yellow;"></i>
		</a>
		<?php endforeach ?>
	</div>
	<div class="row pb-3">
		<div class="col-md-6 col-sm-12">
			<div>
				<h4 class="text-white text-center">Hubungi Kami & Berikan Komentar</h4>
		        <?php if($this->session->flashdata('alert')) : ?>
		            <div class="alert alert-warning mt-3" role="alert">
		              Komentar berhasil <?= $this->session->flashdata('alert') ?> 
		            </div>
		        <?php $this->session->unset_userdata('alert'); endif; ?>
				<form method="post" action="<?= base_url('kontak/saveKomentar') ?>">
					<label class="text-white">Nama</label>
					<input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
					<?= form_error('email', '<div class="form-text text-white">', '</div>'); ?>
					<label class="text-white">Email</label>
					<input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
					<?= form_error('email', '<div class="form-text text-white">', '</div>'); ?>
					<label class="text-white mt-3">Pesan</label>
					<textarea class="form-control" name="pesan"><?= set_value('pesan') ?></textarea>
					<?= form_error('pesan', '<div class="form-text text-white">', '</div>'); ?>
					<button type="submit" class="btn warna-utama button m-3 float-end">Kirim</button>
				</form>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<h4 class="text-white text-center"><?= $alamat->judul ?></h4>
			<div class="card p-2">
				<iframe src="<?= $alamat->src ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
				</iframe>
				<div class="card-footer text-center">
					<a class="text-secondary" href="" title="Bagikan"><i class="far fa-copy"> Salin Alamat </i></a>
				</div>
			</div>
		</div>
	</div>
</div>