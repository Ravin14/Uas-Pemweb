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
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800&display=swap"
		rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Libre Franklin', sans-serif;
		}

		.pe-3 {
			padding: 0 4rem 0 0;
		}

		.form-infomation .buttons input:hover{
			background-color: #850000 !important;
		}
	</style>
</head>

<body class="common-home res layout-1">
<?php include "navbar.php"; ?>	
	<div id="wrapper" class="wrapper-fluid banners-effect-10">
		<!-- Header Container  -->
		<!-- //Main Container--PEMESANAN -->
		<div class="main-container container main-require">
			<div class="container-fluid mt-3">
				<div class="row d-flex justify-content-center">
					<div class="col-sm-12 " style="margin-top: 30px;">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">JADWAL MINGGU INI</h5>
								<hr>
								<table id="tabel-data-jadwal" class="table table-striped" style="width:100%">
									<?php
									include "koneksi.php";
									$result = mysqli_query($koneksi, "SELECT id_jadwal, hari, jam, armada.jenisArmada AS jenisArmada, lokasi, jadwal.kotaKeberangkatan AS kotaKeberangkatan, jadwal.tanggal AS tanggal FROM `jadwal` INNER JOIN armada ON armada.id_armada = jadwal.id_armada WHERE tanggal > NOW() ORDER BY `jadwal`.`hari` DESC;");									?>
									<thead>
										<tr>
											<th>Hari</th>
											<th>Jam</th>
											<th>Jenis Layanan</th>
											<th>Lokasi Penjemputan</th>
											<th>Kota Keberangkatan</th>
											<th>Tanggal</th>
											<th>Sisa Seat</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($item = mysqli_fetch_array($result)) { ?>
											<tr>
												<td><?= $item['hari'] ?></td>
												<td><?= $item['jam'] ?></td>
												<td><?= $item['jenisArmada'] ?></td>
												<td><?= $item['lokasi'] ?></td>
												<td><?= $item['kotaKeberangkatan'] ?></td>
												<td><?= $item['tanggal'] ?></td>
												<td><a href="pemesanan.php?id_jadwal=<?= $item['id_jadwal'] ?>" onclick="" class="btn btn-success">Info</a></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="content" class="col-md-12">
				<form action="pemesananProcess.php" method="post" enctype="multipart/form-data" class="form-infomation clearfix">
						<fieldset class="your-infomation clearfix">
							<h3>Data Pemesanan</h3>

							<div class="form-item item1 required">
								<label class="control-label" for="input-jumlah-penumpang">Jumlah Penumpang</label>
								<input type="number" name="jumlah-penumpang" value="" placeholder="" id="input-jumlah-penumpang">
							</div>

							<div class="form-item item2 item-select required">
								<label class="control-label" for="input-kota-tujuan">Kota keberangkatan</label>
								<div class="kota-tujuan pe-3">
									<select name="kotaKeberangkatan">
										<option selected>Kota</option>
										<option value="Solo">Solo</option>
										<option value="Jogja">Jogja</option>
										<!-- Select Drop down sesuai DB -->
									</select>
								</div>
							</div>
							<div class="form-item item1 item-select required">
								<label class="control-label" for="input-kota-keberangkatan">Kota tujuan</label>
								<div class="kota-keberangkatan">
									<select name="kota-tujuan">
										<option selected>Kota</option>
										<option value="Solo">Solo</option>
										<option value="Jogja">Jogja</option>
										<!-- Select Drop down sesuai DB -->

									</select>
								</div>
							</div>
							<div class="form-item item-select required">
								<label class="control-label" for="input-kelas-armada">Kelas Armada</label>
								<div class="kelas-armada pe-3">
									<?php $result = mysqli_query($koneksi, "SELECT id_armada, jenisArmada FROM armada ORDER BY id_armada ASC"); ?>
									<select name="kelasArmada">
									<option selected>Kelas</option>
										<?php
										while ($item = mysqli_fetch_array($result)) {
										?>
											<option value="<?= $item['id_armada'] ?>"><?= $item['jenisArmada'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-item item1 required">
								<label class="control-label" for="input-tanggal">Tanggal Keberangkatan</label>
								<input type="date" name="jadwal" value="" placeholder="" id="input-tanggal">
							</div>
							<!-- Select Drop down sesuai DB -->



							<?php
							if (isset($_GET['announcement'])) {
								echo $_GET['announcement'];
							} ?>
						</fieldset>

						<div class="buttons clearfix">
							<input <?php if (!isset($_SESSION['username'])) {
										echo "disabled";
									} elseif (isset($_SESSION['username'])) {
										$LevelUser = mysqli_query($koneksi, "SELECT userLevel FROM `user` WHERE username = '$_SESSION[username]';");
										$LevelUserFetch = mysqli_fetch_array($LevelUser);
										$LevelUserInput = $LevelUserFetch['userLevel'];
										if ($LevelUserInput == "ADMIN"){
											echo "disabled";
										}
									} ?> type="submit" name='pesan' value="PESAN SEKARANG" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>


		<!-- Footer Container -->
		<?php include "footer.php"; ?>
	</div>
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
	<<script type="text/javascript">
		$(document).ready(function() {
			$('#tabel-data-jadwal').DataTable({
				order: [
					[2, 'desc']
				],
				info: false,
				searching: false
			});
		});
	</script>
	<script type="text/javascript">
		<?php
		if (isset($_GET['id_jadwal'])) {
			$query = mysqli_query($koneksi, "SELECT(armada.kapasitas - SUM(pemesanan.jumlahPenumpang)) AS sisa FROM `pemesanan` INNER JOIN `armada` ON pemesanan.id_armada = armada.id_armada INNER JOIN `jadwal` ON pemesanan.id_jadwal = jadwal.id_jadwal WHERE pemesanan.id_jadwal = '$_GET[id_jadwal]';
			") or die("Query Gagal");
			$data = mysqli_fetch_array($query);
			$sisa = $data['sisa'];
			if ($sisa == null){
				$sisa = 14; 
			} ?>
			alert("Sisa Kursi: <?= $sisa ?>");
		<?php
		}
		?>
	</script>
	</script>
</body>

</html>