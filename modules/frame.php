<?php /*
Module - Frame
Usage:: 
[msu_frame class="" id="" src="image-url" align="center"]
*/
if(!class_exists('shortcode_ultimate_frame')) {
	class shortcode_ultimate_frame
	{
		public function __construct()
		{
			global $modules;
			$module = array('Frame' => array('icon' => 'fa fa-window-maximize'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_frame', array($this, 'sp_frame_callback'));
			add_action( 'wp_ajax_frame', array(&$this,'ajax_callback'));
		}
		public function sp_frame_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'src' => '',
												'align' => '',
												'attachment_id' => '',
												'image_src' => '',
												
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['src'] == "media"){
					$attchedId = $atts['attachment_id'];
					$feat_image_url = wp_get_attachment_image( $attchedId );
					return '<div class="sp_image_frame"><div class="sp_background '.$class .'" '.$id.'  style="text-align:'.$atts['align'].'">'.$feat_image_url.'</div></div>';
				}
				elseif($atts['src'] == "image_url")
				return '<div class="sp_image_frame"><div class="sp_background '.$class .'" '.$id.'  style="text-align:'.$atts['align'].'"><img src="'.$atts['image_src'].'" /> </div></div>';			
				
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