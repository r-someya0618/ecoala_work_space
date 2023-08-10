<?php
/*
Template Name: company
*/
?>
<?php get_header(); ?>

<main class="l-container">
  <?php $company_info = get_field('company_info'); ?>
  <section id="company" class="p-company">
    <h1 class="c-heading-section c-heading-section--center">会社概要</h1>
    <div class="p-company__company-info">
      <p class="p-company__company-txt"><?php echo $company_info['name']?></p>
      <p class="p-company__company-txt"><span>〒<?php echo $company_info['zip_code']?>&emsp;</span><span class="u-inline-block"><?php echo $company_info['address_1']?>&emsp;</span><span class="u-inline-block"><?php echo $company_info['address_2']?></span></p>
    </div>
    <div class="p-company__map">
    <?php echo $company_info['map']?>
    </div>
  </section>
  <section id="contact" class="p-company p-company--contact">
    <h1 class="c-heading-section c-heading-section--center">お問い合わせ</h1>
    <p class="p-company__company-txt p-company__company-txt--contact">
      当社取扱い商品へのご質問やご相談につきましては、</br>こちらからお問合わせください。</p>

    <a href="mailto:info@example.com" class="p-company__button c-button c-button--square">contact</a>
  </section>
</main>

<?php get_footer(); ?>