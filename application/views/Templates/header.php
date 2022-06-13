<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="<?= base_url('assets/img/icons/icon-48x48.png'); ?>" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/" />

  <title><?= $Title; ?><?= $SubTitle; ?></title>

  <link href="<?= base_url('assets/css/app.css'); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
          <span class="align-middle">Rafhely</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">
            Home
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= site_url('Home'); ?>">
              <i class="fas fa-fw fa-tachometer-alt align-middle"></i> <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item ">
            <div class="btn-group">
              <button type="button" style="background-color:#222E3C;border:1px solid #222E3C;" class="dropdown-toggle dropdown-toggle-split sidebar-link" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-fw fa-futbol align-middle ms-1"></i> <span class="align-middle me-2">Lapangan</span>
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark ">
                <li><a class="dropdown-item" href="<?= site_url('Lapangan'); ?>"><i class="fas fa-fw fa-info-circle"></i> Detail Lapangan</a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar-item">
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Pembayaran</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sewa</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
          </li>

          <li class="sidebar-header">
            Tools & Components
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
          </li>

          <li class="sidebar-header">
            Plugins & Addons
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
          </li>
        </ul>

        <div class="sidebar-cta">
          <div class="sidebar-cta-content">
            <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
            <div class="mb-3 text-sm">
              Are you looking for more components? Check out our premium version.
            </div>
            <div class="d-grid">
              <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>
              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="<?= base_url('assets/img/photos/') . $user['gambar']; ?>" class="avatar img-fluid rounded  me-1" alt="<?= $user['gambar']; ?>" /> <span class="text-dark">Hi,<?= $user['nama_lengkap']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= site_url('Login/Logout'); ?>">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>