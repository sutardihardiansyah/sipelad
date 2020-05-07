<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login &mdash; Sipelad</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= public_url(); ?>global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= public_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= public_url(); ?>assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?= public_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?= public_url(); ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?= public_url(); ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?= public_url(); ?>global_assets/js/main/jquery.min.js"></script>
	<script src="<?= public_url(); ?>global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?= public_url(); ?>global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= public_url(); ?>assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" method="POST" action="<?= base_url('auth'); ?>">
					<div class="card mb-0">
						<div class="card-body">

							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Enter your credentials below</span>
							</div>

							<?php if ($this->session->flashdata('message')) : ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong><?= $this->session->flashdata('message'); ?></strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php endif; ?>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : ''; ?>" placeholder="Username" name="username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" placeholder="Password" name="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								<div class="invalid-feedback">
									<?= form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<!-- <a href="login_password_recover.html">Forgot password?</a> -->
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>
