<?php /*
Module - Note
Usage:: 
[msu_note class="" id="" bgcolor="#F96" textcolor="#FFFFFF"]Content[/msu_note]
*/
if(!class_exists('shortcode_ultimate_note')) {
	class shortcode_ultimate_note
	{
		public function __construct()
		{
			global $modules;
			$module = array('Note' => array('icon' => 'fa fa-sticky-note-o'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_note', array($this, 'sp_note_callback'));
			add_action( 'wp_ajax_note', array(&$this,'ajax_callback'));
		}
		public function sp_note_callback($atts, $content = null)
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
				return '<div class="sp_note_box"><div class="sp_note '.$class.'" '.$id.' style="background:'.$atts['bgcolor'].'; color:'.$atts['textcolor'].'"> Note: '.do_shortcode($content).'</div></div>';
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