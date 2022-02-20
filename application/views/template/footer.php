		<!-- Footer -->
		<footer>
			<div class="row text-white">
				<div class="col-md-3 col-6">
					<ul type="none">
						<h5>Kontak</h5>
						<?php foreach ($kontaks as $kontak): ?>
						<li>
							<a href="<?= $kontak->url ?>" class="text-decoration-none text-white" target="_blank">
							<i class="<?= $kontak->icon_class ?>"></i> 
							<?= $kontak->nama ?>
							</a>
						<?php endforeach ?>
						</li>
					</ul>
					<ul type="none">
						<h5>Ikuti Kami</h5>
						<?php foreach ($medsos as $med): ?>
						<li>
							<a href="<?= $med->url ?>" class="text-decoration-none text-white" target="_blank">
							<i class="<?= $med->icon_class ?>"></i> 
							<?= $med->nama ?>
							</a>
						</li>				
						<?php endforeach ?>				
					</ul>
				</div>
				<div class="col-md-3 col-6">
					<ul type="none">
						<h5>Divisi</h5>
						<?php foreach ($divisi as $div): ?>
						<li><?= $div->nama_divisi ?></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="col-md-3 col-6">
					<ul type="none">
						<h5>Konsentrasi Belajar</h5>
						<?php foreach ($konsentrasi as $konsen): ?>
						<li><?= $konsen->nama ?></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="col-md-3 col-6">
					<ul type="none">
						<h5>Service</h5>
						<?php foreach ($services as $service): ?>
						<li><?= $service->judul_service ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
			<div class="text-center p-1">
				© <?php echo date("Y");?> NIPHAZ DIPLOMA CLUB
			</div>
		</footer>
	</body>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="<?= base_url('public/js/') ?>lightboxgallery.js"></script>
	<script>
		
		$(window).load(function () {
		  $(".post-module").hover(function () {
		    $(this).find(".description").stop().animate(
		      {
		        height: "toggle",
		        opacity: "toggle"
		      },
		      300
		    );
		  });
		});
	</script>
	<script>
	    $(function() {
	        $('.material-card > .mc-btn-action').click(function () {
	            var card = $(this).parent('.material-card');
	            var icon = $(this).children('i');
	            icon.addClass('fa-spin-fast');

	            if (card.hasClass('mc-active')) {
	                card.removeClass('mc-active');

	                window.setTimeout(function() {
	                    icon
	                        .removeClass('fa-arrow-left')
	                        .removeClass('fa-spin-fast')
	                        .addClass('fa-bars');

	                }, 800);
	            } else {
	                card.addClass('mc-active');

	                window.setTimeout(function() {
	                    icon
	                        .removeClass('fa-bars')
	                        .removeClass('fa-spin-fast')
	                        .addClass('fa-arrow-left');

	                }, 800);
	            }
	        });
	    });
	</script>

	<script type="text/javascript">
	jQuery(function($) {
	  $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
	    event.preventDefault();
	    $(this).lightboxgallery({
	      showCounter: true,
	      showTitle: true,
	      showDescription: true
	    });
	  });
	});
	</script>

	<script>
		$('.copy_text').click(function (e) {
		    e.preventDefault();
		    var copyText = $(this).attr('href');

		    document.addEventListener('copy', function(e) {
		      e.clipboardData.setData('text/plain', copyText);
		      e.preventDefault();
		    }, true);

		   	document.execCommand('copy');
		   	Swal.fire({         //displays a pop up with sweetalert
	            icon: 'success',
	            title: 'Text copied to clipboard',
	            showConfirmButton: false,
	            timer: 1000
	       	}); 
		   // console.log('copied text : ', copyText);
		   // alert('copied text: ' + copyText); 
		 }); 
	</script>
</html>	