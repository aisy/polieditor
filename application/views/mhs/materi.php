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
            <tr>
              <th scope="row">1</th>
              <td>Materi Minggu Pertama</td>
              <td>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-info">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-pink">
                      <i class="fa fa-download"></i>
                    </button>
                  </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Materi Minggu Kedua</td>
              <td>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-info">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-pink">
                      <i class="fa fa-download"></i>
                    </button>
                  </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-md-4">
      <h3>Progress Materi</h3>
      <hr class="mt-2 mb-2">
      <div class="progress">
        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
</main>
<!-- Footer MDB -->
<?php $this->load->view('partials/mdb-footer') ?>
<!-- Footer MDB -->
