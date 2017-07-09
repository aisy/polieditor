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
            <h1><?= $kelas->nama_kelas ?></h1>
        </center>
        <br>

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
                <?php $no = 1; foreach ($tugas as $row) { ?>
                <tr>
                  <tbody>
                    <td><?= $no++ ?></td>
                    <td><?= $row->judul ?></td>
                    <td><?= $row->jenis_tugas ?></td>
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
                <?php } ?>
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
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-striped">
                  <tr>
                    <thead>
                      <th>#</th>
                      <th>Nama Materi</th>
                      <th>Keterangan</th>
                      <th>Pilihan</th>
                    </thead>
                  </tr>

                  <tr>
                    <tbody>
                      <td>1</td>
                      <td>HTML dasar</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
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
        </div>
        <!--/.Panel 2-->

        <!--Panel 3-->
        <div class="tab-pane fade" id="panel3" role="tabpanel">
          <div class="center text-xs-center">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_mahasiswa">
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

<!-- MODAL  -->
<form class="" action="index.html" method="post">
  <div class="modal fade" id="tambah_tugas" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Tugas</h4>
        </div>
        <div class="modal-body">

          <div class="md-form">
            <input type="text" name="judul" id="judul" class="form-control">
            <label for="judul" class="">Judul Tugas</label>
          </div>

          <div class="md-form">
            <select name="jenis_tugas" class="mdb-select">
              <option value="" disabled selected>Jenis Tugas</option>
              <option value="Tugas harian">Tugas Harian</option>
              <option value="Ujian">Ujian</option>
              <option value="UAS">UAS</option>
            </select>
            <!-- <label>Example label</label> -->
          </div>

          <div class="md-form">
            <textarea type="text" id="isi" name="isi" class="md-textarea"></textarea>
            <label for="isi">Isi Tugas</label>
          </div>

          <div class="md-form">

            <div class="form-inline">
              <div class="md-form form-group">
                <input placeholder="Pilih Tanggal" name="tgl_mulai" type="text" id="date-picker-example" class="form-control datepicker">
                <label for="date-picker-example">Tanggal Mulai</label>
              </div>

              <div class="md-form form-group">
                <input placeholder="Pilih Waktu" name="wkt_mulai" type="text" id="input_starttime" class="form-control timepicker">
                <label for="input_starttime">Waktu Mulai</label>
              </div>
            </div>

          </div>

          <div class="md-form">

            <div class="form-inline">
              <div class="md-form form-group">
                <input placeholder="Pilih Tanggal" name="tgl_selesai" type="text" id="date-picker-example" class="form-control datepicker">
                <label for="date-picker-example">Tanggal Selesai</label>
              </div>

              <div class="md-form form-group">
                <input placeholder="Pilih Waktu" name="wkt_selesai" type="text" id="input_endtime" class="form-control timepicker">
                <label for="input_starttime">Waktu Selesai</label>
              </div>
            </div>

          </div>

          <div class="md-form">
            <select name="jenis_tugas" class="mdb-select">
              <option value="" disabled selected>Kelas</option>
              <option value="Tugas harian">Pilih Kelas</option>
              <option value="Ujian">Ujian</option>
              <option value="UAS">UAS</option>
            </select>
            <!-- <label>Example label</label> -->
          </div>

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <button type="sumbit" class="btn btn-block btn-success">Buat Tugas</button>
        </div>
      </div>
    </div>
  </div>
</form>

<form class="" action="index.html" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="tambah_materi" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Materi</h4>
        </div>
        <div class="modal-body">

          <div class="md-form">
            <input type="text" name="judul" id="judul" class="form-control">
            <label for="judul" class="">Judul Materi</label>
          </div>

          <div class="md-form">
            <div class="file-field">
              <div class="btn btn-primary btn-sm">
                <span>Pilih file</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload your file">
              </div>
            </div>
          </div>

          <div class="md-form">
            <textarea type="text" id="isi" name="isi" class="md-textarea"></textarea>
            <label for="isi">Keterangan</label>
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

<form class="" action="index.html" method="post">
  <div class="modal fade" id="tambah_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Undang Mahasiswa</h4>
        </div>
        <div class="modal-body">

          <div class="md-form">
            <input type="text" name="nama_kelas" class="form-control" id="kelas" placeholder="">
            <label for="kelas">Nama Kelas</label>
          </div>

          <div class="md-form">
            <input type="text" name="nama_kelas" class="form-control" id="kelas" placeholder="">
            <label for="kelas">Nama Kelas</label>
          </div>

          <div class="md-form">
            <input type="text" name="nama_kelas" class="form-control" id="kelas" placeholder="">
            <label for="kelas">Nama Kelas</label>
          </div>

          <div class="md-form">
            <input type="text" name="nama_kelas" class="form-control" id="kelas" placeholder="">
            <label for="kelas">Nama Kelas</label>
          </div>

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <button type="sumbit" class="btn btn-block btn-success">Undang</button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php $this->load->view('partials/mdb-footer') ?>

<script type="text/javascript">

$(document).ready(function() {
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
