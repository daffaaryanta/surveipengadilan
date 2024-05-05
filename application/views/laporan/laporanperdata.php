<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="<?php echo base_url() ?>assets/cetak/bootstrap.min.css" rel="stylesheet">
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
		.table.table-bordered{
			border:1px solid black;
		}

		.table.table-bordered > thead > tr > th {
			border:1px solid black;
		}
		.table.table-bordered > tbody > tr > td{
			border:1px solid black;
		}
	</style>
</head>
<body>
	<table style="width: 100%;">
		<tr>
			
				<td align="center">
				<img src="<?php echo base_url() ?>assets/img/logo/logo.png" style="position: absolute; width: 120px; height: auto;">
				<span style="line-height: 1.6; font-weight: bold; font-size: 24px; align-content: center;">&nbsp;
				PENGADILAN NEGERI BANJARMASIN KELAS I A
				</span>
				<br>
				<span style="line-height: 1.6; font-weight: normal; font-size: 18px">
					Jl. Mayjend D.I Panjaitan No. 27 Banjarmasin Kalimantan Selatan
 					<br>Telp.0511-3352859  Fax. 0511-3353263
 					<br>Email: www.pn-banjarmasin.go.id
				</span>
			<br><br>
			</td>
		</tr>
	</table>

	<hr class="line-title">
	<p align="center" style="font-size: 18px;">
		Laporan Data Responden Perdata
	</p>

	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Responden</th>
										<th>Umur</th>
										<th>Jenis Kelamin</th>
										<th>Pekerjaan</th>
										<th>Pendidikan</th>
										<th>Kepuasan</th>
										<th>Waktu</th>
									</tr>
								</thead>
							</tbody>
							<?php foreach ($all_perdata as $perdata): ?>
								<tr>
											<td><?= $no++ ?></td>
											<td><?= $perdata->id_responden ?></td>
											<td><?= $perdata->nama_responden ?></td>
											<td><?= $perdata->umur_responden ?></td>
											<td><?= $perdata->jenis_kelamin ?></td>
											<td><?= $perdata->pekerjaan_responden ?></td>
											<td><?= $perdata->pendidikan_responden ?></td>
											<td><?= $perdata->tingkat_kepuasan ?></td>
											<td><?= date('d-m-Y H:i:s',strtotime($perdata->waktu_input)); ?></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>

						<p style="font-weight: bold;">
							Total Data: <?= $total_perdata ?>
						</p>	

						<p style="font-weight: bold; text-align: right;">
							Banjarmasin, <?php echo tanggal(); ?>
						</p>
						<br><br><br><br><br>
						<p style="font-weight: bold; text-align: right;">
							Sekretaris Pengadilan Negeri Banjarmasin
						</p>

</body>
</html>