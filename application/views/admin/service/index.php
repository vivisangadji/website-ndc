  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row"> <!-- Alert --> 
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success mt-3" role="alert">
              Service berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php endif ?>
        </div>
      </div> <!-- ./alert -->
      <div class="row">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahService') ?>" class="btn btn-primary mb-2 mt-3">
            <i class="fas fa-plus"></i> Tambah Service
          </a>
          <tr>
            <th>#</th>
            <th>Service</th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($services as $service): ?>
          <tr>
            <td></td>
            <td><?= $service->judul_service ?></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/ubahService/'.$service->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapusService/'.$service->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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