<?php
/**
 * Template Name: Portfolio Page
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

<div class="page-portfolio">

	<div class="page-portfolio_img">

		<a class="fancybox" rel="group" href="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">


			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" />

		</a>

	</div>

	<div class="page-portfolio_gallery">

		<?php
		$images = get_field('gallery');
		if( $images ) : ?>
		<!-- Slider main container -->
		<div class="swiper-container project-gallery">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">

				<?php foreach( $images as $image ) : ?>

					<div class="swiper-slide">

						<a class="fancybox" rel="group" href="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

							<img src="<?php echo esc_url($image['sizes']['medium-square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

						</a>


					</div>

				<?php endforeach; ?>

			</div>
			<!-- If we need pagination -->
			<!-- <div class="swiper-pagination"></div> -->



		</div>
		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev-unique">

			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" fill="#fff" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

		</div>
		<div class="swiper-button-next-unique">

			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" fill="#fff" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

		</div>
		<?php endif; ?>

	</div>




	<div class="page-portfolio_testimonials">



		<?php if( have_rows('testimonials') ): ?>
			<div class="project-testimonials">
				<div class="swiper-wrapper">

			    <?php while( have_rows('testimonials') ): the_row();

		        $testimonial_name = get_sub_field('testimonial_name');
						$testimonial_location = get_sub_field('testimonial_location');
						$testimonial_year = get_sub_field('testimonial_year');
						$testimonial = get_sub_field('testimonial');

	        ?>

		        <div class="swiper-slide">

							<p class="testimonial_head"><?php echo $testimonial_name ?> - <?php echo $testimonial_location ?> - <?php echo $testimonial_year ?></p>

							<p><?php echo $testimonial ?></p>

							<img src="<?php echo get_template_directory_uri(); ?>/images/5-star-review.svg" alt="5 star review">

						</div>

			    <?php endwhile; ?>

				</div>
			</div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev-testimonials">

			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" fill="#fff" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

		</div>
		<div class="swiper-button-next-testimonials">

			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" fill="#fff" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

		</div>
		<?php endif; ?>


	</div>




</div>


<?php
//get_sidebar();
get_footer();
