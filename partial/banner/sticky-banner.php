<!-- バナーパーツ -->
<?php
  $banner_type = 'blue';
  if (strpos($_SERVER['REQUEST_URI'] , 'products/quick_hair_dryer/')) {
    $banner_type = 'pink';
  }

  if ($banner_type === 'blue'):?>
  <a href="/salon/" class="p-sticky-banner p-sticky-banner--blue">
  <div class="p-sticky-banner__close-button">
  </div>
  <div class="p-sticky-banner__i-dryer-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iDryer_banner_logo.svg" alt="iDryer">
  </div>
  <div class="p-sticky-banner__button p-sticky-banner__button--blue p-sticky-banner__button--arrow">
    購入・お試しはこちら
  </div>
  </a>
  <?php else: ?>
  <a href="/salon/" class="p-sticky-banner p-sticky-banner--pink">
    <div class="p-sticky-banner__close-button">
    </div>
    <div class="p-sticky-banner__quick-hair-dryer-logo c-txt--center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qDryer_banner_logo.svg" alt="iDryer">
    </div>
    <div class="p-sticky-banner__button p-sticky-banner__button--pink p-sticky-banner__button--arrow">
      購入・お試しはこちら
    </div>
  </a>
  <?php endif; ?>
