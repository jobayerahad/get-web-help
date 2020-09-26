<?php get_header(); ?>

<div class="container">
  <div class="mb-5">
    <img src="<?php echo get_theme_file_uri("/assets/img/curve-line.png") ?>" alt="curve line">
  </div>

<?php
while(have_posts()) {
  the_post();?>
  <article class="pages">
    <div class="pages__heading">
      <h2><?php the_title(); ?></h2>
    </div>

    <div class="pages__thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>

    <div class="paragraph">
      <?php the_content(); ?>
    </div>
  </article>
<?php } ?>
</div>

<?php get_footer(); ?>