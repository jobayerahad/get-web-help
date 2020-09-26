<?php get_header(); 

include "inc/popular-post.php";
include "inc/featured-post.php" ?>

<div class="flex container mt-5">
  <div class="flex__two-of-three mr-3 of-hidden">
<?php
while(have_posts()) {
  the_post(); ?>
    <article class="single-post">
      <div class="single-post__container">
        <div class="single-post__thumbnail">
          <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail(); ?>
          </a>
        </div>

        <div class="single-post__content">
          <p class="post-date"><?php the_time("F d, Y"); ?> / <?php echo get_the_category_list(", "); ?></p>

          <a href="<?php the_permalink(); ?>" class="post-title">
            <h4><?php the_title(); ?></h4>
          </a>

          <div class="post-meta">
            <a href="#!"><i class="far fa-eye"></i> <span><?= gt_get_post_view(); ?></span></a>
            <a href="#!"><i class="fas fa-comments"></i> <span><?php comments_number(); ?></span></a>
          </div>

          <div class="paragraph">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" rel="nofollow" class="btn btn--text">Read More <i class="fa fa-long-arrow-right"></i></a>
          </div>

        </div>
      </div>

      <div class="single-post__curve mt-5">
        <img src="<?php echo get_theme_file_uri("/assets/img/curve-line.png") ?>" alt="curve line">
      </div>
    </article>
<?php } ?>
    <div class="pagination mb-5"><?php echo paginate_links(); ?></div>
  </div>

  <aside class="flex__one-of-three">
    <?php include "inc/widgets/about.php" ?>
    <?php include "inc/widgets/social.php" ?>
    <?php include "inc/widgets/newsletter.php" ?>
    <?php include "inc/widgets/tags.php" ?>
  </aside>
</div>

<?php get_footer(); ?>