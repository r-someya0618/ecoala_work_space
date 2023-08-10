<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.ico" rel="shortcut icon">
<link href="<?php bloginfo('template_url'); ?>/assets/img/icon.png" rel="apple-touch-icon-precomposed">
<link href="<?php bloginfo('stylesheet_url'); ?>?20230803" rel="stylesheet">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2CQV7G');</script>
<!-- End Google Tag Manager -->
<?php wp_head(); ?>
<script src="https://webfont.fontplus.jp/accessor/script/fontplus.js?rYDuG-ahsMY%3D&box=h6UP-JJPRDk%3D&aa=1&ab=2"></script>
<script src="https://font.realtype.jp/api/script/v4" data-rt-user="hNl3TcwAbUd8dqe6skl0unKuMFKzApRH"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<input type="checkbox" id="humberger-check">
<div class="dummy-space"></div>
<header class="header">
    <section class="header__sp">
        <label for="humberger-check" class="header__humberger"></label>
    </section>
    <div class="header__img">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common_logo.svg" alt="ECOALA" /></a>
    </div>
    <section class="header__pc">
        <nav class="header__link">
            <ul class="header__list">
                <li class="header__list--product">
                    <a href="/products/" class="header__list--e" title="PRODUCT">PRODUCT</a>
                    <ul class="header__child-list header__child-list--product">
                        <li><a href="/products/ai_pro_style/" class="header__list--e" title="AI Pro Style">AI Pro Style</a></li>
                        <li><a href="/products/quick_hair_dryer/" class="header__list--e" title="Quick Hair Dryer">Quick Hair Dryer</a></li>
                    </ul>
                </li>
                <li class="header__list--salon">
                    <a href="/salon/" class="header__list--e" title="SALON">SALON</a>
                    <ul class="header__child-list header__child-list--salon">
                        <li><a href="/salon/" title="試す・体感する">試す・体感する</a></li>
                        <li><a href="/salon/#shoplist" title="お取り扱い店舗一覧">お取り扱い店舗一覧</a></li>
                    </ul>
                </li>
                <li><a href="/topics/" class="header__list--e" title="TOPICS">TOPICS</a></li>
                <li><a href="/instagram/" class="header__list--e" title="INSTAGRAM">INSTAGRAM</a></li>
                <li class="header__list--company">
                    <a href="/company/" class="header__list--e" title="COMPANY">COMPANY</a>
                    <ul class="header__child-list header__child-list--company">
                        <li><a href="/company/" title="会社概要">会社概要</a></li>
                        <li><a href="/company/#contact" title="お問い合わせ">お問い合わせ</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/dealer/" class="header__special-link">サロン・美容師の皆様へ</a>
        </nav>
    </section>
</header>
<a href="/dealer/" class="sp header__sp-specital-link">ー サロン・美容師の皆様へ ー</a>
<div class="humberger-menu">
        <nav class="humberger-menu__link">
            <ul class="humberger-menu__list">
                <li>
                    <h3 class="humberger-menu__title">PRODUCT</h3>
                    <ul class="humberger-menu__child-list">
                        <li><a href="/products/ai_pro_style/" class="humberger-menu--e" title="AI Pro Style">AI Pro Style</a></li>
                        <li><a href="/products/quick_hair_dryer/" class="humberger-menu--e" title="Quick Hair Dryer">Quick Hair Dryer</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="humberger-menu__title">SALON</h3>
                    <ul class="humberger-menu__child-list">
                        <li><a href="/salon/" title="試す・体感する">試す・体感する</a></li>
                        <li><a href="/salon/#shoplist" title="お取り扱い店舗一覧">お取り扱い店舗一覧</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="humberger-menu__title">INSTAGRAM</h3>
                    <ul class="humberger-menu__child-list">
                        <li><a href="/instagram/" class="humberger-menu--e" title="@ecoala_dryer">@ecoala_dryer</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="humberger-menu__title">TOPICS</h3>
                    <ul class="humberger-menu__child-list">
                        <li><a href="/topics/" title="最新の記事">最新の記事</a></li>
                    </ul>
                </li>
                <li>
                    <h3 class="humberger-menu__title">COMPANY</h3>
                    <ul class="humberger-menu__child-list">
                        <li><a href="/company/" title="会社概要">会社概要</a></li>
                        <li><a href="/company/#contact" title="お問い合わせ">お問い合わせ</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/dealer/" class="humberger-menu__special-link">サロン・美容師の皆様へ</a>
        </nav>
</div>