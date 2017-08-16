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
            <form class="" action="<?= base_url('Soal/updateEssay') ?>" method="post">

              <input type="hidden" name="id_kelas" value="<?= $kelas ?>">

              <?php $i = 1; foreach ($soal as $row) {  ?>

                <!--Panel-->
                <div class="card">
                  <h3 class="card-header primary-color white-text">Soal no.<?= $i++ ?></h3>
                  <div class="card-block">

                    <input name="id_ujian" type="hidden" value="<?= $row->id_ujian ?>">
                    <input name="id_soal[]" type="hidden" value="<?= $row->id_soal ?>">

                    <div class="md-form">
                      <textarea name="soal[]" type="text" id="form7" class="md-textarea"><?= $row->soal ?></textarea>
                      <label for="form7">Isi Soal</label>
                    </div>
                    <hr>

                  </div>
                </div>
                <!--/.Panel-->

              <?php } ?>

              <button type="submit" class="btn btn-block btn-success" name="button">Edit Soal</button>

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
