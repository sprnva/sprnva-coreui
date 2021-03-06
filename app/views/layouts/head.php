<?php

use App\Core\App;
use App\Core\Auth;
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Sprnva - Open Source php framework">
	<meta name="author" content="Judywen Guapin">
	<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard,Sprnva">
	<title>
		<?= ucfirst($pageTitle) . " | " . App::get('config')['app']['name']; ?>
	</title>
	<link rel="manifest" href="<?= public_url('/assets/coreui/assets/favicon/manifest.json') ?>">
	<link rel='icon' href='<?= public_url('/favicon.ico') ?>' type='image/ico' />
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= public_url('/favicon.ico') ?>">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="<?= public_url('/assets/coreui/css/simplebar.css') ?>">
	<link rel="stylesheet" href="<?= public_url('/assets/coreui/css/simplebar-content.css') ?>">
	<link rel="stylesheet" href="<?= public_url('/assets/coreui/css/style.css') ?>">
	<link rel="stylesheet" href="<?= public_url('/assets/coreui/css/prism.css') ?>">

	<?php
	// this will auto include filepond css/js when adding filepond in public/assets
	if (file_exists('public/assets/filepond')) {
		require_once 'public/assets/filepond/filepond.php';
	}
	?>

	<script>
		const base_url = "<?= App::get('base_url') ?>";
	</script>
</head>

