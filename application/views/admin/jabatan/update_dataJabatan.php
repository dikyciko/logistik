<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
	<div class="card-body">
		<?php foreach ($jabatan as $j): ?>
		<form method="POST" action="<?php echo base_url('admin/data_jabatan/update_data_aksi')?>">
			
			<div class="form-group">
				<label>Nama Jabatan</label>
				<input type="hidden" name="id_jabatan" class="form-control" value="<?php echo $j->id_jabatan?>">
				<input type="text" name="nama_jabatan" class="form-control" value="<?php echo $j->nama_jabatan?>">
				<?php echo form_error('nama_jabatan', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Sertifikasi</label>
				<input type="number" name="sertifikasi" class="form-control" value="<?php echo $j->sertifikasi?>">
				<?php echo form_error('sertifikasi', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Welfare</label>
				<input type="number" name="welfare" class="form-control" value="<?php echo $j->welfare?>">
				<?php echo form_error('welfare', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Expensive</label>
				<input type="number" name="expensive" class="form-control" value="<?php echo $j->expensive?>">
				<?php echo form_error('expensive', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Provesion</label>
				<input type="number" name="provesion" class="form-control" value="<?php echo $j->provesion?>">
				<?php echo form_error('provesion', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Ops</label>
				<input type="number" name="ops" class="form-control" value="<?php echo $j->ops?>">
				<?php echo form_error('ops', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Pass</label>
				<input type="number" name="pass" class="form-control" value="<?php echo $j->pass?>">
				<?php echo form_error('pass', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Tunjangan Khusus Patrol</label>
				<input type="number" name="tunjangan" class="form-control" value="<?php echo $j->tunjangan?>">
				<?php echo form_error('tunjangan', '<div class="text-small text-danger"> </div>')?>
			</div>

			<button type="submit" class="btn btn-success" >Simpan</button>
			<a href="<?php echo base_url('admin/data_jabatan')?>" class="btn btn-warning">Kembali</a>

		</form>
	<?php endforeach; ?>
	</div>
</div>