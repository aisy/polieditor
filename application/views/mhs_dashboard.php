<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Admin Navbar Open -->
<?php $this->load->view('partials/mhs_navbar') ?>
<!-- Admin Navbar Close -->

<!--Main layout-->
<main id="content">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs tabs-2 red" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Materi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Tugas</a>
    </li>
  </ul>
  <!-- Tab panels -->
  <div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
      <br>
      <table class="table table-striped">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Nama file</th>
            <th>Keterangan</th>
            <th>Tgl upload</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($materi as $key => $value) { ?>
          <tr>
            <th scope="row">1</th>
            <td><?= $value->judul ?></td>
            <td><?= $value->nama_file ?></td>
            <td><?= $value->keterangan ?></td>
            <td><?= $value->tanggal_upload ?></td>
            <td>
              <a href="<?= $link_download.'/'.$value->nama_file ?>" type="button" class="btn btn-default">
                <i class="fa fa-download"></i> Download
              </a>
            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
      <br>
      <table class="table table-striped">
        <thead class="thead-inverse">
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Jenis</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($tugas as $key => $value) { ?>
          <tr>
            <th scope="row">1</th>
            <td><?= $value->judul ?></td>
            <td><?= $value->jenis_tugas ?></td>
            <td><?= $value->waktu_mulai ?></td>
            <td><?= $value->waktu_selesai ?></td>
            <td>
              <button type="button" class="btn btn-default">
                <i class="fa fa-tasks"></i> Kerjakan
              </button>
            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
    <!--/.Panel 2-->
  </div>

</main>
<!--/Main layout-->
<?php $this->load->view('partials/mdb-footer') ?>
