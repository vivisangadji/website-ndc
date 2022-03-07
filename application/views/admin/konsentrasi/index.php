  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row"> <!-- Alert --> 
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success mt-3" role="alert">
              Konsentrasi berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php $this->session->unset_userdata('alert'); endif; ?>
        </div>
      </div> <!-- ./alert -->
      <div class="row">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahKonsentrasi') ?>" class="btn btn-primary mb-2 mt-3">
          <i class="fas fa-plus"></i> Tambah Konsentrasi
          </a>
          <tr>
            <th>#</th>
            <th>Konsentrasi</th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($konsentrasi as $konsen): ?>
          <tr>
            <td></td>
            <td><?= $konsen->nama ?></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/ubahKonsentrasi/'.$konsen->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapusKonsentrasi/'.$konsen->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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