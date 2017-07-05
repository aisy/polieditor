<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->



<div class="wrapper">
  <div class="outer">
    <div class="row">
      <!-- <div class="col-lg-12"> -->
        <div class="jumbotron">
          <h1 class="h1-responsive">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-2">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" role="button">Learn more</a>
          </p>
        </div>
      <!-- </div> -->
      <div class="col-sm-6 sp toolbar tab-pane" id="htmPane">
        <div class="pane-label">html</div>
        <div class="inner" id="editor"></div>
      </div>
      <div class="col-sm-6 result" id="return">

      </div>
    </div><!--/row-->
  </div><!--/outer-->
</div><!--/wrapper-->


<?php $this->load->view('partials/mdb-footer') ?>
