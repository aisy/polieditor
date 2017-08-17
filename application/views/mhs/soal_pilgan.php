
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
      <!-- Pilihan Ganda -->
      <fieldset class="form-group">
          <input value="A" name="group1<?= $i-1 ?>" type="radio" id="radio1<?= $i ?>">
          <label for="radio1<?= $i ?>"><?= $value['pilihan1'] ?></label>
      </fieldset>

      <fieldset class="form-group">
          <input value="B" name="group1<?= $i-1 ?>" type="radio" id="radio2<?= $i ?>">
          <label for="radio2<?= $i ?>"><?= $value['pilihan2'] ?></label>
      </fieldset>

      <fieldset class="form-group">
          <input value="C" name="group1<?= $i-1 ?>" type="radio" id="radio3<?= $i ?>">
          <label for="radio3<?= $i ?>"><?= $value['pilihan3'] ?></label>
      </fieldset>

    <fieldset>
        <input value="D" name="group1<?= $i-1 ?>" type="radio" id="radio4<?= $i ?>">
        <label for="radio4<?= $i ?>"><?= $value['pilihan4'] ?></label>
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
