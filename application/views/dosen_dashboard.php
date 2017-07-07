<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Admin Navbar Open -->
<?php $this->load->view('partials/mhs_navbar') ?>
<!-- Admin Navbar Close -->

<!--Main layout-->
<main id="content">
  <div class="container-fluid">
    <div class="row">


      <!-- Nav tabs -->
      <ul class="nav nav-tabs tabs-4 red" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Latihan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#panel4" role="tab">Ujian</a>
        </li>
      </ul>
      <!-- Tab panels -->
      <div class="tab-content card">
        <!--Panel 1-->
        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
        </div>
        <!--/.Panel 1-->
        <!--Panel 2-->
        <div class="tab-pane fade" id="panel2" role="tabpanel">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
        </div>
        <!--/.Panel 2-->
        <!--Panel 3-->
        <div class="tab-pane fade" id="panel3" role="tabpanel">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
        </div>
        <!--/.Panel 3-->
        <!--Panel 4-->
        <div class="tab-pane fade" id="panel4" role="tabpanel">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
        </div>
        <!--/.Panel 3-->
      </div>


    </div>
  </div>
</main>
<!--/Main layout-->
<?php $this->load->view('partials/mdb-footer') ?>
