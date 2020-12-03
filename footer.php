<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->

	<footer>

		<div class="container-fluid footer-nav">
			<div class="row">

				<div class="col-6">
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'footer',
							) );
						?>
				</div>

				<div class="col-6">

					<p>Services:</p>

					<?php
						wp_nav_menu( array(
							'theme_location'  => 'services',
							) );
						?>
				</div>



			</div>
		</div>

		<div class="container-fluid sig">
			<div class="row">
				<div class="col-md-6">
					 © <?php echo date('Y'); ?> CB Landscapes. All rights reserved.
				</div>
				<div class="col-md-6 byline">
					Website by <a href="#" target="_blank">Cornell</a>
				</div>
			</div>
		</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
