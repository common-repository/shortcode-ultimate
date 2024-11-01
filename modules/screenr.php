<?php /*
Module - screenr
Usage:: 
[msu_screenr screenr_id="screenr ID" width="" height="" autoplay="0" fullscreen="0"]
*/
if(!class_exists('shortcode_ultimate_screenr')) {
	class shortcode_ultimate_screenr
	{
		public function __construct()
		{
			global $modules;
			$module = array('Screenr' => array('icon' => 'fa fa-video-camera'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_screenr', array($this, 'sp_screenr_callback'));
			add_action( 'wp_ajax_screenr', array(&$this,'ajax_callback'));
		}
		public function sp_screenr_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'screenr_id' => '',
												'width' => '',
												'height' => '',
												'fullscreen' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['fullscreen']== 1) { $fullscreen = 'allowfullscreen="true"';}else{ $fullscreen ='';}
				return '<iframe id="screenr" width="' . $atts['width'] . '" height="' . $atts['height'] . '" src="http://screenr.com/embed/' . $atts['screenr_id'] . '" frameborder="0" '.$fullscreen.'></iframe>';
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