<?php /*
Module - Lightbox
Usage:: 
[msu_lightbox class="" id="" type="iframe" src="You-tube/Image/Webpage Url" height="" width=""]
*/
if(!class_exists('shortcode_ultimate_lightbox')) {
	class shortcode_ultimate_lightbox
	{
		public function __construct()
		{
			global $modules;
			$module = array('Lightbox' => array('icon' => 'dashicons-move'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_lightbox', array($this, 'sp_lightbox_callback'));
			add_action( 'wp_ajax_lightbox', array(&$this,'ajax_callback'));
		}
		public function sp_lightbox_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'type' => '',
												'height' => '',
												'width' => '',
												'src' => '',
												
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['type'] == 'image'){
					return '<div class="sp_popup"><div class="content"><p><a class="btn" data-popup-open="popup-1" href="#">Click Here</a></p></div><div class="popup" data-popup="popup-1"><div class="popup-inner '.$class.'" '.$id.' style="width:'.$atts['width'].'px;"><div class="sp_iframe"><img  src="'.$atts['src'].'"  height='.$atts['height'].'><a class="popup-close" data-popup-close="popup-1" href="#">x</a></div></div></div></div>';;
				}else{
					return '<div class="sp_popup"><div class="content"><p><a class="btn" data-popup-open="popup-1" href="#">Click Here</a></p></div><div class="popup" data-popup="popup-1"><div class="popup-inner" style="width:'.$atts['width'].'px; "><div class="sp_iframe"><iframe src="'.$atts['src'].'"height='.$atts['height'].' frameborder="0" allowfullscreen></iframe><a class="popup-close" data-popup-close="popup-1" href="#">x</a></div></div></div></div>';
				}
				
				
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