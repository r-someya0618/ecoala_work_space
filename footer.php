<footer class="footer">
  <div class="footer__container">
    <div class="footer__left">
      <div class="footer__left--logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common_logo.svg" alt="ECOALA" /></a>
      </div>
      <div class="footer__left--sns">
        <a href="https://twitter.com/lovestocker81/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_icon_twitter.svg" alt="Twitter - ラブストック【公式】 〜こだわりの商品紹介サービス〜" /></a>
        <a href="https://www.instagram.com/ecoala_dryer/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_icon_instagram.svg" alt="Instagram - ECOALA（エコアラ）ドライヤー【公式】" /></a>
      </div>
    </div>
    <div class="footer__right">
      <div class="footer__right--top">
        <div class="footer__link">
          <h3 class="footer__title">PRODUCT</h3>
          <ul class="footer__child-list">
              <li><a href="/products/ai_pro_style/" class="footer__link--e" title="AI Pro Style">AI Pro Style</a></li>
              <li><a href="/products/quick_hair_dryer/" class="footer__link--e" title="Quick Hair Dryer">Quick Hair Dryer</a></li>
          </ul>
        </div>
        <div class="footer__link">
            <h3 class="footer__title">SALON</h3>
            <ul class="footer__child-list">
              <li><a href="/salon/" title="試す・体感する">試す・体感する</a></li>
              <li><a href="/salon/#shoplist" title="お取り扱い店舗一覧">お取り扱い店舗一覧</a></li>
            </ul>
        </div>
        <div class="footer__link">
          <h3 class="footer__title">INSTAGRAM</h3>
          <ul class="footer__child-list">
              <li><a href="/instagram/" class="footer__link--e" title="@ecoala_dryer">@ecoala_dryer</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__right--btm">
        <div class="footer__link">
          <h3 class="footer__title">TOPICS</h3>
          <ul class="footer__child-list">
            <li><a href="/topics/" title="最新の記事">最新の記事</a></li>
          </ul>
        </div>
        <div class="footer__link">
          <h3 class="footer__title">COMPANY</h3>
          <ul class="footer__child-list">
            <li><a href="/company/" title="会社概要">会社概要</a></li>
            <li><a href="/company/#contact" title="お問い合わせ">お問い合わせ</a></li>
          </ul>
        </div>
        <div class="footer__link">
          <a href="" class="footer__special-link">サロン・美容師の皆様へ</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery','/wp-content/themes/ecoala_renewal/assets/js/jquery.min.js');
// wp_enqueue_script('lazysizes','/wp-content/themes/ecoala/assets/js/lazysizes.js',array('jquery'));
// wp_enqueue_script('unveilhooks','/wp-content/themes/ecoala/assets/js/ls.unveilhooks.min.js',array('jquery'));
// wp_enqueue_script('easing','/wp-content/themes/ecoala/assets/js/jquery.easing.1.3.js',array('jquery'));
// wp_enqueue_script('passive','/wp-content/themes/ecoala/assets/js/jquery.passive.js',array('jquery'));
// wp_enqueue_script('smoothScroll','/wp-content/themes/ecoala/assets/js/smoothScroll.js',array('jquery'));
// wp_enqueue_script('inview','/wp-content/themes/ecoala/assets/js/jquery.inview.min.js',array('jquery'));
// wp_enqueue_script('luxy','/wp-content/themes/ecoala/assets/js/luxy.js',array('jquery'));
wp_enqueue_script('iscroll','/wp-content/themes/ecoala_renewal/assets/js/iscroll.js',array('jquery'));
// wp_enqueue_script('drawer','/wp-content/themes/ecoala_renewal/assets/js/drawer.js',array('jquery'));
wp_enqueue_script('slick','/wp-content/themes/ecoala_renewal/assets/js/slick.min.js', array('jquery'));
wp_enqueue_script('script','/wp-content/themes/ecoala_renewal/assets/js/common.js', array('jquery'));
// wp_enqueue_script('topics','/wp-content/themes/ecoala/assets/js/topics.js',array('jquery'));
?>
<?php wp_footer(); ?>
</body>

</html>