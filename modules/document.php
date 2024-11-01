<?php /*
Module - Document
Usage:: [msu_document url="http://infolab.stanford.edu/pub/papers/google.pdf" width="600" height="400" responsive="yes" class="abc"]
*/
if(!class_exists('shortcode_ultimate_document')) {
	class shortcode_ultimate_document
	{
		public function __construct()
		{
			global $modules;
			$sp_document = array('Document' => array('icon' => 'fa fa-file-text'));
			$modules = array_merge($sp_document, $modules);
			add_shortcode('msu_document', array($this, 'document_callback'));
			add_action( 'wp_ajax_document', array(&$this,'ajax_callback'));
		}
		public function document_callback($atts, $content = null)
		{
				$atts = shortcode_atts( array(
				'url'        => '',
				'width'      => 600,
				'height'     => 400,
				'responsive' => 'yes',
				'class'      => ''
			), $atts);
				return '<div class="msu_document msu_document-media-' . $atts['responsive'] . '"><iframe src="https://docs.google.com/gview?embedded=true&url=' . $atts['url'] . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '" class="su-document '.$atts['class'].'"></iframe></div>';
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