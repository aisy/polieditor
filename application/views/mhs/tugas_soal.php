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
                <th>Nama Soal</th>
                <th>Jenis Soal</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Ujian Akhir Semester</td>
                <td>Pilihan Ganda</td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <a type="button" class="btn btn-pink">Kerjakan
                    </a>
                    </div>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ujian Tengah Semester</td>
                <td>Essay</td>
                <td>
                  <div class="btn-group btn-group-sm">
                      <a type="button" class="btn btn-pink">Kerjakan
                      </a>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</main>

<?php $this->load->view('partials/mdb-footer') ?>
