<?php
/*
Template Name: product_ai_pro
AI Pro Style用テンプレート
*/
?>
<?php get_header(); ?>
<?php
$key_visuals = get_field('kv_ai');
?>


<main data-product="ai_pro">
  <!-- kv area start -->
  <div id="kv-area" class="p-product-kv">
    <div data-kv="top" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['top']['pc_kv']; ?>" alt="" />
      <img class="sp is-active" src="<?php echo $key_visuals['top']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="concept" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['concept']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['concept']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="function" class="p-product-kv__item">
      <img class="pc" src="<?php echo $key_visuals['feature']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['feature']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="feature" class="p-product-kv__item">
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
        iDryer
      </li>
      <li data-list-id="concept" class="p-product-nav__list-item c-nav-list__item">
        STORY
      </li>
      <li data-list-id="function" class="p-product-nav__list-item c-nav-list__item">
        高性能・高機能
      </li>
      <li data-list-id="feature" class="p-product-nav__list-item c-nav-list__item">
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
  <!-- SP nav indicator -->
  <div class="sp p-product-nav__indicator">
    <div class="p-product-nav__indicator-inner c-nav-indicator">
      <div class="c-nav-indicator__bar"></div>
    </div>
  </div>
  <!-- nav end -->

  <!-- AI Pro Style(top) contents start -->
  <?php get_template_part('partial/ai_pro_style/top-section'); ?>
  <!-- AI Pro Style(top) contents end -->

  <!-- CONCEPT contents start-->
  <?php get_template_part('partial/ai_pro_style/concept-section'); ?>
  <!-- CONCEPT contents end-->

  <!-- 高性能・高機能 contents start-->
  <?php get_template_part('partial/ai_pro_style/function-section'); ?>
  <!-- 高性能・高機能 contents end -->

  <!-- デザイン・操作性 contents start -->
  <?php get_template_part('partial/ai_pro_style/feature-section'); ?>
  <!-- デザイン・操作性 contents end -->

  <!-- ノズル contents start -->
  <?php get_template_part('partial/ai_pro_style/nozzle-section'); ?>
  <!-- ノズル contents end -->

  <!-- スペック保証 contents start -->
  <?php get_template_part('partial/ai_pro_style/spec-section'); ?>
  <!-- スペック保証 contents end -->
</main>

<?php get_footer(); ?>