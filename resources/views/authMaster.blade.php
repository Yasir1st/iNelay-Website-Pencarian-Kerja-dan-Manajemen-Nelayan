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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		.btn-kirim{
			background-color: #2C3E50;
		}

		.btn-kirim:hover{
			background-color: #1ABC9C;
		}
	</style>
</head>

<!-- [ auth-signin ] start -->
@yield('isiAuth')
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('tema') }}/dist/assets/js/vendor-all.min.js"></script>
<script src="{{ asset('tema') }}/dist/assets/js/plugins/bootstrap.min.js"></script>

<script src="{{ asset('tema') }}/dist/assets/js/pcoded.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>

</html>
