<div class="content container my-5 bg-light">
	<div class="row pb-3">
		<div class="col-sm-12 my-3 d-flex justify-content-center">
			<div class="right_col p-5" role="main">
				<h3 class="text-secondary">Form Pendaftaran Calon Anggota NDC</h3>
				<form action="" method="post">
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">STB</label>
						<div class="col-md-10 col-sm-6 ">
							<input type="text" name="stb" class="form-control" size="4" placeholder="STB" value="<?= $edit->stb ?>">
							<div class="form-text text-danger">
							<?= form_error('stb') ?>
						</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
						<div class="col-md-10 col-sm-6">
							<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="<?= $edit->nama_lengkap ?>">
							<div class="form-text text-danger">
							<?= form_error('nama_lengkap') ?>
						</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Panggilan</label>
						<div class="col-md-10 col-sm-6">
							<input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" value="<?= $edit->nama_panggilan ?>">
							<div class="form-text text-danger">
							<?= form_error('nama_panggilan') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
						<div class="col-md-10 col-sm-6">
							<input type="text" name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir" value="<?= $edit->tmpt_lahir ?>">
							<div class="form-text text-danger">
							<?= form_error('tmpt_lahir') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
						<div class="col-md-10 col-sm-6">
							<input type="date" name="tgl_lahir" class="form-control" value="<?= $edit->tgl_lahir ?>">
							<div class="form-text text-danger">
							<?= form_error('tgl_lahir') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
						<div class="col-md-10 col-sm-6 ">
							<div class="btn-group" data-toggle="buttons">
							<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
								<input type="radio" class="join-btn" name="jkel" value="Laki-Laki" <?php if($edit->jkel == 'Laki-Laki'){ echo 'checked'; } ?> >Laki-Laki
							</label>
							<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
								<input type="radio" class="join-btn" name="jkel" value="Perempuan" <?php if($edit->jkel == "Perempuan"){ echo 'checked'; } ?> >Perempuan
							</label>
							</div>
							<div class="form-text text-danger">
							<?= form_error('jkel') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
						<div class="col-md-10 col-sm-6">
							<textarea name="alamat" class="form-control" placeholder="Alamat">
							<?= $edit->alamat ?>
							</textarea>
							<div class="form-text text-danger">
							<?= form_error('alamat') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">No HP / WA</label>
						<div class="col-md-10 col-sm-6">
							<input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone / WA" value="<?= $edit->no_hp ?>">
							<div class="form-text text-danger">
							<?= form_error('no_hp') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
						<div class="col-md-10 col-sm-6">
							<input type="text" name="email" class="form-control" placeholder="Email" value="<?= $edit->email ?>">
							<div class="form-text text-danger">
							<?= form_error('email') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Kampus</label>
						<div class="col-md-10 col-sm-6">
							<input type="text" name="kampus" class="form-control" placeholder="Nama Kampus" value="<?= $edit->kampus ?>">
							<div class="form-text text-danger">
							<?= form_error('kampus') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Jurusan</label>
						<div class="col-md-10 col-sm-6">
							<select name="jurusan" class="form-control">
							<option value=""> --- Pilih --- </option>
							<?php foreach ($jurusan as $j) : ?>
								<?php if($j->nama_jurusan == $edit->jurusan) : ?>
									<option value="<?= $j->nama_jurusan; ?>" selected><?= $edit->jurusan; ?></option>
								<?php else : ?>
									<option value="<?= $j->nama_jurusan; ?>"><?= $j->nama_jurusan; ?></option>
								<?php endif; ?>
							<?php endforeach;?>
							</select>
							<div class="form-text text-danger">
							<?= form_error('jurusan') ?>
							</div>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Alasan Masuk NDC</label>
						<div class="col-md-10 col-sm-6">
							<textarea name="alasan" class="form-control" placeholder="Alasan Masuk NDC"><?= $edit->alasan ?></textarea>
							<div class="form-text text-danger">
							<?= form_error('alasan') ?>
							</div>
						</div>
					</div>
					<input type="hidden" name="tgl_daftar" value="<?= $edit->tgl_daftar ?>">
					<div class="item form-group">
					<div  class="col-md-10 col-sm-6 mt-2">
						<input type="submit" name="submit" class="btn btn-success " value="Ubah">
					</div>
          		</form>
			</div>
		</div>
		</div>
	</div>
</div>