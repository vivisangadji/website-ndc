  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row"> <!-- Alert --> 
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success mt-3" role="alert">
              Divisi berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php endif ?>
        </div>
      </div> <!-- ./alert -->
      <div class="row">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahDivisi') ?>" class="btn btn-primary mb-2 mt-3">
             <i class="fas fa-plus"></i> Tambah Divisi
          </a>
          <tr>
            <th>#</th>
            <th>Divisi</th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($divisi as $div): ?>
          <tr>
            <td></td>
            <td><?= $div->nama_divisi ?></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/ubahDivisi/'.$div->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapusDivisi/'.$div->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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