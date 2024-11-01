<?php /*
Module - Map
Usage:: 
[msu_map width="600" height="600" marker="Add Address"]
*/
if(!class_exists('shortcode_ultimate_google_map')) {
	class shortcode_ultimate_google_map
	{
		public function __construct()
		{
			global $modules;
			$module = array('Google-Map' => array('icon' => 'fa fa-map-marker'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_map', array($this, 'sp_map_callback'));
			add_action( 'wp_ajax_google-map', array(&$this,'ajax_callback'));
		}
		public function sp_map_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'marker' => '',
												'width' => '',
												'height' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				$address = urlencode( $atts['marker'] );
				return '<iframe class="'.$class.'" '.$id.' src="http://maps.google.com/maps?q='.$address.'&amp;output=embed" height="'.$atts['height'].'" width="'.$atts['width'].'"></iframe>';
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