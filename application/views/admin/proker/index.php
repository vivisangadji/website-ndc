  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-4">
          <?php if($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success" role="alert">
              Program Kerja berhasil <?= $this->session->flashdata('alert') ?> 
            </div>
          <?php $this->session->unset_userdata('alert'); endif; ?>
        </div>
      </div>
      <div class="row mt-3">
        <table class="table table-bordered">
          <a href="<?= base_url('admin/tambahProker') ?>" class="btn btn-primary mb-2">
          <i class="fas fa-plus"></i> Tambah Proker
          </a>
          <tr>
            <th>No</th>
            <th>Proker</th>
            <th>Penanggung Jawab</th>
            <th>Sasaran</th>
            <th>Tujuan</th>
            <th>Aksi</th>
          </tr>
          <?php
            $no = 1;  
            foreach ($proker as $row): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row->proker ?></td>
              <td><?= $row->penanggung_jawab ?></td>
              <td><?= $row->sasaran ?></td>
              <td><?= $row->tujuan ?></td>
              <td>
                <a class="btn btn-success" href="<?= base_url('admin/ubahProker/'.$row->id)  ?>">
                  Edit
                </a>
                <a class="btn btn-danger" href="<?= base_url('admin/hapusProker/'.$row->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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