<?php /*
Module - Members
Usage:: 
[msu_members class="" id="" title="" bgcolor="" textcolor=""]Content[/msu_members]
*/
if(!class_exists('shortcode_ultimate_members')) {
	class shortcode_ultimate_members
	{
		public function __construct()
		{
			global $modules;
			$module = array('Members' => array('icon' => 'fa fa-user'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_members', array($this, 'sp_members_callback'));
			add_action( 'wp_ajax_members', array(&$this,'ajax_callback'));
		}
		public function sp_members_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'message' => '',
												'bgcolor' => '',
												'login_text' => '',
												'login_url' => '',
												'text_color' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				$user_id = get_current_user_id();
				if(empty($user_id)){
					return '<div class="register_member '.$class.'" '.$id.' style="background:'.$atts['bgcolor'].';color:'.$atts['text_color'].'">'.$atts['message'] .'&nbsp;&nbsp;<a href="'.$atts['login_url'].'">Login</a></div>';
				}
				else{
					return '<div class="'.$class.'" '.$id.' style="background:'.$atts['bgcolor'].';color:'.$atts['text_color'].'">'.do_shortcode($content).'</div>';					
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