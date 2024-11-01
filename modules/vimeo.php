<?php /*
Module - Vimeo
Usage:: 
[msu_vimeo vimeo_id="Vimeo Id " width="" height="" autoplay="1" fullscreen="1"]
*/
if(!class_exists('shortcode_ultimate_vimeo')) {
	class shortcode_ultimate_vimeo
	{
		public function __construct()
		{
			global $modules;
			$module = array('Vimeo' => array('icon' => 'fa fa-vimeo'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_vimeo', array($this, 'sp_vimeo_callback'));
			add_action( 'wp_ajax_vimeo', array(&$this,'ajax_callback'));
		}
		public function sp_vimeo_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'vimeo_id' => '',
												'width' => '',
												'height' => '',
												'autoplay' => '',
												'fullscreen' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['fullscreen']== 1) { $fullscreen = 'allowfullscreen';}else{ $fullscreen ='';}
				return '<iframe id="vimeo" src="https://player.vimeo.com/video/'.$atts['vimeo_id'].'?autoplay='.$atts['autoplay'].'" width="'.$atts['width'].'" height="'.$atts['height'].'" frameborder="0" '.$fullscreen.'></iframe>';
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