<body>
	<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
		<div class="sidebar-brand d-none d-md-flex">
			<div class="sidebar-brand-full" width="46" height="46">
				<?= App::get('config')['app']['name']; ?>
			</div>
			<div class="sidebar-brand-narrow" width="46" height="46">
				<?= getAllFirstLetter(App::get('config')['app']['name']) ?>
			</div>
		</div>
		<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
			<li class="nav-item"><a class="nav-link" href="index.html">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-speedometer') ?>"></use>
					</svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
			<li class="nav-title">Theme</li>
			<li class="nav-item"><a class="nav-link" href="colors.html">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-drop') ?>"></use>
					</svg> Colors</a></li>
			<li class="nav-item"><a class="nav-link" href="typography.html">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-pencil') ?>"></use>
					</svg> Typography</a></li>
			<li class="nav-title">Components</li>
			<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-puzzle') ?>"></use>
					</svg> Base</a>
				<ul class="nav-group-items">
					<li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
					<li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>
					<li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>
					<li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span> Carousel</a></li>
					<li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span> Collapse</a></li>
					<li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> List group</a></li>
					<li class="nav-item"><a class="nav-link" href="base/navs.html"><span class="nav-icon"></span> Navs</a></li>
					<li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>
					<li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span> Popovers</a></li>
					<li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span> Progress</a></li>
					<li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span> Scrollspy</a></li>
					<li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span> Spinners</a></li>
					<li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span> Tables</a></li>
					<li class="nav-item"><a class="nav-link" href="base/tabs.html"><span class="nav-icon"></span> Tabs</a></li>
					<li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span> Tooltips</a></li>
				</ul>
			</li>
			<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-cursor') ?>"></use>
					</svg> Buttons</a>
				<ul class="nav-group-items">
					<li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Buttons</a></li>
					<li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Buttons Group</a></li>
					<li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> Dropdowns</a></li>
				</ul>
			</li>
			<li class="nav-item"><a class="nav-link" href="charts.html">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie') ?>"></use>
					</svg> Charts</a></li>
			<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-notes') ?>"></use>
					</svg> Forms</a>
				<ul class="nav-group-items">
					<li class="nav-item"><a class="nav-link" href="forms/form-control.html"> Form Control</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>
					<li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>
				</ul>
			</li>
			<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-star') ?>"></use>
					</svg> Icons</a>
				<ul class="nav-group-items">
					<li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
					<li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
					<li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
				</ul>
			</li>
			<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-bell') ?>"></use>
					</svg> Notifications</a>
				<ul class="nav-group-items">
					<li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
					<li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
					<li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
					<li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
				</ul>
			</li>
			<li class="nav-item"><a class="nav-link" href="widgets.html">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-calculator') ?>"></use>
					</svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
			<li class="nav-divider"></li>
			<li class="nav-title">Extras</li>
			<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-star') ?>"></use>
					</svg> Pages</a>
				<ul class="nav-group-items">
					<li class="nav-item"><a class="nav-link" href="login.html" target="_top">
							<svg class="nav-icon">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-account-logout') ?>"></use>
							</svg> Login</a></li>
					<li class="nav-item"><a class="nav-link" href="register.html" target="_top">
							<svg class="nav-icon">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-account-logout') ?>"></use>
							</svg> Register</a></li>
					<li class="nav-item"><a class="nav-link" href="404.html" target="_top">
							<svg class="nav-icon">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-bug') ?>"></use>
							</svg> Error 404</a></li>
					<li class="nav-item"><a class="nav-link" href="500.html" target="_top">
							<svg class="nav-icon">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-bug') ?>"></use>
							</svg> Error 500</a></li>
				</ul>
			</li>
			<li class="nav-item mt-auto"><a class="nav-link" href="docs.html">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-description') ?>"></use>
					</svg> Docs</a></li>
			<li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
					<svg class="nav-icon">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-layers') ?>"></use>
					</svg> Try CoreUI
					<div class="fw-semibold">PRO</div>
				</a></li>
		</ul>
		<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
	</div>
	<div class="wrapper d-flex flex-column min-vh-100 bg-light">
		<header class="header header-sticky mb-4">
			<div class="container-fluid">
				<button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
					<svg class="icon icon-lg">
						<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-menu') ?>"></use>
					</svg>
				</button><a class="header-brand d-md-none" href="#">
					<svg width="118" height="46" alt="CoreUI Logo">
						<use xlink:href="assets/brand/coreui.svg#full"></use>
					</svg></a>
				<ul class="header-nav d-none d-md-flex">
					<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Users</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
				</ul>
				<ul class="header-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="#">
							<svg class="icon icon-lg">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-bell') ?>"></use>
							</svg></a></li>
					<li class="nav-item"><a class="nav-link" href="#">
							<svg class="icon icon-lg">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-list-rich') ?>"></use>
							</svg></a></li>
					<li class="nav-item"><a class="nav-link" href="#">
							<svg class="icon icon-lg">
								<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open') ?>"></use>
							</svg></a></li>
				</ul>
				<ul class="header-nav ms-3">
					<li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<div class="avatar avatar-md"><img class="avatar-img" src="<?= public_url('/assets/coreui/assets/img/avatars/8.jpg') ?>" alt="user@email.com"></div>
						</a>
						<div class="dropdown-menu dropdown-menu-end pt-0">
							<div class="dropdown-header bg-light py-2">
								<div class="fw-semibold">Account</div>
							</div><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-bell') ?>"></use>
								</svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open') ?>"></use>
								</svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-task') ?>"></use>
								</svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-comment-square') ?>"></use>
								</svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
							<div class="dropdown-header bg-light py-2">
								<div class="fw-semibold">Settings</div>
							</div><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-user') ?>"></use>
								</svg> Profile</a><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-settings') ?>"></use>
								</svg> Settings</a><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-credit-card') ?>"></use>
								</svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-file') ?>"></use>
								</svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked') ?>"></use>
								</svg> Lock Account
							</a>

							<a class="dropdown-item" href="<?= route('/logout') ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<svg class="icon me-2">
									<use xlink:href="<?= public_url('/assets/coreui/assets/icons/coreui/free-symbol-defs.svg#cui-account-logout') ?>"></use>
								</svg> Logout
							</a>

							<form id="logout-form" action="<?= route('/logout') ?>" method="POST" style="display:none;">
								<?= csrf() ?>
							</form>
						</div>
					</li>
				</ul>
			</div>
			<div class="header-divider"></div>
			<div class="container-fluid">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb my-0 ms-2">
						<li class="breadcrumb-item">
							<!-- if breadcrumb is single--><span>Home</span>
						</li>
						<li class="breadcrumb-item active"><span>Blank</span></li>
					</ol>
				</nav>
			</div>
		</header>
		<div class="body flex-grow-1 px-3">
			<div class="container-lg">