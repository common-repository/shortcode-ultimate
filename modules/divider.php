<?php /*
Module - Divider
Usage:: [msu_divider class="your-class" id="your-id"]Paragraph Text[/msu_divider]
*/
if(!class_exists('shortcode_ultimate_divider')) {
	class shortcode_ultimate_divider
	{
		public function __construct()
		{
			global $modules;
			$module = array('Divider' => array('icon' => 'dashicons-format-aside'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_divider', array($this, 'divider_callback'));
			add_action( 'wp_ajax_divider', array(&$this,'ajax_callback'));
		}
		public function divider_callback($atts, $content = null)
		{
				$class = '';
				$divider = '';
				$atts = shortcode_atts(
										array(
										        'style' => 'default',
												'divider_color' => '999999',
												'size' => '3',
												'class' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				$divider .= '<div class="sp_divider">
				             <div class="sp_border '.$class.'">
                             <div class="'.$atts['style'].'_border" style="border-color:'.$atts['divider_color'].'; border-width:'.$atts['size'].'px"></div>
                             </div>
							 </div>';
				return $divider;
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