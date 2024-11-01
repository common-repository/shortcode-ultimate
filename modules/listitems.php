<?php /*
Module - Tip
Usage:: [msu_ul type="1"][msu_li]item-1[/msu_li][msu_li]item-2[/msu_li][/msu_ul]
*/
if(!class_exists('shortcode_ultimate_listitems')) {
	class shortcode_ultimate_listitems
	{
		public function __construct()
		{
			global $modules;
			$sp_tip = array('List-Items' => array('icon' => 'dashicons-editor-ul'));
			$modules = array_merge($sp_tip, $modules);
			add_shortcode('msu_ul', array($this, 'ul_callback'));
			add_shortcode('msu_li', array($this, 'li_callback'));
			add_action( 'wp_ajax_list-items', array(&$this,'ajax_callback'));
		}
		public function ul_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'type' => '1',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['type'] == '2') {$c_Class = 'sp_holiday_tick_list'; } else {$c_Class = 'sp_holiday_list';}
				return '<ul class="'.$c_Class.' '.$class.'" '.$id.'>' . do_shortcode($content) . '</ul>';
		}
		public function li_callback($atts, $content = null)
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
				return '<li class="'.$class.'" '.$id.'>'.do_shortcode($content).'</li>';
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