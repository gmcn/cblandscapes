<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>


<?php
	include(locate_template("template-parts/blog/single.php"));
	include(locate_template("template-parts/page-elements/projects.php"));
?>


<?php
//get_sidebar();
get_footer();
