    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-4 mt-md-2">
            <?php if($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success" role="alert">
                Carousel berhasil <?= $this->session->flashdata('alert') ?> 
              </div>
            <?php $this->session->unset_userdata('alert'); endif ?>
          </div>
        </div>
        <div class="row mt-3">
          <table class="table table-bordered">
            <a href="<?= base_url('admin/tambah-carousel') ?>" class="btn btn-primary mb-2">
              <i class="fas fa-plus"></i> Tambah Carousel
            </a>
            <tr>
              <th>Urutan</th>
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($carousel as $row): ?>
              <tr>
                <td><?= $row->urutan ?></td>
                <td><?= $row->judul ?></td>
                <td><?= $row->deskripsi ?></td>
                <td>
                  <img src="<?= base_url('public/img/carousel/'.$row->img) ?>" width="200">    
                </td>
                <td>
                  <a class="btn btn-success" href="<?= base_url('admin/ubah-carousel/'.$row->id)  ?>">
                    Edit
                  </a>
                  <a class="btn btn-danger" href="<?= base_url('admin/hapus-carousel/'.$row->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">   Hapus
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