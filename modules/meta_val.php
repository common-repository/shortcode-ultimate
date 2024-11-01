<?php /*
Module - Paragraph
Usage:: [msu_meta_field_value meta_key="Meta_Key" post_id = "1"]
*/
if(!class_exists('shortcode_ultimate_meta_val')) {
	class shortcode_ultimate_meta_val
	{
		public function __construct()
		{
			global $modules;
			$module = array('Meta-Field-Value' => array('icon' => 'dashicons-info'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_meta_field_value', array($this, 'meta_val_callback'));
			add_action( 'wp_ajax_meta-field-value', array(&$this,'ajax_callback'));
		}
		public function meta_val_callback($atts)
		{
				$atts = shortcode_atts(
										array(
												'meta_key' => '',
												'post_id' => ''
											 ),
											$atts );
			   if(!empty($atts['meta_key']) && !empty($atts['post_id'])) {
				 return get_post_meta($atts['post_id'], $atts['meta_key'], true); 
			   } else {
				 return __( "<span class='splus_error'>Error:: meta_mey or post_id is missing.</span>", SPLUS);   
			   }
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