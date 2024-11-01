<?php /*
Module - Pullquote
Usage:: 
[msu_box class="" id="" title="" bgcolor="" textcolor=""]Content[/msu_box]
*/
if(!class_exists('shortcode_ultimate_pullquote')) {
	class shortcode_ultimate_pullquote
	{
		public function __construct()
		{
			global $modules;
			$module = array('Pullquote' => array('icon' => 'fa fa-product-hunt'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_pullquote', array($this, 'sp_pullquote_callback'));
			add_action( 'wp_ajax_pullquote', array(&$this,'ajax_callback'));
		}
		public function sp_pullquote_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts( array(
								'class' => '',
								'id' => '',
								'align' => '',								
							), $atts);
				return '<div class="sp_pullquote sp_pullquote_'.$atts['align'].'">' . do_shortcode( $content ) . '</div>';
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