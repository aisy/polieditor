<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<!-- Custom Home Style -->
<?php $this->load->view('partials/utils/home-style') ?>
<!-- /.Custom Home Style -->

<!--Navigation & Intro-->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">
            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i></button>
            <div class="container">
                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="#" target="_blank">Apps</a>
                     <!--Links-->
                    <ul class="nav navbar-nav smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#best-features">Features</a>
                        </li>
                    </ul>
                    <!--Navbar icons-->
                    <ul class="nav navbar-nav nav-flex-icons">
                        <li class="nav-item wow fadeIn" data-wow-delay="0.2s">
                            <a class="nav-link"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item wow fadeIn" data-wow-delay="0.3s">
                            <a class="nav-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item wow fadeIn" data-wow-delay="0.4s">
                            <a class="nav-link"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!--/.Collapse content-->
            </div>
        </nav>
        <!--/.Navbar-->
        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="row" id="home">
                        <!--First column-->
                        <div class="col-lg-7">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft">Make purchases with our app </h2>
                                <hr class="hr-dark">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
                                <br>
                            </div>
                        </div>
                        <!--/.First column-->
                        <!--Second column-->
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-block">
                                    <!--Header-->
                                    <div class="text-xs-center">
                                        <h3>Sign</h3>
                                        <hr>
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <input type="text" class="form-control">
                                        <label for="form3">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" class="form-control">
                                        <label for="form2">Your email</label>
                                    </div>
                                    <!--Textarea with icon prefix-->
                                    <div class="md-form">
                                      <button class="btn btn-danger btn-block btn-rounded">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Second column-->
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->
    </header>
    <!--/Navigation & Intro-->
    
<?php $this->load->view('partials/mdb-footer') ?>