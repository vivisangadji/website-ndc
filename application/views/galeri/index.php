<div class="content">
	<section class="container mt-5 mb-4 text-white">	
		<h1 class="text-center">Galeri</h1><br>
		<div class="row bg-light">
			<?php foreach ($galeri as $gal): ?>
			<div class="col-lg-4 p-1  d-flex align-items-stretch">
				<div class="card bg-dark">
					<a href="<?= base_url('galeri/detail/'.$gal->id) ?>" class="text-decoration-none text-white"><img src="<?= base_url('public/img/galeri/'.$gal->sampul) ?>" width="100%">
					<div class="bgjudul">
						<h4 class="galerititle text-center"><?= $gal->kegiatan ?></h4>
					</div>
					</a>
				</div>
			</div>
			<?php endforeach ?>
		</div>

	</section>
</div>