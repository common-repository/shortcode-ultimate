<?php /*
Module - Highlighted Text
Usage:: 
[msu_highlighted_text class="" id="" bgcolor="#424F5A" textcolor="#FF9500"]Content[/msu_highlighted_text]
*/

if(!class_exists('shortcode_ultimate_highlighted_text')) {
	class shortcode_ultimate_highlighted_text
	{
		public function __construct()
		{
			global $modules;
			$module = array('Highlighted-Text' => array('icon' => 'fa fa-credit-card'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_highlighted_text', array($this, 'sp_highlighted_text_callback'));
			add_action( 'wp_ajax_highlighted-text', array(&$this,'ajax_callback'));
		}
		public function sp_highlighted_text_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'content' => '',
												'bgcolor' => '',
												'textcolor' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<span class="'.$class.'" id="'.$atts['id'].'" style="color:'.$atts['bgcolor'].'; background-color:'.$atts['textcolor'].';" >' . do_shortcode($content) .'</span>';
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