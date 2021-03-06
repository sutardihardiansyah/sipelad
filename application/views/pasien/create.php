<div class="page-header page-header-light">
	<div class="page-header-content header-elements-md-inline">
		<div class="page-title d-flex">
			<h2><?= $title; ?></h2>
			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>

		<div class="header-elements d-none">
			<div class="d-flex justify-content-center">
				<a href="<?= base_url('pasien'); ?>" class="btn btn-sm btn-secondary">Kembali</a>
			</div>
		</div>
	</div>
</div>

<!-- Main Content -->
<section class="section">

	<div class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<form action="<?= base_url('pasien/store'); ?>" method="post">
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pasien</label>
								<div class="col-sm-12 col-md-6">
									<input type="text" class="form-control <?= form_error('nm_pasien') ? 'is-invalid' : ''; ?>" name="nm_pasien" value="<?= set_value('nm_pasien'); ?>">
									<div class="invalid-feedback">
										<?= form_error('nm_pasien'); ?>
									</div>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Keluarga</label>
								<div class="col-sm-12 col-md-6">
									<input type="text" class="form-control <?= form_error('nm_keluarga') ? 'is-invalid' : ''; ?>" name="nm_keluarga" value="<?= set_value('nm_keluarga'); ?>">
									<div class="invalid-feedback">
										<?= form_error('nm_keluarga'); ?>
									</div>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 pt-0">Jenis Kelamin</label>
								<div class="col-sm-8">
									<div class="form-check form-check-inline">
										<div class="form-check-label">
											<input class="form-check-input-styled" type="radio" name="jenis_kelamin" checked value="l"> Laki-laki
										</div>
									</div>
									<div class="form-check form-check-inline">
										<div class="form-check-label">
											<input class="form-check-input-styled" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="p">Perempuan
										</div>
									</div>
								</div>

							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
								<div class="col-sm-12 col-md-3">
									<input type="number" class="form-control <?= form_error('umur') ? 'is-invalid' : ''; ?>" name="umur" min="1" value="<?= set_value('umur'); ?>">
									<div class="invalid-feedback">
										<?= form_error('umur'); ?>
									</div>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
								<div class="col-sm-12 col-md-6">
									<textarea name="alamat" id="" cols="" rows="" class="form-control <?= form_error('alamat') ? 'is-invalid' : ''; ?>"><?= set_value('alamat'); ?></textarea>
									<div class="invalid-feedback">
										<?= form_error('alamat'); ?>
									</div>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
								<div class="col-sm-12 col-md-7">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
