<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Admin Navbar Open -->
<?php $this->load->view('partials/dsn_navbar') ?>
<!-- Admin Navbar Close -->

<main id="content">
  <div class="container-fluid">
    <div class="row">
      <!--
      <div class="col-md-8">


    </div> -->

    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-3 red" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-check-square-o"></i> Tugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-book left"></i> Materi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab"><i class="fa fa-group"></i> Mahasiswa</a>
      </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content card">

      <!--Panel 1-->
      <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <div class="center text-xs-center">
          <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_tugas">
            <i class="fa fa-plus-square left"></i> Tambah tugas
          </button>
          <hr>

        </div>

        <div class="container">
          <div class="row">
            <table class="table table-bordered table-striped">
              <tr>
                <thead>
                  <th>#</th>
                  <th>Nama Tugas</th>
                  <th>Keterangan</th>
                  <th>Pilihan</th>
                </thead>
              </tr>

              <tr>
                <tbody>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>
                    <div class="btn-group btn-group-sm">
                      <button type="button" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-info">
                        <i class="fa fa-list"></i>
                      </button>
                    </div>
                  </td>
                </tbody>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!--/.Panel 1-->

      <!--Panel 2-->
      <div class="tab-pane fade" id="panel2" role="tabpanel">
        <div class="center text-xs-center">
          <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_materi">
            <i class="fa fa-plus-square left"></i> Tambah Materi
          </button>
          <hr>

        </div>

        <div class="container">
          <div class="row">
            <!-- Card -->
            <div class="col-lg-4 col-md-6">
              <!--Card-->
              <div class="card testimonial-card">
                <div class="card-up primary-color-dark">
                </div>

                <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive">
                </div>

                <div class="card-block">
                  <h4 class="card-title">
                    <strong>
                      Materi
                    </strong>
                  </h4>
                  <hr>
                  <a href="" type="button" class="btn btn-default">
                    Preview Materi
                  </a>
                </div>

              </div>
            </div>
            <!--/Card-->
          </div>
        </div>
      </div>
      <!--/.Panel 2-->

      <!--Panel 3-->
      <div class="tab-pane fade" id="panel3" role="tabpanel">
        <div class="center text-xs-center">
          <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_materi">
            <i class="fa fa-plus-square left"></i> Undang Mahasiswa
          </button>
          <hr>

        </div>

        <div class="container">
          <div class="row">
            <table class="table table-bordered table-striped">
              <tr>
                <thead>
                  <th>#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Pilihan</th>
                </thead>
              </tr>

              <tr>
                <tbody>
                  <td>1</td>
                  <td>1241180090</td>
                  <td>Aisy Muhammad R</td>
                  <td>
                    <div class="btn-group btn-group-sm">
                      <button type="button" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </div>
                  </td>
                </tbody>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!--/.Panel 3-->
    </div>
  </div>
</div>
</main>


<?php $this->load->view('partials/mdb-footer') ?>
