<?php if ( ! defined( 'ABSPATH' ) ) exit; if(!empty($atts['class'])) { $class = $atts['class'];}
if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';} 
$ids = $atts['ids'];
$recipe_ids = explode(',', $ids);  
  $items .='<div class="sp_carousel-section"><div class="slider short-crl">' ;
$count = 1; 
  foreach($recipe_ids as $recipe_id) { 
 $recipe = get_post($recipe_id); 
 $recipe_name = apply_filters('the_title', $recipe->post_title);
 $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($recipe_id) );
       $items .='<li>';
	   
         if(!empty($feat_image_url)) {
           $items .='<img src="'.$feat_image_url.'" alt="'.$recipe_name.'"  />';
          }
           $items .='<h2 class="recipe_name"><a href="'.get_permalink($recipe->ID).'">'.$recipe_name.'</a></h2>
          <div class="slider-detail">
            <ul>
              <li>
                <span class="icon">
                  <img src="'.MK_SPLUS_PATH.'/images/hours-icon.png" alt="hours-icon">
                </span> 
                <span class="txt">'.$this->convertMintoHours($recipe->ID).'</span>
              </li>
              <li>
                <span class="icon">
                  <img src="'.MK_SPLUS_PATH.'/images/people_icon1.png" alt="people-icon">
                </span>
                <span class="txt">'.$this->serves($recipe->ID).'</span>
              </li>
            </ul>
          </div>
        </li>';        
 $count++; } ?>           
<?php $items .='</div></div>'; ?>