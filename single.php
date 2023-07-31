<?php get_header(); ?>

<main class="l-container">
  <article class="p-topics-detail">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="p-topics-detail__heading c-post-heading">
          <?php the_title(); ?>
        </h1>

        <section class="p-topics-detail__body">
          <div class="p-topics-detail__date">
            <time class="p-posts-list__date c-date" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
          </div>
          <?php echo the_content(); ?>
          <!-- 投稿内容 ここから -->
          <!--
            <figure class="p-topics-detail__top-image">
              <img src="http://ecoala.local/wp-content/uploads/2023/07/sample1-300x200.jpg" alt="" />
            </figure>
            <div class="p-topics-detail__content">
              私は今日もうこの安心院というものの時に出なくで。ひょろひょろ結果に発展家もけっしてその観念でないだけを越しからならたには切望連れうたて、たったには打ち壊さうないたた。ついでからあるだのもまして場合を無論ますうです。<br>
              ああ岡田さんの保留進みどう破壊がしで自信こういう異存それらか約束にというご病気らしくですたらたて、こうした前はここか男口調がなっば、大森君ののを坊ちゃんのこれらにけっして大楽と思いてそれ時代へごお話より溯っように何ともご想像のなりないりて、けっしてぼうっと発展に述べるですてならですのを引けるたます。それでただ実主人にこだわりのもいっそ不愉快と尽さないて、その萍にはなるますてという知人にいうていただきたた。この後豆腐の後その嚢も私末が挙げでかと嘉納さんに考えうで、国家の時分ないという不誤解ますたですて、自分の時で中に時間なりの間接が十月してしまって、わざわざの今がいてそのところでいよいよしですですと行きないはずでて、長くですたてこうご豆腐知らです事ないますた。あるいは学校か大変か講演に立っあって、絶対中ただに眺めるとならないうちをご講演の今にしませない。<br>
              前がはいよいよ怒らから直さありたなですから、大分ただいま欠けてお話しは当然悪いだはずた。<br>
              けれどもご注意を見からはしまいですのうと、空位がは、まああれかして待っれれたなくしせですますと定めるから、教師はするて出しですた。初めてどうしてももいったい国家という来るですて、どこがは今日末かも私のご道楽はだるしいんです。
            </div>
          -->
          <!-- ./投稿内容 ここまで -->
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