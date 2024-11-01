<?php /*
Module - User
Usage:: 
[msu_user field="display_name" default="Default" before="" after="" user_id="User Id"]
*/
if(!class_exists('shortcode_ultimate_user')) {
	class shortcode_ultimate_user
	{
		public function __construct()
		{
			global $modules;
			$module = array('User' => array('icon' => 'fa fa-user-circle'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_user', array($this, 'sp_user_callback'));
			add_action( 'wp_ajax_user', array(&$this,'ajax_callback'));
		}
		public function sp_user_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'field' => '',
												'default' => '',
												'before' => '',
												'after' => '',
												'user_id' => '',
											 ),
											$atts );
					$field = $atts['field'];
					$default = $atts['default'];
					$before = $atts['before'];
					$after = $atts['after'];
					$user_id = $atts['user_id'];
					if(empty($user_id)){
						return "Please insert User id";
					}
					else{
						$user_info = get_userdata($user_id);
						$userData = $user_info->$field;
						if(empty($userData)){
						$userData = $default;
						}
					return '<p><span>'.$before.' </span> '.$userData.' <span> '.$after.'</span></p>';
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