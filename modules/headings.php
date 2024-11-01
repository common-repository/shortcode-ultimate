<?php /*
Module - Heading Module
@ H1 -> H4
Usage:: [msu_h1 class="your-class" id="your-id"]heading 1[/msu_h1] to [msu_h4 class="your-class" id="your-id"]heading 4[/msu_h4]
*/ 
if(!class_exists('shortcode_ultimate_headings')) {
	class shortcode_ultimate_headings
	{
		public function __construct(){
			global $modules;
			$sp_heading = array('Headings' => array('icon' => 'dashicons-align-center'));
			$modules = array_merge($sp_heading, $modules);
			for($hd = 1; $hd<=4; $hd++) {
			  add_shortcode('msu_h'.$hd, array($this, 'opening_heading_callback_h'.$hd));
			}
			add_action( 'wp_ajax_headings', array(&$this,'ajax_callback'));
		}
		public function opening_heading_callback_h1($atts , $content = null){
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
			return '<h1 class="sp_h1 '.$class.'" '.$id.'>' . do_shortcode($content) . '</h1>';
		}
		public function opening_heading_callback_h2($atts, $content = null){
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
			return '<h2 class="sp_h2 '.$class.'" '.$id.'>' . do_shortcode($content) . '</h2>';
		}
		public function opening_heading_callback_h3($atts, $content = null){
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
			return '<h3 class="sp_h3 '.$class.'" '.$id.'>' . do_shortcode($content) . '</h3>';
		}
		public function opening_heading_callback_h4($atts, $content = null){
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
			return '<h4 class="sp_h4 '.$class.'" '.$id.'>' . do_shortcode($content) . '</h4>';
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