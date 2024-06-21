<!DOCTYPE html>
<html lang="en">

<head>
    <title>iNelay - Pencarian Kerja & Manajemen Nelayan</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('tema') }}/dist/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('tema') }}/dist/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('tema') }}/dist/assets/css/customCSS.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<span>{{ $akun->name }}</span>
							<div id="more-details">{{ $akun->role }}</div>
						</div>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Menu's</label>
					</li>
					<li class="nav-item">
					    <a href="/dashboard" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item">
					    <a href="/lowongan" class="nav-link "><span class="pcoded-micon"><i class="feather icon-globe"></i></span><span class="pcoded-mtext">Lowongan</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Manajemen</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="/profilKapal">Profil Kapal</a></li>
							<li><a href="/anggota">Anggota</a></li>
							@if ($akun->role == 'boss')
								<li><a href="/inputHasil">Input Hasil</a></li>
							@endif
							<li><a href="/histori">Histori</a></li>
					    </ul>
					</li>
					<li class="nav-item">
					    <a href="/dataDiri" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Data Diri</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Autentikasi</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="/">Login</a></li>
					        <li><a href="/logout">Logout</a></li>
					    </ul>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="{{ asset('tema') }}/dist/assets/images/logo.png" alt="" class="logo" style="width: 150px; height: 50px;">
						<img src="{{ asset('tema') }}/dist/assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="{{ asset('tema') }}/dist/assets/images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
										<span>{{ $akun->name }}</span>
										<a href="/logout" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="/dataDiri" class="dropdown-item"><i class="feather icon-user"></i>Data Diri</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>	
	</header>
	<!-- [ Header ] end -->

	@yield('isi')


    <!-- Required Js -->
    <script src="{{ asset('tema') }}/dist/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('tema') }}/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('tema') }}/dist/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('tema') }}/dist/assets/js/plugins/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src="{{ asset('tema') }}/dist/assets/js/pages/dashboard-main.js"></script>
</body>

</html>
