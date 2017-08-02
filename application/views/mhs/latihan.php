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
          <h3>List Latihan</h3>
          <hr class="mt-2 mb-2">
          <table class="table">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>Data Latihan</th>
                <th>Opsi</th>
              </tr>
            </thead>

            <tbody>

            <?php foreach ($latihan as $key => $value) { ?>
              <tr>
                <th scope="row">1</th>
                <td><?= $value['judul'] ?></td>
                <td>
                  <div class="btn-group btn-group-sm">
                      <a href="<?= site_url('mahasiswa/editor')  ?>" type="button" class="btn btn-pink">Mulai
                      </a>
                    </div>
                </td>
              </tr>
            <?php } ?>
              
            </tbody>

          </table>
        </div>
      </div>
    </div>
</main>


<?php $this->load->view('partials/mdb-footer') ?>
