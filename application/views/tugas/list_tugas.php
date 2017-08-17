<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/dsn_navbar') ?>
<!-- Mhs Navbar Close -->

<main id="content">
    <div class="row">
      <div class="col-md-8">
        <div class="text-center">
          <h3>Latihan</h3>
          <hr class="mt-2 mb-2">
          <table class="table">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Opsi</th>
              </tr>
            </thead>

            <tbody>

            <?php $i=1; foreach ($tugas as $key => $value) { ?>
              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $tugas[$i-1] ?></td>
                <td>
                  <div class="btn-group btn-group-sm">
                      <a href="<?= site_url('tugas/nilai_tugas/'.$tugas[$i-1].'/'.$id_kelas.'/'.$id_tugas)  ?>" type="button" class="btn btn-pink">Beri Nilai
                      </a>
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
