<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Admin Navbar Open -->
<?php $this->load->view('partials/dsn_navbar') ?>
<!-- Admin Navbar Close -->

<main id="content">
  <div class="container-fluid">
    <div class="row">

      <center>
        <h1>NAMA MAHASISWA</h1>
      </center>

      <br>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs tabs-4 red" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i
              class="fa fa-check-square-o"></i> Tugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-book left"></i>
            Ujian</a>
        </li>
      </ul>

      <!-- Tab panels -->
      <div class="tab-content card">

        <!-- Panel Tugas -->
        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
          <div class="center text-xs-center">
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
              </table>
            </div>
          </div>
        </div>

        <!-- Panel Ujian -->
        <div class="tab-pane fade" id="panel2" role="tabpanel">
          <div class="center text-xs-center">
            <hr>

          </div>

          <div class="container">
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-striped">
                  <tr>
                    <thead>
                    <th>#</th>
                    <th>Nama Ujian</th>
                    <th>Jenis Ujian</th>
                    <th>Pilihan</th>
                    </thead>
                  </tr>

                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<?php $this->load->view('partials/mdb-footer') ?>

<script type="text/javascript">

    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    $('.datepicker').pickadate({
        monthsFull: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy/mm/dd',
        selectMonths: true, // Creates a dropdown to control month
        // selectYears: 50, // Creates a dropdown of 50 years to control year
        // min: [1961,0,1],
        // max: [2017,7,14]
    });

    $('#input_starttime').pickatime({
        twelvehour: false
    });

    $('#input_endtime').pickatime({
        twelvehour: false
    });
</script>
