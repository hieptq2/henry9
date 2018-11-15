<!DOCTYPE html>
<html lang="en">
<head>
	<?php
    if (isset($title)) {
      $title .= " | Hiep Ta | Front-end Developer & Web Designer";
    }
    else {
      $title = "Hiep Ta | Front-end Developer & Web Designer | Hanoi, Vietnam";
    }
  ?>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="<?php if (isset($meta)) {echo $meta;}?>">
  <meta name="author" content="Hiep Ta">

	<!-- OG -->
  <meta property="og:title" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:image" content=""/>

	<!-- Favicon -->
	<link rel="icon" href="favicon.ico">

	<!-- Styles -->
	<link rel="stylesheet" href="assets/css/main.css">

	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

	<!-- Scripts -->
	<!-- <script data-main="js/main" src="assets/libs/require.js"></script> -->

	<!-- Analytics -->
	<script type="text/javascript">
		
	</script>

</head>
<body>

	<header id="siteHeader" class="site-header site-header--fix-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					<div class="site-header__wrapper">
						<div class="menu">
							<div class="menu__content">
								<div class="menu__single">
									<a href="#" class="menu__link">
										<h3 class="menu__title">About1</h3>
										<h6 class="menu__subtitle"><span>Who I Am</span></h6>
									</a>
								</div>
								<div class="menu__single">
									<a href="#" class="menu__link">
										<h3 class="menu__title">Work</h3>
										<h6 class="menu__subtitle"><span>View Case Studies</span></h6>
									</a>
								</div>
								<div class="menu__single">
									<a href="#" class="menu__link">
										<h3 class="menu__title">Contact</h3>
										<h6 class="menu__subtitle"><span>Let's get in touch</span></h6>
									</a>
								</div>
							</div>
						</div>
						<div class="logo">
							<a href="#" class="logo__link">
								<h3 class="logo__title">h9</h3>
							</a>
						</div>
					</div>
						
				</div>
			</div>
		</div>
		<div class="preloader"></div>
	</header>