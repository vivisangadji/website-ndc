  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-4 mt-2">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
              Struktur telah berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php $this->session->unset_userdata('alert'); endif ?>
        </div>
      </div>
      <div class="row mt-2">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambah-struktur') ?>" class="btn btn-primary mb-2">
          <i class="fas fa-plus"></i> Tambah Struktur
          </a>
          <tr>
            <th>Periode</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
          <tr>
            <td><?= $struktur->periode ?></td>
            <td>
              <img src="<?= base_url('public/img/struktur/'.$struktur->img) ?>" alt="<?= $struktur->periode  ?>" width="150">
            </td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/edit-struktur/'.$struktur->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapus-struktur/'.$struktur->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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