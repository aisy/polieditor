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
            <?php $i=1; foreach ($tugas as $key => $value): ?>

              <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $value['judul'] ?></td>
                <td><?= $value['waktu_mulai']." - ".$value['waktu_selesai'] ?></td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                      Upload
                    </button>
                  </div>
                </td>
              </tr>

              <?php $i++; endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Upload Tugas</h4>
        </div>
        <!--Body-->
        <div class="modal-body">
          <form class="" action="<?= base_url('Tugas/insert') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">

              <div class="file-field">
                <div class="btn btn-primary btn-sm">
                  <span>Choose file</span>
                  <input type="file" name="nama_file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload your file">
                </div>
              </div>

              <button type="submit" name="upload" class="btn btn-default">
                <i class="fa fa-upload"></i> Upload
              </button>

            </div>
          </form>

          <br>

        </div>
        <!--Footer-->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- /.Live preview-->

  <?php $this->load->view('partials/mdb-footer') ?>
