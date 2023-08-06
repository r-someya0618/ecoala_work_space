<?php
  add_theme_support('post-thumbnails');
  add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
  add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
  function remove_image_attribute( $html ){
  $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
  $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
  return $html;
  }

  // 固定ページでエディタを非表示にする設定
  add_filter('use_block_editor_for_post',function($use_block_editor,$post){
    if($post->post_type==='page'){
      if(in_array($post->post_name,['quick_hair_dryer','ai_pro_style'])){
        remove_post_type_support('page','editor');
        return false;
      }
    }
    return $use_block_editor;
  },10,2);