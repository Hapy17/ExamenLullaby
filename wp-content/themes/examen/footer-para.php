<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package harmonic
 */
?>


		<div id="footer-nav-wrapper">
			<!-- <nav id="footer-navigation" class="main-navigation" role="navigation">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'harmonic' ); ?></a>
				<ul class="menu">
					
				</ul> .menu -->
			<!--</nav>#footer-navigation .main-navigation -->

			<nav class="credits-footer-menu">
				<?php wp_nav_menu([
					'theme_location' => 'footer',
				]); ?>
			</nav>
			<div class="site-info">
				<?php _e("Examen 2022 © All rights reserverd.", "examen")?>
			</div><!-- .site-info -->

		</div><!-- #footer-nav-wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>