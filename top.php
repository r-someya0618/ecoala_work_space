<?php
/*
Template Name: top
*/
?>
<?php get_header(); ?>
<?php
$page_obj = get_page_by_path('top');
$page_id = $page_obj->ID;
$slider_data = get_field('top_slider');
$slider_imgs = [];

// スライダー画像の設定のあるものだけを抽出
foreach ($slider_data as $key => $value) {
  if (!$value['slider_img_pc'] || !$value['slider_img_sp']) {
    continue;
  }
  array_push($slider_imgs, $value);
}
?>

<main>
  <section id="kv-area" class="c-slider">
    <!-- スライダー部 -->
    <ul class="slider full">
      <?php foreach ($slider_imgs as $img) : ?>
        <li>
          <img class="pc" src="<?php echo $img['slider_img_pc'] ?>" alt="">
          <img class="sp" src="<?php echo $img['slider_img_sp'] ?>" alt="">
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
  <section class="p-top-introduction l-container">
    <h1 class="p-top-introduction__heading c-heading-section--smaller c-heading-section--center">
      自分だけのiDryerがついに誕生。<br>
      ECOALA AI Pro Style
    </h1>
    <div class="p-top-introduction__movie">
    </div>
    <section class="p-top-introduction__content l-container l-container-flex l-container-flex--between">
      <div class="p-top-introduction__text-content">
        <h2 class="p-top-introduction__text-content-heading c-heading-section--smaller">
          わたし<span class="u-narrow-text--hard">に</span>「いい<span class="u-narrow-text--hard">」</span>が、<br>
          いちば<span class="u-narrow-text--hard">ん</span>「いい<span class="u-narrow-text--hard">」</span>。
        </h2>
        <div class="p-top-introduction__text-content-lead">
          <p class="p-top-introduction__text-content-line">
            髪質はちがうのに。 <br>
            <span class="u-narrow-text">みんな同じドライヤーを使っているの？</span>
          </p>
          <p class="p-top-introduction__text-content-line">
            待ちに待った自分の髪質に合う<br>
            自分だけのiDryerがついに誕生。
          </p>
          <p class="p-top-introduction__text-content-line">
            わたし<span class="u-narrow-text--mid">に</span>「いい<span class="u-narrow-text--mid">」</span>が<span class="u-narrow-text--mid">、</span>いちば<span class="u-narrow-text--mid">ん</span>「いい<span class="u-narrow-text--mid"></span><span class="u-narrow-text--mid">」</span>。 </span><br>
            それが、自分だけのiDryer。
          </p>
        </div>
        <div class="p-top-introduction__button c-button c-button--round">
          <a href="/products/ai_pro_style/">Product Page</a>
        </div>
      </div>
      <div class="p-top-introduction__img-content">
        <picture>
          <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/product/product1.webp" type="image/webp">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/top/product/product1.png" alt="">
        </picture>
      </div>
    </section>
  </section>

  <section class="p-top-topics l-container">
    <h1 class="p-top-topics__heading c-heading-section--large c-heading-section--center">
      TOPICS
    </h1>
    <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 4
    ];
    $the_query = new WP_Query($args);
    ?>
    <div class="p-top-topics__posts-list">
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <a class="p-top-topics__post-link-wrap" href="<?php echo get_permalink(); ?>">
            <dl class="p-top-topics__posts-list-item c-posts-list-card">
              <dd class="c-posts-list__thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/thumb.png" alt="">
                <?php endif; ?>
              </dd>
              <dd class="p-top-topics__posts-list-date c-posts-list-card__date">
                <time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
              </dd>
              <dt class="p-top-topics__posts-list-title c-posts-list-card__title">
                <?php the_title(); ?>
              </dt>
            </dl>
          </a>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else : ?>
        <div class="c-txt--30 c-txt--center u-margin__x--auto">記事が見つかりませんでした。</div>
      <?php endif; ?>
    </div>
    <div class="p-top-topics__button c-button c-button--round">
      <a href="/topics/">Read More</a>
    </div>
  </section>

  <section class="p-top-kv-section">
    <h1 class="p-top-kv-section__heading c-heading-section--large c-heading-section--center c-txt--font-e">
      CONCEPT
    </h1>
    <div class="p-top-kv-section__kv-container p-top-kv-section__kv-container--concept">
      <div class="p-top-kv-section__kv-container-inner l-container l-container--wide">
        <section class="p-top-kv-section__card p-top-kv-section__card">
          <h2 class="p-top-kv-section__card-title c-heading-section--small c-txt--font-e">ECOALAについて</h2>
          <p class="p-top-kv-section__card-txt c-txt--20">
            ただ髪を乾かすだけではなく、<br />
            多くの人が髪や頭皮の悩みから解き放たれ<br />
            心や表情まで軽やかになれるような体験を。
          </p>
          <div class="p-top-kv-section__card-button
              c-button c-button--round">
            <a href="/products/ai_pro_style/">Read More</a>
          </div>
        </section>
      </div>
    </div>
  </section>
  <section class="p-top-kv-section p-top-kv-section--product">
    <h1 class="p-top-kv-section__heading c-heading-section--large c-heading-section--center  c-txt--font-e">
      PRODUCT
    </h1>
    <!-- AI Pro Style -->
    <div class="p-top-kv-section__kv-container p-top-kv-section__kv-container--ai-prostyle">
      <div class="p-top-kv-section__kv-container-inner l-container l-container--wide">
        <div class="p-top-kv-section__kv-contents p-top-kv-section__kv-contents--right">
          <h2 class="p-top-kv-section__product-name">
            <div class="p-top-kv-section__product-name-logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/top/product/iDryer_logo.svg" alt="">
            </div>
          </h2>
          <section class="p-top-kv-section__card p-top-kv-section__card--ai-prostyle p-top-kv-section__card--right">
            <h3 class="p-top-kv-section__card-title c-txt--30 c-txt--font-d">
              わたし<span class="u-narrow-text--mid">に</span>「いい<span class="u-narrow-text--mid">」</span>が<span class="u-narrow-text--mid">、</span><br>
              いちば<span class="u-narrow-text--mid">ん</span>「いい<span class="u-narrow-text--mid">」</span>。
            </h3>
            <p class="p-top-kv-section__card-txt c-txt--20">
              髪は一生もの。<br>
              だから最適なヘアドライを届けたい。<br>
              未だかつてない次世代ドライヤーが誕生しました。
            </p>
            <div class="p-top-kv-section__card-button c-button c-button--round">
              <a href="/products/ai_pro_style/">Product Page</a>
            </div>
          </section>
        </div>
      </div>
    </div>

    <section class="p-top-feature-section l-container l-container--wide">
      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb1.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb1.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            高性能・高機能<br>
            プロ推奨ドライヤー
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            家庭用ドライヤーの域を超えた、プロの美容師も使いやすい機能を搭載。
          </dd>
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/ai_pro_style/?section_id=3">Read More</a>
            </div>
          </dd>
        </dl>
      </div>

      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb2.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb2.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            世界に認められた<br>
            高いデザイン性
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            誰でも使いやすいように考え抜かれたUI。モダンで上質なデザインに。
          </dd>
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/ai_pro_style/?section_id=4">Read More</a>
            </div>
          </dd>
        </dl>
      </div>

      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb3.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb3.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            富士山溶岩配合の<br>
            セラミックノズル
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            マイナスイオンと遠赤外線で、髪と頭皮にうるおいをもたらす。
          </dd>
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/ai_pro_style/?section_id=5">Read More</a>
            </div>
          </dd>
        </dl>
      </div>

      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb4.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/thumb4.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            スペック＆<br>
            安心のまごころ保証
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            万が一のトラブルに備えた安心保証を全てのお客様にご提供いたします。
          </dd>
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/ai_pro_style/?section_id=6">Read More</a>
            </div>
          </dd>
        </dl>
      </div>
    </section>

    <!-- Dryer -->
    <div class="p-top-kv-section__kv-container p-top-kv-section__kv-container--dryer">
      <div class="p-top-kv-section__kv-container-inner l-container l-container--wide">
        <div class="p-top-kv-section__kv-contents p-top-kv-section__kv-contents--right">
          <h2 class="p-top-kv-section__product-name p-top-kv-section__product-name--white">
            <div class="p-top-kv-section__product-name-inner u-inline-block c-txt--font-e">
              <span class="c-heading-section--product-name">Quick Hair <br class="sp">Dryer</span>
            </div>
          </h2>
          <section class="p-top-kv-section__card p-top-kv-section__card--dryer p-top-kv-section__card--right">
            <h3 class="p-top-kv-section__card-title c-txt--30 c-txt--font-d">
              もっとうるおう、<br>
              もっと美しく。
            </h3>
            <p class="p-top-kv-section__card-txt c-txt--20">
              ファミリーでもひとりでも、<br>
              髪と地肌に合わせたヘアケアを叶えるドライヤー。<br>
              スタイリングや気分に合わせて楽しんで。
            </p>
            <div class="p-top-kv-section__card-button c-button c-button--round">
              <a href="/products/quick_hair_dryer/">Product Page</a>
            </div>
          </section>
        </div>
      </div>
    </div>

    <section class="p-top-feature-section l-container l-container--wide">
      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb1.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb1.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            ヘアドライで<br>
            髪と頭皮を健やかにケア
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            使うたびに髪と頭皮をやさしくケア。<br>
            あなた専属のサロンへ。
          </dd>
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/quick_hair_dryer/?section_id=3">Read More</a>
            </div>
          </dd>
        </dl>
      </div>

      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb2.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb2.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            4つの風温モードと<br>
            ミネラルマイナスイオン
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            髪や頭皮の状態に合わせて選べる多機能なモードを搭載。
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/quick_hair_dryer/?section_id=4">Read More</a>
            </div>
          </dd>
        </dl>
      </div>

      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb3.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb3.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            富士山溶岩配合ノズル&<br>
            オールインワンセット
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            自然の力を利用して今までにないサラサラのツヤ髪を作り出します。
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/quick_hair_dryer/?section_id=5">Read More</a>
            </div>
          </dd>
        </dl>
      </div>

      <div class="p-top-feature-section__card">
        <div class="p-top-feature-section__card-thumb">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb4.webp" type="image/webp">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/top/card/dryer_thumb4.png" alt="">
          </picture>
        </div>
        <dl class="p-top-feature-section__card-body">
          <dt class="p-top-feature-section__card-title c-txt--30 c-txt--font-d">
            スペック＆<br>
            安心のまごころ保証
          </dt>
          <dd class="p-top-feature-section__card-text c-txt--20">
            万が一のトラブルに備えた安心保証を全てのお客様にご提供いたします。
          <dd>
            <div class="p-top-feature-section__card-button c-button c-button--round">
              <a href="/products/quick_hair_dryer/?section_id=6">Read More</a>
            </div>
          </dd>
        </dl>
      </div>
    </section>
  </section>

  <section class="p-top-kv-section">
    <h1 class="p-top-kv-section__heading c-heading-section--large c-heading-section--center">
      SALON
    </h1>
    <div class="p-top-kv-section__kv-container p-top-kv-section__kv-container--salon">
      <div class="p-top-kv-section__kv-container-inner l-container l-container--wide">
        <div class="p-top-kv-section__kv-contents">
          <section class="p-top-kv-section__card">
            <h2 class="p-top-kv-section__card-title c-heading-section--small c-txt--font-d">
              試す・体感する。<br>
              お取り扱い店舗一覧。
            </h2>
            <p class="p-top-kv-section__card-txt c-txt--20">
              エコアラドライヤーは弊社に認定された<br>
              サロン・ホテルからのみ購入できます。<br>
              是非、お近くのサロンでお試しください。
            </p>
            <div class="p-top-kv-section__card-button c-button c-button--round">
              <a href="/salon/">Read More</a>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="p-top-kv-section p-top-kv-section--dealer">
    <h1 class="p-top-kv-section__heading c-heading-section--large c-heading-section--center">
      DEALER
    </h1>
    <div class="p-top-kv-section__kv-container p-top-kv-section__kv-container--dealer">
      <div class="p-top-kv-section__kv-container-inner l-container l-container--wide">
        <div class="p-top-kv-section__kv-contents p-top-kv-section__kv-contents--right">
          <section class="p-top-kv-section__card p-top-kv-section__card--right">
            <h2 class="p-top-kv-section__card-title c-heading-section--small c-txt--font-d">
              お取り扱い<br>
              認定店になるために。
            </h2>
            <p class="p-top-kv-section__card-txt c-txt--20">
              弊社にお取扱店として認定されますと<br>
              お客様にドライヤーをご紹介いただけます。<br>
              詳しくはお問い合わせください。
            </p>
            <div class="p-top-kv-section__card-button c-button c-button--round">
              <a href="/dealer/">Read More</a>
            </div>
          </section>
        </div>
      </div>

    </div>
  </section>

  <section class="p-top-instagram">
    <h1 class="p-top-instagram__heading c-heading-section--large c-heading-section--center">
      INSTAGRAM
    </h1>
    <div class="p-top-instagram__icon c-icon--instagram">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/insta_icon.png" alt="">
    </div>
    <div class="p-top-instagram__container">
      <div id="js-iscroll-wrapper" class="p-top-instagram__scroll-wrapper">
        <div class="p-top-instagram__scroll-field scroll">
          <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
      </div>
      <div class="p-top-instagram__button c-button c-button--round">
        <a href="/instagram/">Read More</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>