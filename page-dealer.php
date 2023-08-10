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
      <div class="p-dealer-kv">
        <div class="p-dealer-kv__item pc">
          <img src="<?php echo $data['kv']['img_pc']; ?>" alt="" />
        </div>
        <div class="p-dealer-kv__item sp">
          <img src="<?php echo $data['kv']['img_sp']; ?>" alt="" />
        </div>
      </div>
      <section class="p-dealer-introduction l-container">
        <h1
          class="p-dealer-introduction__heading c-heading-section c-heading-section--center"
        >
          美容師・ヘアサロン限定販売の<br />
          エコアラドライヤー
        </h1>
        <p class="p-dealer-introduction__txt c-txt--center c-txt--25">
          エコアラドライヤーは<br
            class="sp"
          />量販店やネットショップには卸していないため<br />
          美容室・サロンでのみ購入できるドライヤーです。<br />
          転売対策も徹底し、販路を限定することで<br
            class="sp"
          />物販の売り上げUPを目指すことができます。
        </p>
        <div class="p-dealer-introduction__movie">
          <!-- youtube -->
          <?php
            echo $data['youtube'];
          ?>
        </div>
        <div class="p-dealer-introduction__contents">
          <!--  -->
          <div class="p-dealer-introduction__contents-item">
            <div class="p-dealer-introduction__contents-thumb">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/dummy.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/sp_dummy.png" alt="" />
            </div>
            <div class="p-dealer-introduction__contents-txt">
              <h2
                class="p-dealer-introduction__contents-heading c-heading-section--dealer-intro-card"
              >
                美容室・<br />
                ヘアサロンでのみ販売
              </h2>
              <p class="p-dealer-introduction__contents-txt-body c-txt--25">
                美容師さんがお客様にご説明いただき、商品の良さを知っていただくことでご購入につながる商品となっています。
              </p>
            </div>
          </div>
          <!--  -->
          <div class="p-dealer-introduction__contents-item">
            <div class="p-dealer-introduction__contents-thumb">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/dummy.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/sp_dummy.png" alt="" />
            </div>
            <div class="p-dealer-introduction__contents-txt">
              <h2
                class="p-dealer-introduction__contents-heading c-heading-section--dealer-intro-card"
              >
                在庫負担は<br />
                一切なし
              </h2>
              <p class="p-dealer-introduction__contents-txt-body c-txt--25">
                エコアラドライヤーは在庫を持つことなく販売できます。煩わしい手間も費用もかかりません。
              </p>
            </div>
          </div>
          <!--  -->
          <div class="p-dealer-introduction__contents-item">
            <div class="p-dealer-introduction__contents-thumb">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/dummy.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/dealer/sp_dummy.png" alt="" />
            </div>
            <div class="p-dealer-introduction__contents-txt">
              <h2
                class="p-dealer-introduction__contents-heading c-heading-section--dealer-intro-card"
              >
                営業時間外も<br />
                販売可能
              </h2>
              <p class="p-dealer-introduction__contents-txt-body c-txt--25">
                販売方法は紹介するだけ！お客様はECアプリから24
                時間いつでも購入できるので営業時間に縛られた店頭販売から解放されます。
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="p-dealer-tobe">
        <div class="p-dealer-todo__container">
          <h1
            class="p-dealer-tobe__heading c-heading-section c-heading-section--center"
          >
            お取り扱い<br />
            認定店になるために
          </h1>
          <p class="p-dealer-tobe__txt c-txt--center c-txt--25">
            エコアラドライヤーは当社ECアプリ<br class="sp" />
            「ラブストック」を利用して販売できるサービスです。<br />
            「ラブストック」に登録し、<br class="sp" />
            エコアラドライヤーの正規販売代理店として、<br class="sp" />
            売り上げアップを目指しましょう。
          </p>
        </div>
        <div class="p-dealer-tobe__slider p-two-way-slider">
          <!-- スライダー -->
          <div class="p-two-way-slider__container l-container">
            <!-- ナンバー -->
            <div class="p-two-way-slider__counter-container">
              <div class="p-two-way-slider__counter">
                <div
                  data-slider-id="1"
                  class="p-two-way-slider__counter-item is-active"
                >
                  01
                </div>
                <!-- 2 -->
                <div
                  data-slider-id="2"
                  class="p-two-way-slider__counter-item-line"
                ></div>
                <div data-slider-id="2" class="p-two-way-slider__counter-item">
                  02
                </div>
                <!-- 3 -->
                <div
                  data-slider-id="3"
                  class="p-two-way-slider__counter-item-line"
                ></div>
                <div data-slider-id="3" class="p-two-way-slider__counter-item">
                  03
                </div>
                <!-- 4 -->
                <div
                  data-slider-id="4"
                  class="p-two-way-slider__counter-item-line"
                ></div>
                <div data-slider-id="4" class="p-two-way-slider__counter-item">
                  04
                </div>
                <!-- 5 -->
                <div
                  data-slider-id="5"
                  class="p-two-way-slider__counter-item-line"
                ></div>
                <div data-slider-id="5" class="p-two-way-slider__counter-item">
                  05
                </div>
              </div>
            </div>

            <div id="js-two-way-slider">
              <!-- スライダー本体 1-->
              <div data-slider-id="1" class="p-two-way-slider__item is-active">
                <div class="p-two-way-slider__img-content fadeDownFirst">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider1.png" alt="" />
                </div>
                <div class="p-two-way-slider__txt-content fadeDownSecond">
                  <div class="p-two-way-slider__item-num">
                    <img
                      class="fadeDownFirst"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider_num1.png"
                      alt=""
                    />
                  </div>
                  <div class="p-two-way-slider__item-title c-txt--30">
                    タイトルタイトルタイトル<br />
                    タイトルタイトルタイトルタイトル
                  </div>
                  <div class="p-two-way-slider__item-txt c-txt--20">
                    テキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキスト
                  </div>
                </div>
              </div>
              <!-- スライダー本体 2-->
              <div data-slider-id="2" class="p-two-way-slider__item">
                <div class="p-two-way-slider__img-content fadeDownFirst">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider2.png" alt="" />
                </div>
                <div class="p-two-way-slider__txt-content fadeDownSecond">
                  <div class="p-two-way-slider__txt-content-inner">
                    <div class="p-two-way-slider__item-num">
                      <img
                        class="fadeDownFirst"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider_num2.png"
                        alt=""
                      />
                    </div>
                    <div class="p-two-way-slider__item-title c-txt--30">
                      タイトルタイトルタイトル<br />
                      タイトルタイトルタイトルタイトル
                    </div>
                    <div class="p-two-way-slider__item-txt c-txt--20">
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                    </div>
                  </div>
                </div>
              </div>
              <!-- スライダー本体 3-->
              <div data-slider-id="3" class="p-two-way-slider__item">
                <div class="p-two-way-slider__img-content fadeDownFirst">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider3.png" alt="" />
                </div>
                <div class="p-two-way-slider__txt-content fadeDownSecond">
                  <div class="p-two-way-slider__txt-content-inner">
                    <div class="p-two-way-slider__item-num">
                      <img
                        class="fadeDownFirst"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider_num3.png"
                        alt=""
                      />
                    </div>
                    <div class="p-two-way-slider__item-title c-txt--30">
                      タイトルタイトルタイトル<br />
                      タイトルタイトルタイトルタイトル
                    </div>
                    <div class="p-two-way-slider__item-txt c-txt--20">
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                    </div>
                  </div>
                </div>
              </div>
              <!-- スライダー本体 4-->
              <div data-slider-id="4" class="p-two-way-slider__item">
                <div class="p-two-way-slider__img-content">
                  <img
                    class="fadeDownFirst"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider4.png"
                    alt=""
                  />
                </div>
                <div class="p-two-way-slider__txt-content fadeDownSecond">
                  <div class="p-two-way-slider__txt-content-inner">
                    <div class="p-two-way-slider__item-num">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider_num4.png" alt="" />
                    </div>
                    <div class="p-two-way-slider__item-title c-txt--30">
                      タイトルタイトルタイトル<br />
                      タイトルタイトルタイトルタイトル
                    </div>
                    <div class="p-two-way-slider__item-txt c-txt--20">
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                    </div>
                  </div>
                </div>
              </div>
              <!-- スライダー本体 5-->
              <div data-slider-id="5" class="p-two-way-slider__item">
                <div class="p-two-way-slider__img-content">
                  <img
                    class="fadeDownFirst"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider5.png"
                    alt=""
                  />
                </div>
                <div class="p-two-way-slider__txt-content fadeDownSecond">
                  <div class="p-two-way-slider__txt-content-inner">
                    <div class="p-two-way-slider__item-num">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider_num5.png" alt="" />
                    </div>
                    <div class="p-two-way-slider__item-title c-txt--30">
                      タイトルタイトルタイトル<br />
                      タイトルタイトルタイトルタイトル
                    </div>
                    <div class="p-two-way-slider__item-txt c-txt--20">
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                      テキストテキストテキストテキストテキストテキスト
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-dealer-contact l-container">
        <h1
          class="p-dealer-contact__heading c-heading-section c-heading-section--center"
        >
          資料のご請求<br />
          お問い合わせ
        </h1>
        <p class="p-dealer-contact__txt c-heading-section--center c-txt--25">
          ご質問やご相談につきましては、<br class="sp" />
          こちらからお問合わせください。
        </p>
        <a
          href="mailto:info@example.com"
          class="p-dealer-contact__button c-button c-button--square"
          >CONTACT</a
        >
      </section>
    </main>

<?php get_footer(); ?>