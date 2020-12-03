<div class="single-blog">

  <?php echo get_the_post_thumbnail(); ?>

	<!-- <div class="hero"> -->
		<div class="row no-gutters">

			<div class="col-lg-3 offset-md-1">

        <h1>

          <?php the_title(); ?>

        </h1>



				<div class="ruler">
					<img src="<?php echo get_template_directory_uri(); ?>/images/scroll-blog.png" alt="Scroll">
				</div>

			</div>

			<div class="col-lg-7 offset-md-1">

				<?php the_content(); ?>

			</div>

		</div>
	<!-- </div> -->

</div>
