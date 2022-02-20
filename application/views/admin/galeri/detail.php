    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-4 mt-3"> 
            <?php if($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success" role="alert">
                Gambar berhasil <?= $this->session->flashdata('alert') ?> 
              </div>
            <?php $this->session->unset_userdata('alert'); endif ?>
          </div>
        </div>
          <h3 class="text-center">Detail galeri berdasarkan kegiatan</h3>
        <div class="row mt-3">
          <table class="table table-bordered">
            <a href="<?= base_url('admin/tambah-detail-galeri/'.$detail_galeri[0]->id_galeri) ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah
            </a>
            <tr>
              <th>Nama Kegiatan</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($detail_galeri as $detail): ?>
                <tr>
                  <td><?= $detail->kegiatan ?></td>
                  <td>
                    <img src="<?= base_url('public/img/galeri/'.$detail->gambar) ?>" width="100">    
                  </td>
                  <td>
                    <a class="btn btn-success" href="<?= base_url('admin/ubah-detail-galeri/'.$detail->id_galeri.'/'.$detail->id)  ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= base_url('admin/hapus-detail-galeri/'.$detail->id_galeri.'/'.$detail->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                  </td>
                </tr>
            <?php endforeach ?>
          </table>
        </div>
        <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->