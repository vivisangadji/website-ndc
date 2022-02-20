    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <!-- pesan alert -->
        <div class="row">
          <div class="col-md-4 mt-md-2">
            <?php if($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success" role="alert">
                Agenda berhasil <?= $this->session->flashdata('alert') ?> 
              </div>
            <?php $this->session->unset_userdata('alert'); endif ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center mt-3">
              Agenda Niphaz Diploma Club (NDC)
            </h1>
            <table id="myTable" class="display">
                <thead>
                    <a href="<?= base_url('admin/tambah-agenda') ?>" class="btn btn-primary mb-2">
                        <i class="fas fa-plus"></i> Tambah Agenda
                    </a>
                    <tr>
                        <th>NO.</th>
                        <th>Nama</th>
                        <th>Deskripsi Kegiatan</th>
                        <th>Gambar</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($agendas as $agenda) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $agenda->nama ?></td>
                        <td><?= $agenda->deskripsi ?></td>
                        <td>
                            <img src="<?= base_url('public/img/agenda/'.$agenda->img) ?>" alt="<?= $agenda->nama ?>" width="100">
                        </td>
                        <td><?= $agenda->waktu ?></td>
                        <td><?= $agenda->lokasi ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit-agenda/'.$agenda->id) ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('admin/hapus-agenda/'.$agenda->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->