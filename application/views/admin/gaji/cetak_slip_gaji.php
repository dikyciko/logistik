<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<h1>PT. BAGUS BERJAYA</h1>
		<h2>Daftar Gaji Pegawai</h2>
		<hr style="width: 50%; border-width: 5px; color: black">
	</center>

	<?php foreach($potongan as $p) {
	$potongan=$p->jml_potongan;
	} ?>
		

	<?php foreach($print_slip as $ps) : ?>

	<?php $potongan_gaji=$ps->alpha * $potongan; ?>

	<table style="width: 100%">
		<tr>
			<td width="20%">Nama Pegawai</td>
			<td width="2%">:</td>
			<td><?php echo $ps->nama_pegawai?></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><?php echo $ps->nik?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><?php echo $ps->nama_jabatan?></td>
		</tr>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 0,2) ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 2,4) ?></td>
		</tr>
	</table>

	<table class="table table-striped table-bordered mt-3">
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" >Keterangan</th>
			<th class="text-center" >Jumlah</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Sertifikasi</td>
			<td>Rp. <?php echo number_format($ps->sertifikasi,0,',','.') ?></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Welfare</td>
			<td>Rp. <?php echo number_format($ps->welfare,0,',','.') ?></td>
		</tr>

		<tr>
			<td>3</td>
			<td>Expensive</td>
			<td>Rp. <?php echo number_format($ps->expensive,0,',','.') ?></td>
		</tr>

		<tr>
			<td>4</td>
			<td>Provesion</td>
			<td>Rp. <?php echo number_format($provesion,0,',','.') ?></td>
		</tr>

		<tr>
			<td>5</td>
			<td>Ops</td>
			<td>Rp. <?php echo number_format($ops,0,',','.') ?></td>
		</tr>

		<tr>
			<td>6</td>
			<td>Pass</td>
			<td>Rp. <?php echo number_format($pass,0,',','.') ?></td>
		</tr>

		<tr>
			<td>6</td>
			<td>Tunjangan Khusus Patrol</td>
			<td>Rp. <?php echo number_format($tunjangan,0,',','.') ?></td>
		</tr>

		<tr>
			<th colspan="2" style="text-align: right;">Total Gaji : </th>
			<th>Rp. <?php echo number_format($ps->sertifikasi+$ps->welfare+$ps->expensive+$ps->provesion+$ps->ops+$->pass+$tujangan,0,',','.') ?></th>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td></td>
			<td>
				<p>Pegawai</p>
				<br>
				<br>
				<p class="font-weight-bold"><?php echo $ps->nama_pegawai?></p>
			</td>

			<td width="200px">
				<p>, <?php echo date("d M Y")?> <br> Finance,</p>
				<br>
				<br>
				<p>___________________</p>
			</td>
		</tr>
	</table>

	<?php endforeach ;?>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>