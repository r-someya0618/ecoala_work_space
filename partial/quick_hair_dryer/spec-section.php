<!-- Quick Haire Dryer Productページ スペック・保証パート -->
<?php
$dryer_spec = get_field('dryer_spec');
$stand_spec = get_field('stand_spec');
$nozzle_spec = get_field('nozzle_spec');
$all_in_one_spec = get_field('all_in_one_spec');
$nots = get_field('notes');
$note_items = [];

if ($nots) {
  // 設定のあるものだけを抽出
  foreach ($nots as $value) {
    if (strlen($value) === 0) {
      continue;
    }
    array_push($note_items, $value);
  }
}
?>
<div data-section-name="spec" class="p-product-content-wrap">
  <section class="p-product-spec">
    <h1 class="p-product-spec__title c-heading-section c-heading-section--center">
      SPECIFICATIONS
    </h1>
    <!-- Quick Hair Dryer -->
    <div class="p-product-spec__img">
      <img class="pc-inline" src="<?php echo $dryer_spec['pc_product_img'] ?>" alt="" />
      <img class="sp" src="<?php echo $dryer_spec['sp_product_img'] ?>" alt="" />
    </div>

    <div class="p-product-spec__table-container l-container">
      <table class="p-product-spec__table">
        <tbody class="p-product-spec__tbody">
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">商品名</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['product_name'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">型番</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['model_number'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">価格(税込)</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['price'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">重量</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['weight'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">サイズ</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['size'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">電源</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['power_supply'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">消費電力</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['electricity_consumption'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">機能</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['function'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">風量</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['air_flow'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">内容物</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['contents'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">PSE認証</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $dryer_spec['pse'] ?>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="p-product-spec__note">
        <div class="p-product-spec__note-inner">
          <?php foreach ($note_items as $note) : ?>
            <p class="p-product-spec__note-item c-txt--20"><?php echo $note; ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- 富士山溶岩セラミックノズル/スタンド -->
    <div class="p-product-spec__img">
      <img class="pc-inline" src="<?php echo $nozzle_spec['pc_product_img'] ?>" alt="" />
      <img class="sp" src="<?php echo $nozzle_spec['pc_product_img'] ?>" alt="" />
    </div>

    <div class="p-product-spec__table-container l-container">
      <table class="p-product-spec__table">
        <tbody class="p-product-spec__tbody">
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">商品名</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $nozzle_spec['product_name'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">型番</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $nozzle_spec['model_number'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">価格(税込)</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $nozzle_spec['price'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">重量</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $nozzle_spec['weight'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">サイズ</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $nozzle_spec['size'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">内容物</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $nozzle_spec['contents'] ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Quick Hair Dryer 専用スタンド -->
    <div class="p-product-spec__img">
      <img class="pc-inline" src="<?php echo $stand_spec['pc_product_img'] ?>" alt="" />
      <img class="sp" src="<?php echo $stand_spec['sp_product_img'] ?>" alt="" />
    </div>

    <div class="p-product-spec__table-container l-container">
      <table class="p-product-spec__table">
        <tbody class="p-product-spec__tbody">
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">商品名</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $stand_spec['product_name'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">型番</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $stand_spec['model_number'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">価格(税込)</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $stand_spec['price'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">重量</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $stand_spec['weight'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">サイズ</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $stand_spec['size'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">内容物</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $stand_spec['contents'] ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- オールインワンセット -->
    <div class="p-product-spec__img">
      <img class="pc-inline" src="<?php echo $all_in_one_spec['pc_product_img'] ?>" alt="" />
      <img class="sp" src="<?php echo $all_in_one_spec['pc_product_img'] ?>" alt="" />
    </div>

    <div class="p-product-spec__table-container l-container">
      <table class="p-product-spec__table">
        <tbody class="p-product-spec__tbody">
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">商品名</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $all_in_one_spec['product_name'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">価格(税込)</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $all_in_one_spec['price'] ?>
            </td>
          </tr>
          <tr class="p-product-spec__tr">
            <th class="p-product-spec__th c-txt--20">内容物</th>
            <td class="p-product-spec__td c-txt--20">
              <?php echo $all_in_one_spec['contents'] ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="p-product-guarantee l-container">
      <h1 class="p-product-guarantee__title c-heading-section c-heading-section--center">
        安心のまごころ保証
      </h1>
      <div class="p-product-guarantee__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heart_mark.svg" alt="安心のまごころ保証" />
      </div>
      <div class="p-product-guarantee__txt c-txt--25 c-txt--center">
        <span class="u-inline-block">万が一、エコアラドライヤー</span><span class="u-inline-block">（Quick Hair Dryer）を</span><span class="u-inline-block">愛用していたが故に落としてしまった！</span><br>
        <span class="u-inline-block">そんな方にも安心していただける</span><span class="u-inline-block">まごころを込めたサービスを</span><span class="u-inline-block">ご用意しました。</span><br>
        <span class="u-inline-block">1年以内に落として壊れてしまった場合は</span><span class="u-inline-block">1円（+送料）で新しいセットを</span><span class="u-inline-block">お送りします。</span><br>
      </div>
      <div class="p-product-guarantee__note c-txt--20 c-txt--center">
        <span class="u-inline-block">※エコアラドライヤーは元払いで送っていただきますよう</span><span class="u-inline-block">お願い申し上げます</span>
      </div>
    </div>
  </section>
</div>