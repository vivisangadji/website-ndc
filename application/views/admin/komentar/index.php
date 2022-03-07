  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row"> <!-- Alert --> 
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success mt-3" role="alert">
              Data berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php $this->session->unset_userdata('alert'); endif; ?>
        </div>
      </div> <!-- ./alert -->
      <div class="row">
        <table class="table table-bordered">
          <h3 class="my-3 text-center">Komentar</h3>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal Update</th>
          </tr>
          <?php foreach ($komentar as $komen): ?>
          <tr>
            <td></td>
            <td><?= $komen->nama ?></td>
            <td><?= $komen->email ?></td>
            <td><?= $komen->pesan ?></td>
            <td><?= $komen->last_update ?></td>
            <td>
              <a class="btn btn-danger" href="<?= base_url('admin/hapus_komentar/'.$komen->id) ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
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