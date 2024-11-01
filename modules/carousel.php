<?php /*
Module - Carousel
Usage:: 
[msu_carousel class="" id="" animation="slide" animationloop="false" itemwidth="210" src="recent_post"]
*/
if(!class_exists('shortcode_ultimate_carousel')) {
	class shortcode_ultimate_carousel
	{
		public function __construct()
		{
			global $modules;
			$module = array('Carousel' => array('icon' => 'fa fa-sliders'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_carousel', array($this, 'sp_carousel_callback'));
			add_action( 'wp_ajax_carousel', array(&$this,'ajax_callback'));
		}
		
		public function sp_carousel_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'src' => '',
												'animation' => '',
												'animationloop' => '',
												'itemwidth' => '',
												'itemmargin' => '',
												'attachment_ids' => '',
											 ),
											$atts );
										
				$class = ''; 
				if(!empty($atts['class'])) { $class = $atts['class'];} else {$class = 'flexslider'; }
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				 $return = "<script>
					jQuery(window).load(function(){
									   jQuery('.flexslider').flexslider({
												animation: '".$atts['animation']."',
												animationLoop: '".$atts['animationloop']."',
												itemWidth:".$atts['itemwidth'].",
												itemMargin:".$atts['itemmargin'].",
												start: function(slider){
												  jQuery('body').removeClass('loading');
												}
											  });
										 });
										
						 </script>";
						
				if($atts['src'] == "recent_post"){
					$args = array('numberposts' => 10,
								  'order' => 'DESC',
								  'post_type' => 'post',
								  'post_status' => 'publish',
								  );
					$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
					$return .=  '<div class="sp_carousel" ><div id="container" class="cf"><div id="main" role="main"><section class="slider"> <div class="flexslider carousel  '.$atts['class'].'" id="'.$atts['id'].'"><ul class="slides">';
					foreach($recent_posts as $recent){
						 $id = $recent['ID'];
						 $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($id) );
						 $return .='<li><img src="'.$feat_image_url.'" /></li>';
					}
					$return .='</ul></div></section></div></div></div>';
				}
				if($atts['src'] == "media"){
					$attchedIds = $atts['attachment_ids'];
					$attached_ids = explode(",",$attchedIds);
					$return .=  '<div class="sp_carousel " ><div id="container" class="cf"><div id="main" role="main"><section class="slider"> <div class="flexslider carousel '.$atts['class'].'" id="'.$atts['id'].'"><ul class="slides">';
					foreach($attached_ids as $attached_id){
						$feat_image_url = wp_get_attachment_image( $attached_id );
						 $return .='<li>'.$feat_image_url.'</li>';
					}
					$return .='</ul></div></section></div></div></div>';
				}
				return $return;
		}
		public function ajax_callback() {
			$module = $_POST['module'];	
			$dir = dirname( __FILE__ ).'/forms/';
			if(!empty($module)){
				$module_template = $dir.$module.'.php';
				if(file_exists($module_template)){
				    include($module_template);
				} else {
					echo '<span class="sp_error">Error: Missing Form File For '.$module.' in '.$module_template.'.</span>';
				}
			}
			die;
		}
	}
}