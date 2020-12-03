<div class="page-blog">

	<!-- <div class="hero"> -->
		<div class="row no-gutters">

			<div class="col-lg-3 offset-md-1">

				<div class="page-blog_cats">

					<p>Blog</p>

					<ul>
						<?php

						$categories = get_categories( array(
						    'orderby' => 'name',
						    'order'   => 'ASC',
								'hide_empty' => true,
						) ); ?>

						<?php foreach( $categories as $category ) : ?>

							<li>
								<a href="/category/<?php echo $category->slug ?>"><?php echo $category->cat_name ?></a>

							</li>


						<?php endforeach ?>
					</ul>




				</div>



				<div class="ruler">
					<img src="<?php echo get_template_directory_uri(); ?>/images/scroll-blog.png" alt="Scroll">
				</div>

			</div>

			<div class="col-lg-7 offset-md-1">

				<?php
				if ( have_posts() ) : ?>

					<?php /* Start the Loop */
					$i = 1; while ( have_posts() ) : the_post();

					$author_id = get_the_author_meta( 'ID' );

					?>



					<div class="row no-gutters blog-entry">
						<div class="col-12">
							<?php echo get_the_post_thumbnail(); ?>
						</div>
						<div class="col-md-3 page-blog_title page-blog_count">
							<?php if ($i <= 9): ?>0<?php endif; ?><?php echo $i; ?>
						</div>
						<div class="col-md-9 page-blog_title page-blog_info">

							<p class="entry-title"><?php the_title(); ?></p>

							<p class="byline">Author: <?php echo get_the_author_meta( 'display_name', $author_id ); ?>     |     Date: <?php echo get_the_date('d.m.y') ?></p>

							<a class="align-items-center" href="<?php the_permalink(); ?>">

								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"><path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

							</a>
						</div>
					</div>

					<?php $i++; endwhile;

					the_posts_navigation();

				endif; ?>


			</div>

		</div>
	<!-- </div> -->

</div>
