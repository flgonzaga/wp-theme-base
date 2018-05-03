<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Visualy
 * @since 1.0
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<meta name="description"	content="<?php bloginfo('description'); ?>" />
		<meta name="keywords"		content="" />
		<meta name="robots"			content="all" />
		<meta name="author"			content="Visualy Publicidade" />
		<meta name="revisit-after"	content="3 Days" />
		<meta name="Robots"			content="Index,Follow" />
		<meta name="web_author"		content="Visualy Publicidade" />
		<meta name="googlebot"		content="noodp" />
		<meta name="rating"			content="general" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<!-- MMenu -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mmenu.all.css">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mmenu.min.all.js"></script>

		<!-- Lightbox - http://ashleydw.github.io/lightbox/ -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

		<!-- OWL Carousel -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-banner.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-carousel.css">
		
		<!-- Item MatchHeight -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

	</head>
	<body <?php body_class(); ?>>
		<div id="main-wrapper">
			<header class="w-100" id="header-page">
				<div class="container">
					<div class="row">
						<div class="col-md-3 py-3">
							<a href="<?php echo get_site_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/disposable/logo-.png" alt="<?php bloginfo('description'); ?>" title="<?php bloginfo('description'); ?>" id="logo-header" />
							</a>
							<a href="#mmenu" id="btn-mmenu" class="hidden-md-up">
								<i class="fas fa-bars"></i>
							</a>
						</div><!-- /.col-md-3 -->
						<div class="col-md-9 py-3 hidden-sm-down">
							<div class="w-100 text-right">
								<?php 
									wp_nav_menu(
										array(
											'theme_location' => 'main-menu',
											'depth'          => 2,
											'container'      => false,
											'menu_class'     => 'menu-header clearfix',
											'fallback_cb'    => 'Walker_Nav_Menu::fallback',
											'walker'         => new Walker_Nav_Menu()
										)
									);
								?>
							</div><!-- /.w-100 -->
						</div><!-- /.col-md-9 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</header><!-- /.w-100 -->
			<div class="clearfix"></div><!-- /.clearfix -->