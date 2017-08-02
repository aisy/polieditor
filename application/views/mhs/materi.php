<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/mhs_navbar') ?>
<!-- Mhs Navbar Close -->

<main id="content">
  <br>
  <div class="row">
    <div class="col-md-8">
      <div class="text-center">
        <h3>Materi Dasar Web</h3>
        <hr class="mt-2 mb-2">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Nama Materi</th>
              <th>Opsi</th>
            </tr>
          </thead>


          <tbody>

            <?php foreach($materi as $key => $value) { ?>
            <tr>
              <th scope="row">1</th>
              <td><?= $value['judul'] ?></td>
              <td>
                <div class="btn-group btn-group-sm">
                    <!-- <button type="button" class="btn btn-info">
                      <i class="fa fa-eye"></i>
                    </button> -->
                    <a href="<?= $url.$value['nama_file'] ?>" class="btn btn-pink">
                      <i class="fa fa-download"></i>
                    </a>
                  </div>
              </td>
            </tr>

            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>

    <div class="col-md-4">
      <h3>Progress Materi</h3>
      <hr class="mt-2 mb-2">
      <div class="progress">
        <progress class="progress" value="<?= count($materi) ?>" max="10"></progress>
      </div>
    </div>
  </div>
</main>
<!-- Footer MDB -->
<?php $this->load->view('partials/mdb-footer') ?>
<!-- Footer MDB -->
