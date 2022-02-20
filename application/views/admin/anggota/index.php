    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-4 mt-md-2">
            <?php if($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success" role="alert">
                Anggota berhasil <?= $this->session->flashdata('alert') ?> 
              </div>
            <?php $this->session->unset_userdata('alert'); endif ?>
          </div>
        </div>
        <div class="row">
          <table class="table table-bordered">
            <a href="<?= base_url('admin/tambah-anggota') ?>" class="btn btn-primary mb-2">
              <i class="fas fa-plus"></i> Tambah Anggota
            </a>
            <tr>
              <th>Nama</th>
              <th>NRA</th>
              <th>Angkatan NDC</th>
              <th>Angkatan Kampus</th>
              <th>Jabatan</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($anggota as $ang): ?>
              <tr>
                <td><?= $ang->nama ?></td>
                <td><?= $ang->nra ?></td>
                <td><?= $ang->angkatan_ndc ?></td>
                <td><?= $ang->angkatan_kampus ?></td>
                <td><?= $ang->jabatan ?></td>
                <td>
                  <img src="<?= base_url('public/img/anggota/'.$ang->gambar) ?>" width="100">    
                </td>
                <td>
                  <a class="btn btn-success" href="<?= base_url('admin/ubah-anggota/'.$ang->id)  ?>">
                    Edit
                  </a>
                  <a class="btn btn-danger" href="<?= base_url('admin/hapus-anggota/'.$ang->id)  ?>" onclick="return confirm('Yakin mau dihapus?')">
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