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



            <table class="table table-bordered table-striped">
              <tr>
                <thead>
                  <th>#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nilai 1</th>
                  <th>Nilai 2</th>
                  <th>NR1</th>
                  <th>UTS</th>
                  <th>Nilai 3</th>
                  <th>Nilai 4</th>
                  <th>NR2</th>
                  <th>UAS</th>
                </thead>
              </tr>

              <tr>
                <?php $i=1; foreach ($nilai as $key => $value) { ?>
                  <tbody>
                    <td><?= $i ?></td>
                    <td><?= $value[0]->nim ?></td>
                    <td><?= $value[0]->nama_mahasiswa ?></td>
                    <td><?= $value[0]->nilai ?></td>
                    <td><?= $value[1]->nilai ?></td>
                    <td><?= $value[5]->nilai ?></td>
                    <td><?= ($value[0]->nilai+$value[1]->nilai)/2 ?></td>
                    <td><?= $value[2]->nilai ?></td>
                    <td><?= $value[3]->nilai ?></td>
                    <td><?= $value[4]->nilai ?></td>
                    <td><?= ($value[0]->nilai+$value[1]->nilai)/2 ?></td>
                  </tbody>
                  <?php $i++; } ?>
                </tr>
              </table>
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
