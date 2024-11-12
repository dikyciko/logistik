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
		<form method="POST" action="<?php echo base_url('admin/data_jabatan/tambah_data_aksi')?>">

			<div class="form-group">
				<label>Nama Jabatan</label>
				<input type="text" name="nama_jabatan" class="form-control">
				<?php echo form_error('nama_jabatan', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Sertifikasi</label>
				<input type="number" name="sertifikasi" class="form-control">
				<?php echo form_error('sertifikasi', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Welfare</label>
				<input type="number" name="welfare" class="form-control">
				<?php echo form_error('welfare', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Expensive</label>
				<input type="number" name="expensive" class="form-control">
				<?php echo form_error('expensive', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Provesion</label>
				<input type="number" name="provesion" class="form-control">
				<?php echo form_error('provesion', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Ops</label>
				<input type="number" name="ops" class="form-control">
				<?php echo form_error('ops', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Pass</label>
				<input type="number" name="pass" class="form-control">
				<?php echo form_error('pass', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Tunjangan Khusus Patrol</label>
				<input type="number" name="tunjangan" class="form-control">
				<?php echo form_error('tunjangan', '<div class="text-small text-danger"> </div>')?>
			</div>

			<button type="submit" class="btn btn-success" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
			<a href="<?php echo base_url('admin/data_jabatan')?>" class="btn btn-warning">Kembali</a>

		</form>
	</div>
</div>