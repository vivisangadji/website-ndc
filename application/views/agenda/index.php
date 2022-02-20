<div class="content">
	<section class="container mt-5 mb-4 text-white">	
		<h1 class="text-center">Agenda</h1><br>
		<div class="timeline">
		    <ul>
		    	<?php foreach ($agendas as $agenda): ?>
		    		<li>
		    		    <div class="content">
		    		        <h3><?= $agenda->nama ?></h3>
		    		        <img src="<?= base_url('public/img/agenda/').$agenda->img ?>" width="100%">
		    		        <p><?= $agenda->deskripsi ?><br>
								Lokasi: <?= $agenda->lokasi ?>
							</p>
		    		    </div>
		    		    <div class="point"></div>
		    		    <div class="date">
		    		        <h4><?= date("d-M-Y", strtotime($agenda->waktu)) ?></h4>
		    		    </div>
		    		</li>
		    	<?php endforeach ?>
		    </ul>
		</div>
	</section>
</div>