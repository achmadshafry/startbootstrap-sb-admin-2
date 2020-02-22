<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laporan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="img/logo-jateng.png" width="40" height="40" class="d-inline-block align-top" alt="">
        <div class="sidebar-brand-text mx-3">Admin PPID</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="fas fa-clipboard-list"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            Components
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-file"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Home PPID</h6>
                <a class="collapse-item active" href="edit-laporan.php">Laporan</a>
                <a class="collapse-item" href="edit-berita.php">Berita</a>
                </div>
            </div>
            </li>

            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tables-menu" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-table"></i>
                <span>Tables</span>
            </a>
            <div id="tables-menu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="table-view-permohonan.php">Tabel Permohonan</a>
                <a class="collapse-item" href="table-view-pengaduan.php">Tabel Pengaduan</a>
                <a class="collapse-item" href="table-view-contact.php">Tabel Contact</a>
                </div>
            </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-dark" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                        </div>
                    </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                                </div>
                            </form>
                            </div>
                        </li>

                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <h2 class="post-title text-center">Informasi Berkala</h2>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        <hr>
                        <div class="post-preview ">
                            <a href="https://inspektorat.jatengprov.go.id/17/pages/keuangan-2019">
                                <h2 class="font-weight-bold text-dark">
                                    Keuangan
                                </h2>
                                <h3 class="font-weight-light text-dark">
                                    Laporan Keuangan di Inspektorat Provinsi Jawa Tengah tahun 2019
                                </h3>
                            </a>
                            <div class="text-right">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                        <hr>
                        <div class="post-preview">
                            <a href="https://inspektorat.jatengprov.go.id/17/pages/kegiatan-2019">
                                <h2 class="font-weight-bold text-dark">
                                    Program Kegiatan
                                </h2>
                                <h3 class="font-weight-light text-dark">
                                    Laporan Kegiatan di Inspektorat Provinsi Jawa Tengah tahun 2019
                                </h3>
                            </a>
                            <div class="text-right">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                        <hr>
                        <div class="post-preview">
                            <a href="https://inspektorat.jatengprov.go.id/17/pages/kinerja-2019">
                                <h2 class="font-weight-bold text-dark">
                                    Laporan Kinerja
                                </h2>
                                <h3 class="font-weight-light text-dark">
                                    Laporan Kinerja di Inspektorat Provinsi Jawa Tengah tahun 2019
                                </h3>
                            </a>
                            <div class="text-right">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                        <hr>
                        <div class="post-preview">
                            <a href="https://inspektorat.jatengprov.go.id/17/pages/pengumuman-pengadaan-barang-jasa">
                                <h2 class="font-weight-bold text-dark">
                                    Pengadaan Barang
                                </h2>
                                <h3 class="font-weight-light text-dark">
                                    Pengumuman pengadaan barang/jasa di Inspektorat Provinsi Jawa Tengah
                                </h3>
                            </a>
                            <div class="text-right">
                                <button type="submit" class="btn btn-warning">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of content wrapper -->
    </div>
    <!-- end of page wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>