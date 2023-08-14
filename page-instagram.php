<?php
/*
Template Name: INSTAGRAM
*/
?>
<?php get_header(); ?>
<main class="l-container">
  <section class="p-instagram">
    <h1 class="c-heading-section c-heading-section--center">
      FOLLOW US ON<br />
      INSTAGRAM
    </h1>
    <div class="p-instagram__icon c-icon--instagram">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/insta_icon.png" alt="" />
    </div>
    <div class="p-instagram__feed-container">
      <?php echo do_shortcode('[instagram-feed feed=2]')?>
    </div>
  </section>
</main>
<?php get_footer(); ?>