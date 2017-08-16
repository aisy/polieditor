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
            <form class="" action="<?= base_url('Soal/updateSoal') ?>" method="post">

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

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">A.</span>
                      <input type="text" class="form-control" name="jawaban_a[]" value="<?= $row->pilihan1 ?>" aria-describedby="basic-addon1">
                    </div>

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">B.</span>
                      <input type="text" class="form-control" name="jawaban_b[]" value="<?= $row->pilihan2 ?>" aria-describedby="basic-addon1">
                    </div>

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">C.</span>
                      <input type="text" class="form-control" name="jawaban_c[]" value="<?= $row->pilihan3 ?>" aria-describedby="basic-addon1">
                    </div>

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">D.</span>
                      <input type="text" class="form-control" name="jawaban_d[]" value="<?= $row->pilihan4 ?>" aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="center text-xs-center">

                      <div class="md-form form-group">
                        <select name="jawaban[]" class="mdb-select">
                          <option value="" disabled selected>Kunci Jawaban</option>
                          <option value="A" <?= $row->jawaban == 'A' ? 'selected' : '' ?>>A</option>
                          <option value="B" <?= $row->jawaban == 'B' ? 'selected' : '' ?>>B</option>
                          <option value="C" <?= $row->jawaban == 'C' ? 'selected' : '' ?>>C</option>
                          <option value="D" <?= $row->jawaban == 'D' ? 'selected' : '' ?>>D</option>
                        </select>

                      </div>
                    </div>

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
