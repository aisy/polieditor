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

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">A.</span>
                      <input type="text" class="form-control" name="jawaban_a[]" aria-describedby="basic-addon1">
                    </div>

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">B.</span>
                      <input type="text" class="form-control" name="jawaban_b[]" aria-describedby="basic-addon1">
                    </div>

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">C.</span>
                      <input type="text" class="form-control" name="jawaban_c[]" aria-describedby="basic-addon1">
                    </div>

                    <div class="md-form input-group">
                      <span class="input-group-addon" id="basic-addon1">D.</span>
                      <input type="text" class="form-control" name="jawaban_d[]" aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="center text-xs-center">

                      <div class="md-form form-group">
                        <select name="jawaban[]" class="mdb-select">
                          <option value="" disabled selected>Kunci Jawaban</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                        </select>

                      </div>
                    </div>

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
