<footer style="height: 80px; color: white; background-color: #000;">
  仮footer
</footer>
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery','/wp-content/themes/ecoala_renewal/assets/js/jquery.min.js');
// wp_enqueue_script('lazysizes','/wp-content/themes/ecoala/assets/js/lazysizes.js',array('jquery'));
// wp_enqueue_script('unveilhooks','/wp-content/themes/ecoala/assets/js/ls.unveilhooks.min.js',array('jquery'));
// wp_enqueue_script('easing','/wp-content/themes/ecoala/assets/js/jquery.easing.1.3.js',array('jquery'));
// wp_enqueue_script('passive','/wp-content/themes/ecoala/assets/js/jquery.passive.js',array('jquery'));
// wp_enqueue_script('smoothScroll','/wp-content/themes/ecoala/assets/js/smoothScroll.js',array('jquery'));
// wp_enqueue_script('inview','/wp-content/themes/ecoala/assets/js/jquery.inview.min.js',array('jquery'));
// wp_enqueue_script('luxy','/wp-content/themes/ecoala/assets/js/luxy.js',array('jquery'));
wp_enqueue_script('iscroll','/wp-content/themes/ecoala_renewal/assets/js/iscroll.js',array('jquery'));
// wp_enqueue_script('drawer','/wp-content/themes/ecoala_renewal/assets/js/drawer.js',array('jquery'));
wp_enqueue_script('slick','/wp-content/themes/ecoala_renewal/assets/js/slick.min.js', array('jquery'));
wp_enqueue_script('script','/wp-content/themes/ecoala_renewal/assets/js/common.js', array('jquery'));
// wp_enqueue_script('topics','/wp-content/themes/ecoala/assets/js/topics.js',array('jquery'));
?>

<?php wp_footer(); ?>
</body>

</html>