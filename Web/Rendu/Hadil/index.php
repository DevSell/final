<?php
    require('global.php');
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="alex is a Personal Portfolio Template">
	<meta name="keywords" content="hadilf, site, officiel, développeur, dev, freelance">
	<meta name="author" content="<?= $site['nom']; ?>">
	<title><?= $site['nom']; ?> - Site Officiel</title>
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/animate.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/theme-color.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
</head>

<body>

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ CHARGEMENT ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ CHARGEMENT ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ ENTETE ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/entete.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ ENTETE ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ SLIDE ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/slide.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ SLIDE ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ MOI ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/moi.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ MOI ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ SERVICES ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/services.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ SERVICES ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ PORTFOLIO ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/portfolio.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ PORTFOLIO ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ STATS ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/stats.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ STATS ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ EXPERIENCES ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/experiences.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ EXPERIENCES ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ NEWS ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/news.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ NEWS ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ JOIN ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/join.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ JOIN ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ CONTACT ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/contact.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ CONTACT ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ COPYRIGHT ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/copyright.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ COPYRIGHT ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ TOP ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
		<?php include 'blocs/top.php'; ?>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ TOP ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

	<!-- ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ JS ⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓⇓ -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/universal-tilt.js"></script>
	<script src="assets/js/jquery.mixitup.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&sensor=false"></script>
	<script src="assets/js/map.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ JS ⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑⇑ -->

</body>
</html>
