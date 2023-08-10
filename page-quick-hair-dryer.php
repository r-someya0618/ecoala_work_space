<?php
/*
Template Name: product_dryer
Quick Hair Dryer
*/
?>
<?php get_header(); ?>
<?php
$key_visuals = get_field('kv_dryer');
?>
<main data-product="dryer">
  <!-- kv -->
  <div id="kv-area" class="p-product-kv">
    <div data-kv="top" class="p-product-kv__item is-active">
      <img class="pc" src="<?php echo $key_visuals['top']['pc_kv']; ?>" alt="" />
      <img class="sp is-active" src="<?php echo $key_visuals['top']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="concept" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['concept']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['concept']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="feature" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['care']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['care']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="design" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['mode']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['mode']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="nozzle" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['nozzle']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['nozzle']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="spec" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['spec']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['spec']['sp_kv']; ?>" alt="" />
    </div>
  </div>

  <!-- nav -->
  <nav class="p-product-nav">
    <ul class="p-product-nav__list c-nav-list">
      <li data-list-id="top" class="p-product-nav__list-item c-nav-list__item is-active-dryer">
        Quick Hair Dryer
      </li>
      <li data-list-id="concept" class="p-product-nav__list-item c-nav-list__item">
        CONCEPT
      </li>
      <li data-list-id="feature" class="p-product-nav__list-item c-nav-list__item">
        髪と頭皮を健やかに
      </li>
      <li data-list-id="design" class="p-product-nav__list-item c-nav-list__item">
        風温・マイナスイオン
      </li>
      <li data-list-id="nozzle" class="p-product-nav__list-item c-nav-list__item">
        溶岩ノズル・セット
      </li>
      <li data-list-id="spec" class="p-product-nav__list-item c-nav-list__item">
        スペック・保証
      </li>
    </ul>
  </nav>

  <div class="sp p-product-nav__indicator">
    <div class="p-product-nav__indicator-inner c-nav-indicator">
      <div class="c-nav-indicator__bar"></div>
    </div>
  </div>
  <!-- Dryer -->
  <!-- wrap top -->
  <div data-section-name="top" class="p-product-content-wrap is-active">
    <!-- introduction -->
    <section class="p-product-introduction">
      <h1 class="p-product-introduction__title c-heading-section c-heading-section--center">
        もっとうるおう。<br />
        もっと美しく。
      </h1>
      <p class="p-product-introduction__txt c-txt--25 c-txt--center">
        熟練美容師と共同開発したプロも認めるドライヤー。<br />
        新時代の頭髪ケアを体感する。
      </p>
    </section>
    <!-- section -->
    <!-- concept -->
    <section class="p-product-section p-product-section--concept-dryer">
      <div class="p-product-section__container l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            開発<br />
            コンセプト
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            「高品質なものを<span class="u-narrow-text--mid">、</span>お求めやすい価格でご提供したい<span class="u-narrow-text--mid">」。</span><br />
            性能の良さはもちろん、スタイリッシュで快適なライフスタイルを提供できる商品を目指しました。
          </p>
          <div data-list-id="concept" data-product-section="concept" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>

    <!-- feature -->
    <section class="p-product-section p-product-section--care">
      <div class="p-product-section__container p-product-section__container--inner-right l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            ヘアドライで<br />
            髪と頭皮を健やかにケア
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            使うたびに髪と頭皮をやさしくケア。ブローの時間があなた専属のサロンへと変わります。
          </p>
          <div data-list-id="feature" data-product-section="feature" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>

    <!-- design -->
    <section class="p-product-section p-product-section--mode">
      <div class="p-product-section__container l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            4つの風温モードと<br />
            ミネラルマイナスイオン
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            髪や頭皮の状態に合わせて選べる多機能なモードを搭載。髪と頭皮にハリ、コシ、うるおいを。
          </p>
          <div data-list-id="design" data-product-section="design" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>

    <!-- nozzle -->
    <section class="p-product-section p-product-section--nozzle-dryer">
      <div class="p-product-section__container p-product-section__container--inner-right l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            富士山溶岩配合ノズル&<br />
            オールインワンセット
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            富士山溶岩を練り込んだ独自のセラミックフィルターが自然の力を利用して今までにないサラサラのツヤ髪を作り出します。
          </p>
          <div data-list-id="nozzle" data-product-section="nozzle" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>

    <!-- spec -->
    <section class="p-product-section p-product-section--spec-dryer">
      <div class="p-product-section__container l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            スペック＆<br />
            安心のまごころ保証
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            長きにわたってご愛顧いただけますよう、エコアラは万が一のトラブルに備えた安心保証を全てのお客様にご提供いたします。
          </p>
          <div data-list-id="spec" data-product-section="spec" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>

    <!-- user's voice -->
    <?php
    $users_voice = get_field('dryer_users_voice');
    ?>
    <section class="p-product-users-voice">
      <h2 class="p-product-users-voice__title c-txt-product--users-voice c-txt--center">
        <span class="p-product-users-voice__title-inner u-inline-block">USER’S</span><br class="sp" /><span>VOICE</span>
      </h2>
      <p class="p-product-users-voice__txt c-txt--25 c-txt--center">
        実際に導入してくださっているお店の声や、<br />
        SNSに投稿いただいたリアルな声を紹介します。
      </p>
      <div class="p-product-users-voice__container">
        <div class="p-product-users-voice__container-inner">
          <?php for ($i = 0; $i < count($users_voice); $i++) : $key = 'voice' . $i + 1 ?>
            <div class="p-product-users-voice__card">
              <dl>
                <dd class="p-product-users-voice__card-thumb">
                  <?php if ($users_voice[$key]['thumbnail']) : ?>
                    <img src="<?php echo $users_voice[$key]['thumbnail']; ?>" alt="" />
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb.png" alt="" />
                  <?php endif; ?>
                </dd>
                <div class="p-product-users-voice__card-body">
                  <dt class="p-product-users-voice__card-title c-txt-product--card-title">
                    <?php echo $users_voice[$key]['title']; ?>
                  </dt>
                  <dd class="p-product-users-voice__card-txt c-txt-product--card-txt">
                    <?php echo $users_voice[$key]['txt']; ?>
                  </dd>
                  <dd class="p-product-users-voice__card-name c-txt-product--card-txt">
                    <?php echo $users_voice[$key]['user_name']; ?>
                  </dd>
                </div>
              </dl>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </section>
  </div>

  <!-- CONCEPT-->
  <!-- wrap concept -->
  <div data-section-name="concept" class="p-product-content-wrap">
    <section class="p-product-concept">
      <h1 class="p-product-concept__title c-heading-section c-heading-section--center">
        世界2位を<br />目指す
      </h1>
      <p class="p-product-concept__txt c-txt--25 c-txt--center">
        この言葉には開発者の熱い想いが込められています。<br />
        「高品質なものを、お求めやすい価格でご提供したい」そのために、日々改良を重ねていく。<br />
        <br />
        1位を追いかけ、追い越せる努力を続ける事。<br />
        時代の移り変わりとともに、ECOALAは進化し続けます。<br />
        性能の良さはもちろん、皆さまにスタイリッシュで<br />
        快適なライフスタイルを提供できる商品を開発して参ります。
      </p>

      <!-- concept content 1 -->
      <div class="p-product-concept__container l-container">
        <div class="p-product-concept__txt-content">
          <h2 class="p-product-concept__txt-content-title c-txt-product--concept-title">
            あなたの<br />
            “なりたい”を叶える
          </h2>
          <p class="p-product-concept__txt-content-body c-txt--20">
            髪へのダメージを減らし、保湿・保護するためには毎日のドライニングが非常に重要になってきます。サロン帰りのような健やかで美しい髪を維持していくためにはどうしたら良いのか考えたとき、ヒントは美容室で見つかりました。いつものように行われる髪のカウンセリング。美容師はお客様の髪や地肌の状態をしっかりと確認し、一人一人に合わせてドライヤーの調整を行い、美しい髪やスタイリングを仕上げていきます。そこには熟練の美容師だけが知り得る職人技があります。<br />
            <br />
            そのカウンセリングの知識とドライニングの技術を自宅に持ち帰ることはできないだろうか。そんな発想から、ECOALA
            AI Pro Styleは熟練の美容師を交えて開発が進みました。
          </p>
        </div>
        <div class="p-product-concept__img-container">
          <div class="p-product-concept__img p-product-concept__img--left">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/dryer/concept_1_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/dryer/concept_1_sp.png" alt="" />
          </div>
        </div>
      </div>
      <!-- concept content 2 -->
      <div class="p-product-concept__container p-product-concept__container--reverse l-container">
        <div class="p-product-concept__txt-content p-product-concept__txt-content--reverse">
          <h2 class="p-product-concept__txt-content-title c-txt-product--concept-title">
            サロンクオリティを<br />
            ご自宅で
          </h2>
          <p class="p-product-concept__txt-content-body c-txt--20">
            サロンで美容師にカウンセリングしてもらい、温度・風量・マイナスイオンなど、あなたの髪質や頭皮に合った設定をドライヤーに記録してもらいます。<br />
            <br />
            プロの技術を再現し、毎日のブローがそのままヘアケアになる。ECOALA AI
            Pro
            Styleはあなただけのオーダーメイドドライヤー。世界でただ一つの、髪と頭皮への処方箋です。
          </p>
        </div>
        <div class="p-product-concept__img-container p-product-concept__img-container--reverse">
          <div class="p-product-concept__img p-product-concept__img--right">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/dryer/concept_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/dryer/concept_2_sp.png" alt="" />
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- ケア -->
  <!-- wrap care -->
  <div data-section-name="feature" class="p-product-content-wrap">
    <section class="p-product-alternating-section">
      <h1 class="p-product-alternating-section__title c-heading-section c-heading-section--center">
        ヘアドライで<br />
        髪と頭皮を健やかにケア
      </h1>
      <p class="p-product-alternating-section__txt c-txt--25 c-txt--center">
        使うたびに髪と頭皮をやさしくケア。<br />
        ブローの時間があなた専属のサロンへと変わります。
      </p>

      <!-- feature content 1 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <div>
              <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_1_pc.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_1_sp.png" alt="" />
            </div>
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            親指１本で<br />
            かんたん操作
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            温度と風量の調整が手もとで簡単に操作できます。毛量の多いロングヘアから、線が細いデリケートな髪まで多様な髪質に合わせたケアが可能です。
          </p>
        </div>
      </div>

      <!-- feature content 2 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img p-product-concept__img--left">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            速く、優しく<br />
            速乾 約1.5㎥/分
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            【約1.5㎥/minの風量が、髪をスピーディーにケアしてダメージを抑えます。同時に浸透性マイナスイオンが髪の広がりを抑え潤いとツヤのある髪に。頭皮にやさしい、速乾ドライを実現しました。
          </p>
        </div>
      </div>

      <!-- feature content 3 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_3_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            軽量 約588ｇ<br />
            腕が疲れにくい
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            本体部の材質にポリカーボネート素材を採用。さらに、手になじむマットな質感で握り心地が良く、使用中も腕が疲れにくく使いやすさ抜群です。
          </p>
        </div>
      </div>

      <!-- feature content 4 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_4_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/care/care_4_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            安心で使いやすい<br />
            構造設計
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            スタイリングに便利なセットノズルもセット。また、吸い込み口に特殊構造を採用し髪を巻込みにくい構造になっているので、初めての方やお子様も安心してご使用いただけます。
          </p>
        </div>
      </div>
    </section>
  </div>

  <!-- デザイン -->
  <!-- wrap mode -->
  <div data-section-name="design" class="p-product-content-wrap">
    <section class="p-product-alternating-section">
      <h1 class="p-product-alternating-section__title c-heading-section c-heading-section--center">
        4つの風温モードと<br />
        ミネラルマイナスイオン
      </h1>
      <p class="p-product-alternating-section__txt c-txt--25 c-txt--center">
        髪や頭皮の状態に合わせて選べる多機能なモードを搭載。<br />
        髪と頭皮にハリ、コシ、うるおいを。
      </p>

      <!-- design content 1 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <div>
              <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/mode/mode_1_pc.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/mode/mode_1_sp.png" alt="" />
            </div>
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            4つの風温モード<br />
            やさしく心地よい風
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            4つの風温モードの特徴である「速乾」「艶出し」「スカルプケア」「スタイリング」を使い分けることで、髪にツヤ、地肌にうるおいをもたらします。電源ボタン一つで簡単切り替え。特殊サーキュレータが熱の集中を抑え、髪にやさしいしく心地よい風を作り出します。
          </p>
        </div>
      </div>

      <!-- design content 2 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img p-product-concept__img--left">
            <img class="pc-inbl" src="./assets/images/product/mode/mode_2_pc.png" alt="" />
            <img class="sp" src="./assets/images/product/mode/mode_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            ボタンひとつで<br />
            思い通りの髪に
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            「Power&Styling」ですばやく表面を乾かしたら、低温の「Intelligent &
            Beauty」へ。オーバードライを防ぎながら髪の芯からやさしく乾かします。さらに「MENS
            & Scalp」で頭皮ケア。最後に「Cold
            Treatment」でキューティクルを引き締め、髪のうるおいを閉じ込めます。
          </p>
        </div>
      </div>

      <!-- design content 3 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/mode/mode_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/mode/mode_3_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            ミネラルマイナスイオンで<br />
            うるおったツヤ髪に
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            ミネラルマイナスイオンが水分バランスを整え髪と頭皮にうるおいを。髪を守るキューティクルの密着性がアップし静電気による広がりも抑えます。“うるつや髪Ring”との相乗効果で内側から輝く健康的な髪へ。これまでにない驚きの手触りを体験してください。
          </p>
        </div>
      </div>
    </section>
  </div>

  <!-- wrap nozzle -->
  <div data-section-name="nozzle" class="p-product-content-wrap">
    <section class="p-product-alternating-section">
      <h1 class="p-product-alternating-section__title c-heading-section c-heading-section--center">
        富士山溶岩配合ノズル&<br />
        オールインワンセット
      </h1>
      <p class="p-product-alternating-section__txt c-txt--25 c-txt--center">
        富士山溶岩を練り込んだ独自のセラミックフィルターが<br />
        自然の力を利用して今までにないサラサラのツヤ髪を作り出します。
      </p>

      <!-- nozzle content 1 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <div>
              <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_1_pc.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_1_sp.png" alt="" />
            </div>
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            富士山溶岩配合ノズル<br />
            “うるつや髪Ring”
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            “うるつや髪Ring”を通した温風が髪の内側へ遠赤外線の熱を伝え、速乾と水分量アップを両立。内側からうるおいを与えることで髪にハリ、コシ、ボリューム。スタイリングしやすいまとまりのあるツヤ髪へ。マグネット式で簡単装着。
          </p>
        </div>
      </div>

      <!-- nozzle content 2 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img p-product-concept__img--left">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            Moist<br />
            うるおってしっとり
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            高濃度のマイナスイオンを放出する「Moistノズル」。髪の芯からうるおって広がりを抑え、しっとりやわらかな髪質に。乾燥しがちな髪もまとまります。<br />
            <br />
            ✔︎ボリュームを抑えたい<br />
            ✔︎くせ毛・髪が多くて硬い
          </p>
        </div>
      </div>

      <!-- nozzle content 3 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            Airy<br />
            ツヤやかでさらさら
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            指通りの良いさらさらな髪を叶えるAiryノズル。キューティクルを整え、絡まりやすい髪もサラッと解きほぐし、ヘアオイル要らずのさらさらヘアに。<br />
            <br />
            ✔︎髪が少なめで細い<br />
            ✔︎ヘアオイルを使用したくない
          </p>
        </div>
      </div>

      <!-- nozzle content 4 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_4_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            Volume<br />
            ふわりボリュームUP
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            髪の根本からふわっと立ち上がるような仕上がりに。ボリュームが出るのでスタイリングがぺたんとなりがちな方におすすめです。髪のエイジングケアにも◎。<br />
            <br />
            ✔︎髪がペタンとする<br />
            ✔︎つむじが割れてしまう
          </p>
        </div>
      </div>

      <!-- nozzle content 3 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_5_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle_dryer/nozzle_5_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            断然おトク！<br />
            オールインワンセット
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            まるでサロン帰りのようなうるつや髪に仕上げるスペシャルセット。単品購入するより断然おトクです。<br />
            【セット内容】<br />
            ドライヤー本体、ドライヤー専用スタンド、富士山溶岩セラミックノズル、ノズル専用スタンド
          </p>
        </div>
      </div>
    </section>
  </div>
  <!-- wrap spec -->
  <?php
  $dryer_spec = get_field('dryer_spec');
  $stand_spec = get_field('stand_spec');
  $nozzle_spec = get_field('nozzle_spec');
  $all_in_one_spec = get_field('all_in_one_spec');
  ?>
  <div data-section-name="spec" class="p-product-content-wrap">
    <section class="p-product-spec">
      <h1 class="p-product-spec__title c-heading-section c-heading-section--center">
        SPECIFICATIONS
      </h1>
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
      </div>
      <!--  -->
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

      <!--  -->
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

      <!--  -->
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
        <div class="p-product-guarantee__txt c-txt--25 c-txt--center">
          長きにわたってご愛顧いただけますよう、<br />
          エコアラは万が一のトラブルに備えた安心保証を全てのお客様にご提供いたします。
        </div>
        <div class="p-product-guarantee__contents"></div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>