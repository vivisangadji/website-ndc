    <!-- Main content -->
    <section class="content p-3">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-4 mt-md-2">
            <?php if($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success" role="alert">
                Data berhasil <?= $this->session->flashdata('alert') ?> 
              </div>
            <?php $this->session->unset_userdata('alert'); endif ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center mt-3">
              Data Pendaftar
            </h1>
            <table id="myTable" class="table table-striped">
                <thead>
                    <a href="<?= base_url('admin-lk1/tambah-pendaftar') ?>" class="btn btn-primary mb-2">
                      <i class="fas fa-plus"></i> Tambah
                    </a>
                    <tr>
                        <th>NO.</th>
                        <th>STB</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</td>
                        <th>Alamat</td>
                        <th>No HP / WA</td>
                        <th>Email</td>
                        <th>Asal Kampus</td>
                        <th>Jurusan</td>
                        <th>Alasan</td>
                        <th>Tanggal Mendaftar</td>
                        <th>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($pendaftars as $pendaftar) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pendaftar->stb ?></td>
                        <td><?= $pendaftar->nama_lengkap ?></td>
                        <td><?= $pendaftar->nama_panggilan ?></td>
                        <td><?= $pendaftar->tmpt_lahir ?>, <?= $pendaftar->tgl_lahir ?></td>
                        <td><?= $pendaftar->jkel ?></td>
                        <td><?= $pendaftar->alamat ?></td>
                        <td><?= $pendaftar->no_hp ?></td>
                        <td><?= $pendaftar->email ?></td>
                        <td><?= $pendaftar->kampus ?></td>
                        <td><?= $pendaftar->jurusan ?></td>
                        <td><?= $pendaftar->alasan ?></td>
                        <td><?= $pendaftar->tgl_daftar ?></td>
                        <td>
                            <a href="<?= base_url('admin-lk1/detail-pendaftar/'.$pendaftar->stb) ?>" class="btn btn-success">Cetak</a>
                            <a href="<?= base_url('admin-lk1/edit-pendaftar/'.$pendaftar->stb) ?>" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->