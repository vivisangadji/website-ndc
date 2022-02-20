<style>
	html {
        position: relative;
        min-height: 100%;
    }
</style>
<div class="content container">
	<div class="row mt-4 d-flex justify-content-end">
		<div class="col-lg-3 col-6">
			<form class="d-flex" action="" method="post">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
		        <button class="btn kuning btn-warning" type="submit">Cari</button>
		    </form>
		</div>
	</div>
	<div class="row mt-4">
		<?php foreach ($anggota as $ang): ?>
		<div class="col-md-4 col-sm-6 col-xs-12 mb-xs-2">
            <article class="material-card Yellow ">
                <h2 class="text-dark">
                    <span class="text-capitalize"><?= $ang->nama ?> (<?= $ang->angkatan_ndc ?>)</span>
                    <strong>
                       <?= $ang->nra ?>
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="<?= base_url('public/img/anggota/'.$ang->gambar) ?>" width="100%">
                    </div>
                    <div class="mc-description" style="overflow-y: scroll;">
	                        <table class="table table-borderless">
							    <tr>
							      <th scope="col">Angkatan</th>
							      <td width="1px">:</td>
							      <td scope="col"><?= $ang->angkatan_ndc ?>, <?= $ang->angkatan_kampus ?></td>
							    </tr>
							    <tr>
							      <th scope="col">Jabatan</th>
							      <td colspan="2">
							      	<ul style="margin-left: -25px;">
								      	<?= $ang->jabatan ?>
								    </ul>
								   </td>
							    </tr>
	                        </table>
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars" style="margin: 13px; color: black;"></i>
                </a>
                <div class="mc-footer d-flex justify-content-end pe-2">
                    <a href="#" class="fab fa-fw fa-facebook rounded-circle"></a>
                    <a href="#" class="fab fa-fw fa-instagram rounded-circle"></a>
                </div>
            </article>
     	</div>
     	<?php endforeach ?>
	</div>
</div>
