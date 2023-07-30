<?php
  add_theme_support('post-thumbnails');
  add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
  add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
  function remove_image_attribute( $html ){
  $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
  $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
  return $html;
  }