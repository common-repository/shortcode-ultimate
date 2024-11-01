<?php /*
Module - Animation
Usage:: 
[msu_animation class="" id="" animation="bounceIn" duration="1" delay="1" inline="no"]Content[/msu_animation]
*/
if(!class_exists('shortcode_ultimate_animation')) {
	class shortcode_ultimate_animation
	{
		public function __construct()
		{
			global $modules;
			$module = array('Animation' => array('icon' => 'fa fa-bullseye'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_animation', array($this, 'sp_animation_callback'));
			add_action( 'wp_ajax_animation', array(&$this,'ajax_callback'));
		}
		public function sp_animation_callback($atts, $content = null)
		{
				$atts = shortcode_atts( array(
								'animation' => '',
								'duration'  => '',
								'delay'     => '',
								'inline'    => '',
								'class'     => '',
								'id'     => '',
							), $atts);
			$time = '-webkit-animation-duration:' . $atts['duration'] . 's;-webkit-animation-delay:' . $atts['delay'] . 's;animation-duration:' . $atts['duration'] . 's;animation-delay:' . $atts['delay'] . 's;';
			$return = '<div class="sp_animate ' . $atts['class'] . '" id="'.$atts['id'].'" style="visibility:hidden;' . $time . '" data-animation="' . $atts['animation'] . '" data-duration="' . $atts['duration'] . '" data-delay="' . $atts['delay'] . '">' . do_shortcode( $content ) . '</div>';
			
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