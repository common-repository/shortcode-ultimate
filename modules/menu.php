<?php /*
Module - Menu
Usage:: [msu_menu class="your-class" name="menu_name"]
*/
if(!class_exists('shortcode_ultimate_menu')) {
	class shortcode_ultimate_menu
	{
		/*Construct */
		public function __construct()
		{
			global $modules;
			$module = array('Menu' => array('icon' => 'dashicons-menu'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_menu', array($this, 'menu_callback'));
			add_action( 'wp_ajax_menu', array(&$this,'ajax_callback'));
		}
		/* Menu Callback */
		public function menu_callback($atts) {
			$atts = shortcode_atts( array(
				'name' => false,
			), $atts );
			$return = wp_nav_menu( array(
					'echo'        => false,
					'menu'        => $atts['name'],
				) );
		   return ( $atts['name'] ) ? $return : false;
		}
		/* Msg callback */
		public static function menu_cb() {
		  return __( 'This menu doesn\'t exists, or has no elements', 'MK_SPLUS_TD' );
	   }
	   /*
	    Ajax Callback
	   */
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