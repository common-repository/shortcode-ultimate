<?php if ( ! defined( 'ABSPATH' ) ) exit; if(!empty($atts['class'])) { $class = $atts['class'];}
if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';} 
$ids = $atts['ids'];
$cIas = explode(',', $ids); 
$posts .='<div class="sp_save-spend">';
$count = 1; 
foreach($cIas as $id): 
  $post_data = get_post($id);
  $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($id) );
  $title = apply_filters('the_title', $post_data->post_title);
  $post_content = wp_trim_words( $post_data->post_content, $this->contentwords, '...' ); 
  if($count%2 == 0) { 
   $posts .='<div class="sp_save-spend-right-content">
    <h1 class="sp_h1">'.$title.'</h1>
    <p>'.$post_content.'</p>
  </div>
  <div class="sp_save-spend-left-img">';
   if(!empty($feat_image_url)) {
      $posts .='<img src="'.$feat_image_url.'" alt="'.$title.'"><div class="bottom_bar">'.$title.'</div>';
	}
    $posts .='</div>';
    } else  {
    $posts .='<div class="sp_save-spend-img">';
	if(!empty($feat_image_url)) {
      $posts .='<img src="'.$feat_image_url.'" alt="'.$title.'"><div class="bottom_bar">'.$title.'</div>';
	}
    $posts .='</div>';
    $posts .='<div class="sp_save-spend-content">
         <h1 class="sp_h1">'.$title.'</h1>
        <p>'.$post_content.'</p>
  </div>';
  } 
  $posts .='<div class="clear"></div>';
 $count ++;endforeach;   
$posts .='</div>';