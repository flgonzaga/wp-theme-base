<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Visualy
 * @since 1.0
 */
?>
			<footer class="w-100" id="footer-page">
				<div class="w-100">
					<div class="container">
						<div class="row">
							<div class="col-12">
								
							</div><!-- /.col-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.w-100 -->
				<div class="w-100" id="strip_footer">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="w-100 text-center">
									<span class="copyright text-white">
										<?php bloginfo( 'name' ); ?> - Todos os direitos reservados - <?php echo date( 'Y' ); ?>
									</span><!-- /.copyright -->
									<span class="company">
										<a href="http://visualy.com.br/" target="_blank" class="text-white">
											<span class="font-weight-bold text-white">Desenvolvimento</span> | Visualy Publicidade
										</a>
									</span><!-- /.company -->
								</div><!-- /.w-100 -->
							</div><!-- /.col-12 -->
						</div><!-- /.row -->
					</div><!-- /.container-->
				</div><!-- /.w-100 -->
			</footer><!-- /.w-100 -->
		</div><!-- /#main-wrapper -->
		<nav id="mmenu">
			<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => '',
						'fallback_cb'    => 'Walker_Nav_Menu::fallback',
						'walker'         => new Walker_Nav_Menu()
					)
				);
			?>
		</nav><!-- /#mmenu -->
		<?php wp_footer(); ?>

		<script>
			jQuery(document).ready(function ($) {
				// OWL
				/*
				jQuery('.owl-banner').owlCarousel({
					items: 1,
					loop: true,
					margin: 0,
					autoplay: true,
					autoplayTimeout: 7000,
					dots: false,
					nav: false,
					navText: ["  "," "],
				});
				*/
				
				/*
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
				*/

				/*
				jQuery(".owl-02, .owl-03").owlCarousel({
					loop: true,
					margin: 10,
				 	autoplay: true,
				 	autoplayTimeout: 7000,
					nav: true,
					navText: [" "," "],
					responsive: { 
						0 : { items: 1, },
						320 : { items: 1, },
						480 : { items: 2, },
						768 : { items: 3, },
						992 : { items: 4, },
						1200 : { items: 5, }
					}
				});
				*/
				
			});
		</script>
	</body>
</html>