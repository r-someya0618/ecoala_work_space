<!-- AI Pro Style Productページ スペック・保証パート -->
<?php
  $ai_spec = get_field('ai_spec');
  ?>
  <div data-section-name="spec" class="p-product-content-wrap">
    <section class="p-product-spec">
      <h1 class="p-product-spec__title c-heading-section c-heading-section--center c-txt--font-e">
        SPECIFICATIONS
      </h1>
      <div class="p-product-spec__img">
        <img class="pc" src="<?php echo $ai_spec['pc_product_img'] ?>" alt="" />
        <img class="sp" src="<?php echo $ai_spec['sp_product_img'] ?>" alt="" />
      </div>

      <div class="p-product-spec__table-container l-container">
        <table class="p-product-spec__table">
          <tbody class="p-product-spec__tbody">
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">商品名</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['product_name'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">型番</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['model_number'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">価格(税込)</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['price'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">重量</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['weight'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">サイズ</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['size'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">電源</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['power_supply'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">消費電力</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['electricity_consumption'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">機能</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['function'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">風量</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['air_flow'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">内容物</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['contents'] ?>
              </td>
            </tr>
            <tr class="p-product-spec__tr">
              <th class="p-product-spec__th c-txt--20">PSE認証</th>
              <td class="p-product-spec__td c-txt--20">
                <?php echo $ai_spec['pse'] ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="p-product-guarantee l-container">
        <h1 class="p-product-guarantee__title c-heading-section c-heading-section--center">
          安心のまごころ保証
        </h1>
        <div class="p-product-guarantee__txt c-txt--25 c-txt--center">
          長きにわたってご愛顧いただけますよう、<br />
          エコアラは万が一のトラブルに備えた安心保証を全てのお客様にご提供いたします。
        </div>
        <div class="p-product-guarantee__contents"></div>
      </div>
    </section>
  </div>