<?php /*
Module - Spoiler
Usage:: 
[msu_spoiler class="" id="" title="Title" open="no" style="default" icon="plus"]Content[/msu_spoiler]
*/
if(!class_exists('shortcode_ultimate_spoiler')) {
	class shortcode_ultimate_spoiler
	{
		public function __construct()
		{
			global $modules;
			$module = array('Spoiler' => array('icon' => 'fa fa-th-list'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_spoiler', array($this, 'sp_spoiler_callback'));
			add_action( 'wp_ajax_spoiler', array(&$this,'ajax_callback'));
		}
		public function sp_spoiler_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
					$atts = shortcode_atts( array(
											'title'  => '',
											'open'   => '',
											'style'  => '',
											'icon'   => '',
											'id' 	 => '',
											'class'  => ''
										), $atts);
		$atts['style'] = str_replace( array( '1', '2' ), array( 'default', 'fancy' ), $atts['style'] );
		if ( $atts['open'] !== 'yes' ) $atts['class'] .= ' sp_spoiler-closed';
		return '<div class="sp_spoiler sp_spoiler-style-' . $atts['style'] . ' sp_spoiler-icon-' . $atts['icon'].' '.$atts['class'].'"><div class="sp_spoiler-title"><span class="sp_spoiler-icon"></span>' .  $atts['title'] . '</div><div class="sp_spoiler-content sp_clearfix" style="display:none">' . do_shortcode( $content ) . '</div></div>';
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