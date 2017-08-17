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
      <ul class="nav nav-tabs tabs-4 red" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i
            class="fa fa-check-square-o"></i> Tugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-book left"></i>
              Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel3" role="tab"><i
                class="fa fa-check-square-o"></i> Ujian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel4" role="tab"><i class="fa fa-group"></i>
                  Mahasiswa</a>
                </li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content card">

                <!-- Panel Tugas -->
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
                        <?php $no = 1;
                        foreach ($tugas as $row) { ?>

                          <tr>
                            <tbody>
                              <td><?= $no++ ?></td>
                              <td><?= $row->judul ?></td>
                              <td><?= $row->jenis_tugas ?></td>
                              <td>
                                <div class="btn-group btn-group-sm">
                                  <button type="button" class="btn btn-warning"
                                  data-toggle="modal"
                                  data-target="#edit_tugas<?= $row->id_tugas ?>">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger"
                                onclick="window.location='<?= base_url('tugas/delete/' . $row->id_tugas . '/' . $kelas->id_kelas) ?>'">
                                <i class="fa fa-trash"></i>
                              </button>
                              <!-- <button type="button" class="btn btn-info">
                                <i class="fa fa-list"></i>
                              </button> -->
                              <a href="<?= base_url('tugas/listTugas/'.$row->id_tugas) ?>" class="btn btn-success" >
                                <i class="fa fa-eye"></i>
                              </a>
                            </div>
                          </td>
                        </tbody>
                      </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>

            <!-- Panel Materi -->
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

                      <?php $no = 1; foreach ($materi as $row) { ?>
                        <tr>
                          <tbody>
                            <td><?= $no++ ?></td>
                            <td><?= $row->judul ?></td>
                            <td><?= $row->keterangan ?></td>
                            <td>
                              <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-primary" onclick="window.location='<?= base_url($row->nama_file) ?>'">
                                  <i class="fa fa-download"></i>
                                </button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit_materi<?= $row->id_materi ?>">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger" onclick="window.location='<?= base_url('Materi/delete/' . $row->id_materi . "/" . $kelas->id_kelas) ?>'">
                                  <i class="fa fa-trash"></i>
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
            </div>

            <!-- Panel Ujian -->
            <div class="tab-pane fade" id="panel3" role="tabpanel">
              <div class="center text-xs-center">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_ujian">
                  <i class="fa fa-plus-square left"></i> Tambah Ujian
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
                          <th>Nama Ujian</th>
                          <th>Jenis</th>
                          <th>Pilihan</th>
                        </thead>
                      </tr>

                      <?php $no = 1; foreach ($ujian as $row) { ?>
                        <tr>
                          <tbody>
                            <td><?= $no++ ?></td>
                            <td><?= $row->nama_ujian ?></td>
                            <td><?= $row->jenis_ujian ?></td>
                            <td>
                              <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit_ujian<?= $row->id_ujian ?>">
                                  <i class="fa fa-edit"></i>
                                </button>

                                <button type="button" class="btn btn-info" onclick="window.location='<?= base_url('Soal/detail_soal/' . $row->id_ujian . "/" . $kelas->id_kelas) ?>'">
                                  <i class="fa fa-list"></i>
                                </button>

                                <button type="button" class="btn btn-danger" onclick="window.location='<?= base_url('Soal/hapus_soal/' . $row->id_ujian . "/" . $kelas->id_kelas) ?>'">
                                  <i class="fa fa-trash"></i>
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
            </div>

            <!-- Panel Mahasiswa -->
            <div class="tab-pane fade" id="panel4" role="tabpanel">

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
                      <?php $i=1; foreach ($mhs as $key => $value) { ?>
                        <tbody>
                          <td><?= $i ?></td>
                          <td><?= $value['nim'] ?></td>
                          <td><?= $value['nama_mahasiswa'] ?></td>
                          <td>
                            <div class="btn-group btn-group-sm">
                              <button type="button" class="btn btn-info" onclick="window.location='<?= base_url('nilai/index/' . $value['nim']) ?>'">
                                <i class="fa fa-edit"></i>
                              </button>
                            </div>
                          </td>
                        </tbody>
                        <?php $i++; } ?>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </main>

      <!-- MODAL TAMBAH TUGAS  -->
      <form class="" action="<?= base_url('tugas/insert') ?>" method="post">
        <div class="modal fade" id="tambah_tugas" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Tugas</h4>
              </div>
              <div class="modal-body">

                <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">

                <div class="md-form">
                  <input type="text" name="judul" id="judul" class="form-control">
                  <label for="judul" class="">Judul Tugas</label>
                </div>

                <div class="md-form">
                  <select name="jenis_tugas" class="mdb-select">
                    <option value="" disabled selected>Jenis Tugas</option>
                    <option value="Tugas harian">Tugas Harian</option>
                    <option value="Latihan">Latihan</option>
                  </select>
                  <!-- <label>Example label</label> -->
                </div>

                <div class="md-form">
                  <textarea type="text" id="isi" name="isi_tugas" class="md-textarea"></textarea>
                  <label for="isi">Isi Tugas</label>
                </div>

                <div class="md-form">

                  <div class="form-inline">
                    <div class="md-form form-group">
                      <input  Modal Tambah Materi r="Pilih Tanggal" name="tgl_mulai" type="text" id="date-picker-example"
                      class="form-control datepicker">
                      <label for="date-picker-example">Tanggal Mulai</label>
                    </div>

                    <div class="md-form form-group">
                      <input placeholder="Pilih Waktu" name="wkt_mulai" type="text" id="input_starttime"
                      class="form-control timepicker">
                      <label for="input_starttime">Waktu Mulai</label>
                    </div>
                  </div>

                </div>

                <div class="md-form">

                  <div class="form-inline">
                    <div class="md-form form-group">
                      <input placeholder="Pilih Tanggal" name="tgl_selesai" type="text"
                      id="date-picker-example" class="form-control datepicker">
                      <label for="date-picker-example">Tanggal Selesai</label>
                    </div>

                    <div class="md-form form-group">
                      <input placeholder="Pilih Waktu" name="wkt_selesai" type="text" id="input_endtime"
                      class="form-control timepicker">
                      <label for="input_starttime">Waktu Selesai</label>
                    </div>
                  </div>

                </div>

              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-block btn-success">Buat Tugas</button>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- MODAL EDIT TUGAS -->
      <?php foreach ($tugas as $row) {

        $tanggal_mulai = date("Y-m-d", strtotime($row->waktu_mulai));
        $tanggal_selesai = date("Y-m-d", strtotime($row->waktu_selesai));

        $wkt_mulai = date("h:i:s", strtotime($row->waktu_mulai));
        $wkt_selesai = date("h:i:s", strtotime($row->waktu_selesai));

        ?>
        <form class="" action="<?= base_url('tugas/update/' . $row->id_tugas) ?>" method="post">
          <div class="modal fade" id="edit_tugas<?= $row->id_tugas ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id=""><i class="fa fa-edit" class="left"></i> Edit Tugas</h4>
                </div>
                <div class="modal-body">

                  <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">

                  <div class="md-form">
                    <input type="text" name="judul" id="judul" class="form-control" value="<?= $row->judul ?>">
                    <label for="judul" class="">Judul Tugas</label>
                  </div>

                  <div class="md-form">
                    <select name="jenis_tugas" class="mdb-select">
                      <option value="" disabled selected>Jenis Tugas</option>
                      <option value="Tugas harian" <?= $row->jenis_tugas == "Tugas harian" ? "selected" : "" ?>>Tugas Harian</option>
                      <option value="Latihan" <?= $row->jenis_tugas == "Latihan" ? "selected" : "" ?>>Latihan</option>
                    </select>
                    <!-- <label>Example label</label> -->
                  </div>

                  <div class="md-form">
                    <textarea type="text" id="isi" name="isi_tugas" class="md-textarea"><?= $row->isi_tugas ?></textarea>
                    <label for="isi">Isi Tugas</label>
                  </div>

                  <div class="md-form">

                    <div class="form-inline">
                      <div class="md-form form-group">
                        <input placeholder="Pilih Tanggal" name="tgl_mulai"
                        type="text" id="date-picker-example"
                        class="form-control datepicker"
                        value="<?= $tanggal_mulai ?>">
                        <label for="date-picker-example">Tanggal
                          Mulai</label>
                        </div>

                        <div class="md-form form-group">
                          <input placeholder="Pilih Waktu" name="wkt_mulai"
                          type="text" id="input_starttime"
                          class="form-control timepicker"
                          value="<?= $wkt_mulai ?>">
                          <label for="input_starttime">Waktu Mulai</label>
                        </div>
                      </div>

                    </div>

                    <div class="md-form">

                      <div class="form-inline">
                        <div class="md-form form-group">
                          <input placeholder="Pilih Tanggal"
                          name="tgl_selesai" type="text"
                          id="date-picker-example"
                          class="form-control datepicker"
                          value="<?= $tanggal_selesai ?>">
                          <label for="date-picker-example">Tanggal
                            Selesai</label>
                          </div>

                          <div class="md-form form-group">
                            <input placeholder="Pilih Waktu" name="wkt_selesai"
                            type="text" id="input_endtime"
                            class="form-control timepicker"
                            value="<?= $wkt_selesai ?>">
                            <label for="input_starttime">Waktu Selesai</label>
                          </div>
                        </div>

                      </div>

                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      <button type="submit" class="btn btn-block btn-success">Edit
                        Tugas
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          <?php } ?>

          <!-- MODAL TAMBAH MATERI -->
          <form class="" action="<?= base_url('Materi/insert') ?>" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="tambah_materi" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Materi</h4>
                  </div>
                  <div class="modal-body">

                    <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">
                    <input type="hidden" name="nama_kelas" value="<?= $kelas->nama_kelas ?>">

                    <div class="md-form">
                      <input type="text" name="judul" id="judul" class="form-control">
                      <label for="judul" class="">Judul Materi</label>
                    </div>

                    <div class="md-form">
                      <div class="file-field">
                        <div class="btn btn-primary btn-sm">
                          <span>Pilih file</span>
                          <input type="file" name="nama_file">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                      </div>
                    </div>

                    <div class="md-form">
                      <textarea type="text" id="keterangan" name="keterangan" class="md-textarea"></textarea>
                      <label for="keterangan">Keterangan</label>
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

          <!-- MODAL EDIT MATERI -->
          <?php foreach ($materi as $row) { ?>
            <form class="" action="<?= base_url('Materi/update/' . $row->id_materi) ?>" method="post" enctype="multipart/form-data">
              <div class="modal fade" id="edit_materi<?= $row->id_materi ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Materi</h4>
                    </div>
                    <div class="modal-body">

                      <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">
                      <input type="hidden" name="nama_kelas" value="<?= $kelas->nama_kelas ?>">

                      <div class="md-form">
                        <input type="text" name="judul" id="judul" class="form-control" value="<?= $row->judul ?>">
                        <label for="judul" class="">Judul Materi</label>
                      </div>

                      <div class="md-form">
                        <div class="file-field">
                          <div class="btn btn-primary btn-sm">
                            <span>Pilih file</span>
                            <input type="file" name="nama_file">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your file">
                          </div>
                        </div>
                      </div>

                      <div class="md-form">
                        <textarea type="text" id="keterangan" name="keterangan" class="md-textarea"><?= $row->keterangan ?></textarea>
                        <label for="keterangan">Keterangan</label>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      <button type="sumbit" class="btn btn-block btn-success">Edit Materi</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          <?php } ?>

          <!-- MODAL TAMBAH UJIAN -->
          <form class="" action="<?= base_url('Soal/buat_soal') ?>" method="post">
            <div class="modal fade" id="tambah_ujian" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Tambah Ujian</h4>
                  </div>

                  <div class="modal-body">

                    <div class="md-form">
                      <input type="text" name="nama_ujian" class="form-control" id="kelas" placeholder="">
                      <label for="kelas">Nama Ujian</label>
                    </div>

                    <div class="md-form">
                      <input type="text" name="jml_soal" class="form-control" id="kelas" placeholder="">
                      <label for="kelas">Jumlah Soal</label>
                    </div>

                    <input type="hidden" name="id_kelas" value="<?= $kelas->nama_kelas ?>">

                    <div class="md-form">
                      <select name="jenis_ujian" class="mdb-select">
                        <option value="" disabled selected>Pilih jenis ujian</option>
                        <option value="pilihan ganda">Pilihan ganda</option>
                        <option value="essay">essay</option>
                      </select>
                    </div>

                    <br>

                    <div class="md-form">
                      <input type="text" name="keterangan" class="form-control" id="kelas" placeholder="">
                      <label for="kelas">Keterangan</label>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <button type="sumbit" class="btn btn-block btn-success">Buat Ujian</button>
                  </div>

                </div>
              </div>
            </div>
          </form>

          <!-- MODAL EDIT Ujian -->
          <?php foreach ($ujian as $row) { ?>
            <form class="" action="<?= base_url('Ujian/update/' . $row->id_ujian) ?>" method="post" enctype="multipart/form-data">
              <div class="modal fade" id="edit_ujian<?= $row->id_ujian ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id=""><i class="fa fa-plus-square" class="left"></i> Ubah Ujian</h4>
                    </div>
                    <div class="modal-body">

                      <div class="md-form">
                        <input type="text" name="nama_ujian" class="form-control" id="kelas" value="<?= $row->nama_ujian  ?>">
                        <label for="kelas">Nama Ujian</label>
                      </div>

                      <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">

                      <div class="md-form">
                        <input type="text" name="keterangan" class="form-control" id="kelas" value="<?= $row->keterangan ?>">
                        <label for="kelas">Keterangan</label>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      <button type="sumbit" class="btn btn-block btn-success">Edit Ujian</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          <?php } ?>

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
