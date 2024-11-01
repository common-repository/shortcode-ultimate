<?php /*
Module - Box
Usage:: 
[msu_box class="" id="" title="" bgcolor="" textcolor=""]Content[/msu_box]
*/
if(!class_exists('shortcode_ultimate_box')) {
	class shortcode_ultimate_box
	{
		public function __construct()
		{
			global $modules;
			$module = array('Box' => array('icon' => 'fa fa-square-o'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_box', array($this, 'sp_box_callback'));
			add_action( 'wp_ajax_box', array(&$this,'ajax_callback'));
		}
		public function sp_box_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'title' => '',
												'bgcolor' => '',
												'textcolor' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<div class="sp_border_box"><div class="sp_main_box"><div class="sp_border-box" style="background:'.$atts['bgcolor'].'; color:'.$atts['textcolor'].'">'.$atts['title'].'</div><div class="sp_content_box">'.do_shortcode($content).'</div></div></div>';
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