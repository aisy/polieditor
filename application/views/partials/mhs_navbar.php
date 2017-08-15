<body class="fixed-sn mdb-skin">
  <!--Double navigation-->
  <!-- Sidebar navigation -->
  <ul class="side-nav fixed custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper sn-ad-avatar-wrapper">
        <img src="<?php echo base_url('asset/img/images.png') ?>" class="rounded-circle">
        <div class="rgba-stylish-strong">
          <p class="user white-text">Mahasiswa<br><?= $this->session->userdata('nama'); ?></p>
        </div>
      </div>
    </li>
    <!--/. Logo -->
    <!-- Side navigation links -->
    <li>
      <br>
      <ul class="collapsible collapsible-accordion">
        <li>
          <a href="<?= site_url('mahasiswa/index/'.$this->session->userdata('kelas')) ?>" class="collapsible-header">
            <i class="fa fa-home"></i> Home</a>
          </li>
        </li>
        <li>
          <a href="<?= site_url('mahasiswa/tugas/'.$this->session->userdata('kelas') ) ?>" class="collapsible-header waves-effect arrow-r">
            <i class="fa fa-book"></i> Tugas
          </a>
        </li>
        <li>
          <a href="<?= site_url('mahasiswa/materi/'.$this->session->userdata('kelas')) ?>" class="collapsible-header waves-effect arrow-r">
            <i class="fa fa-book"></i> Materi
          </a>
        </li>
        <li>
          <a href="<?= site_url('mahasiswa/latihan'.$this->session->userdata('kelas')) ?>" class="collapsible-header">
            <i class="fa fa-book"></i> Latihan
          </a>
        </li>

        <li><a href="#" class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i>&nbsp;&nbsp;Profil<i class="fa fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">Ubah Profil</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>

      <!--/. Side navigation links -->
    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-xs-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
      </div>
      <ul class="nav navbar-nav float-xs-right">
        <a class="btn btn-sm btn-info btn-rounded wafes-effect waves-light" href="<?= base_url('Mahasiswa/logout') ?>">Logout</a>
      </ul>
    </nav>
    <!--/.Navbar-->
    <!--/Double navigation-->
