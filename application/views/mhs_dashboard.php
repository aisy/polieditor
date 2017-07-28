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

        <!--Button-->
        <a class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>

        <!--Card content-->
        <div class="card-block">
          <!--Title-->
          <h4 class="card-title">Materi</h4>
          <hr>
          <!--Text-->
          <p class="card-text">Berisi tentang materi mata kuliah dasar pemrogaman web</p>
        </div>
        <!--/.Card content-->
      </div>
    </div>
    <!-- Card Materi -->

    <!-- Card Latihan -->
    <div class="col-md-4">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay hm-white-slight">
          <img src="<?= base_url('asset/img/hard-work.jpg') ?>" class="img-fluid">
          <a>
            <div class="mask waves-effect waves-light"></div>
          </a>
        </div>
        <!--/.Card image-->
        <!--Button-->
        <a class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>
        <!--Card content-->
        <div class="card-block">
          <!--Title-->
          <h4 class="card-title">Latihan</h4>
          <hr>
          <!--Text-->
          <p class="card-text">Berisi tentang latihan kuliah dasar pemrogaman web</p>
        </div>
        <!--/.Card content-->
      </div>
    </div>
    <!-- Card Latihan -->

    <!-- Carda Pelatihan -->

    <div class="col-md-4">
      <!--Card-->
      <div class="card">
        <!--Card image-->
        <div class="view overlay hm-white-slight">
          <img src="<?= base_url('asset/img/course.jpg') ?>" class="img-fluid">
          <a>
            <div class="mask waves-effect waves-light"></div>
          </a>
        </div>
        <!--/.Card image-->
        <!--Button-->
        <a class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>
        <!--Card content-->
        <div class="card-block">
          <!--Title-->
          <h4 class="card-title">Penilaian</h4>
          <hr>
          <!--Text-->
          <p class="card-text">Berisi tentang tugas dan ujian mata kuliah dasar pemrogaman web</p>
        </div>
        <!--/.Card content-->
      </div>
    </div>

    <!-- Carda Pelatihan -->

</main>
<!--/Main layout-->
<?php $this->load->view('partials/mdb-footer') ?>
