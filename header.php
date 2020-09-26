<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( "charset" ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header">
      <div class="header__top">
        <div class="container">
          <?php get_search_form(); ?>

          <?php include "inc/social.php" ?>
        </div>
      </div>

      <div class="header__logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php echo get_theme_file_uri("/assets/img/logo.png") ?>" alt="Get Web Help">
        </a>
      </div>

      <nav class="header__navigation">
        <ul class="header__navigation__list">
          <li class="header__navigation__item">
            <a href="<?php echo site_url(); ?>">Home</a>
          </li>

          <li class="header__navigation__item">
            <a href="#!">Categories <i class="fas fa-chevron-down"></i></a>

            <div class="dropdown">
              <ul class="dropdown__list">
                <?php
                $categories = get_categories(array(
                  'orderby' => 'name',
                  'order'   => 'ASC'
                ));
                foreach ( $categories as $category ) { ?>
                  <li class="dropdown__item">
                    <a href="<?php echo get_category_link( $category->term_id ) ?>">
                      - <?php echo esc_html( $category->name ) ?>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </li>

          <li class="header__navigation__item <?php if(is_page('about-me')) echo "header__navigation__item--active" ?>">
            <a href="<?php echo site_url("/about-me"); ?>">About Me</a>
          </li>

          <li class="header__navigation__item <?php if(is_page('contact')) echo "header__navigation__item--active" ?>">
            <a href="<?php echo site_url("/contact"); ?>">Contact</a>
          </li>
        </ul>
      </nav>
    </header>

  