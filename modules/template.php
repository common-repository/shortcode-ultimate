<?php /*
Module - Template
Usage:: [msu_template name="filename"]
*/
if(!class_exists('shortcode_ultimate_template')) {
	class shortcode_ultimate_template
	{
		public function __construct()
		{
			global $modules;
			$sp_template = array('Template' => array('icon' => 'fa fa-file-o'));
			$modules = array_merge($sp_template, $modules);
			add_shortcode('msu_template', array($this, 'template_callback'));
			add_action( 'wp_ajax_template', array(&$this,'ajax_callback'));
		}
		public function template_callback($atts, $content = null)
		{
			$atts = shortcode_atts( array(
					'name' => ''
				), $atts);
			if ( !$atts['name'] ) return __( "<span class='splus_error'>Error:: Template Missing. Please specify Template Name as name='filename.php' in shortcode.</span>", SPLUS);
			 ob_start();
			 $template = str_replace( '.php', '', $atts['name'] ); // replacing php ext if exists
			  get_template_part($template);
			 $output = ob_get_contents();
			 ob_end_clean();
			return $output;
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