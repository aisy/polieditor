
<a href="#" class="btn btn-md btn-pink">1</a><!-- Primar pull-lefty  <i class="fa fa-caret-left"></i>Snbsp;etyl& He
<!-- Primar pull-righty NEXT<&nbsp;i class="fa fa-caret-right"></i>e Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Mhs Navbar Open -->
<?php $this->load->view('partials/mhs_navbar') ?>
<!-- Mhs Navbar Close -->


<main id="content">
    <div class="row">
      <div class="col-md-8">
        <div class="text-center">
          <h3>Soal Essay</h3>
          <hr class="mt-2 mb-2">
          <p>
            <strong>1.</strong>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center">
          <h3>List Soal</h3>
          <hr class="mt-2 mb-2">

          <?php for($i=1; $i<=9; $i++) { ?>
          <a href="#" class="btn btn-sm btn-pink"><?= $i ?></a>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-8">
        <strong>Jawaban : </strong>
        <textarea class="md-textarea" id="counter" length=""></textarea>
        <a href="#" class="btn btn-md btn-pink pull-left" ><i class="fa fa-caret-left"></i>&nbsp;PREV</a>
        <a href="#" class="btn btn-md btn-pink pull-right">NEXT&nbsp;<i class="fa fa-caret-right"></i></a>
      </div>
    </div>
</main>

<?php $this->load->view('partials/mdb-footer') ?>
