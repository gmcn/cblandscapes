<?php

$sub_head = get_field('service_sub_heading');

$serviceImage = get_field('main_content_area_image');
$serviceDetails = get_field('main_content_area_details');

?>


<div class="head">
  <div class="row no-gutters">
    <div class="col-lg-4 offset-md-1">
      <h1><?php echo the_title(); ?></h1>
      <h2><?php echo $sub_head; ?></h2>

    </div>
    <div class="col-lg-7 parallax" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) top center; background-size: cover" data-paroller-factor="-0.5" data-paroller-factor-sm="-0.2" data-paroller-factor-xs="-0.1">

    </div>
  </div>
</div>

<div class="container-fluid service-body <?php echo $post->post_name ?>">
  <div class="row">

    <div class="col-md-3 offset-md-1 service-body-copy">

      <?php the_content(); ?>

    </div>

    <div class="col-md-3 offset-md-1 service-body-img">

      <?php
      if( !empty( $serviceImage ) ): ?>
          <img src="<?php echo esc_url($serviceImage['url']); ?>" alt="<?php echo esc_attr($serviceImage['alt']); ?>" />
      <?php endif; ?>

    </div>

    <div class="col-md-4 service-body-details">

      <?php echo $serviceDetails; ?>

    </div>

  </div>
</div>
