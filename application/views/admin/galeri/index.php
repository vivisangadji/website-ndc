    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-4 mt-3">
            <?php if($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success" role="alert">
                Data berhasil <?= $this->session->flashdata('alert') ?> 
              </div>
            <?php $this->session->unset_userdata('alert'); endif ?>
          </div>
        </div>
        <div class="row mt-3">
          <table class="table table-bordered">
            <a href="<?= base_url('admin/tambah-galeri') ?>" class="btn btn-primary mb-2">
              <i class="fas fa-plus"></i> Tambah
            </a>
            <tr>
              <th>Nama Kegiatan</th>
              <th>Sampul</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($galeri as $gal): ?>
              <tr>
                <td>
                  <a href="<?= base_url('admin/galeri/detail/'.$gal->id) ?>">
                    <?= $gal->kegiatan ?>
                  </a>
                </td>
                <td>
                  <img src="<?= base_url('public/img/galeri/'.$gal->sampul) ?>" width="100">    
                </td>
                <td>
                  <a class="btn btn-success" href="<?= base_url('admin/ubah-galeri/'.$gal->id)  ?>">
                    Edit
                  </a>
                  <a class="btn btn-danger" href="<?= base_url('admin/hapus-galeri/'.$gal->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
                    Hapus
                  </a>
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