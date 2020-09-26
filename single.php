<?php get_header(); ?>

<div class="flex container mt-5">
  <div class="flex__two-of-three mr-3 of-hidden">
<?php
while(have_posts()) {
  the_post(); 
  gt_set_post_view(); ?>
    <article class="full-post">
      <div class="full-post__thumbnail mb-3">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>

      <div class="full-post__content">
        <p class="post-date"><?php the_time("F d, Y"); ?> / <?php echo get_the_category_list(", "); ?></p>

        <div class="post-title">
          <h3 class="post-title"><?php the_title(); ?></h3>
        </div>

        <div class="post-meta">
          <a href="#!"><i class="far fa-eye"></i> <span><?= gt_get_post_view(); ?></span></a>
          <a href="#!"><i class="fas fa-comments"></i> <span><?php comments_number(); ?></span></a>
        </div>

        <div class="paragraph"><?php the_content(); ?></div>
      </div>
    </article>

    <div class="full-post__bottom mt-5 mb-5">
      <ul class="post-tags">
        <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
      </ul>

      <div class="full-post__share">
        <span>Share:</span>
        <a href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>

        <a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>

        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=<?php bloginfo('name'); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>

        <a href="mailto:type%20email%20address%20here?subject=I want to share this post with you from - <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>%20%20%3A%20%20<?php echo get_the_excerpt(); ?>%20%20%2D%20%20%28%20<?php the_permalink(); ?>%20%29" title="Email to a friend/colleague" target="_blank"><i class="fas fa-envelope"></i></a>
      </div>
    </div>
<?php 
} 
include "inc/related-post.php";
include "inc/post-comment.php";
?>
  </div>

  <aside class="flex__one-of-three">
    <?php include "inc/widgets/posts.php" ?>
    <?php include "inc/widgets/archives.php" ?>
    <?php include "inc/widgets/newsletter.php" ?>
    <?php include "inc/widgets/tags.php" ?>
  </aside>
</div>

<?php get_footer(); ?>