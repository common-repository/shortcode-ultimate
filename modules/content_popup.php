<?php /*
Module - Content Popup
Usage:: 
[msu_content_popup class="" id="" align="center" margin="40" width="200" padding="40" bgcolor="#424F5A" text_color="#FF9500"]Content[/msu_content_popup]
*/
if(!class_exists('shortcode_ultimate_content_popup')) {
	class shortcode_ultimate_content_popup
	{
		public function __construct()
		{
			global $modules;
			$module = array('Content-Popup' => array('icon' => 'dashicons-editor-expand'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_content_popup', array($this, 'sp_content_popup_callback'));
			add_action( 'wp_ajax_content-popup', array(&$this,'ajax_callback'));
		}
		public function sp_content_popup_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'align' => '',
												'margin' => '',
												'width' => '',
												'bgcolor' => '',
												'text_color' => '',
												'padding' => '',
												'link_popup_text' => '',
												
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';
				$popupid = $atts['id'];
				}
				else{
					$popupid = "popup-2";
					$id = "";
				}
				return '<div class="sp_content_popup"><div class="content" style=""><p><a class="btn" data-popup-open="'.$popupid.'" href="#">'.$atts['link_popup_text'].'</a></p></div><div class="popup" data-popup="'.$popupid.'"><div class="popup-inner"><div class="sp_content '.$class.'" '.$id.' style="text-align:'.$atts['align'].';background:'.$atts['bgcolor'].';color:'.$atts['text_color'].';margin:'.$atts['margin'].'px auto;width:'.$atts['width'].'px;padding:;'.$atts['padding'].'px;"><p>'.do_shortcode($content).'</p><a class="popup-close" data-popup-close="'.$popupid.'" href="#">x</a></div></div></div></div>'; 
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