<?php /*
Module - Label
Usage:: 
[msu_label class="" id="" type="default"]Content[/msu_label]
*/
if(!class_exists('shortcode_ultimate_label')) {
	class shortcode_ultimate_label
	{
		public function __construct()
		{
			global $modules;
			$module = array('Label' => array('icon' => 'fa fa-minus'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_label', array($this, 'sp_label_callback'));
			add_action( 'wp_ajax_label', array(&$this,'ajax_callback'));
		}
		public function sp_label_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'type' => '',
											),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<div id="sp_label '.$class.'" '.$id.'><div class="sp_labels"><div class="sp_label '.$atts['type'].'">'.do_shortcode($content).'</div><div class="clear"></div></div></div>';
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