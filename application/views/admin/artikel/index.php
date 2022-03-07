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
            <a href="<?= base_url('admin/tambah-artikel') ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Artikel
            </a>
            <tr>
              <th>Judul</th>
              <th>Sampul</th>
              <th>Isi konten</th>
              <th>Author</th>
              <th>Foto Author</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($artikels as $artikel): ?>
              <tr>
                <td><?= $artikel->judul ?></td>
                <td>
                  <img src="<?= base_url('public/img/artikel/'.$artikel->sampul) ?>" width="100">
                </td>
                <td><?= $artikel->konten ?></td>
                <td><?= $artikel->author ?></td>
                <td>
                  <img src="<?= base_url('public/img/artikel/'.$artikel->author_sampul) ?>" width="100">
                </td>
                <td><?= $artikel->tanggal ?></td>
                <td>
                  <a class="btn btn-success" href="<?= base_url('admin/ubah-artikel/'.$artikel->id)  ?>">
                    Edit
                  </a>
                  <a class="btn btn-danger" href="<?= base_url('admin/hapus-artikel/'.$artikel->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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