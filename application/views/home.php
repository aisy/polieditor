<!-- Primary Style Header -->
<?php $this->load->view('partials/mdb-header') ?>
<!-- /.Primary Style Header -->

<body>
<!--Navigation & Intro-->
    <header>

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="row" id="home">
                        <!--First column-->
                        <div class="col-lg-7">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft">Selamat datang di E-Learning HTML</h2>
                                <hr class="hr-dark wow fadeInLeft">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">Sistem E-learning HTML adalah sistem untuk mata kuliah pemograman HTML yang di khususkan untuk Mahasiswa Politeknik Negeri Malang.</p>
                                <br>
                            </div>
                        </div>
                        <!--/.First column-->
                        <!--Second column-->
                        <form class="" action="<?= base_url('Dosen/login') ?>" method="post">
                        <div class="col-md-5">
                            <div class="card wow fadeInRight">
                                <div class="card-block">
                                    <!--Header-->
                                    <div class="text-xs-center">
                                        <h3>Masuk</h3>
                                        <hr>
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <input name="username" id="nim" type="text" class="form-control">
                                        <label for="nim">NIP</label>
                                    </div>
                                    <div class="md-form">
                                        <input name="password" id="password" type="text" class="form-control">
                                        <label for="password">Password</label>
                                    </div>
                                    <!--Textarea with icon prefix-->
                                    <div class="md-form">
                                      <button type="submit" class="btn btn-primary btn-block btn-rounded">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>
                        <!--/Second column-->
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->
    </header>
    <!--/Navigation & Intro-->

<?php $this->load->view('partials/mdb-footer') ?>
