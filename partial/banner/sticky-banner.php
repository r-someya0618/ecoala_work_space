<!-- バナーパーツ -->
<?php
  $banner_pink = '<a class="p-sticky-banner p-sticky-banner--pink">
    <p class="p-sticky-banner__txt">
    もっとうるおう、<br>
    もっと美しく。
    </p>
    <div class="p-sticky-banner__button p-sticky-banner__button--square">
      購入・お試しはこちらから
    </div>
  </a>';
  $banner_blue = '<a class="p-sticky-banner p-sticky-banner--blue">
  <p class="p-sticky-banner__txt">
    <span class="u-inline-block">わたしに「いい」が、</span>
    <span class="u-inline-block">いちばん「いい」。</span>
    </p>
  <div class="p-sticky-banner__button p-sticky-banner__button--arrow">
    購入・お試しはこちらから
  </div>
  </a>
  ';

  if (strpos($_SERVER['REQUEST_URI'] , 'product/quick_hair_dryer/')) {
    echo $banner_pink;
  } else if ($_SERVER['REQUEST_URI'] !== '/dealer/') {
    echo $banner_blue;
  }
?>
