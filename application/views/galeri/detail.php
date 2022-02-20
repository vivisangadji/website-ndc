<div class="content">
	<section class="container mt-5 mb-4 text-white">	
		<h1 class="text-center">Album <?= $galeri['kegiatan'] ?></h1>
		<div class="lightboxgallery-gallery clearfix">
		  	<?php foreach ($detail_galeri as $detail): ?>
	  		<a class="lightboxgallery-gallery-item" target="_blank" href="<?= base_url('public/img/galeri/'.$detail->gambar) ?>" data-title="<?= $detail->kegiatan ?>" data-alt="Joshua Ness" data-desc="">
	  		  <div>
	  		    <img src="<?= base_url('public/img/galeri/'.$detail->gambar) ?>" title="Joshua Ness" alt="Joshua Ness">
	  		    <div class="lightboxgallery-gallery-item-content">
	  		      <span class="lightboxgallery-gallery-item-title">
	  		      	<?= $detail->kegiatan ?>
	  		      </span>
	  		    </div>
	  		  </div>
	  		</a>
		    <?php endforeach ?>
		</div>
	</section>
</div>