<div class="page-contact">

  <!-- <div class="hero"> -->
    <div class="row no-gutters">

      <div class="col-lg-3 offset-md-1">
        <?php echo the_content(); ?>


        <div class="ruler">
          <img src="<?php echo get_template_directory_uri(); ?>/images/scroll-contact.png" alt="Scroll">
        </div>

      </div>

      <div class="col-lg-7 offset-md-1">
        <?php echo get_the_post_thumbnail(); ?>

        <div class="page-contact__form_wrap">
          <?php echo do_shortcode('[contact-form-7 id="7" title="Contact Form"]') ?>
        </div>

      </div>

    </div>
  <!-- </div> -->

</div>
