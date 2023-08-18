<!-- バナーパーツ -->
<?php
  $banner_type = 'blue';
  if (strpos($_SERVER['REQUEST_URI'] , 'products/quick_hair_dryer/')) {
    $banner_type = 'pink';
  }
?>
  <div class="p-sticky-banner">
    <?php if ($banner_type === 'blue'):?>
    <a href="/salon/" class="p-sticky-banner__inner p-sticky-banner--blue">
    <div data-trigger="banner-close" class="p-sticky-banner__close-button pc">
    </div>
    <div class="p-sticky-banner__i-dryer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iDryer_banner_logo.svg" alt="iDryer">
    </div>
    <div class="p-sticky-banner__button p-sticky-banner__button--blue p-sticky-banner__button--arrow">
      購入・お試しはこちら
    </div>
    </a>
    <?php else: ?>
    <a href="/salon/" class="p-sticky-banner__inner p-sticky-banner--pink">
      <div data-trigger="banner-close" class="p-sticky-banner__close-button pc">
      </div>
      <div class="p-sticky-banner__quick-hair-dryer-logo c-txt--center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qDryer_banner_logo.svg" alt="Quick Hair Dryer">
      </div>
      <div class="p-sticky-banner__button p-sticky-banner__button--pink p-sticky-banner__button--arrow">
        購入・お試しはこちら
      </div>
    </a>
    <?php endif; ?>

    <a href="/salon" class="p-sticky-banner__love-stock">
      <div data-trigger="love-stock-close" class="p-sticky-banner__close-button p-sticky-banner__close-button--love-stock pc">
      </div>
      <div class="p-sticky-banner__love-stock-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/love_stock_logo.svg" alt="Love Stock">
      </div>
      <div class="p-sticky-banner__love-stock-txt  c-txt--18 c-txt--center">
      ラブストック<br>
      詳しくはこちら
      </div>
    </a>
  </div>
