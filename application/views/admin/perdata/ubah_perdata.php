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
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url()  ?>admin/overview">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Profile</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>con_pidana/admin">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pidana</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url()  ?>con_hukum/admin">
          <i class="fas fa-fw fa-folder"></i>
          <span>Hukum</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>con_umum/admin">
          <i class="fas fa-fw fa-folder"></i>
          <span>Umum dan Keuangan</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()  ?>con_perdata/admin">
          <i class="fas fa-fw fa-folder"></i>
          <span>Perdata</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>con_tipikor/admin">
          <i class="fas fa-fw fa-folder"></i>
          <span>Tipikor</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()  ?>con_phi/admin">
          <i class="fas fa-fw fa-folder"></i>
          <span>PHI</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider py-0">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>con_user">
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
            <h1 class="h3 mb-2 text-gray-800">Ubah Data Responden</h1>
          </div>
          <br /><br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
          </div>

          <div class="card-body">
            <form action="<?= base_url('con_perdata/proses_ubah/' . $perdata->id_responden) ?>" id="form-tambah" method="POST">

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="hidden" name="id_responden" placeholder="ID_Responden" autocomplete="off" class="form-control" required value="<?= $perdata->id_responden ?>">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="id_bagian"><strong>Bagian</strong></label>
                  <select name="id_bagian" id="id_bagian" class="form-control" required>
                    <option value="">-- Silahkan Pilih --</option>
                    <option value="1" <?= $perdata->id_bagian == '1' ? 'selected' : '' ?>>Pidana</option>
                    <option value="2" <?= $perdata->id_bagian == '2' ? 'selected' : '' ?>>Hukum</option>
                    <option value="3" <?= $perdata->id_bagian == '3' ? 'selected' : '' ?>>Umum & Keuangan</option>
                    <option value="4" <?= $perdata->id_bagian == '4' ? 'selected' : '' ?>>Perdata</option>
                    <option value="5" <?= $perdata->id_bagian == '5' ? 'selected' : '' ?>>Tipikor</option>
                    <option value="6" <?= $perdata->id_bagian == '6' ? 'selected' : '' ?>>PHI</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="nama_responden"><strong>Nama Responden</strong></label>
                  <input type="text" name="nama_responden" placeholder="Masukkan Nama Responden" autocomplete="off" class="form-control" required value="<?= $perdata->nama_responden ?>">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="umur_responden"><strong>Umur</strong></label>
                  <input type="number" min="0" max="100" name="umur_responden" placeholder="Masukkan Umur" autocomplete="off" class="form-control" required value="<?= $perdata->umur_responden ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">-- Silahkan Pilih --</option>
                    <option value="Laki-laki" <?= $perdata->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $perdata->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="pekerjaan_responden"><strong>Pekerjaan</strong></label>
                  <select name="pekerjaan_responden" id="pekerjaan_responden" class="form-control" required>
                    <option value="">-- Silahkan Pilih --</option>
                    <option value="PNS/TNI/POLRI" <?= $perdata->pekerjaan_responden == 'PNS/TNI/POLRI' ? 'selected' : '' ?>>PNS/TNI/POLRI</option>
                    <option value="Pegawai/Swasta" <?= $perdata->pekerjaan_responden == 'Pegawai/Swasta' ? 'selected' : '' ?>>Pegawai/Swasta</option>
                    <option value="Pelajar/Mahasiswa" <?= $perdata->pekerjaan_responden == 'Pelajar/Mahasiswa' ? 'selected' : '' ?>>Pelajar/Mahasiswa</option>
                    <option value="Wiraswasta/Usahawan" <?= $perdata->pekerjaan_responden == 'Wiraswasta/Usahawan' ? 'selected' : '' ?>>Wiraswasta/Usahawan</option>
                    <option value="Lain-lain" <?= $perdata->pekerjaan_responden == 'Lain-lain' ? 'selected' : '' ?>>Lain-lain</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="pendidikan_responden"><strong>Pendidikan</strong></label>
                  <select name="pendidikan_responden" id="pendidikan_responden" class="form-control" required>
                    <option value="">-- Silahkan Pilih --</option>
                    <option value="SD/Sederajat" <?= $perdata->pendidikan_responden == 'SD/Sederajat' ? 'selected' : '' ?>>SD/Sederajat</option>
                    <option value="SMP/Sederajat" <?= $perdata->pendidikan_responden == 'SMP/Sederajat' ? 'selected' : '' ?>>SMP/Sederajat</option>
                    <option value="SMA/Sederajat" <?= $perdata->pendidikan_responden == 'SMA/Sederajat' ? 'selected' : '' ?>>SMA/Sederajat</option>
                    <option value="D3" <?= $perdata->pendidikan_responden == 'D3' ? 'selected' : '' ?>>D3</option>
                    <option value="S1" <?= $perdata->pendidikan_responden == 'S1' ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?= $perdata->pendidikan_responden == 'S2' ? 'selected' : '' ?>>S2</option>
                    <option value="S3" <?= $perdata->pendidikan_responden == 'S3' ? 'selected' : '' ?>>S3</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="tingkat_kepuasan"><strong>Kepuasan</strong></label>
                  <input type="text" name="tingkat_kepuasan" id="tingkat_kepuasan" class="form-control" value="<?= $perdata->tingkat_kepuasan ?>" required readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="waktu_input"><strong>Waktu</strong></label>
                  <input type="date" name="waktu_input" placeholder="Masukkan Waktu" autocomplete="off" class="form-control" required value="<?= $perdata->waktu_input ?>">
                </div>
              </div>

              <hr>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                <button type="reset" class="btn"><a href="<?= base_url('con_perdata/admin') ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
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