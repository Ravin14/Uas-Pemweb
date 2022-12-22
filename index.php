<?php
ob_start();
session_start();
// print_r($_SESSION);
include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Punokawan69 - Travel Kesayangan Keluarga Indonesia</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
	<meta name="description" content="PortKey is a beautiful and creative travel booking HTML template for any travel designs" />
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
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Libre Franklin', sans-serif;
		}

		.links a:hover {
			color: #ffc12d !important;
		}

		.links li:hover {
			list-style: none;
			color: #ffc12d !important;
		}

		footer.typefooter-1 .footer-bottom .social ul li a:hover {
			color: #ffc12d;
			border: solid 1px #ffc12d !important;
		}

		.about-list i {
			width: 15px;
		}

		footer.typefooter-1 .footer-bottom a:hover {
			color: #ffc12d !important;
		}

		.header-top .book a:hover {
			background-color: #ffc12d !important;
		}

		body .block-popup-login .block-content .btn-reg-popup:hover {
			background: #850000 !important;
		}

		.module.sohomepage-slider .slider-home1 .item .info a:hover {
			background-color: #ffc12d;
		}

		body .mfp-close-btn-in .mfp-close:hover {
			background-color: #ffc12d;
		}

		.carosol {
			min-height: 100vh;
		}

		.fa-envelope:before {
			font-size: medium;
		}
	</style>
</head>

