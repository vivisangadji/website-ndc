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
          <?php endif ?>
        </div>
      </div> <!-- ./alert -->
      <div class="row">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahKontakMedsos') ?>" class="btn btn-primary mb-2 mt-3">
            <i class="fas fa-plus"></i> Tambah Data
          </a>
          <tr>
            <th>#</th>
            <th>Kontak / Medsos</th>
            <th>Class Icon</th>
            <th>URL</th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($kontak_medsos as $kontak): ?>
          <tr>
            <td></td>
            <td><?= $kontak->nama ?></td>
            <td><?= $kontak->icon_class ?> <i class="<?= $kontak->icon_class ?>"></i></td>
            <td><?= $kontak->url ?></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/ubahKontakMedsos/'.$kontak->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapusKontakMedsos/'.$kontak->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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