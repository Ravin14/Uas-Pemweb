<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Kelas Armada</title>
	<meta charset="utf-8">
	<meta name="keywords"
		content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
	<meta name="description"
		content="PortKey is a beautiful and creative travel booking HTML template for any travel designs" />
	<meta name="author" content="Magentech">
	<meta name="robots" content="index, follow" />
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Favicon
	============================================ -->

	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_sociallogin.css" rel="stylesheet">
	<link href="css/themecss/so_searchpro.css" rel="stylesheet">
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/themecss/so-category-slider.css" rel="stylesheet">
	<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="css/footer/footer1.css" rel="stylesheet">
	<link href="css/header/header1.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/quickview/quickview.css" rel="stylesheet">
	<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800&display=swap"
		rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Libre Franklin', sans-serif;
		}

		.bg-hero {
			background: url("./image/carausel/travel.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 50vh;
			width: 100%;
		}

		.d-flex {
			display: flex;
		}

		.gx-3 {
			gap: 1.5rem;
		}

		.justify-content-center {
			justify-content: center;
		}

		.align-items-center {
			align-items: center;
		}

		.mt-5 {
			margin-top: 3rem;
			margin-bottom: 3rem;
		}

		.mt-3 {
			margin-top: 1.4rem;
		}

		.text-tiket {
			font-weight: 300;
		}

		.rounded-circle {
			width: 400px !important;
			height: 400px !important;
			border-radius: 100rem;
			object-fit: cover;
		}

		.w-100 {
			width: 100%;
		}

		.col-sm-12 {
			width: 100% !important;
		}

		@media only screen and (max-width: 1200px) {
			.rounded-circle {
				width: 350px !important;
				height: 350px !important;
				border-radius: 100rem;
				object-fit: cover;
			}
		}

		@media only screen and (max-width: 768px) {
			.rounded-circle {
				width: 200px !important;
				height: 200px !important;
				border-radius: 100rem;
				object-fit: cover;
			}

			.content-img {
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
			}

			.w-icon-seat {
				width: 225px !important;
				height: 100%;
			}
		}

		.mb-3 {
			margin: 0 0 1.4rem 0;
		}

		.w-50 {
			width: 50%;
		}

		.w-icon-fitur {
			width: 40px;
			margin: 0 1rem;
		}

		.w-icon-seat {
			width: 275px;
			height: 100%;
		}

		@media only screen and (max-width: 500px) {
			.icon-bus {
				display: flex;
				flex-direction: column;
			}

			.w-icon-seat {
				width: 200px;
				margin: 1rem 0 0 0;
				height: 100%;
			}

			.w-icon-fitur {
				width: 30px;
				margin: 0 .8rem;
			}
		}
	</style>
</head>

<body>
<?php include "navbar.php"; ?>

	<div id="wrapper" class="wrapper-fluid banners-effect-10">
		<!-- Header Container  -->
	<main>
		<section class="hero bg-hero"></section>
		<section class="content pt-5 mt-5">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col d-flex mt-5 gx-3">
						<h3>Kelas Ekonomi</h3>
						<h3 class="text-tiket">Tiket Bus</h3>
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center mt-5">
					<div class="d-flex icon-bus">
						<img src="./image/armada/elf1.jpg" class="w-100 d-block rounded-circle" alt="">
						<img src="./image/armada/elfatas.png" class="w-icon-seat d-block" alt="">
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center mt-5">
					<div class="d-flex">
						<img src="./image/armada/seat.png" class="w-icon-fitur d-block" alt="">
						<img src="./image/armada/ac.png" class="w-icon-fitur d-block" alt="">
						<img src="./image/armada/bagage.png" class="w-icon-fitur d-block" alt="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col w-100 d-flex justify-content-center align-items-center">
						<h5>
							Reclining Seat | AC | Bagasi
						</h5>
					</div>
				</div>
			</div>
		</section>
		<section class="content pt-5 mt-5">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col d-flex mt-5 gx-3">
						<h3>Kelas Eksekutif</h3>
						<h3 class="text-tiket">Tiket Bus</h3>
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center mt-5">
					<div class="d-flex icon-bus">
						<img src="./image/armada/elf2.jpg" class="w-100 d-block rounded-circle" alt="">
						<img src="./image/armada/elfatas.png" class="w-icon-seat d-block" alt="">
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center mt-5">
					<div class="d-flex">
						<img src="./image/armada/seat.png" class="w-icon-fitur d-block" alt="">
						<img src="./image/armada/ac.png" class="w-icon-fitur d-block" alt="">
						<img src="./image/armada/bagage.png" class="w-icon-fitur d-block" alt="">
						<img src="./image/armada/water.png" class="w-icon-fitur d-block" alt="">
						<img src="./image/armada/tv.png" class="w-icon-fitur d-block" alt="">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col w-100 d-flex justify-content-center align-items-center">
						<h5>
							Reclining & Comfort Seat | AC | Bagasi | Air Gratis | Hiburan
						</h5>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- Footer Container -->
	<?php include "footer.php"; ?>
	<!-- //end Footer Container -->
	<div class="back-to-top hidden-top"><i class="fa fa-angle-up"></i></div>
</body>

<!-- End Color Scheme
	============================================ -->



<!-- Include Libs & Plugins
	============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="js/slick-slider/slick.js"></script>
		<script type="text/javascript" src="js/themejs/libs.js"></script>
		<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
		<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
		<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
		<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
		<script type="text/javascript" src="js/jquery.nav.js"></script>
		<script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
		<!-- Theme files
			============================================ -->
		<script type="text/javascript" src="js/themejs/application.js"></script>
		<script type="text/javascript" src="js/themejs/homepage.js"></script>
		<script type="text/javascript" src="js/themejs/custom_h1.js"></script>
		<script type="text/javascript" src="js/themejs/nouislider.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
			integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
		</script>

</body>

</html>