<?php /*
Module - Guests
Usage:: 
[msu_guests class="" id=""]Content123[/msu_guests]
*/
if(!class_exists('shortcode_ultimate_guests')) {
	class shortcode_ultimate_guests
	{
		public function __construct()
		{
			global $modules;
			$module = array('Guests' => array('icon' => 'fa fa-user-plus'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_guests', array($this, 'sp_guests_callback'));
			add_action( 'wp_ajax_guests', array(&$this,'ajax_callback'));
		}
		public function sp_guests_callback($atts, $content = null)
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
				if(empty($user_id)){
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