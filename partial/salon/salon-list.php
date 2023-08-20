<?php
$salons_tokyo = get_field('salon_tokyo');
$salons_saitama = get_field('salon_saitama');
$salons_kanagawa = get_field('salon_kanagawa');
$salons_chiba = get_field('salon_chiba');
$salons_shizuoka = get_field('salon_shizuoka');
$salons_osaka = get_field('salon_osaka');
$salons_hyogo = get_field('salon_hyogo');
$salons_okinawa = get_field('salon_okinawa');
?>
<div data-tab-contents="salon" class="p-vendor-shop-list__contents l-container is-active">
  <!-- 関東 start -->
  <div data-area-id="1" class="p-vendor-shop-list__salon-list-inner is-active">
    <div class="p-vendor-shop-list__area-container">
      <!-- 東京 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">東京</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_tokyo as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>

      <!-- 埼玉 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">埼玉</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_saitama as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
      <!-- 神奈川 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">神奈川</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_kanagawa as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
      <!-- 千葉 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">千葉</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_chiba as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 関東 end -->

  <!-- 中部 start -->
  <div data-area-id="2" class="p-vendor-shop-list__salon-list-inner">
    <div class="p-vendor-shop-list__area-container">
      <!-- 静岡 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">静岡</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_shizuoka as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 中部 end -->
  <!-- 近畿 start -->
  <div data-area-id="3" class="p-vendor-shop-list__salon-list-inner">
    <div class="p-vendor-shop-list__area-container">
      <!-- 大阪 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">大阪</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_osaka as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
      <!-- 兵庫 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">兵庫</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_hyogo as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 近畿 end -->
  <!-- 九州 start -->
  <div data-area-id="4" class="p-vendor-shop-list__salon-list-inner">
    <div class="p-vendor-shop-list__area-container">
      <!-- 沖縄 -->
      <h2 class="p-vendor-shop-list__heading c-txt--40">沖縄</h2>
      <ul class="p-vendor-shop-list__list">
        <?php foreach ($salons_okinawa as $salon) : if ($salon['name']) : ?>
            <li class="p-vendor-shop-list__list-item">
              <div class="p-vendor-shop-list__list-item-inner">
                <div class="p-vendor-shop-list__icons">
                  <?php if (in_array('quick', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--quick c-txt--16">Quick</div>
                  <?php endif; ?>
                  <?php if (in_array('ai', $salon['products'])) : ?>
                    <div class="p-vendor-shop-list__icon p-vendor-shop-list__icon--ai c-txt--16">Ai</div>
                  <?php endif; ?>
                </div>
                <div class="p-vendor-shop-list__shop-info">
                  <div class="p-vendor-shop-list__shop-name c-txt--25">
                    <?php echo $salon['name'] ?>
                  </div>
                  <div class="p-vendor-shop-list__shop-address c-txt--20">
                    <?php echo $salon['address'] ?>
                  </div>
                </div>
              </div>
              <div class="p-vendor-shop-list__buttons">
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['rsv_url'] ?>">予約</a>
                <a class="p-vendor-shop-list__button c-txt--20" href="<?php echo $salon['purchase_url'] ?>">この店から購入</a>
              </div>
            </li>
        <?php endif;
        endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- 九州 end -->
</div>