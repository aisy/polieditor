<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Admin Navbar Open -->
<?php $this->load->view('partials/dsn_navbar') ?>
<!-- Admin Navbar Close -->

<!--Main layout-->
<main id="content">
  <div class="container-fluid">
    <div class="row">

      <!--Panel 1-->
      <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <div class="center text-xs-center">
          <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_kelas">
            <i class="fa fa-plus-square left"></i> Tambah kelas
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
                      Kelas TI-1E
                    </strong>
                  </h4>
                  <hr>
                <a href="" type="button" class="btn btn-default">
                  Lihat Kelas
                </a>
              </div>

            </div>
            </div>
            <!--/Card-->
          </div>
        </div>
      </div>
      <!--/.Panel 1-->

      <!-- MODAL  -->
      <form class="" action="index.html" method="post">
      <div class="modal fade" id="tambah_kelas" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Kelas</h4>
            </div>
            <div class="modal-body">

              <div class="md-form">
                <input type="text" name="nama_kelas" class="form-control" id="kelas" placeholder="">
                <label for="kelas">Nama Kelas</label>
              </div>

              <div class="md-form">
                <input type="text" name="prodi" class="form-control" id="Program Study" placeholder="">
                <label for="kelas">Prodi</label>
              </div>

              <div class="md-form">
                <input type="number" name="kuota" class="form-control" id="kuota" placeholder="">
                <label for="kuota">Kuota kelas</label>
              </div>

              <div class="md-form">
                <input type="text" class="form-control" id="" placeholder="">
                <p class="help-block">Help text here.</p>
              </div>

            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <button type="sumbit" class="btn btn-block btn-success">Tambah Kelas</button>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form class="" action="index.html" method="post">
      <div class="modal fade" id="tambah_kelas" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Materi</h4>
            </div>
            <div class="modal-body">

              <div class="md-form">
                <input type="text" name="nama_kelas" class="form-control" id="kelas" placeholder="">
                <label for="kelas">Nama Kelas</label>
              </div>

            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <button type="sumbit" class="btn btn-block btn-success">Upload Materi</button>
            </div>
          </div>
        </div>
      </div>
      </form>

    </div>
  </div>
</main>
<!--/Main layout-->
<?php $this->load->view('partials/mdb-footer') ?>
