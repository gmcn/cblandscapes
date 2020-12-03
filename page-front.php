<?php
/**
 * Template Name: Front Page
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



<?php
	include(locate_template("template-parts/page-front/hero.php"));
	include(locate_template("template-parts/page-front/about.php"));
	include(locate_template("template-parts/page-front/design.php"));
	include(locate_template("template-parts/page-front/landscape.php"));
	include(locate_template("template-parts/page-front/enjoy.php"));
	include(locate_template("template-parts/page-front/lets-chat.php"));
	include(locate_template("template-parts/page-front/portfolio.php"));
?>

<?php
//get_sidebar();
get_footer();
