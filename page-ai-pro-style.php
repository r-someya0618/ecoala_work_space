<?php
/*
Template Name: product_ai_pro
AI Pro Style
*/
?>
<?php get_header(); ?>
<?php
$key_visuals = get_field('kv_ai');
?>


<main data-product="ai_pro">
  <!-- kv area start -->
  <div class="p-product-kv">
    <div data-kv="top" class="p-product-kv__item is-active">
      <img class="pc" src="<?php echo $key_visuals['top']['pc_kv']; ?>" alt="" />
      <img class="sp is-active" src="<?php echo $key_visuals['top']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="concept" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['concept']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['concept']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="feature" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['feature']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['feature']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="design" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['design']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['design']['sp_kv']; ?>" alt="" />
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
  <!-- kv area end -->

  <!-- nav area start -->
  <nav class="p-product-nav">
    <ul class="p-product-nav__list c-nav-list">
      <li data-list-id="top" class="p-product-nav__list-item c-nav-list__item is-active-ai">
        AI Pro Style
      </li>
      <li data-list-id="concept" class="p-product-nav__list-item c-nav-list__item">
        CONCEPT
      </li>
      <li data-list-id="feature" class="p-product-nav__list-item c-nav-list__item">
        高性能・高機能
      </li>
      <li data-list-id="design" class="p-product-nav__list-item c-nav-list__item">
        デザイン・操作性
      </li>
      <li data-list-id="nozzle" class="p-product-nav__list-item c-nav-list__item">
        溶岩セラミックノズル
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
  <!-- nav start end -->

  <!-- AI Pro Style(top) contents start -->
  <div data-section-name="top" class="p-product-content-wrap is-active">
    <!-- introduction section start-->
    <section class="p-product-introduction">
      <h1 class="p-product-introduction__title c-heading-section c-heading-section--center">
        より多くの人に<br />
        最適なヘアドライを
      </h1>
      <p class="p-product-introduction__txt c-txt--25 c-txt--center">
        熟練美容師と共同開発したプロも認めるドライヤー。<br />
        新時代の頭髪ケアを体感する。
      </p>
    </section>
    <!-- introduction section end -->
    <!-- concept section start -->
    <section class="p-product-section p-product-section--concept">
      <div class="p-product-section__container l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            開発<br />
            コンセプト
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            頭髪のプロ、熟練美容師と共同開発した新時代のドライヤー。髪や頭皮もお肌のように丁寧なケアができる、未だかつてないドライヤーが誕生しました。
          </p>
          <div data-list-id="concept" data-product-section="concept"  class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>
    <!-- concept section end -->
    <!-- feature section start -->
    <section id="feature" class="p-product-section p-product-section--feature">
      <div class="p-product-section__container p-product-section__container--inner-right l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            高性能・高機能<br />
            プロ推奨ドライヤー
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            家庭用ドライヤーの域を超えた、プロの美容師も使いやすい高性能・高機能。プロの「あったらいいな」を多数搭載しました。
          </p>
          <div data-list-id="feature" data-product-section="feature" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>
    <!-- feature section end -->
    <!-- design section start -->
    <section class="p-product-section p-product-section--design">
      <div class="p-product-section__container l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            世界に認められた<br />
            高いデザイン性
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            誰でも使いやすいように考え抜かれたUI。最先端のAI技術と自然を感じる木目調のデザインの融合。モダンで上質なプロダクトは世界的アワードで受賞しました。
          </p>
          <div data-list-id="design" data-product-section="design" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>
    <!-- design section end -->
    <!-- nozzle section start -->
    <section class="p-product-section p-product-section--nozzle">
      <div class="p-product-section__container p-product-section__container--inner-right l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            富士山溶岩配合の<br />
            セラミックノズル
          </h2>
          <p class="p-product-section__container-txt c-txt--25">
            頭髪のプロ、熟練美容師と共同開発した新時代のドライヤー。髪や頭皮もお肌のように丁寧なケアができる、未だかつてないドライヤーが誕生しました。
          </p>
          <div data-list-id="nozzle" data-product-section="nozzle" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>
    <!-- nozzle section end -->

    <!-- spec section start -->
    <section class="p-product-section p-product-section--spec">
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
    <!-- nozzle section end -->
    <!-- user's voice section start -->
    <?php
    $users_voice = get_field('ai_users_voice');
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
    <!-- user's voice section end -->
  </div>
  <!-- AI Pro Style(top) contents end -->

  <!-- CONCEPT contents start-->
  <div data-section-name="concept" class="p-product-content-wrap">
    <section class="p-product-concept">
      <h1 class="p-product-concept__title c-heading-section c-heading-section--center">
        わたし<span class="u-narrow-text--hard">に</span>「いい<span class="u-narrow-text--hard">」</span>が、<br class="sp" />いちば<span class="u-narrow-text--hard">ん</span>「いい<span class="u-narrow-text--hard">」</span>。<br />
        わたしだけのiDryer
      </h1>
      <p class="p-product-concept__txt c-txt--25 c-txt--center">
        髪は一生もの。<br />
        お肌は状態に合わせてスキンケアを変えていくのに、<br />
        毎日使うドライヤーがずっと同じでいいのだろうか？<br />
        <br />
        そんな想いから開発が始まった<br class="sp" />ECOALA AI Pro Style。<br />
        熟練美容師と共に、未だかつてない<br class="sp" />次世代のドライヤーを目指しました。<br />
        <br />
        あなたの毎日が、<br class="sp" />より健やかで美しいものになりますように。
      </p>

      <!-- concept content 1 -->
      <div class="p-product-concept__container l-container">
        <div class="p-product-concept__txt-content">
          <h2 class="p-product-concept__txt-content-title c-txt-product--concept-title">
            美容師が<br />
            “選ぶ”という発想
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
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/ai_pro/concept_1_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/ai_pro/concept_1_sp.png" alt="" />
          </div>
        </div>
      </div>
      <!-- concept content 2 -->
      <div class="p-product-concept__container p-product-concept__container--reverse l-container">
        <div class="p-product-concept__txt-content p-product-concept__txt-content--reverse">
          <h2 class="p-product-concept__txt-content-title c-txt-product--concept-title">
            あなたへの<br />
            処方箋ドライヤー
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
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/ai_pro/concept_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/ai_pro/concept_2_sp.png" alt="" />
          </div>
        </div>
      </div>
      <!-- concept content 3 -->
      <div class="p-product-concept__container l-container">
        <div class="p-product-concept__txt-content">
          <h2 class="p-product-concept__txt-content-title c-txt-product--concept-title">
            髪のプロからしか購入できない<br />
            ECOALA AI Pro Style
          </h2>
          <p class="p-product-concept__txt-content-body c-txt--20">
            ECOALA AI Pro
            Styleは熟練の美容師の知識と技術を限りなく再現するために、弊社に認定されたサロンからのみ購入できます。信頼できる美容師からしっかりとカウンセリングしていただうえで、あなたの髪だけのドライヤーをお受け取りください。<br />
            <br />
            もちろん、その日の髪のコンディションやスタイリングに合わせて、自分で設定を変更することも可能です。誰でも簡単に使いやすいように操作性も重視しました。<br />
            <br />
            「より多くの人に最適なヘアドライを」<br />
            その想いから誕生したECOALA AI Pro
            Style。あなたの毎日が、より健やかで美しいものになりますように。
          </p>
        </div>
        <div class="p-product-concept__img-container">
          <div class="p-product-concept__img p-product-concept__img--left">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/ai_pro/concept_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/concept/ai_pro/concept_3_sp.png" alt="" />
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- CONCEPT contents end-->

  <!-- 高性能・高機能 contents start-->
  <div data-section-name="feature" class="p-product-content-wrap">
    <section class="p-product-alternating-section">
      <h1 class="p-product-alternating-section__title c-heading-section c-heading-section--center">
        高性能・高機能<br />
        プロ推奨ドライヤー
      </h1>
      <p class="p-product-alternating-section__txt c-txt--25 c-txt--center">
        家庭用ドライヤーの域を超えた、<br />
        プロの美容師も推奨する高性能・高機能ドライヤー。
      </p>

      <!-- feature content 1 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <div>
              <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_1_pc.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_1_sp.png" alt="" />
            </div>
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            次世代型<br />
            液晶タッチパネル
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            誰でも使いやすいUXを実現するために次世代型タッチパネル液晶モニタを採用。設定しているモードがひと目で分かります。センサーによって温度を自動調整することで、髪に無駄なダメージを与えないAIを搭載しています。
          </p>
        </div>
      </div>

      <!-- feature content 2 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img p-product-concept__img--left">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            髪・頭皮の負担を軽減<br />
            4段階の温度調整
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            【100度】湿った髪や厚みのある髪でも素早く乾かし、ブロー時間を短縮。<br />
            【80度】髪を十分に乾かすことができ、髪ダメージも最小限に。<br />
            【60度】デリケートな髪や敏感な頭皮でも優しくブロー。<br />
            【COOL】仕上げにおすすめ。髪のツヤを整える効果もあります。
          </p>
        </div>
      </div>

      <!-- feature content 3 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_3_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            ブローもスタイリングも<br />
            思い通りに
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            強・中・弱の風量調整をすることで、髪質やスタイリングのニーズに合わせた柔軟な操作が可能です。手早くブローすることはもちろんのこと、髪の傷みや乾燥、化学的な処理を受けた場合でも優しくスピーディーに乾かします。
          </p>
        </div>
      </div>

      <!-- feature content 4 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_4_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_4_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            髪質に合わせて選べる<br />
            マイナスイオン濃度
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            乾燥を防ぎ、キューティクルを整え、うるおったツヤ髪を叶えます。美容師のブロー技術を誰でも家庭で再現可能。<br />
            【MOIST】しっとりとした仕上がり<br />
            【SMOOTH】さらっと軽やかな仕上がり<br />
            【NATURAL】自然なまとまりの仕上がり
          </p>
        </div>
      </div>

      <!-- feature content 5 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_5_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_5_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            髪のクセを制御する<br />
            CAREモード
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            はねた髪やアホ毛をしっとり落ち着かせ、まとまりのある髪へ。ブラシを使わなくてもブロー後のようなツヤ出しを叶えるので、摩擦ダメージも軽減。忙しいときの時短にも便利です。
          </p>
        </div>
      </div>

      <!-- feature content 6 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_6_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_6_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            温・冷交互の風<br />
            SENSINGモード
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            周囲の環境に応じてHOT⇄COOLをくり返すAI温冷機能。髪や頭皮への熱ダメージを軽減し、オーバードライを防ぎながらキューティクルを引き締め、髪にうるおいを閉じ込めます。
          </p>
        </div>
      </div>

      <!-- feature content 7 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_7_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_7_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            プロ仕様<br />
            COOLボタン
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            美容師の理想を叶えたボタン配置。髪の流れを整えながらブローする際、ドライヤーの柄ではなくヘッドを持つことがあるため、COOLボタンをヘッドにも配置。一般の方だけでなくプロも使いやすい設計にこだわりました。
          </p>
        </div>
      </div>

      <!-- feature content 8 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_8_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/feature/ai_pro/feature_8_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            プロも使いやすい<br />
            触感ON/OFF機能
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            電源OFFボタンを操作しなくても、持ち手を離すと自動で停止。5分以内に持ち手を握るとて、停止前の設定で再動作するため、スタイリング中や急な対応に便利。5分以上停止した状態が続くと自動電源OFFとなるため、うっかり防止で安心。
          </p>
        </div>
      </div>
    </section>
  </div>
  <!-- 高性能・高機能 contents end -->

  <!-- デザイン contents start -->
  <div data-section-name="design" class="p-product-content-wrap">
    <section class="p-product-alternating-section">
      <h1 class="p-product-alternating-section__title c-heading-section c-heading-section--center">
        世界に認められた<br />
        高いデザイン性
      </h1>
      <p class="p-product-alternating-section__txt c-txt--25 c-txt--center">
        誰でも使いやすいように考え抜かれたUI。<br />
        最先端のAI技術と自然が融合したモダンデザインは世界的アワードを受賞しました。
      </p>

      <!-- design content 1 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <div>
              <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_1_pc.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_1_sp.png" alt="" />
            </div>
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            テクノロジーと<br />
            自然の融合
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            最先端のAIを搭載したLEDタッチパネル式の液晶と、自然を感じる木目調のグリップ。長くお使いいただけるよう、流行に左右されないモダンなデザインに仕上げました。LEDタッチパネルは省エネルギー且つ、刺激の少ない優しく穏やかな灯りです。
          </p>
        </div>
      </div>

      <!-- design content 2 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img p-product-concept__img--left">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_2_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            シンプル操作で<br />
            使いやすい
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            複雑な操作は一切なし。細やかな設定は美容師にお任せして、使う時はシンプルなボタン操作だけでOK。どなたでも使いやすいドライヤーです。
          </p>
        </div>
      </div>

      <!-- design content 3 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_3_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            手に馴染む<br />
            木目調のグリップ
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            しっとりとした質感の高級感あるグリップ。すべりにくく手に馴染みやすい質感に仕上げました。木目調の柄はどんなインテリアにも馴染み、邪魔しません。
          </p>
        </div>
      </div>

      <!-- design content 4 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_4_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/design/design_4_sp.png" alt="" />
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content p-product-alternating-section__txt-content--reverse">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            世界的な<br />
            アワードを受賞
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            デザイン性の高さから「アジアゴールデンスターアワード2023
            商品金賞」を受賞しました。
          </p>
          <p class="p-product-alternating-section__note c-txt--15">
            ※本賞は一般財団法人アジア・日本優秀企業連盟（AEEEF）とアジア優秀企業家連盟（AEEF）アジア18
            国を対象とした評価機関により社会において専門的な新たな取り組みを行い優れた商品に送られる賞です。
          </p>
        </div>
      </div>
    </section>
  </div>
  <!-- デザイン contents end -->

  <!-- ノズル contents start -->
  <div data-section-name="nozzle" class="p-product-content-wrap">
    <section class="p-product-alternating-section">
      <h1 class="p-product-alternating-section__title c-heading-section c-heading-section--center">
        富士山溶岩配合の<br />
        セラミックノズル
      </h1>
      <p class="p-product-alternating-section__txt c-txt--25 c-txt--center">
        富士山溶岩が配合された3種類のセラミックノズルは<br />
        マイナスイオンと遠赤外線を発生させ、髪と頭皮にしっとりうるおいをもたらします。
      </p>

      <!-- nozzle content 1 -->
      <div class="p-product-alternating-section__container l-container">
        <div class="p-product-alternating-section__img-container">
          <div class="p-product-alternating-section__img">
            <div>
              <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_1_pc.png" alt="" />
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_1_sp.png" alt="" />
            </div>
          </div>
        </div>
        <div class="p-product-alternating-section__txt-content">
          <h2 class="p-product-alternating-section__txt-content-title c-txt-product--concept-title">
            世界初！<br />
            富士山溶岩配合ノズル
          </h2>
          <p class="p-product-alternating-section__txt-content-body c-txt--25">
            富士山の溶岩を練り込んだ独自の製法で創り上げたセラミックフィルターをノズルに搭載。マイナスイオンと遠赤外線を同時に放出し、髪の内部から温めることで、乾燥やダメージを軽減し、しっとりとしたうるおいを与えます。めぐりを整え、スカルプケアにも役立ちます。
          </p>
        </div>
      </div>

      <!-- nozzle content 2 -->
      <div class="p-product-alternating-section__container p-product-alternating-section__container--reverse l-container">
        <div class="p-product-alternating-section__img-container p-product-alternating-section__img-container--reverse">
          <div class="p-product-alternating-section__img p-product-concept__img--left">
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_2_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_2_sp.png" alt="" />
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
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_3_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_3_sp.png" alt="" />
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
            <img class="pc-inbl" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_4_pc.png" alt="" />
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/product/nozzle/nozzle_4_sp.png" alt="" />
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
    </section>
  </div>
  <!-- ノズル contents end -->
  <!-- スペック保証 contents start -->
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
  <!-- スペック保証 contents end -->
</main>

<?php get_footer(); ?>