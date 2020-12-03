<?php
/**
 * Template Name: Full width Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="page-full-width">


	<?php the_content(); ?>


</div>

<?php

	include(locate_template("template-parts/page-elements/points.php"));
	include(locate_template("template-parts/page-elements/start-project.php"));

 ?>



<?php
//get_sidebar();
get_footer();
