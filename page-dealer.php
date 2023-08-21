<?php
/*
Template Name: dealer
*/
?>
<?php
get_header();
$data = get_field('dealer')
?>

<main>
  <div id="kv-area" class="p-vendor-kv">
    <div class="p-vendor-kv__item pc">
      <img src="<?php echo $data['kv']['img_pc']; ?>" alt="" />
    </div>
    <div class="p-vendor-kv__item sp">
      <img src="<?php echo $data['kv']['img_sp']; ?>" alt="" />
    </div>
  </div>
  <section class="p-vendor-introduction l-container">
    <h1 class="p-vendor-introduction__heading c-heading-section c-heading-section--center">
      美容師・ヘアサロン限定販売の<br />
      エコアラドライヤー
    </h1>
    <p class="p-vendor-introduction__txt c-txt--center c-txt--25">
      エコアラドライヤーは<br class="sp" />量販店やネットショップには卸していないため<br />
      美容室・サロンでのみ購入できるドライヤーです。<br />
      転売対策も徹底し、販路を限定することで<br class="sp" />物販の売り上げUPを目指すことができます。
    </p>
    <div class="p-vendor-introduction__movie">
      <!-- youtube -->
      <?php
      echo $data['youtube'];
      ?>
    </div>
    <div class="p-vendor-introduction__contents">
      <!--  -->
      <div class="p-vendor-introduction__contents-item">
        <div class="p-vendor-introduction__contents-thumb">
          <picture class="pc">
          <!-- <source srcset="<?php //bloginfo('template_url'); ?>/assets/images/top/card/dummy.webp" type="image/webp"> -->
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/dummy.png" alt="" />
          </picture>
          <picture class="sp">
          <!-- <source srcset="<?php //bloginfo('template_url'); ?>/assets/images/top/card/sp_dummy.webp" type="image/webp"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/sp_dummy.png" alt="" />
          </picture>
        </div>
        <div class="p-vendor-introduction__contents-txt">
          <h2 class="p-vendor-introduction__contents-heading c-heading-section--dealer-intro-card">
            美容室・<br />
            ヘアサロンでのみ販売
          </h2>
          <p class="p-vendor-introduction__contents-txt-body c-txt--25">
            美容師さんがお客様にご説明いただき、商品の良さを知っていただくことでご購入につながる商品となっています。
          </p>
        </div>
      </div>
      <!--  -->
      <div class="p-vendor-introduction__contents-item">
        <div class="p-vendor-introduction__contents-thumb">
        <picture class="pc">
          <!-- <source srcset="<?php //bloginfo('template_url'); ?>/assets/images/top/card/dummy.webp" type="image/webp"> -->
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/dummy.png" alt="" />
          </picture>
          <picture class="sp">
          <!-- <source srcset="<?php //bloginfo('template_url'); ?>/assets/images/top/card/sp_dummy.webp" type="image/webp"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/sp_dummy.png" alt="" />
          </picture>
        </div>
        <div class="p-vendor-introduction__contents-txt">
          <h2 class="p-vendor-introduction__contents-heading c-heading-section--dealer-intro-card">
            在庫負担は<br />
            一切なし
          </h2>
          <p class="p-vendor-introduction__contents-txt-body c-txt--25">
            エコアラドライヤーは在庫を持つことなく販売できます。煩わしい手間も費用もかかりません。
          </p>
        </div>
      </div>
      <!--  -->
      <div class="p-vendor-introduction__contents-item">
        <div class="p-vendor-introduction__contents-thumb">
        <picture class="pc">
          <!-- <source srcset="<?php //bloginfo('template_url'); ?>/assets/images/top/card/dummy.webp" type="image/webp"> -->
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/dummy.png" alt="" />
          </picture>
          <picture class="sp">
          <!-- <source srcset="<?php //bloginfo('template_url'); ?>/assets/images/top/card/sp_dummy.webp" type="image/webp"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/sp_dummy.png" alt="" />
          </picture>
        </div>
        <div class="p-vendor-introduction__contents-txt">
          <h2 class="p-vendor-introduction__contents-heading c-heading-section--dealer-intro-card">
            営業時間外も<br />
            販売可能
          </h2>
          <p class="p-vendor-introduction__contents-txt-body c-txt--25">
            販売方法は紹介するだけ！お客様はECアプリから24
            時間いつでも購入できるので営業時間に縛られた店頭販売から解放されます。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="p-vendor-tobe">
    <div class="p-vendor-todo__container">
      <h1 class="p-vendor-tobe__heading c-heading-section c-heading-section--center">
        お取り扱い<br />
        認定店になるために
      </h1>
      <p class="p-vendor-tobe__txt c-txt--center c-txt--25">
        エコアラドライヤーは当社ECアプリ<br class="sp" />
        「ラブストック」を利用して販売できるサービスです。<br />
        「ラブストック」に登録し、<br class="sp" />
        エコアラドライヤーの正規販売代理店として、<br class="sp" />
        売り上げアップを目指しましょう。
      </p>
    </div>
  </section>

  <section class="p-vendor-contact l-container">
    <h1 class="p-vendor-contact__heading c-heading-section c-heading-section--center">
      資料のご請求<br />
      お問い合わせ
    </h1>
    <p class="p-vendor-contact__txt c-heading-section--center c-txt--25">
      ご質問やご相談につきましては、<br class="sp" />
      こちらからお問合わせください。
    </p>
    <a href="mailto:<?php echo get_field('contact_email_address'); ?>" class="p-vendor-contact__button c-button c-button--square">CONTACT</a>
  </section>
</main>

<?php get_footer(); ?>