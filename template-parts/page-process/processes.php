<?php if( have_rows('processes') ): ?>

	<div class="container-fluid processes">
		<div class="row processes_started">
		 <div class="col-lg-6 offset-lg-6">
			 <p>Let's get started</p>
		 </div>
		</div>
	</div>

	 <div class="container-fluid processes">


	 <?php $i = 1; ?>

	 <?php while( have_rows('processes') ): the_row();

		 // vars
		 $process_title = get_sub_field('process_title');
		 $process_copy = get_sub_field('process_copy');
		 $process_image = get_sub_field('process_image');
		 $link = get_sub_field('link');

		 ?>

			 <div class="row processes_process">

				 <?php if($i % 2) : ?>

					 <div class="col-md-6 col-lg-5 col-xl-8 align-self-center">

						<?php if( !empty( $process_image ) ): ?>
					    <img src="<?php echo esc_url($process_image['url']); ?>" alt="<?php echo esc_attr($process_image['alt']); ?>" loading="lazy" />
						<?php endif; ?>

					 </div>

					 <div class="col-md-6 col-lg-7 col-xl-4 processes_process_copy">

						 <div class="align-self-center">

						 	<h2><?php echo $process_title ?></h2>
							<?php echo $process_copy ?>

						 </div>

						 <?php  if( $link ):
							 $link_url = $link['url'];
							 $link_title = $link['title'];
							 $link_target = $link['target'] ? $link['target'] : '_self';
							 ?>
							 <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

								 <svg xmlns="http://www.w3.org/2000/svg" width="17.797" height="30.483" viewBox="0 0 17.797 30.483">
								   <path id="Path_154" data-name="Path 154" d="M822,406.336v10.1l6.005,5.143L822,426.721v10.1l17.8-15.242Z" transform="translate(839.797 436.819) rotate(180)"/>
								 </svg>


								 <?php echo esc_html( $link_title ); ?>


							 </a>
						 <?php endif; ?>

					 </div>

					 <?php else: ?>

						 <div class="col-md-6 col-lg-5 col-xl-8 align-self-center d-block d-md-none">

							<?php if( !empty( $process_image ) ): ?>
						    <img src="<?php echo esc_url($process_image['url']); ?>" alt="<?php echo esc_attr($process_image['alt']); ?>" loading="lazy" />
							<?php endif; ?>

						 </div>

						 <div class="col-md-6 col-lg-7 col-xl-4 processes_process_copy">

							 <div class="align-self-center">

								<h2><?php echo $process_title ?></h2>
								<?php echo $process_copy ?>

							 </div>

							 	<?php  if( $link ):
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

										<svg xmlns="http://www.w3.org/2000/svg" width="17.797" height="30.483" viewBox="0 0 17.797 30.483">
	 								   <path id="Path_154" data-name="Path 154" d="M822,406.336v10.1l6.005,5.143L822,426.721v10.1l17.8-15.242Z" transform="translate(839.797 436.819) rotate(180)"/>
	 								 </svg>


										<?php echo esc_html( $link_title ); ?>


									</a>
								<?php endif; ?>

						 </div>

						 <div class="col-md-6 col-lg-5 col-xl-8 align-self-center d-none d-md-block">

							 <?php if( !empty( $process_image ) ): ?>
	 					    <img src="<?php echo esc_url($process_image['url']); ?>" alt="<?php echo esc_attr($process_image['alt']); ?>" loading="lazy" />
	 						<?php endif; ?>

						 </div>

				 <?php endif; ?>

				 </div>

	 <?php $i++; endwhile; ?>

	 </div>

 <?php endif; ?>
