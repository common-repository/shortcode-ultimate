<?php if(!class_exists('shortcode_ultimate_audio')) {
	class shortcode_ultimate_audio
	{
		public function __construct()
		{
			global $modules;
			$module = array('Audio' => array('icon' => 'dashicons-playlist-audio'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_audio', array($this, 'audio_callback'));
			add_action( 'wp_ajax_audio', array(&$this,'audio_ajax_callback'));
		}
		public function audio_callback($atts)
		{
				$atts = shortcode_atts(
										array(
												'src' => '',
												'loop' => 'off',
												'autoplay' => '0',
												'preload' => 'none'												
											 ),
											$atts );
				$shortcodes = '[audio src="'.$atts['src'].'" loop="'.$atts['loop'].'" autoplay="'.$atts['autoplay'].'" preload="'.$atts['preload'].'"]';							
				return do_shortcode($shortcodes);
		}
		public function audio_ajax_callback() {
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