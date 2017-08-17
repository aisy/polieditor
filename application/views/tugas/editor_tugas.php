<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/dsn_navbar_auto') ?>
<!-- Mhs Navbar Close -->

<br><br><br><br>

<div class="learn">
  <div class="row">

    <!-- <div class="col-md-4">
      <h3>Latihan</h3>
      <hr class="mt-2 mb-2">
      <p>

      </p>
    </div> -->

    <div class="col-md-6">
      <h3>Editor</h3>
      <hr class="mt-2 mb-2">
      <div class="sp toolbar tab-pane" id="htmPane">
        <div class="pane-label">html</div>
        <pre class="inner" id="editor">
          <?php echo htmlentities(file_get_contents("http://localhost/polieditor/folder_tugas/".$kelas."/".$tugas."/".$name_file));?>
        </pre>
      </div>
    </div>

    <div class="col-md-6">
      <h3>Hasil</h3>
      <hr class="mt-2 mb-2">
      <div class="result" id="return">

      </div>
      <br><br>
<!--   form beri nilai   -->
      <form action="<?= base_url('nilai/insertNilaiUjian/' . $tugas) ?>" method="POST">

        <input type="hidden" name="nama_nilai" value="<?= $nama_nilai ?>">
        <input type="hidden" name="nim" value="<?= $nim ?>">

        <div class="form-group">
          <label for="nilai"><h3>Nilai</h3></label>
          <input type="text" name="nilai" class="form-control" id="nilai" placeholder="">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Beri Nilai</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

<?php $this->load->view('partials/mdb-footer') ?>
