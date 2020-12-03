<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head();

	$description = get_bloginfo( 'description', 'display' );

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>




		<nav class="navbar navbar-expand-md navbar-light fixed-top">
	    <a class="navbar-brand" href="/">

				<img class="d-md-none d-lg-none" src="<?php echo get_template_directory_uri(); ?>/images/logo-mob.svg" alt="<?php echo $description ?>">

				<img class="d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo $description ?>">
			</a>

	  </nav>

		<div class="menu-wrap">

			<a href="/">

				<img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/logo-menu.svg" alt="<?php echo $description ?>">

			</a>


			<nav class="menu">

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'container'       => 'div',
						'container_class' => 'icon-list',
						) );
					?>

			</nav>

			<div class="menu-wrap_icons">
				<ul>
					<li>

						<a href="https://www.facebook.com/Cblandscapescraigavon/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.svg" alt="CB Landscapes on Facebook">
						</a>

					</li>
					<li>

						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/insta-icon.svg" alt="CB Landscapes on Instagram">
						</a>

					</li>
					<li>

						<a href="mailto:contact@cblandscapes.net">
							<img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.svg" alt="Email CB Landscapes">
						</a>

					</li>
					<li>

						<a href="tel:+447793458474">

							<img src="<?php echo get_template_directory_uri(); ?>/images/call-icon.svg" alt="Call CB Landscapes">

						</a>

					</li>
				</ul>
			</div>




			<!-- <button class="close-button" id="close-button">Close Menu</button> -->
		</div>

	</header><!-- header -->

	<a href="/contact" class="menu-quote">Get a quote</a>

	<button class="menu-button" id="open-button">Open Menu</button>

	<div id="content" class="site-content">
