<?php /*
Module - Dummy Image
Usage:: [msu_dummy_image class="" id="" height="200" width="200" theme="any"]
*/
if(!class_exists('shortcode_ultimate_dummy_image')) {
	class shortcode_ultimate_dummy_image
	{
		public function __construct()
		{
			global $modules;
			$module = array('Dummy-Image' => array('icon' => 'fa fa-picture-o'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_dummy_image', array($this, 'sp_dummy_image_callback'));
			add_action( 'wp_ajax_dummy-image', array(&$this,'ajax_callback'));
		}
		public function sp_dummy_image_callback($atts, $content = null)
		{
				$atts = shortcode_atts( array(
										'width'  => '',
										'height' => '',
										'theme'  => 'any',
										'class'  => ''
									   ), $atts );
			  $url = 'http://lorempixel.com/' . $atts['width'] . '/' . $atts['height'] . '/';
			  if ( $atts['theme'] !== 'any' ) $url .= $atts['theme'] . '/' . rand( 0, 10 ) . '/';
			  return '<img src="' . $url . '" alt="' . __( 'Dummy image', 'MK_SPLUS_TD' ) . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" class="msu-dummy-image' .  $atts['class'] . '" />';
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