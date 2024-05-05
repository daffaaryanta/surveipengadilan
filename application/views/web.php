<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url()  ?>assets/img/logo/logo.png">
    <title>Survei Kepuasan Masyarakat</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/web.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!-- javascript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="header">
                <hr id="hr-top" />
                <h1 id="survei-text">Survei Harian Kepuasan Masyarakat</h1>
                <h1 id="pn-text">Pengadilan Negeri Banjarmasin</h1>
                <hr id="hr-under" />
            </div>
        </div>
        <!-- end of header -->
        <div class="row justify-content-center konten">
            <!-- card pidana -->
            <a data-toggle="modal" data-target="#modalPidana" href="#" class="viewContact">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div id="card-pidana" class="thumbnail">
                        <img class="logo-card" src="<?php echo base_url() ?>assets/img/logo/courtlogo3.png" alt="">
                        <div class="caption">
                            <br>
                            <h4 class="card-txt">Pidana</h4>
                        </div>
                    </div>
                </div>
            </a>

            <!-- card hukum -->
            <a data-toggle="modal" data-target="#modalHukum" href="#" class="viewContact">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div id="card-hukum" class="thumbnail">
                        <img class="logo-card" src="<?php echo base_url() ?>assets/img/logo/courtlogo3.png" alt="">
                        <div class="caption">
                            <br />
                            <h4 class="card-txt">Hukum</h4>
                        </div>
                    </div>
                </div>
            </a>

            <!-- card umum -->
            <a data-toggle="modal" data-target="#modalUmum" href="#" class="viewContact">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div id="card-umum" class="thumbnail">
                        <img class="logo-card" src="<?php echo base_url() ?>assets/img/logo/courtlogo3.png" alt="">
                        <div class="caption">
                            <h4 class="card-txt">Umum & Keuangan</h4>
                        </div>
                    </div>
                </div>
            </a>

            <!-- card perdata -->
            <a data-toggle="modal" data-target="#modalPerdata" href="#" class="viewContact">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div id="card-perdata" class="thumbnail">
                        <img class="logo-card" src="<?php echo base_url() ?>assets/img/logo/courtlogo3.png" alt="">
                        <div class="caption">
                            <br />
                            <h4 class="card-txt">Perdata</h4>
                        </div>
                    </div>
                </div>
            </a>

            <!-- card tipikor -->
            <a data-toggle="modal" data-target="#modalTipikor" href="#" class="viewContact">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div id="card-tipikor" class="thumbnail">
                        <img class="logo-card" src="<?php echo base_url() ?>assets/img/logo/courtlogo3.png" alt="">
                        <div class="caption">
                            <br />
                            <h4 class="card-txt">Tipikor</h4>
                        </div>
                    </div>
                </div>
            </a>

            <!-- card phi -->
            <a data-toggle="modal" data-target="#modalPHI" href="#" class="viewContact">
                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div id="card-phi" class="thumbnail">
                        <img class="logo-card" src="<?php echo base_url() ?>assets/img/logo/courtlogo3.png" alt="">
                        <div class="caption">
                            <br />
                            <h4 class="card-txt">PHI</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- end of cards -->

    <!-- start of modals -->

    <!-- modal pidana -->
    <div class="modal fade" id="modalPidana" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- modal header section -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/prosesmodal/simpan_responden' ?>">
                    <!-- modal body section -->
                    <div class="modal-body">
                        <!-- id_bagian section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Bagian</label>
                            <div class="col-xs-8">
                                <input name="id_bagian" class="form-control" type="text" placeholder="" value="1" required readonly="">
                            </div>
                        </div>
                        <!-- nama input section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama_responden" class="form-control cap" type="text" placeholder="Nama anda..." required>
                            </div>
                        </div>
                        <!-- umur input section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input name="umur_responden" class="form-control" type="number" min="10" max="100" placeholder="Umur anda..." required>
                            </div>
                        </div>
                        <!-- jk input section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <!-- pekerjaan input section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Pekerjaan</label>
                            <div class="col-xs-8">
                                <select name="pekerjaan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Pegawai/Swasta">Pegawai/Swasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>
                        <!-- pendidikan input section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Pendidikan Terakhir</label>
                            <div class="col-xs-8">
                                <select name="pendidikan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <!-- kepuasan input section -->
                        <div class="form-group">
                            <label class="control-label col-xs-3">Tingkat Kepuasan</label>
                            <div class="col-xs-8">
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Tidak Puas"><img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br />
                                    &nbsp;
                                    <b>Tidak puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Cukup Puas"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br />
                                    &nbsp;
                                    <b>Cukup puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Sangat Puas"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br />
                                    &nbsp;
                                    <b>Sangat puas</b></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal hukum -->
    <div class="modal fade" id="modalHukum" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/prosesmodal/simpan_responden' ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Bagian</label>
                            <div class="col-xs-8">
                                <input name="id_bagian" class="form-control" type="text" placeholder="" value="2" required readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama_responden" class="form-control cap" type="text" placeholder="Nama anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input name="umur_responden" class="form-control" type="number" min="10" max="100" placeholder="Umur anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pekerjaan</label>
                            <div class="col-xs-8">
                                <select name="pekerjaan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Pegawai/Swasta">Pegawai/Swasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pendidikan Terakhir</label>
                            <div class="col-xs-8">
                                <select name="pendidikan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Tingkat Kepuasan</label>
                            <div class="col-xs-8">
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Tidak Puas"><img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br />
                                    &nbsp;
                                    <b>Tidak puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Cukup Puas"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br />
                                    &nbsp;
                                    <b>Cukup puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Sangat Puas" style="background-color: #FFF; border:none;"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br />
                                    &nbsp;
                                    <b>Sangat puas</b></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal pidana -->
    <div class="modal fade" id="modalUmum" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/prosesmodal/simpan_responden' ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Bagian</label>
                            <div class="col-xs-8">
                                <input name="id_bagian" class="form-control" type="text" placeholder="" value="3" required readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama_responden" class="form-control cap" type="text" placeholder="Nama anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input name="umur_responden" class="form-control" type="number" min="10" max="100" placeholder="Umur anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pekerjaan</label>
                            <div class="col-xs-8">
                                <select name="pekerjaan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Pegawai/Swasta">Pegawai/Swasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pendidikan Terakhir</label>
                            <div class="col-xs-8">
                                <select name="pendidikan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Tingkat Kepuasan</label>
                            <div class="col-xs-8">
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Tidak Puas"><img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br />
                                    &nbsp;
                                    <b>Tidak puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Cukup Puas"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br />
                                    &nbsp;
                                    <b>Cukup puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Sangat Puas"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br />
                                    &nbsp;
                                    <b>Sangat puas</b></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal perdata -->
    <div class="modal fade" id="modalPerdata" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/prosesmodal/simpan_responden' ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Bagian</label>
                            <div class="col-xs-8">
                                <input name="id_bagian" class="form-control" type="text" placeholder="" value="4" required readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama_responden" class="form-control cap" type="text" placeholder="Nama anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input name="umur_responden" class="form-control" type="number" min="10" max="100" placeholder="Umur anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pekerjaan</label>
                            <div class="col-xs-8">
                                <select name="pekerjaan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Pegawai/Swasta">Pegawai/Swasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pendidikan Terakhir</label>
                            <div class="col-xs-8">
                                <select name="pendidikan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Tingkat Kepuasan</label>
                            <div class="col-xs-8">
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Tidak Puas"><img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br />
                                    &nbsp;
                                    <b>Tidak puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Cukup Puas"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br />
                                    &nbsp;
                                    <b>Cukup puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Sangat Puas"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br />
                                    &nbsp;
                                    <b>Sangat puas</b></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal tipikor -->
    <div class="modal fade" id="modalTipikor" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/prosesmodal/simpan_responden' ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Bagian</label>
                            <div class="col-xs-8">
                                <input name="id_bagian" class="form-control" type="text" placeholder="" value="5" required readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama_responden" class="form-control cap" type="text" placeholder="Nama anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input name="umur_responden" class="form-control" type="number" min="10" max="100" placeholder="Umur anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pekerjaan</label>
                            <div class="col-xs-8">
                                <select name="pekerjaan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Pegawai/Swasta">Pegawai/Swasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pendidikan Terakhir</label>
                            <div class="col-xs-8">
                                <select name="pendidikan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Tingkat Kepuasan</label>
                            <div class="col-xs-8">
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Tidak Puas"><img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br />
                                    &nbsp;
                                    <b>Tidak puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Cukup Puas"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br />
                                    &nbsp;
                                    <b>Cukup puas</b></button>

                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Sangat Puas"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br />
                                    &nbsp;
                                    <b>Sangat puas</b></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal phi -->
    <div class="modal fade" id="modalPHI" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Isi data diri anda:</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/prosesmodal/simpan_responden' ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Bagian</label>
                            <div class="col-xs-8">
                                <input name="id_bagian" class="form-control" type="text" placeholder="" value="6" required readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama_responden" class="form-control cap" type="text" placeholder="Nama anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input name="umur_responden" class="form-control" type="number" min="10" max="100" placeholder="Umur anda..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pekerjaan</label>
                            <div class="col-xs-8">
                                <select name="pekerjaan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Pegawai/Swasta">Pegawai/Swasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Wiraswasta/Usahawan">Wiraswasta/Usahawan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Pendidikan Terakhir</label>
                            <div class="col-xs-8">
                                <select name="pendidikan_responden" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Tingkat Kepuasan</label>
                            <div class="col-xs-8">
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Tidak Puas"><img src="<?php echo base_url() ?>assets/img/tidak_puas.png"><br />
                                    &nbsp;
                                    <b>Tidak puas</b>
                                </button>
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Cukup Puas"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png"><br />
                                    &nbsp;
                                    <b>Cukup puas</b>
                                </button>
                                <button class="btn-tingkat" name="tingkat_kepuasan" value="Sangat Puas"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png"><br />
                                    &nbsp;
                                    <b>Sangat puas</b>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--end of modals-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>