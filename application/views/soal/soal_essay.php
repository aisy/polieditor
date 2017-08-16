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

        <div class="container">
          <div class="row">
            <form class="" action="<?= base_url('Soal/insertSoal') ?>" method="post">

              <input type="hidden" name="jml_soal" value="<?= $jml ?>">
              <input type="hidden" name="id_kelas" value="<?= $kelas ?>">

              <?php for ($i=0; $i < $jml ; $i++){  ?>

                <!--Panel-->
                <div class="card">
                  <h3 class="card-header primary-color white-text">Soal no.<?= $i+1 ?></h3>
                  <div class="card-block">

                    <input name="id_ujian" type="hidden" value="<?= $id_ujian ?>">

                    <div class="md-form">
                      <textarea name="soal[]" type="text" id="form7" class="md-textarea"></textarea>
                      <label for="form7">Isi Soal</label>
                    </div>
                    <hr>

                  </div>
                </div>
                <!--/.Panel-->

              <?php } ?>

              <button type="submit" class="btn btn-block btn-success" name="button">Buat Ujian</button>

            </form>
          </div>
          <br>
        </div>
      </div>
      <!--/.Panel 1-->

    </div>
  </div>

</main>
<!--/Main layout-->
<?php $this->load->view('partials/mdb-footer') ?>
<script type="text/javascript">
// Material Select Initialization
$(document).ready(function() {
 $('.mdb-select').material_select();
});
</script>
