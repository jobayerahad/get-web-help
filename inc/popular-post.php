<div class="owl-carousel" id="popular">
  <?php
  $popularpost  = new WP_Query(array(
    'posts_per_page' => 8,
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
  ));
  while($popularpost->have_posts()) {
  $popularpost->the_post(); ?>
  <div class="carousel__item item">
    <div class="carousel__thumbnail">
      <?php echo get_the_post_thumbnail(); ?>
    </div>

    <div class="carousel__content">
      <p class="post-date"><?php the_time("F d, Y"); ?> / <?php echo get_the_category_list(", "); ?></p>

      <a href="<?php the_permalink(); ?>" class="post-title">
        <h5><?php the_title(); ?></h5>
      </a>
    </div>
  </div>
  <?php } wp_reset_postdata(); ?>
</div>