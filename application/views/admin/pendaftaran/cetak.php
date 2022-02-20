<!-- <body onload="window.print()">     -->
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Main row -->
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <h3 class="text-center my-5">
                FORMOLIR PENDAFTARAN<br>
                CALON ANGGOTA CINTA XIX NIPHAZ DIPLOMA CLUB (NDC)<br>
                UNIVERSITAS DIPA MAKASSAR
            </h3><br>
            <table class="table">
                <div>
                    <tr>
                        <td>NIM / Stambuk</td>
                        <td>: <?= $detail->stb ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: <?= $detail->nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>: <?= $detail->nama_panggilan ?></td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>: <?= $detail->tmpt_lahir ?>, <?= $detail->tgl_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: <?= $detail->jkel ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?= $detail->alamat ?></td>
                    </tr>
                    <tr>
                        <td>No HP (WA)</td>
                        <td>: <?= $detail->no_hp ?></td>
                    </tr>
                    <tr>
                        <td>Asal Kampus</td>
                        <td>: <?= $detail->kampus ?></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: <?= $detail->jurusan ?></td>
                    </tr>
                    <tr>
                        <td>Alasan Ingin Bergabung</td>
                        <td>: <?= $detail->alasan ?></td>
                    </tr>
                </div>
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