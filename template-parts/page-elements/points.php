<?php if( have_rows('about_points') ): ?>
    <div class="container-fluid about_points">
      <div class="row">


    <?php $i = 1; while( have_rows('about_points') ): the_row();
        $point_icon = get_sub_field('point_icon');
        $point_name = get_sub_field('point_name');
        ?>
        <div class="col-6 col-xl-3 about_points__point">



          <div class="row">

            <div class="col-12 about_points__point--img">
              <img src="<?php echo $point_icon; ?>" alt="<?php echo $point_name; ?>">
            </div>

            <div class="col-md-8 about_points__point--copy">
              <p><?php echo $point_name; ?></p>
            </div>
            <div class="col-md-4 about_points__point--counter align-self-center">
              <p><?php echo $i; ?></p>
            </div>
          </div>




        </div>
    <?php $i++; endwhile; ?>
    </div>
  </div>
<?php endif; ?>
