<?php /*
Module - Services
Usage:: 
[msu_services class="" id="" title="" bgcolor="" textcolor=""]Content[/msu_services]
*/
if(!class_exists('shortcode_ultimate_services')) {
	class shortcode_ultimate_services
	{
		public function __construct()
		{
			global $modules;
			$module = array('Services' => array('icon' => 'fa fa-cogs'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_services', array($this, 'sp_services_callback'));
			add_action( 'wp_ajax_services', array(&$this,'ajax_callback'));
		}
		public function sp_services_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'title' => '',
												'color' => '',
												'size' => '',
												'icon' => '',
												'type' => '',
												'image_id' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['type'] == "media"){
					$attchedId = $atts['image_id'];
					$return =  '<div class="'.$atts['class'].'" id="'.$atts['id'].'">';
					$feat_image_url = wp_get_attachment_image( $attchedId );
					$return .= $feat_image_url;
					$return .= $atts['title'];
					$return .= do_shortcode($content);
					$return .='</div>';
				}
				elseif($atts['type'] == "icon"){
					$return  =  '<div class="'.$atts['class'].'" id="'.$atts['id'].'">';
					$return .='<span class="fa '.$atts['icon'].'" style="color:'.$atts['color'].';font-size:'.$atts['size'].'px"></span>';
					$return .= $atts['title'];
					$return .= do_shortcode($content);
					$return .='</div>';
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