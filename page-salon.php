<?php
/*
Template Name: salon
*/
?>
<?php
get_header();
$data = get_field('salon')
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
      エコアラを<br>
      試す・体感する
    </h1>
    <p class="p-vendor-introduction__txt c-txt--center c-txt--25">
      エコアラドライヤーは弊社に認定されたサロンからのみ購入できます。<br>
      プロも認めたドライヤーを是非ご体感ください。
    </p>
  </section>
  <section class="p-vendor-slider">
    <div class="p-vendor-slider__container l-container l-container--slider">
      <ul class="p-vendor-slider__slider-list salon-slider">
        <!-- 1 -->
        <li class="p-vendor-slider__slider-item">
          <div class="p-vendor-slider__slider-item-content">
            <div class="p-vendor-slider__slider-item-img-wrap">
              <div class="p-vendor-slider__slider-item-img p-vendor-slider__slider-item-img--1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider1.svg" alt="">
              </div>
            </div>
            <div class="p-vendor-slider__slider-item-txt-wrap">
              <div class="p-vendor-slider__slider-item-num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/num1.svg" alt="">
              </div>
              <div class="p-vendor-slider__slider-item-title c-txt--25">
                エコアラドライヤー<br>
                お取り扱いサロンに予約をする
              </div>
              <div class="p-vendor-slider__slider-item-txt c-txt--20">
                お取り扱い店舗一覧〉から、ご希望のサロ ンにお問い合わせください。お時間に余裕を 見て事前にご予約を入れていただくとスムーズです。
              </div>
            </div>
          </div>
        </li>
        <!-- 2 -->
        <li class="p-vendor-slider__slider-item">
          <div class="p-vendor-slider__slider-item-content">
            <div class="p-vendor-slider__slider-item-img-wrap">
              <div class="p-vendor-slider__slider-item-img p-vendor-slider__slider-item-img--2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider2.svg" alt="">
              </div>
            </div>
            <div class="p-vendor-slider__slider-item-txt-wrap">
              <div class="p-vendor-slider__slider-item-num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/num2.svg" alt="">
              </div>
              <div class="p-vendor-slider__slider-item-title c-txt--25">
                サロンに行き、<br>
                美容師のカウンセリングをうける
              </div>
              <div class="p-vendor-slider__slider-item-txt c-txt--20">
                まずは髪や頭皮の状態を美容師さんに確認してもらいましょう。どんなに些細なお悩みでも相談してください。入念なカウンセリングが大切です。
              </div>
            </div>
          </div>
        </li>
        <!-- 3 -->
        <li class="p-vendor-slider__slider-item">
          <div class="p-vendor-slider__slider-item-content">
            <div class="p-vendor-slider__slider-item-img-wrap">
              <div class="p-vendor-slider__slider-item-img p-vendor-slider__slider-item-img--3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider3.svg" alt="">
              </div>
            </div>
            <div class="p-vendor-slider__slider-item-txt-wrap">
              <div class="p-vendor-slider__slider-item-num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/num3.svg" alt="">
              </div>
              <div class="p-vendor-slider__slider-item-title c-txt--25">
                髪質に適したノズルを選んでもらい<br>
                あなただけのドライヤーが完成
              </div>
              <div class="p-vendor-slider__slider-item-txt c-txt--20">
                カウンセリング後、ECOALAの説明をお受けください。付け替えノズル3種類の中から、あなたの髪に合ったものを美容師さんが教えてくれます。
              </div>
            </div>
          </div>
        </li>
        <!-- 4 -->
        <li class="p-vendor-slider__slider-item">
          <div class="p-vendor-slider__slider-item-content">
            <div class="p-vendor-slider__slider-item-img-wrap">
              <div class="p-vendor-slider__slider-item-img p-vendor-slider__slider-item-img--4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider4.svg" alt="">
              </div>
            </div>
            <div class="p-vendor-slider__slider-item-txt-wrap">
              <div class="p-vendor-slider__slider-item-num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/num4.svg" alt="">
              </div>
              <div class="p-vendor-slider__slider-item-title c-txt--25">
                サロン専用QRを読み込み、<br>
                「ラブストック」ECアプリから購入
              </div>
              <div class="p-vendor-slider__slider-item-txt c-txt--20">
                ECOALAを購入する場合は、サロン店頭にあるQRコードを読みこみ、「ラブストック」アプリから購入できます。詳しくは店頭スタッフにお尋ねください。
              </div>
            </div>
          </div>
        </li>
        <!-- 5 -->
        <li class="p-vendor-slider__slider-item">
          <div class="p-vendor-slider__slider-item-content">
            <div class="p-vendor-slider__slider-item-img-wrap">
              <div class="p-vendor-slider__slider-item-img p-vendor-slider__slider-item-img--5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider5.svg" alt="">
              </div>
            </div>
            <div class="p-vendor-slider__slider-item-txt-wrap">
              <div class="p-vendor-slider__slider-item-num">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/num5.svg" alt="">
              </div>
              <div class="p-vendor-slider__slider-item-title c-txt--25">
                ご自宅でサロンクオリティの<br>
                髪の仕上がりをご実感ください
              </div>
              <div class="p-vendor-slider__slider-item-txt c-txt--20">
                ECOALAはご自宅に配送いたします。お手元に届きましたら、プロも認めた世界にたった一つだけの、あなただけのドライヤーをご体感ください。
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="">

  </section>
</main>

<?php get_footer(); ?>