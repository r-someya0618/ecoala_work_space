<!-- Quick Haire Dryer Productページ TOPページパート -->
<div data-section-name="top" class="p-product-content-wrap is-active">
    <!-- introduction section start-->
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
    <!-- introduction section end -->
    <!-- concept section start -->
    <section class="p-product-section p-product-section--concept-dryer">
      <div class="p-product-section__container l-container l-container--middle">
        <div class="p-product-section__container-inner p-product-section-container__inner">
          <h2 class="p-product-section__container-title c-txt--40">
            開発<br />
            ストーリー
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
    <!-- concept section end -->
    <!-- function（機能等） section start -->
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
          <div data-list-id="function" data-product-section="function" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>
    <!-- function（機能等）section end -->
    <!-- feature（特徴等）section start -->
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
          <div data-list-id="feature" data-product-section="feature" class="p-product-section__container-button c-button c-button--round">
            Read More
          </div>
        </div>
      </div>
    </section>
    <!-- feature（特徴等）section end -->
    <!-- nozzle section start -->
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
    <!-- nozzle section end -->
    <!-- spec section start -->
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
    <!-- spec section end -->
    <!-- user's voice section start -->
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
          <?php for ($i = 0; $i < count($users_voice); $i++) : $key = 'voice' . strval($i + 1) ?>
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