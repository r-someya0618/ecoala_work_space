<?php
/*
Template Name: product_dryer
Quick Hair Dryer用テンプレート
*/
?>
<?php get_header(); ?>
<?php
$key_visuals = get_field('kv_dryer');
?>
<main data-product="dryer">
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
      <img class="pc" src="<?php echo $key_visuals['care']['pc_kv']; ?>" alt="" />
      <img class="sp" src="<?php echo $key_visuals['care']['sp_kv']; ?>" alt="" />
    </div>
    <div data-kv="feature" class="p-product-kv__item">
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
  <!-- kv area end -->

  <!-- nav area start -->
  <nav class="p-product-nav">
    <ul class="p-product-nav__list c-nav-list">
      <li data-list-id="top" class="p-product-nav__list-item c-nav-list__item is-active-dryer">
        Quick Hair Dryer
      </li>
      <li data-list-id="concept" class="p-product-nav__list-item c-nav-list__item">
        STORY
      </li>
      <li data-list-id="function" class="p-product-nav__list-item c-nav-list__item">
        髪と頭皮を健やかに
      </li>
      <li data-list-id="feature" class="p-product-nav__list-item c-nav-list__item">
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
  <!-- SP nav indicator -->
  <div class="sp p-product-nav__indicator">
    <div class="p-product-nav__indicator-inner c-nav-indicator">
      <div class="c-nav-indicator__bar"></div>
    </div>
  </div>
  <!-- nav end -->

  <!-- Quick Hair Dryer(top) contents start -->
  <?php get_template_part('partial/quick_hair_dryer/top-section'); ?>
  <!-- Quick Hair Dryer(top) contents start end -->

  <!-- CONCEPT contents start-->
  <?php get_template_part('partial/quick_hair_dryer/concept-section'); ?>
  <!-- CONCEPT contents end-->

  <!-- 髪と頭皮を健やかに contents start -->
  <?php get_template_part('partial/quick_hair_dryer/function-section'); ?>
  <!-- 髪と頭皮を健やかに contents end -->

  <!-- 風温・マイナスイオン contents start -->
  <?php get_template_part('partial/quick_hair_dryer/feature-section'); ?>
  <!-- 風温・マイナスイオン contents end -->

  <!-- ノズル contents start -->
  <?php get_template_part('partial/quick_hair_dryer/nozzle-section'); ?>
  <!-- ノズル contents end -->

  <!-- スペック保証 contents start -->
  <?php get_template_part('partial/quick_hair_dryer/spec-section'); ?>
  <!-- スペック保証 contents end -->
</main>

<?php get_footer(); ?>