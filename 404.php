<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="page-full-width">


	<div class="wp-block-columns container">
		<div class="wp-block-column" style="flex-basis:40%">
			<h2><strong>404</strong></h2>
		</div>



		<div class="wp-block-column about-right" style="flex-basis:60%">

			<p>Page not found.</p>

			<p>It looks like nothing was found at this location. </p>

			<p>Maybe try one of the links below.</p>

		</div>
	</div>


</div>




	<?php

	include(locate_template("template-parts/page-elements/start-project.php"));


	 ?>

<?php
get_footer();
