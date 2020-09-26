<div class="widget widget-about">
  <div class="heading-primary heading-primary--small">
    <h6>About Me</h6>
  </div>

  <div class="widget-about__thumbnail mb-2">
    <img src="<?php echo get_avatar_url(1) ?>" alt="<?php echo get_the_author_meta( 'nicename', 1 ); ?>">
  </div>

  <p class="widget-about__text">
    <?php echo get_the_author_meta( "description", 1 ) ?>
  </p>
</div>
