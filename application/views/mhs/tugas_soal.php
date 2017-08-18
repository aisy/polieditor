<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/mhs_navbar') ?>
<!-- Mhs Navbar Close -->


<main id="content">
    <div class="row">
      <div class="col-md-8">
        <div class="text-center">
          <h3>List Soal</h3>
          <hr class="mt-2 mb-2">
          <table class="table">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>Nama Soal</th>
                <th>Jenis Soal</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1; foreach ($soal as $key => $value) { ?>

              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $value['nama_ujian'] ?></td>
                <td><?= $value['jenis_ujian'] ?></td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <?php if($value['jenis_ujian']=="pilihan ganda"){ ?>
                    <a href="<?= base_url('mahasiswa/pilgan/'.$value['id_ujian']) ?>" type="button" class="btn btn-pink">
                      Kerjakan
                    </a>
                  <?php }else{ ?>
                    <a href="<?= base_url('mahasiswa/essay/'.$value['id_ujian']) ?>" type="button" class="btn btn-pink">
                      Kerjakan
                    </a>
                  <?php } ?>
                    </div>
                </td>
              </tr>

            <?php $i++; } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
</main>

<?php $this->load->view('partials/mdb-footer') ?>
