<?php /*
Module - Row 
Usage:: [msu_row]
[msu_column type="1/1"]Content Goes here[/msu_column]
[/msu_row]
*/
if(!class_exists('shortcode_ultimate_row')) {
	class shortcode_ultimate_row
	{
		public function __construct()
		{
			global $modules;
			$module = array('Row' => array('icon' => 'fa fa-columns'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_row', array($this, 'sp_row_callback'));
			add_action( 'wp_ajax_row', array(&$this,'ajax_callback'));
		}
		public function sp_row_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<div class="sp_row '.$class.'" '.$id.'>' . do_shortcode($content) . '<div class="clear"></div></div>';
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