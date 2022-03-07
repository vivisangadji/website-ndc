<div class="content">
	<div class="container mx-auto my-5 my-md-5" id="artikel-konten">
		<div class="row p-1">
			<div class="col-sm-12 col-lg-8 mb-2">
				<!-- content post -->
					<div class="card rounded">
						<img src="<?= base_url('public/img/artikel/').''.$detail_artikel->sampul ?>" class="card-img-top" alt="CI">
						<div class="card-body p-md-5">
							<h3 class="card-title">
								<?= $detail_artikel->judul ?>	
							</h3>
							<div class="row">
								<div class="col">
									<img src="<?= base_url('public/img/artikel/').''.$detail_artikel->author_sampul ?>" class="rounded-circle" width="40">
									<a href="#" class="text-dark" style="text-decoration: none;">
										<?= $detail_artikel->author ?>	
									</a> -
									<small class="text-muted">
									<?= format_tanggal($detail_artikel->tanggal); ?>
									</small>
								</div>
							</div>
							<div>
								<?php foreach ($subKategori as $sk): ?>
								<span class="badge rounded-pill bg-warning ">
									<a href="#" title="" class="text-decoration-none text-dark">
										<?= $sk->nama ?>
									</a>
								</span>
								<?php endforeach ?>
							</div>
							<hr>
							<p class="card-text" style="text-align: justify;"><?= $detail_artikel->konten ?>
							</p>
						</div>
						<div class="card-footer row text-center ">
							<!-- <div class="col-4 ">
								<a href="#" id=" icon-like" class="fs-5 text-decoration-none  text-dark hover_bold">
									<i class="text-danger fas fa-heart"></i> Suka
								</a>
							</div> -->
							<div class="col-6">
								<a href="<?= base_url('kontak')?>" id="hover_yellow icon-comment" class="comment fs-5 text-decoration-none text-dark  hover_bold">
								<i class="far fa-comment-alt"></i> Komentar
								</a>
							</div>
							<div class="col-6 ">
								<a href="<?= base_url('artikel/detail/').''.$detail_artikel->id ?>" id="icon-share" class="copy_text fs-5 text-decoration-none text-dark hover_bold">
								<i class="fas fa-share-square"></i> Bagikan
								</a>
							</div>
						</div>
					</div>
				<!-- ./content post -->
	 
				<!-- icon like, comment, share -->
				<!-- /.icon like, comment, share -->
			</div>
			<div class="col-lg-4">
				<!-- Card Artikel Lainnya -->
				<div class="row">
					<div class="card col-lg-12 mb-2">
					  <div class="card-body">
					  <h4 class="card-title text-center">
					  	Artikel lainnya <i class="fas fa-bookmark"></i>
					  </h4>
					  </div>
					  <ul class="list-group list-group-flush">
					  	<?php foreach ($artikel_lain as $artikels): ?>
					    <li class="list-group-item">
					    	<a href="<?= base_url('artikel/detail/').''.$artikels->id ?>" class="text-dark" style="text-decoration:none;">
					    		<div class="row p-2 media">
					    			<div class="col-8 media-body">
						    			<h6 class="hover_bold">
						    				<?= $artikels->judul ?>
						    			</h6>
						    			<small class="text-muted">
						    			<?= format_tanggal($artikels->tanggal); ?>
						    			</small>
					    			</div>
					    			<div class="col-4">
					    				<img src="<?= base_url('public/img/artikel/'.$artikels->sampul) ?>" class="rounded" height="60"  width="100%">
					    			</div>
					    		</div>
					    	</a>
					    </li>
					    <?php endforeach ?>
					  </ul>
					</div>
					<!-- Kategori -->
					<div class="card col-lg-12 mb-2">
						<div class="row">
						  <div class="col-md-12 col-6 card-body">
							  <h4 class="card-title">Kategori</h4>
							  <?php foreach ($AllSubKategori as $kategori): ?>
							  <span class="badge rounded-pill bg-warning ">
							  	<a href="#" title="" class="text-decoration-none text-dark"><?= $kategori->nama ?></a>
							  </span>
							  <?php endforeach ?>
						  </div>
						  <!-- <div class="col-md-12 col-6 card-body">
							  <h4 class="card-title">Arsip</h4>
							 <ul type="square">
							 	<li><a href="" class="text-decoration-none text-dark hover_bold">2017</a></li>
							 	<li><a href="" class="text-decoration-none text-dark hover_bold">2018</a></li>
							 	<li><a href="" class="text-decoration-none text-dark hover_bold">2019</a></li>
							 	<li><a href="" class="text-decoration-none text-dark hover_bold">2020</a></li>
							 </ul>
						  </div> -->
						</div>
					</div>
					<!-- /.Kategori -->
				</div>
				<!-- /.Card Artikel Lainnya -->
			</div>
		</div>
	</div>
</div>