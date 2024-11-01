<?php /*
Module - Quotation
Usage:: [msu_quotation class="you-class" id="your-id"]testing[/msu_quotation]
*/ 
if(!class_exists('shortcode_ultimate_quotation')) {
	class shortcode_ultimate_quotation
	{
		public function __construct()
		{
			global $modules;
			$sp_quotation = array('Quotation' => array('icon' => 'dashicons-editor-quote'));
			$modules = array_merge($sp_quotation, $modules);
			add_shortcode('msu_quotation', array($this, 'quotation_callback'));
			 add_action( 'wp_ajax_quotation', array(&$this,'ajax_callback'));
		}
		public function quotation_callback($atts, $content = null)
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
				return '<div class="sp_blockquotes '.$class.'" '.$id.'>' . do_shortcode($content) . '</div>';
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