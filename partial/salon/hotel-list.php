<?php
$hotels_tokyo = get_field('hotel_tokyo');
?>
<div data-tab-contents="hotel" class="p-vendor-shop-list__contents l-container">
  <!-- 関東 start -->
  <div data-area-id="1" class="p-vendor-shop-list__salon-list-inner is-active">
    <div class="p-vendor-shop-list__area-container">
      <!-- 東京 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">東京</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($hotels_tokyo as $hotel) : if ($hotel['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $hotel['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $hotel['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $hotel['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $hotel['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $hotel['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $hotel['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
    </div>
  </div>
</div>