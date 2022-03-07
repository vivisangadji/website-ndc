<div class="content">
	<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	  	<!-- default / 1 -->
	  	<div class="carousel-item active p-0">
	        <img src="<?= base_url('public/img/carousel/').''.$carousel[0]->img ?>" class="d-block w-100" alt="...">
	        <div class="carousel-caption d-sm d-md-block text-white rounded" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);">
	          <h5 class="mb-0"><?= $carousel[0]->judul ?></h5>
	          <p><?= $carousel[0]->deskripsi ?></p>
	        </div>
	      </div>
	    <!-- 2 s/d seterusnya  -->
	  	<?php for($i=1; $i<3;$i++){?>
	      <div class="carousel-item">
	        <img src="<?= base_url('public/img/carousel/').''.$carousel[$i]->img ?>" class="d-block w-100" alt="...">
	        <div class="carousel-caption d-sm d-md-block text-white rounded" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);">
	          <h5 class="mb-0"><?= $carousel[$i]->judul ?></h5>
	          <p class="mb-0"><?= $carousel[$i]->deskripsi ?></p>
	        </div>
	      </div>
	  	<?php } ?>
	    </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<section class="container mt-4 mb-4">
				<h3 class="text-white text-capitalize">#InfoIT</h3>
				<div class="row">
					<?php foreach ($artInfo as $artikel): ?>
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
		<center><a href="<?= base_url("artikel/1") ?>" class="btn-sm warna-utama button">Lihat Lainnya</a></center>
	</section>
	<section class="container mt-4 mb-4">	
		<h3 class="text-white">
			#Tutorial IT
		</h3>
		<div class="row">
			<?php foreach ($artTutorial as $artikel): ?>
			<div class="col-md-4 d-flex align-items-stretch" data-aos="fade-left" data-aos-duration="1000">
				<div class="card mb-3 shadow p-1">
				  <img src="<?= base_url('public/img/artikel/'.$artikel->sampul) ?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?= $artikel->judul ?></h5>
				    <a href="<?= base_url('artikel/detail/').''.$artikel->id ?>" class="card-link text-decoration-none">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
				  </div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		<center><a href="<?= base_url("artikel/2") ?>" class="btn-sm warna-utama button">Lihat Lainnya</a></center>
	</section>
	<section class="container mt-4 mb-4">
		<div class="row">
			<div class="col-lg-8">
				<h4 class="text-white">#Agenda yang akan datang</h4>
				<div class="row">
					<?php foreach ($agenda as $a) : ?>
						<div class="col-lg-6 col-sm-12 p-2">
							<div class="card p-1">
								<img src="<?= base_url('public/img/agenda/'.$a->img) ?>" class="card-img-top" alt="...">
								<div class="card-footer text-center">
									<span title="Kegiatan"><?= $a->nama ?></span>
									<p class="text-secondary mb-0"><?= $a->deskripsi ?></p>
									<span class="text-secondary">Lokasi: <?= $a->lokasi ?></span>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
</div>