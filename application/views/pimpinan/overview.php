<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url()  ?>assets/img/logo/logo.png">
    <title>SKPM</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- link main.css -->
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url() ?>assets/img/logo/logo.png" style="width:55px; height:70px;">
                </div>
                <div class="sidebar-brand-text mx-3">SURVEI</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()  ?>pimpinan/overview">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()  ?>con_pidana/pimpinan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pidana</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>con_hukum/pimpinan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Hukum</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()  ?>con_umum/pimpinan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Umum dan Keuangan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()  ?>con_perdata/pimpinan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Perdata</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()  ?>con_tipikor/pimpinan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tipikor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()  ?>con_phi/pimpinan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>PHI</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider py-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>auth/logout" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log Out</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-white bg-white topbar mb-4 static-top shadow justify-content-between">
                    <h3><?= $SKPM ?></h3>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Selamat datang, <?php
                                                    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                                                    echo $data['user']['nama_user'];
                                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('auth/logout')  ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- End of Sidebar -->
                <div class=" container-fluid">
                    <div class="jumbotron pt-2">
                        <h1 class="display-5 text-dark-primary">Selamat Datang</h1>

                        <p class="lead text-dark-primary">Pada Survei Kepuasan Masyarakat Harian Pengadilan Negeri Banjarmasin Kelas I A</p>
                        <hr class="my-3">

                        <div class="row">
                            <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/cover1.png">
                        </div>
                    </div>

                    <div class="container p-0">
                        <div class="row row-flex justify-content-start mr-0">
                            <!-- Pie Chart -->
                            <div class="col-xl-6 col-lg-6">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <!-- Bootstrap core JavaScript-->
                                    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
                                    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

                                    <!-- Core plugin JavaScript-->
                                    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

                                    <!-- Custom scripts for all pages-->
                                    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

                                    <!-- Page level plugins -->
                                    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
                                    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

                                    <!-- Page level custom scripts -->
                                    <script src="<?php echo base_url('assets/jsdemo/datatables-demo.js') ?>"></script>
                                    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
                                    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

                                    <div class="card-body">
                                        <div class="h4 text-center text-dark">
                                            Grafik Tingkat Kepuasan Layanan
                                        </div>
                                        <hr />
                                        <div class="chart-pie">
                                            <canvas id="grafik"></canvas>
                                        </div>
                                        <hr />
                                        <div class="mt-3 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle" style="color:#d62323;"></i> Tidak Puas : <?php echo ($TP) ?>
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle" style="color:#ecc30b;"></i> Cukup Puas : <?php echo ($CP) ?>
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle" style="color:#0bac4e;"></i> Sangat Puas : <?php echo ($SP) ?>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <script>
                                // Set new default font family and font color to mimic Bootstrap's default styling
                                Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                                Chart.defaults.global.defaultFontColor = '#858796';

                                // Pie Chart Example
                                var ctx = document.getElementById("grafik");
                                var myPieChart = new Chart(ctx, {
                                    type: 'doughnut',
                                    data: {
                                        labels: ["Sangat Puas", "Cukup Puas", "Tidak Puas"],
                                        datasets: [{
                                            data: [<?php echo ($SP) ?>, <?php echo ($CP) ?>, <?php echo ($TP) ?>],
                                            backgroundColor: ['#0bac4e', '#ecc30b', '#d62323'],
                                            hoverBackgroundColor: ['#086d32', '#977d09', '#941a1a'],
                                            hoverBorderColor: "rgba(234, 236, 244, 1)",
                                        }],
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        tooltips: {
                                            backgroundColor: "rgb(255,255,255)",
                                            bodyFontColor: "#858796",
                                            borderColor: '#dddfeb',
                                            borderWidth: 1,
                                            xPadding: 15,
                                            yPadding: 15,
                                            displayColors: false,
                                            caretPadding: 10,
                                        },
                                        legend: {
                                            display: false
                                        },
                                        cutoutPercentage: 80,
                                    },
                                });
                            </script>

                            <div class="card shadow mb-4 col-xl-6 col-lg-6">
                                <div class="h4 text-center text-dark pt-3">
                                    Indeks Kepuasan Masyarakat
                                </div>
                                <hr />
                                <div class="card-body font-weight-normal text-dark text-center mt-4 mb-4 pb-4" style="font-size: 120px;">
                                    <?php echo round((($TOTAL_VALUE) / ($TOTAL_MAX)) * 100, 2) ?>
                                </div>
                                <hr />
                                <div class="mb-3">
                                    &nbsp; <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- table -->
                    <div>
                        <div class="card shadow mb-4">
                            <div class="h4 text-center text-dark pt-4">
                                Nama Layanan : Masyarakat Pencari Keadilan
                            </div>
                            <hr />
                            <div class="card-body text-dark pt-0 pb-0 mt-0 mb-0">
                                <div class="text-center mt-0 pt-0 pb-3"> Responden </div>
                                <div class="table-responsive">
                                    <table class="table text-dark">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Jumlah</th>
                                                <td>:</td>
                                                <td colspan="4"> <?php echo $TOTAL_RESPONDEN ?> orang</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jenis Kelamin</th>
                                                <td>:</td>
                                                <td>Laki-laki : <?php echo $JK_LK ?></td>
                                                <td colspan="3">Perempuan : <?php echo $JK_PR ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" rowspan="5" style="width:230px">Pekerjaan</th>
                                                <td rowspan="5" style="width:50px">:</td>
                                                <td style="width:210px">PNS/TNI/POLRI</td>
                                                <td style="width:60px">=</td>
                                                <td> <?php echo $K_NEGERI ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pegawai/Swasta</td>
                                                <td>=</td>
                                                <td> <?php echo $K_SWASTA ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pelajar/Mahasiswa</td>
                                                <td>=</td>
                                                <td> <?php echo $K_PELAJAR ?></td>
                                            </tr>
                                            <tr>
                                                <td>Wiraswasta/Usahawan</td>
                                                <td>=</td>
                                                <td> <?php echo $K_USAHAWAN ?></td>
                                            </tr>
                                            <tr>
                                                <td>Lain-lain</td>
                                                <td>=</td>
                                                <td> <?php echo $K_LAIN ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" rowspan="7">Pendidikan</th>
                                                <td rowspan="7">:</td>
                                                <td>SD/Sederajat</td>
                                                <td>=</td>
                                                <td><?php echo $P_SD ?></td>
                                            </tr>
                                            <tr>
                                                <td>SMP/Sederajat</td>
                                                <td>=</td>
                                                <td><?php echo $P_SMP ?></td>
                                            </tr>
                                            <tr>
                                                <td>SMA/Sederajat</td>
                                                <td>=</td>
                                                <td><?php echo $P_SMA ?></td>
                                            </tr>
                                            <tr>
                                                <td>D3</td>
                                                <td>=</td>
                                                <td><?php echo $P_D_TIGA ?></td>
                                            </tr>
                                            <tr>
                                                <td>S1</td>
                                                <td>=</td>
                                                <td><?php echo $P_S_SATU ?></td>
                                            </tr>
                                            <tr>
                                                <td>S2</td>
                                                <td>=</td>
                                                <td><?php echo $P_S_DUA ?></td>
                                            </tr>
                                            <tr>
                                                <td>S3</td>
                                                <td>=</td>
                                                <td><?php echo $P_S_TIGA ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Pengadilan Negeri Banjarmasin 2020</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('auth/logout')  ?> ">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>