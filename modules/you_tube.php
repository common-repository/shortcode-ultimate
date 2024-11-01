<?php /*
Module - Vimeo
Usage:: 
[msu_you_tube you_tube_id="You Tube ID " width="" height="" autoplay="1" fullscreen="1"]
*/
if(!class_exists('shortcode_ultimate_you_tube')) {
	class shortcode_ultimate_you_tube
	{
		public function __construct()
		{
			global $modules;
			$module = array('Youtube' => array('icon' => 'fa fa-youtube-play'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_you_tube', array($this, 'sp_you_tube_callback'));
			add_action( 'wp_ajax_youtube', array(&$this,'ajax_callback'));
		}
		public function sp_you_tube_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array( 
												'you_tube_id' => '',
												'width' => '',
												'height' => '',
												'autoplay' => '',
												'fullscreen' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['fullscreen']== 1) { $fullscreen = 'allowfullscreen';}else{ $fullscreen ='';}
				return '<iframe id="youtube" src="https://www.youtube.com/embed/'.$atts['you_tube_id'].'?autoplay='.$atts['autoplay'].'" width="'.$atts['width'].'" height="'.$atts['height'].'" frameborder="0" '.$fullscreen.' frameborder="0" ></iframe>';
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