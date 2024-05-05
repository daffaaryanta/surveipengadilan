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
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion toggled" id="accordionSidebar">

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
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/overview">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/con_pidana">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pidana</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/con_hukum">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Hukum</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/con_umum">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Umum dan Keuangan</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/con_perdata">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Perdata</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/con_tipikor">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tipikor</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url()  ?>admin/con_phi">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>PHI</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider py-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() ?>admin/con_user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
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
                    <h3>Survei Kepuasan Pelayanan Masyarakat</h3>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="float-left">
                        <h1 class="h3 mb-2 text-gray-800">Tambah Data User</h1>
                    </div>
                    <br /><br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('admin/con_user/proses_tambah/') ?>" id="form-tambah" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" name="id_user" placeholder="id_user" autocomplete="off" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_user"><strong>Nama</strong></label>
                                    <input type="text" name="nama_user" placeholder="Masukkan Nama" autocomplete="off" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="id_role"><strong>Role</strong></label>
                                    <select name="id_role" id="id_role" class="form-control" required>
                                        <option value="">-- Silahkan Pilih --</option>
                                        <option value="1">Pimpinan</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username"><strong>Username</strong></label>
                                    <input type="text" id="username" name="username" placeholder="Masukkan username" autocomplete="off" class="form-control form-control-user" required>

                                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password"><strong>Password</strong></label>
                                    <input type="password" name="password1" id="password1" placeholder="Masukkan Password" autocomplete="off" class="form-control form-control-user" required>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password"><strong>Konfirmasi Password</strong></label>
                                    <input type="password" name="password2" id="password2" placeholder="Masukkan Password" autocomplete="off" class="form-control" required>
                                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <input type="checkbox" id="checkboxRegister" onclick="showPasswordSignup()"><label for="checkboxRegister" class="show-pw">Tampilkan Password</label>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn"><a href="<?= base_url('admin/con_user') ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
                            </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->


            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
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

    <script>
        function showPasswordSignup() {
            if (password1.type === "password") {
                password1.type = "text";
                password2.type = "text";
            } else {
                password1.type = "password";
                password2.type = "password";
            }
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>