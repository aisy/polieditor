<body class="fixed-sn mdb-skin">
  <!--Double navigation-->
    <!-- Sidebar navigation -->
    <ul class="side-nav fixed custom-scrollbar">
      <!-- Logo -->
      <li>
        <div class="logo-wrapper sn-ad-avatar-wrapper">
          <img src="<?php echo base_url('asset/img/images.png') ?>" class="rounded-circle">
          <div class="rgba-stylish-strong">
            <p class="user white-text">Dosen<br><?= $this->session->userdata('username'); ?></p>
          </div>
        </div>
      </li>
      <!--/. Logo -->
      <!-- Side navigation links -->
      <li>
        <br>
        <ul class="collapsible collapsible-accordion">
          <li><a href="<?= base_url('dosen') ?>" class="waves-effect">Data Kelas</a></li>
        </ul>
      </li>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
            <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
              <a class="dropdown-item" href="#">Akun Saya</a>
              <a class="dropdown-item" href="<?= base_url('Dosen/logout') ?>">Logout</a>
            </div>
          </li>
        </ul>

      </nav>
      <!--/.Navbar-->
    <!--/Double navigation-->
