<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
	include(locate_template("template-parts/blog/loop.php"));
	include(locate_template("template-parts/page-elements/projects.php"));
?>

<?php
//get_sidebar();
get_footer();
