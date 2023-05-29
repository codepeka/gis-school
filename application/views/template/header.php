<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> - Tracking Zonasi Sekolah</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dataTables/css/dataTables.bootstrap4.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">

    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/popper.js"></script>
    <script src="<?= base_url(); ?>assets/modules/tooltip.js"></script>
    <script src="<?= base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/modules/moment.min.js"></script> -->
    <script src="<?= base_url(); ?>assets/js/stisla.js"></script>
    <script src="<?= base_url(); ?>assets/dataTables/js/jquery.dataTables.js"></script>
    <script src="<?= base_url(); ?>assets/dataTables/js/dataTables.bootstrap4.min.js"></script>
    <!-- <link href="<?= base_url(); ?>assets/select2/select2.min.css" rel="stylesheet" /> -->

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
    <script src="<?= base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="index.html" class="navbar-brand sidebar-gone-hide">ZONEMA</a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars" style="margin-top: 21px"></i></a>
                <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="<?= site_url('blog') ?>" class="nav-link">Blog</a></li>
                    </ul>
                </div>
                <form class="form-inline mx-auto" method="get" action="<?= site_url('search') ?>">
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <div class="input-group">
                            <input class="form-control" type="text" name="latitude" id="latitude" value="<?= $this->input->get('latitude') ?>" placeholder="Lintang" data-width="200">
                            <input class="form-control" type="text" name="longitude" id="longitude" value="<?= $this->input->get('longitude') ?>" placeholder="Bujur" data-width="200">
                            <button class="btn" type="submit" style="margin-top: 1px; height: 44px;"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <?php if (!$this->session->userdata('openedThisApps')) { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="<?= site_url('auth') ?>" class="nav-link">Sign In</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="<?= base_url() ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata('name'); ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                                <a href="<?= site_url('auth/profile') ?>" class="dropdown-item has-icon">
                                    <i class="far fa-user"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?= site_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= site_url('home'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <!-- <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-item <?= ($title == 'Data Sekolah') ? 'active' : ''; ?>">
                            <a href="<?= site_url('sekolah') ?>" class="nav-link"><i class="far fa-building"></i><span>Sekolah</span></a>
                        </li>
                        <!-- Kondisi jika sudah login -->
                        <?php if ($this->session->userdata('openedThisApps')) : ?>
                            <li class="nav-item dropdown <?= ($title == 'Data Pengguna Apps' || $title == 'Data Riwayat') ? 'active' : ''; ?>">
                                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Menu Lain</span></a>
                                <ul class="dropdown-menu">
                                    <?php if ($this->session->userdata('hak') == 'superadmin') : ?>
                                        <li class="nav-item <?= ($title == 'Data Pengguna Apps') ? 'active' : ''; ?>"><a href="<?= site_url('user'); ?>" class="nav-link">Pengguna</a></li>
                                    <?php endif; ?>
                                    <li class="nav-item <?= ($title == 'Data Riwayat') ? 'active' : ''; ?>"><a href="<?= site_url('riwayat'); ?>" class="nav-link">Riwayat</a></li>
                                    <li class="nav-item <?= ($title == 'Data Blog') ? 'active' : ''; ?>"><a href="<?= site_url('daftarblog'); ?>" class="nav-link">Daftar Blog</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content">