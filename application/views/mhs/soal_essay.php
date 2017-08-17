
<a href="#" class="btn btn-md btn-pink">1</a><!-- Primar pull-lefty  <i class="fa fa-caret-left"></i>Snbsp;etyl& He
  <!-- Primar pull-righty NEXT<&nbsp;i class="fa fa-caret-right"></i>e Header -->
  <?php $this->load->view('partials/mdb-header') ?>
  <!-- /.Primary Style Header -->

  <!-- Mhs Navbar Open -->
  <?php $this->load->view('partials/mhs_navbar') ?>
  <!-- Mhs Navbar Close -->


  <main id="content">
    <div class="row">
      <h3>Soal Essay</h3>
      <hr class="mt-2 mb-2">
      <div class="col-md-12">
        <form class="" action="<?= base_url('Penilaian/nilai_pilgan') ?>" method="post">

          <?php $i=1; foreach ($tugas as $key => $value) { ?>
            <div class="text-center">
              <p>
                <strong><?= $i ?>.</strong>&nbsp;
                <?= $value['soal'] ?>
              </p>
            </div>

            <fieldset class="form-group">
              <strong>Jawaban : </strong>
            </fieldset>

            <fieldset>
              <div class="md-form">
                <label for="form7">Jawaban</label>
                <textarea name="jawaban<?= $i ?>" type="text" id="form7" class="md-textarea"></textarea>
              </div>
            </fieldset>

            <hr class="mt-2 mb-2">
            <?php $i++; } ?>

            <input type="hidden" name="id_ujian" value="<?= $id_ujian ?>">
            <input type="hidden" name="nama_ujian" value="<?= $ujian['nama_ujian'] ?>">

            <button type="submit" class="btn btn-success btn-block" name="button">Selesai</button>
          </form>
        </div>
      </div>
    </main>

    <?php $this->load->view('partials/mdb-footer') ?>
