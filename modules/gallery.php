<?php /*
Module - Gallery
Usage:: [msu_gallery class="" id="" width="" height="" src="media"]
*/
if(!class_exists('shortcode_ultimate_gallery')) {
	class shortcode_ultimate_gallery
	{
		public function __construct()
		{
			global $modules;
			$module = array('Gallery' => array('icon' => 'dashicons-format-gallery'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_gallery', array($this, 'sp_gallery_callback'));
			add_action( 'wp_ajax_gallery', array(&$this,'ajax_callback'));
		}
		
		public function sp_gallery_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'src' => '',
												'width' => '',
												'height' => '',
												'attachment_ids' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				
				if($atts['src'] == "recent_post"){
					$args = array('numberposts' => 10,
								  'order' => 'DESC',
								  'post_type' => 'post',
								  'post_status' => 'publish',
								  );
					$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
					$return .=  '<ul class="ms_gallery">';
					foreach($recent_posts as $recent){
						 $id = $recent['ID'];
						 $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($id) );
						 $return .='<li class="'.$class.'" '.$id.'><div class="ms_gallery_box"><img src="'.$feat_image_url.'" height="'.$atts['height'].'" width="'.$atts['width'].'" /></div></li>';
					}
					$return .='</ul>';
				}
				if($atts['src'] == "media"){
					$attchedIds = $atts['attachment_ids'];
					$attached_ids = explode(",",$attchedIds);
					$return .=  '<ul class="ms_gallery">';
					foreach($attached_ids as $attached_id){
						$feat_image_url = wp_get_attachment_image( $attached_id );
						 $return .='<li><div class="ms_gallery_box">'.$feat_image_url.'</div></li>';
					}
					$return .='</ul>';
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