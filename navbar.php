<?php
if (!isset($_SESSION)){
session_start();
}
// print_r($_SESSION);
// print_r($_COOKIE);
if(isset($_COOKIE['username'])){
    $_SESSION['username'] = $_COOKIE['username'];
}
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Punokawan69 - Travel Kesayangan Keluarga Indonesia</title>
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
            .header-top .book a:hover{
                background-color: #ffc12d !important;
            }
            
            body .block-popup-login .block-content .btn-reg-popup:hover {
                background: #850000 !important;
            }
            .module.sohomepage-slider .slider-home1 .item .info a:hover{
                background-color: #ffc12d;
            }
    </style>
</head>
<body>
<div id="wrapper" class="wrapper-fluid banners-effect-10">
    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xs-3 header-logo pull-left">
                        <div class="navbar-logo w-100">
                            <a href="index.php"><img src="image/logo/logo.png" alt="Your Store"
                                    height="36" title="Your Store"></a>
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
                            }else{
                            ?>
                            <a href="user.php" class="clearfix"><strong><?= $_SESSION['username']; ?></strong></a>
                        <?php }} else { ?>
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
                                            <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="500">
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
            <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle"
                data-dismiss="modal"></a>

            <div class="tt_popup_login"><strong>Sign in / Sign up</strong></div>
            <div class="block-content">
                <div class=" col-reg registered-account">
                    <div class="block-content">
                        <h6 style="text-align: center; color: red;"><?= $announcement; ?></h6>
                        <form class="form form-login" action="" method="post" id="login-form">
                            <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                <div class="field email required email-input">
                                    <div class="control">
                                        <input name="username" value="" autocomplete="off" id="email" type="text"
                                            class="input-text" title="Email" placeholder="Masukkan username">
                                    </div>
                                </div>
                                <div class="field password required pass-input">
                                    <div class="control">
                                        <input name="password" type="password" autocomplete="off" class="input-text"
                                            id="pass" title="Password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="remember">
                                    <label class="form-label">Remember Me</label>
                                </div>
                                <div class="actions-toolbar">
                                    <div class="primary">
                                        <button type="submit" class="action login primary" name="login"
                                            id="send2"><span>Login</span></button>
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
