<?php /*
Module - Column
Usage:: [msu_column type="1/1"]Paragraph Text[/msu_column]
*/
if(!class_exists('shortcode_ultimate_column')) {
	class shortcode_ultimate_column
	{
		public function __construct()
		{
			global $modules;
			$module = array('Column' => array('icon' => 'fa fa-columns'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_column', array($this, 'column_callback'));
			add_action( 'wp_ajax_column', array(&$this,'ajax_callback'));
		}
		public function column_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'type' => '1/1',
											 ),
											$atts );
				$devide_column = explode('/', $atts['type']);
				$devide_column1 = $devide_column[0];
				$devide_column2 = $devide_column[1];
				return '<div class="sp_col sp-col-size-'.$devide_column1.'-'.$devide_column2.'">' . do_shortcode($content) . '</div>';
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