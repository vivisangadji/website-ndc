<div class="content container">
	<h4 class="text-center p-3 text-white"><u>Program Kerja</u></h4>
	<div class="mt-3  bg-white">
		<table class="table table-bordered">
		  <thead>
		    <tr class="bg-dark text-white">
		      <th scope="col">No</th>
		      <th scope="col">Proker</th>
		      <th scope="col">Penanggung Jawab</th>
		      <th scope="col">Sasaran</th>
		      <th scope="col">Tujuan</th>
		    </tr> 
		  </thead>
		  <tbody>
		  <?php
		  $no = 1; 
		  foreach ($proker as $row): ?>
		  	<tr>
		  	  <th scope="row"><?= $no++ ?></th>
		  	  <td><?= $row->proker ?></td>
		  	  <td><?= $row->penanggung_jawab ?></td>
		  	  <td><?= $row->sasaran ?></td>
		  	  <td><?= $row->tujuan ?></td>
		  	</tr>
		  <?php endforeach ?>
		  </tbody>
		</table>
	</div>
</div>