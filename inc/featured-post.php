<section class="container mt-5">
  <div class="heading-primary heading-primary--large">
    <h6>Featured Posts</h6>
  </div>

  <?php 
  $featuredPosts = new WP_Query(array(
    'meta_key' => '_is_ns_featured_post',
    'meta_value' => 'yes'
  ));
  ?>
  <div class="featured flex">
    <div class="flex__two-of-three">
      <div class="featured__slider owl-carousel" id="featured">
        <?php
        while($featuredPosts->have_posts()) {
        $featuredPosts->the_post(); ?>
        <figure class="featured__figure item">
          <?php echo get_the_post_thumbnail(); ?>

          <figcaption class="carousel__content">
            <p class="post-date mb-2">
              <?php the_time("F d, Y"); ?> / <?php echo get_the_category_list(", "); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="post-title">
              <h4><?php the_title(); ?></h4>
            </a>
          </figcaption>
        </figure>
        <?php } ?>
      </div>
    </div>

    <div class="featured__indicator flex__one-of-three">
      <ol class="featured__indicator__list">
      <?php $i = 1;
      while($featuredPosts->have_posts()) {
      $featuredPosts->the_post(); ?>
        <li class="featured__indicator__item">
          <span>0<?php echo $i; ?></span>
          <a href="<?php the_permalink(); ?>">
            <h5><?php the_title(); ?></h5>
          </a>
        </li>
      <?php $i++; } ?>
      </ol>
    </div>
  </div>

  <?php wp_reset_postdata(); ?>
</section>