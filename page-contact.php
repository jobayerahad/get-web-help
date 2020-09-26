<?php get_header(); ?>

<div class="container">
  <div class="mb-5">
    <img src="<?php echo get_theme_file_uri("/assets/img/curve-line.png") ?>" alt="curve line">
  </div>

<?php
while(have_posts()) {
  the_post();?>
  <section class="contact flex">
    <div class="flex__half">
      <h4 class="contact__heading mb-5">Get in touch</h4>

      <form action="" class="contact__form">
        <div class="contact__form--input">
          <input type="text" name="contact-name" id="contact-name" placeholder="name" class="form__input form__input--regular">
          <input type="email" name="contact-email" id="contact-email" placeholder="email" class="form__input form__input--regular">
        </div>

        <div class="contact__form--textarea">
          <textarea name="message" id="message" cols="30" rows="10" placeholder="message" class="form__textarea"></textarea>
        </div>

        <button class="btn btn--regular">Send</button>
      </form>
    </div>
    
    <div class="flex__half">
      <h4 class="contact__heading mb-5">Information</h4>

      <div class="contact__info">
        <i class="fas fa-map-marker-alt"></i>3919 New Cut Rd, Mary land, United State.
      </div>

      <div class="contact__info">
        <i class="fa fa-phone"></i>(12)-100-100-100
      </div>

      <div class="contact__info">
        <i class="fa fa-envelope"></i>deercreative@gmail.com
      </div>

      <div class="contact__social">
        <?php include "inc/social.php" ?>
      </div>
    </div>
  </section>
<?php } ?>
</div>

<?php get_footer(); ?>