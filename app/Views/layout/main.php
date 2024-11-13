<?php 
    $session = session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siDORA | Petugas</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url("img/logo.png") ?>">
    <!-- Link CSS -->
    <link href="<?= base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('css/-.6l56sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>
<body>
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("petugas/dashboard") ?>">
        
        <div class="sidebar-brand-text mx-3">siDORA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  <?= (current_url() == base_url('petugas/dashboard')) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('petugas/dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Charts -->
    <li class="nav-item <?= (current_url() == base_url('petugas/data_pendonor')) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('petugas/data_pendonor')?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Pendonor</span></a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('petugas/cek_darah')?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Cek Darah</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <li class="nav-item <?= (current_url() == base_url('petugas/laporan_pendonor')) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('petugas/laporan_pendonor')?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan Pendonor</span></a>
    </li>

   

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <h4>Halo <b><?= $session->get("username")?></b>!</h4>
            

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $session->get("username") ?></span>
                        <img class="img-profile rounded-circle"
                            src="<?= base_url("img/undraw_profile.svg") ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        
                        <a class="dropdown-item" href="<?= base_url("logout") ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- Konten halaman -->
        <?= $this->renderSection('content'); ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2024</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if (session()->getFlashdata('success')): ?>
            <script>
                Swal.fire({
                    title: 'Berhasil!',
                    text: '<?= session()->getFlashdata('success') ?>',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            </script>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <script>
                Swal.fire({
                    title: 'Gagal!',
                    text: '<?= session()->getFlashdata('error') ?>',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>
        <?php endif; ?>
    
    <script>
        console.log(<?= base_url('vendor/jquery/jquery.min.js'); ?>)
    </script>
        <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('js/demo/chart-pie-demo.js'); ?>"></script>

</body>
</html>
