<?php /*
Module - Tool Tip
Usage:: [msu_tooltip text="abc" class="your-class" id="your-id"]ToolTip Main Text[/msu_tooltip]
*/
if(!class_exists('shortcode_ultimate_tooltip')) {
	class shortcode_ultimate_tooltip
	{
		public function __construct()
		{
			global $modules;
			$sp_tip = array('Tooltip' => array('icon' => 'dashicons-format-status'));
			$modules = array_merge($sp_tip, $modules);
			add_shortcode('msu_tooltip', array($this, 'tooltip_callback'));
			add_action( 'wp_ajax_tooltip', array(&$this,'ajax_callback'));
		}
		public function tooltip_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'text' => 'Enter some Text',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<div class="sp_tooltip-box '.$class.'" '.$id.'><strong>' . do_shortcode($content) . '</strong><span class="sp_tooltiptext">'.$atts['text'].'</span></div>';
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