<?php /*
Module - Rss
Usage:: 
[msu_rss class="" id="" title="" bgcolor="" textcolor=""]Content[/msu_rss]
*/
if(!class_exists('shortcode_ultimate_rss')) {
	class shortcode_ultimate_rss
	{
		public function __construct()
		{
			global $modules;
			$module = array('Rss' => array('icon' => 'fa fa-rss'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_rss', array($this, 'sp_rss_callback'));
			add_action( 'wp_ajax_rss', array(&$this,'ajax_callback'));
		}
		public function sp_rss_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'url' => '',
												'limit' => ''
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if ( !function_exists( 'wp_rss' ) ) include_once ABSPATH . WPINC . '/rss.php';
				$return = '<div class="'. $class.'" '.$id.'>';
				$return = wp_rss( $atts['url'], $atts['limit'] );;
				$return = '</div>';
				return $return;
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