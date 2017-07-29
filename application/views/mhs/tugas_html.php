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
                <th>Data Pengumpulan Tugas</th>
                <th>Batas Pengumpulan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Tag Dasar HTML</td>
                <td>14-08-2018 - 09.00</td>
                <td>
                  <div class="btn-group btn-group-sm">
                      <i class="fa fa-lock">&nbsp;</i>
                    </div>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Latihan Membuat Tabel</td>
                <td>14-08-2018 - 09.00</td>
                <td>
                  <div class="btn-group btn-group-sm">
                      <button type="button" class="btn btn-pink">Submit
                      </button>
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
