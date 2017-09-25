<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Site name</title>
	<!-- For That Small Icon In The Browser's Taps .. Search For "favicon.ico For HTML Pages" in Google -->
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/logo.png" />


	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-rtl.min.css">
	<!-- Icons -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<!-- LightBox -->
	<link rel="stylesheet" type="text/css" href="assets/css/lightbox.css">
	<!-- News Ticker -->
	<link rel="stylesheet" type="text/css" href="assets/css/ticker-style.css">

	<!-- Your Own Style Sheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body class="<?php echo $page_name ?>">


	<!-- Header
	===================================-->
	<header>
		<nav>
			<div class="logo">
				<img src="assets/img/family-logo-black.png" alt="" />
			</div>
			<ul>
				<a href="index.php">
					<li class="<?php echo $home_page ?>">
						<i class="icon ion-ios-home-outline"></i>
						الرئيسية
					</li>
				</a>
				<a href="tree.php">
					<li class="<?php echo $tree_page ?>">
						<i class="icon ion-network flibed"></i>
						شجرة العائلة
					</li>
				</a>
				<a href="map.php">
					<li class="<?php echo $map_page ?>">
						<i class="icon ion-map"></i>
						التوزيع الجغرافي
					</li>
				</a>
				<a href="gallery.php">
					<li class="<?php echo $single_gallary_page ?> <?php echo $$gallary_page ?>">
						<i class="icon ion-images"></i>
						ألبوم الصور
					</li>
				</a>
				<a href="add-person.php">
					<li class="<?php echo $add_person_page ?>">
						<i class="icon ion-ios-personadd-outline"></i>
						أضف للعائلة
					</li>
				</a>
				<a href="contact.php">
					<li class="<?php echo $contact_page ?>">
						<i class="icon ion-ios-email-outline"></i>
						تواصل معنا
					</li>
				</a>
			</ul>
		</nav>
	</header>
