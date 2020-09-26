<div class="widget widget-posts">
  <div class="heading-primary heading-primary--small">
    <h6>Latest Posts</h6>
  </div>

<?php
$latestPosts = new WP_Query(array(
  'posts_per_page' => 5
));
while($latestPosts->have_posts()) {
  $latestPosts->the_post(); ?>
  <div class="widget-posts__container">
    <div class="widget-posts__thumbnail">
      <?php echo get_the_post_thumbnail(); ?>
    </div>

    <div class="widget-posts__content">
      <a href="<?php the_permalink(); ?>" class="post-title">
        <h5><?php the_title(); ?></h5>
      </a>
      <div class="post-category"><span>in</span> <?php echo get_the_category_list(", "); ?></div>
    </div>
  </div>
<?php } wp_reset_postdata(); ?>

</div>