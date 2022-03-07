<div class="content">
	<section class="container mb-4">	
		<div class="row mt-4 d-flex justify-content-end">
			<div class="col-lg-3 col-6">
				<form class="d-flex" method="post">
			        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
			        <button class="btn kuning btn-warning" type="submit">Search</button>
			    </form>
			</div>
		</div>
		<h3 class="text-white">
			<?php if (!$kategori): ?>
			#<?= $artikels[0]->nama_kategori ?>
				
			<?php else: ?>
			#<?= $kategori[0]->nama_kategori ?>
				
			<?php endif ?>
		</h3>
		<div class="row"> 
			<?php foreach ($artikels as $artikel): ?>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="card mb-3 shadow p-1" data-aos="fade-right" data-aos-duration="1000">
				  <img src="<?= base_url('public/img/artikel/').''.$artikel->sampul ?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?= $artikel->judul ?></h5>
				    <a href="<?= base_url('artikel/detail/').''.$artikel->id ?>" class="card-link text-decoration-none">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
				  </div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</section>
</div>