<body class="common-home res layout-1">
	<div id="wrapper" class="wrapper-fluid banners-effect-10">
		<!-- Header Container  -->
		<header id="header" class=" typeheader-1">
			<div class="header-top hidden-compact">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-xs-3 header-logo pull-left">
							<div class="navbar-logo w-100">
								<a href="index.php"><img src="image/logo/logo.png" alt="Your Store" height="36" title="Your Store"></a>
							</div>
						</div>
						<div class="book pull-right">
							<?php if (isset($_SESSION['username'])) {
								$levelQuery = mysqli_query($koneksi, "SELECT userLevel FROM `user` WHERE username = '$_SESSION[username]';");
								$levelFetch = mysqli_fetch_array($levelQuery);
								$level = $levelFetch['userLevel'];
								if ($level == 'ADMIN') { ?>
									<a href="dashboardAdmin.php" class="clearfix"><strong><?= "ADMIN"; ?></strong></a>
								<?php
								} else {
								?>
									<a href="user.php" class="clearfix"><strong><?= $_SESSION['username']; ?></strong></a>
								<?php }
							} else { ?>
								<?php include "loginProcess.php"; ?>
								<a data-toggle="modal" data-target="#so_sociallogin" href="#"><i class="fa fa-user" aria-hidden="true"></i> Sign In </a>
							<?php }; ?>
						</div>
						<!-- Menuhome -->
						<div class="header-menu pull-right">
							<div class="megamenu-style-dev megamenu-dev">
								<div class="responsive">
									<nav class="navbar-default">
										<div class="container-megamenu horizontal">
											<div class="navbar-header">
												<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
											<div class="megamenu-wrapper">
												<span id="remove-megamenu" class="fa fa-times"></span>
												<div class="megamenu-pattern">
													<div class="container">
														<ul class="megamenu" data-transition="slide" data-animationtime="500">
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="index.php" class="clearfix">
																	<strong>
																		Beranda
																	</strong>
																</a>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a class="clearfix" href="pemesanan.php">
																	<strong>
																		Pemesanan
																	</strong>
																	<span class="labelwordpress"></span>
																</a>
															</li>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="kelas-armada.php" class="clearfix">
																	<strong>
																		Kelas Armada
																	</strong>
																</a>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="tentang.php" class="clearfix">
																	<strong>
																		Tentang
																	</strong>
																</a>
															</li>
															<li class="style-page with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="faq.php" class="clearfix">
																	<strong>
																		Pusat Bantuan
																	</strong>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->
		</header>
		<!-- //Header Container  -->
		<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog block-popup-login">
				<a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>

				<div class="tt_popup_login"><strong>Sign in / Sign up</strong></div>
				<div class="block-content">
					<div class=" col-reg registered-account">
						<div class="block-content">
							<h6 style="text-align: center; color: red;"><?= $announcement; ?></h6>
							<form class="form form-login" action="" method="post" id="login-form">
								<fieldset class="fieldset login" data-hasrequired="* Required Fields">
									<div class="field email required email-input">
										<div class="control">
											<input name="username" value="" autocomplete="off" id="email" type="text" class="input-text" title="Email" placeholder="Masukkan username">
										</div>
									</div>
									<div class="field password required pass-input">
										<div class="control">
											<input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password">
										</div>
									</div>
									<div class="mb-3 form-check">
										<input type="checkbox" name="remember">
										<label class="form-label">Remember Me</label>
									</div>
									<div class="actions-toolbar">
										<div class="primary">
											<button type="submit" class="action login primary" name="login" id="send2"><span>Login</span></button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-reg login-customer">
						<h2>Buat Sekarang?</h2>
						<p class="note-reg">Registration gampang dan gratis!</p>
						<ul class="list-log">
							<li>Lebih cepat memesan</li>
							<li>Melihat dan melacak pemesanan</li>
							<li>Dengan member pasti banyak potongan</li>
						</ul>
						<a class="btn-reg-popup" title="Register" href="requiry.php">Buat Akun Baru</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper" class="wrapper-fluid banners-effect-10">
		<!-- Main Container  -->
		<div id="content">
			<div class="so-page-builder">
				<div class="page-builder-ltr">
					<div class="row row_a90w row-style">
						<!--- SLider right-->
						<div class="module sohomepage-slider so-homeslider-ltr">
							<div class="modcontent">
								<div id="sohomepage-slider1" class="slider-home1">
									<div class="so-homeslider sohomeslider-inner-1">
										<div class="item">
											<a href="#" title="slide 1 - 1" target="_self">
												<img class="responsive carosol" src="./image/founder/eksekutif1.jpg" alt="slide 1-1">
											</a>
											<div class="info">
												<div class="top">Nyaman dan Berkelas</div>
												<h3>Esekutif</h3>
												<p>Kemanapun tujuan anda kami antar <br>Jadi tunggu apa lagi</p>
												<a href="pemesanan.php">Pesan Sekarang <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											
										</div>
										<div class="item">
											<a href="#" title="slide 1 - 2" target="_self">
												<img class="responsive carosol" src="./image/founder/ekonomi2.jpg" alt="slide 1-2">
											</a>
											<div class="info">
												<div class="top">Praktis Untuk Perjalanan</div>
												<h3>Ekonomi</h3>
												<p>Harga Terjangkau dan Praktis <br>Dengan Pelayanan Yang Terbaik</p>
												<a href="pemesanan.php">Pesan Sekarang <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											
										</div>
										<div class="item">
											<a href="#" title="slide 1 - 2" target="_self">
												<img class="responsive carosol" src="./image/carausel/elf0.jpg" alt="slide 1-2">
											</a>
											<div class="info">
												<div class="top">Senggol Dong</div>
												<h3>TERBAIK</h3>
												<p>Pastinya Perjalanan Aman dan Nyaman<br>Dengan Travel Terbaik se Solo Raya</p>
												<a href="pemesanan.php" class="caraosel">Pesan Sekarang <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					</section>
					<section class="section-style3">
						<div class="promotion clearfix">
							<div class="container page-builder-ltr">
								<div class="head-title clearfix">
									<div class="block-title">
										<h3><span>Cara Pemesanan</span></h3>
									</div>
								</div>
							</div>
							<div class="container page-builder-ltr">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
										<img src="image/icon/promo1.png" alt="stay safe" class="img-responsive">
										<h3>Lihat Jadwal Perjalanan</h3>
										<p>Pastikan Menemukan Jadwal Terbaik Anda<br> Pada Tabel Perjalanan
										</p>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
										<img src="image/icon/promo2.png" alt="Quality Services" class="img-responsive">
										<h3>Lengkapi Data Pemesanan</h3>
										<p>Pastikan Data Pemesanan Anda Terisi Dengan Benar Untuk Kenyamanan Pemesanan
										</p>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
										<img src="image/icon/promo3.png" alt="Save Money" class="img-responsive">
										<h3>Pembayaran Pemesanan</h3>
										<p>Pastikan Langsung Melakukan Pembayaran Dengan<br>
											Berbagai Layanan Pembayaran</p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="section-style4">
						<div class="container page-builder-ltr">
							<div class="row row-style row_a1">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c">
									<div class="module so-deals-1tr home1_deals so-deals">
										<div class="head-title clearfix">
											<div class="block-title pull-left">
												<h3><span>Berita Terbaru</span></h3>
											</div>
										
										</div>
										<div class="modcontent">
											<div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
												<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
													<div class="item">
														<div class="item-inner">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="item-block so-quickview">
																		<div class="image">
																			<a href="blog-detail_1.php" target="_self">
																				<img src="image/berita/1_index.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																			</a>
																		
																		</div>
																		<div class="item-content clearfix">
																			<h3>Pesona Rowo Jombor Klaten</a></h3>
																			<div class="reviews-content">
																				<div>
																					Kabupaten Klaten, Jawa Tengah dikenal memiliki banyak destinasi wisata air
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item-inner">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="item-block so-quickview">
																		<div class="image">
																			<a href="blog-detail_2.php" target="_self">
																				<img src="image/berita/2_index.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																			</a>
																			
																		</div>
																		<div class="item-content clearfix">
																			<h3>Potensi Wisata Kota Solo </a></h3>
																			<div class="reviews-content">
																				<div>
																					Beragam potensi yang dimiliki Kota Surakarta untuk meningkatkan kemandirian ekonomi daerah

																				</div>

																			</div>
																		
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="item-inner">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="item-block so-quickview">
																		<div class="image">
																			<a href="blog-detail_3.php" target="_self">
																				<img src="image/berita/3_index.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																			</a>
																			
																		</div>
																		<div class="item-content clearfix">
																			<h3>Indahnya Kota Yogyakarta</a></h3>
																			<div class="reviews-content">
																				<div>
																					Daerah Istimewa Yogyakarta terletak di bagian selatan pulau Jawa
																				</div>

																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item-inner">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="item-block so-quickview">
																		<div class="image">
																			<a href="blog-detail_4.php" target="_self">
																				<img src="image/berita/4_index.jpg" alt="Bougainvilleas on Lombard Street, San Francisco, Tokyo" class="img-responsive">
																			</a>
																			
																		</div>
																		<div class="item-content clearfix">
																			<h3>Revitalisasi Taman Mangkunegaran</a>
																			</h3>
																			<div class="reviews-content">
																				<div>
																					Kota Solo segera memiliki satu lagi destinasi wisata baru, lokasinya ada di kawasan Pura Mangkunegaran
																				</div>

																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="item-inner">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="item-block so-quickview">
																		<div class="image">
																			<a href="blog-detail_5.php" target="_self">
																				<img src="image/berita/5_index.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																			</a>
																			
																		</div>
																		<div class="item-content clearfix">
																			<h3>Ini Tempat Wisata di Demak Terbaru</a></h3>
																			<div class="reviews-content">
																				<div>
																					Salah satu Kabupaten di Jawa tengah yang memiliki sejuta keindahan alam yaitu Demak
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item-inner">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="item-block so-quickview">
																		<div class="image">
																			<a href="blog-detail_6.php" target="_self">
																				<img src="image/berita/6_index.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																			</a>
																			
																		</div>
																		<div class="item-content clearfix">
																			<h3>Wahana Taman Balekambang Solo</a></h3>
																			<div class="reviews-content">
																				<div>
																					 Total luas lahan yang direvitalisasi seluas 87.020 meter persegi dan akan dilakukan pada akhir Agustus lalu
																				</div>
																			</div>
																			
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="section-style6">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6fdl float_none container">
							<div class="head-title clearfix">
								<div class="block-title pull-left">
									<h3><span>Testimoni Pengguna</span></h3>
								</div>
							</div>
							<div class="sw-gallery products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="5" data-items_column0="5" data-items_column1="5" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
								<div class="item">
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/1.png"><img class="responsive" src="image/testimoni/1.png" alt="gallery1"></a>
									</div>
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/2.png"><img class="responsive" src="image/testimoni/2.png" alt="gallery2"></a>
									</div>
								</div>
								<div class="item">
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/3.png"><img class="responsive" src="image/testimoni/3.png" alt="gallery3"></a>
									</div>
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/8.png"><img class="responsive" src="image/testimoni/8.png" alt="gallery4"></a>
									</div>
								</div>
								<div class="item">
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/4.png"><img class="responsive" src="image/testimoni/4.png" alt="gallery5"></a>
									</div>
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/6.png"><img class="responsive" src="image/testimoni/6.png" alt="gallery6"></a>
									</div>
								</div>
								<div class="item">
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/5.png"><img class="responsive" src="image/testimoni/5.png" alt="gallery7"></a>
									</div>
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/7.png"><img class="responsive" src="image/testimoni/7.png" alt="gallery8"></a>
									</div>
								</div>
								<div class="item">
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/9.png"><img class="responsive" src="image/testimoni/9.png" alt="gallery9"></a>
									</div>
									<div class="content-img">
										<a class="image-popup" href="image/testimoni/10.png"><img class="responsive" src="image/testimoni/10.png" alt="gallery10"></a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- //Main Container -->
		</div>

		<!-- Footer Container -->

		<body>
			<footer class="footer-container typefooter-1">
				<div class="footer-has-toggle" id="collapse-footer">
					<div class="so-page-builder">
						<div class="container-fluid page-builder-ltr">
							<div class="row row_mvtd footer--center2 row-color ">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6fdl float_none container">
									<div class="row row_hwmc  ">
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
											<div class="footer-logo">
												<a href="index.php"><img src="image/logo/logo.png" alt="Your Store" width="194" height="59" title="Your Store"></a>
											</div>
											<p>Sing Penting Tekan, Keslamatan Nomor Kale.</p>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
											<h3 class="title-footer">
												Alamat
											</h3>
											<ul class="about-list">
												<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="ab-pd">Jl. Mendungan No.22, Mendungan, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah </span></li>
												<li><i class="fa fa-envelope" aria-hidden="true"></i><span>Punokawan_agency@gmail.com</span></li>
												<li class="call-phone"><i class="fa fa-mobile" aria-hidden="true"></i><a class="ab-pd" href="https://wa.me/6281229485497">0812-1234-123
													</a></li>
											</ul>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
											<h3 class="title-footer">
												Pintasan
											</h3>
											<ul class="links">
												<li>
													<a href="index.php">Beranda</a>
												</li>
												<li>
													<a href="pemesanan.php">Pemesanan</a>
												</li>
												<li>
													<a href="requiry.php">Sign Up</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col_6ps1 footer--link">
											<h3 class="title-footer">
												Bantuan
											</h3>
											<ul class="links">
												<li>
													<a href="faq.php">FAQ</a>
												</li>
												<li>
													<a href="contact-us-v1.php">Customer Servis</a>
												</li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-toggle hidden-lg hidden-md">
					<a class="showmore collapsed" data-toggle="collapse" href="#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">
						<span class="toggle-more"><i class="fa fa-angle-double-down"></i>Show More</span>
						<span class="toggle-less"><i class="fa fa-angle-double-up"></i>Show less</span>
					</a>
				</div>
				<div class="footer-bottom ">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 copyright">
								Punokawan©2022. All Rights Reserved. Designed by <a href="https://www.instagram.com/eternal21_uns/" target="_blank">Kelompok Arden</a>
							</div>
							<div class="col-md-6 col-sm-6 social">
								<h3>Follows Us:</h3>
								<ul>
									<li><a href="https://www.facebook.com/muhammad.prabaswara/" title="Face Book"><span class="fa fa-facebook"></span></a></li>
									<li><a href="https://twitter.com/brndiffrnt?t=lWsbanwqUJ1aLSyic-94QQ&s=08" title="Twitter"><span class="fa fa-twitter"></span></a></li>
									<li><a href="https://instagram.com/rahmat.avn?igshid=YmMyMTA2M2Y=" title="Instagram"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- //end Footer Container -->
			<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
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
		</body>

</html>