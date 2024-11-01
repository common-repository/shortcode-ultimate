<?php /*
Module - Spacer
Usage:: [msu_spacer class="your-class" id="your-id" size="160"]
*/
if(!class_exists('shortcode_ultimate_spacer')) {
	class shortcode_ultimate_spacer
	{
		public function __construct()
		{
			global $modules;
			$sp_paragraph = array('Spacer' => array('icon' => 'dashicons-sort'));
			$modules = array_merge($sp_paragraph, $modules);
			add_shortcode('msu_spacer', array($this, 'spacer_callback'));
			add_action( 'wp_ajax_spacer', array(&$this,'ajax_callback'));
		}
		public function spacer_callback($atts)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'size' => '50'
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<div class="sp_spacer '.$class.'" '.$id.' style="height:'.$atts['size'].'px"></div>';
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