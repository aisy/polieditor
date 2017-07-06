<?php $this->load->view('partials/mdb-header') ?>
<?php $this->load->view('partials/mhs_navbar') ?>

<br><br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="sp toolbar tab-pane" id="htmPane">
        <div class="pane-label">html</div>
        <div class="inner" id="editor"></div>
      </div>  
    </div>
    <div class="col-md-4" id="return">
    </div>
  </div>
</div>

<?php $this->load->view('partials/mdb-footer') ?>