<?php get_header(); ?>

<main class="l-container">
  <article class="p-topics-detail">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="p-topics-detail__heading c-heading-section--post">
          <?php the_title(); ?>
        </h1>

        <section class="p-topics-detail__body">
          <div class="p-topics-detail__date">
            <time class="p-posts-list__date c-date" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
          </div>
          <?php
          $eye_catch = get_field('eye_catch');
          if ($eye_catch) :
          ?>
            <figure class="p-topics-detail__top-image">
              <img src="<?php echo $eye_catch; ?>" alt="" />
            </figure>
          <?php endif; ?>
          <div class="p-topics-detail__content">
            <?php echo the_content(); ?>
          </div>
      <?php endwhile;
    endif; ?>
        </section>
        <!-- pagination -->

        <ul class="p-topics-detail__pagination c-pagination">
          <li class="c-pagination__item">
            <span class="c-pagination__item-link">
              <?php previous_post_link('%link', '<span class="c-pagination__arrow c-pagination__arrow--left"></span>'); ?>
            </span>
          </li>
          <li class="c-pagination__item">
            <a class="c-pagination__item-link" href="<?php echo get_page_link(get_page_by_path('topics')->ID) ?>">一覧にもどる</a>
          </li>
          <li class="c-pagination__item">
            <span class="c-pagination__item-link">
              <?php next_post_link('%link', '<span class="c-pagination__arrow c-pagination__arrow--right"></span>'); ?>
            </span>
          </li>
        </ul>
  </article>
</main>
<?php get_footer(); ?>