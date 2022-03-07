  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
              Sejarah telah berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php endif ?>
        </div>
      </div>
      <div class="row mt-3">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahSejarah') ?>" class="btn btn-primary mb-2">
          <i class="fas fa-plus"></i> Tambah Sejarah
          </a>
          <tr>
            <th>Judul</th>
            <th>Sejarah</th>
            <th>Aksi</th>
          </tr>
          <tr>
            <td><?= $sejarah->judul ?></td>
            <td><?= $sejarah->deskripsi ?></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/ubahSejarah/'.$sejarah->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapusSejarah/'.$sejarah->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
                Hapus
              </a>
            </td>
          </tr>
        </table>
      </div>
      <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->