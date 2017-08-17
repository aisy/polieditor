<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/dsn_navbar_auto') ?>
<!-- Mhs Navbar Close -->



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
    </div>
  </div>
</div>

<?php $this->load->view('partials/mdb-footer') ?>
