<?php
/**
 * Template Name: OWL Sample
 *
 * The template for displaying the "Home" page.
 *
 * @package Pecege
 * @since 1.0
 */

get_header(); ?>

<div class="container-fluid p-0">
	
	<!-- BANNER	 -->
	<div class="owl-carousel owl-banner">
		<a href="" class="item d-inline-block" style="background-image: url(http://via.placeholder.com/2560x690);"></a>
		<a href="" class="item d-inline-block" style="background-image: url(http://via.placeholder.com/2560x690);"></a>
		<a href="" class="item d-inline-block" style="background-image: url(http://via.placeholder.com/2560x690);"></a>
	</div>

</div>
<!-- /.container -->

<div class="spacer-5"></div>

<div class="container">
	<div class="row">
		<!-- CAROUSEL -->
		<div class="owl-01 owl-carousel owl-theme">
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
			<div class="item">
				<img src="http://via.placeholder.com/250x250" class="">
			</div>
			<!-- /.item -->
		</div>
		<!-- /.owl-01.owl-theme -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->

<?php get_footer(); ?>
<script type="text/javascript">
	
	jQuery(document).ready(function ($) {
		// OWL
		jQuery('.owl-banner').owlCarousel({
			items: 1,
			loop: true,
			margin: 0,
			autoplay: true,
			autoplayTimeout: 7000,
			dots: true,
			nav: true,
			navText: ["  "," "],
		});
		
		jQuery(".owl-01").owlCarousel({
			loop: false,
			margin: 10,
		 	autoplay: false,
		 	autoplayTimeout: 7000,
			nav: true,
			navText: [" "," "],
			responsive: { 
				0 : { items: 1, },
				320 : { items: 1, },
				480 : { items: 2, },
				768 : { items: 3, },
				992 : { items: 4, },
				1200 : { items: 4, }
			}
		});
	});

</script>