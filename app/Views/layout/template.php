<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>" class="csrf">
  <title><?= (isset($pageTitle)) ? $pageTitle :'Document'; ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/public/css/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		</ul>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
			<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
			<i class="fas fa-th-large"></i>
			</a>
		</li>
		</ul>
	</nav>

    <!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
		<img src="<?= base_url() ?>/public/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
				<img src="<?= base_url() ?>/public/img/user2-160x160.jpg" class="img-circle elevation-2" style="width:3rem">
				</div>
				<div class="info">
				<a href="#"><?= session()->get('name'); ?></a> <br>
				<small><span style="color:#00ff3a">Online</span></small>
				</div>
			</div>

			<!-- SidebarSearch Form -->
			<div class="form-inline">
				<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
					<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
				</div>
			</div>
		
			<!-- awal navigasi -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				
					<li class="nav-item ">
						<a href="<?= base_url('home') ?>" class="nav-link <?= (current_url() == base_url('home')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-home"></i>
						<p> Dashboard </p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?= base_url('user'); ?>" class="nav-link <?= (current_url() == base_url('user')) ? 'active' : '' ?>">
						<i class="nav-icon fas fa-user-circle"></i>
						<p> Data User </p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?= base_url('konsumen'); ?>" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p> Data Konsumen </p>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?= base_url('logout'); ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>Log Out</p>
						</a>
					</li>
				
					<li class="nav-item">
						<a href="#" class="nav-link">
						<i class="nav-icon fas fa-file"></i>
						<p>Dokumentasi<i class="fas fa-angle-left right"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="https://adminlte.io/docs/3.1/" target="_blank" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Admin LTE</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/" target="_blank" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>BootStrap 5</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="https://fontawesome.com/v5.15/icons" target="_blank" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>FontAwesome 5</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- akhir navigasi -->
		</div>
	</aside>

	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1><?= (isset($pageTitle)) ? $pageTitle :'Document'; ?></h1>
					</div>

                    <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?= route_to('applogin.admin'); ?>">Home</a></li>
							<li class="breadcrumb-item active"><?= (isset($pageTitle)) ? $pageTitle :'Document'; ?></li>
						</ol>
					</div>
				</div>
				<!-- bagian awal konten -->
				<?= $this->renderSection('content') ?>
			</div>
		</div>
	</div>

	<aside class="control-sidebar control-sidebar-dark">
  		<!-- Control sidebar content goes here -->
	</aside>

	<footer class="main-footer">
  		Copyright &copy; 2014-2021 <a href="#">AdminLTE</a> | All rights reserved.
	  	<div class="float-right d-none d-sm-inline-block">
    		<b>Version</b> 3.2.0-rc
  		</div>
	</footer>
</div><!-- ./wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>/public/js/dashboard.js"></script>
</body>
</html>