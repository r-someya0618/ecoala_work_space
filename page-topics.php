<?php
/*
  Template Name: topics
*/
?>
<?php get_header(); ?>
<?php
$args = [
  'posts_per_page' => 5,
  'paged' => $paged,
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC'
];

$the_query = new WP_Query($args);
?>

<main class="l-main-container">
  <section class="p-topics-index">
    <h1 class="c-section-heading c-section-heading--center"><?php the_title(); ?></h1>
    <?php if ($the_query->have_posts()) : ?>
      <ul class="p-posts-list">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="p-posts-list__list-item c-posts-card">
            <a class="c-posts-card__inner" href="<?php echo get_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="p-posts-list__thumbnail c-posts-card__thumbnail">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php else : ?>

                <img class="p-posts-list__thumbnail c-posts-card__thumbnail" src="<?php echo get_template_directory_uri(); ?>/image/thumb.png" alt="">
              <?php endif; ?>
              <div class="p-posts-list__body c-posts-card__body">
                <time class="p-posts-list__date c-date" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
                <p class="p-posts-list__title c-posts-card__title">
                  <?php the_title(); ?>
                </p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    <!-- pagination -->
    <ul class="p-topics-index__pagination c-pagination">
      <?php
        $page_uri = 'topics';
        $base_url = str_replace($page_uri, $page_uri . '%_%', get_pagenum_link(1));

        if ($the_query->max_num_pages > 1) {
          $pagination = paginate_links(array(
            'base'     => $base_url,
            'format'   => '/page/%#%',
            'current'  => max(1, $paged),
            'mid_size' => 1,
            'total'    => $the_query->max_num_pages,
            'prev_text' => true,
            'prev_text' => '<span class="c-pagination__arrow c-pagination__arrow--left"></span>',
            'next_text' => '<span class="c-pagination__arrow c-pagination__arrow--right"></span>',
            'type' => 'array'
          ));
        }
        wp_reset_postdata();
      ?>

      <?php
      $i = 0;
      foreach ($pagination as $page) :
      ?>
        <li class="c-pagination__item">
          <span class="c-pagination__item-link c-pagination__item-link--list <?php if ($paged == $i) echo 'is-active' ?>">
            <?php echo $page; ?>
          </span>
        </li>
      <?php $i++;
      endforeach ?>
    </ul>
  </section>
</main>

<?php get_footer(); ?>