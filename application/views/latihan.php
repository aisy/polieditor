<?php $this->load->view('partials/mdb-header') ?>
<?php $this->load->view('partials/mhs_navbar') ?>
<br><br><br>
<body>
  <div class="container-fluid">
    <div id="lul" class="row">
      <div class="col-md-2"></div>
      <div class="col-md-6">
        <!--Panel-->
        <div class="card card-block">
          <h4 class="card-title">Panel title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="flex-row">
            <a class="card-link">Card link</a>
            <a class="card-link">Another link</a>
          </div>
        </div>
        <!--/.Panel-->
      </div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <div class="sp toolbar tab-pane" id="htmPane">
          <div class="pane-label">html</div>
          <div class="inner" id="editor"></div>
        </div>
      </div>
      <div class="col-md-4" >
        <div class="card card-block" id="return">
          <h4 class="card-title">Live Preview</h4>
        </div>
      </div>
      <div class="col-md-2">
        <!--Panel-->
        <div class="card card-block">
          <h4 class="card-title">Options</h4>
          <a class="btn btn-md btn-primary" id="show">Tampil Soal</a>
          <a type="submit" class="btn btn-md btn-primary">Sumbit</a>
          <a type="submit" class="btn btn-md btn-primary">To html</a>
        </div>
        <!--/.Panel-->
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('partials/mdb-footer') ?>