  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
              Visi Misi berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php endif ?>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahVisiMisi') ?>" class="btn btn-primary mb-2">
          <i class="fas fa-plus"></i> Tambah Visi Misi
          </a>
          <tr>
            <th>Visi</th>
            <th>Misi</th>
            <th>Aksi</th>
          </tr>
          <tr>
            <td><?= $visi_misi->visi ?></td>
            <td><?= $visi_misi->misi ?></td>
            <td>
              <a class="btn btn-success" href="<?= base_url('admin/ubahVisiMisi/'.$visi_misi->id)  ?>">
                Edit
              </a>
              <a class="btn btn-danger" href="<?= base_url('admin/hapusVisiMisi/'.$visi_misi->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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