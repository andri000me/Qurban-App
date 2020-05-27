<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php

if ($sess['role'] == 1) {
  $url = "admin/changepassword";
} else if ($sess['role'] == 2) {
  $url = "operator/changepassword";
}

?>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-5.png'); ?>" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block"> <?php echo $sess['name'] ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= base_url($url) ?>" class="dropdown-item has-icon" id="changepassword">
                <i class="fas fa-cog"></i> Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url("auth/logout"); ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>