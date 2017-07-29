<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/mhs_navbar') ?>
<!-- Mhs Navbar Close -->

<!--Main layout-->
<main id="content">
  <div class="row">
    <!-- Card Materi -->
    <div class="col-md-4">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay hm-white-slight">
          <img src="<?= base_url('asset/img/best.jpg') ?>" class="img-fluid">
          <a>
            <div class="mask waves-effect waves-light"></div>
          </a>
        </div>
        <!--/.Card image-->
        <!--Card content-->
        <div class="card-block">
          <!--Title-->
          <h4 class="card-title">Pilihan Ganda</h4>
          <hr>
          <!--Button-->
          <button type="button" class="btn btn-lg btn-block btn-pink" name="button">Pilih</button>
        </div>
        <!--/.Card content-->
      </div>
    </div>
    <!-- Card Materi -->

    <!-- Card Materi -->
    <div class="col-md-4">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay hm-white-slight">
          <img src="<?= base_url('asset/img/best.jpg') ?>" class="img-fluid">
          <a>
            <div class="mask waves-effect waves-light"></div>
          </a>
        </div>
        <!--/.Card image-->
        <!--Card content-->
        <div class="card-block">
          <!--Title-->
          <h4 class="card-title">Submit Html</h4>
          <hr>
          <!--Button-->
          <button type="button" class="btn btn-lg btn-block btn-pink" name="button">Pilih</button>
        </div>
        <!--/.Card content-->
      </div>
    </div>
    <!-- Card Materi -->

    <!-- Card Materi -->
    <div class="col-md-4">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay hm-white-slight">
          <img src="<?= base_url('asset/img/best.jpg') ?>" class="img-fluid">
          <a>
            <div class="mask waves-effect waves-light"></div>
          </a>
        </div>
        <!--/.Card image-->
        <!--Card content-->
        <div class="card-block">
          <!--Title-->
          <h4 class="card-title">Soal Essay</h4>
          <hr>
          <!--Button-->
          <button type="button" class="btn btn-lg btn-block btn-pink" name="button">Pilih</button>
        </div>
        <!--/.Card content-->
      </div>
    </div>
    <!-- Card Materi -->



</main>
<!--/Main layout-->
<?php $this->load->view('partials/mdb-footer') ?>
