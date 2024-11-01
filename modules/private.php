<?php /*
Module - private
Usage:: 
[msu_private class="" id=""]Content[/msu_private]
*/
if(!class_exists('shortcode_ultimate_private')) {
	class shortcode_ultimate_private
	{
		public function __construct()
		{
			global $modules;
			$module = array('Private' => array('icon' => 'fa fa-user-secret'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_private', array($this, 'sp_private_callback'));
			add_action( 'wp_ajax_private', array(&$this,'ajax_callback'));
		}
		public function sp_private_callback($atts, $content = null)
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
				$user_id = get_current_user_id();
				if(!empty($user_id)){
					return '<div class="'.$class.'" '.$id.'>'.do_shortcode($content).'</div>';
				}
				else{
					return '';					
				}
					
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