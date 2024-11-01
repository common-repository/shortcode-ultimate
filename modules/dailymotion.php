<?php /*
Module - Dailymotion
Usage:: 
[msu_dailymotion dailymotion_id="Dailymotion ID" width="" height="" autoplay="0" fullscreen="0"]
*/
if(!class_exists('shortcode_ultimate_dailymotion')) {
	class shortcode_ultimate_dailymotion
	{
		public function __construct()
		{
			global $modules;
			$module = array('Dailymotion' => array('icon' => 'fa fa-video-camera'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_dailymotion', array($this, 'sp_dailymotion_callback'));
			add_action( 'wp_ajax_dailymotion', array(&$this,'ajax_callback'));
		}
		public function sp_dailymotion_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'dailymotion_id' => '',
												'width' => '',
												'height' => '',
												'autoplay' => '',
												'fullscreen' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['fullscreen']== 1) { $fullscreen = 'allowfullscreen="true"';}else{ $fullscreen ='';}
				return '<iframe id ="dailymotion" src="http://www.dailymotion.com/embed/video/'.$atts['dailymotion_id'].'?autoplay='.$atts['autoplay'].'&amp;logo=1&amp;quality=420" '.$fullscreen.' frameborder="0" height="'.$atts['height'].'" width="'.$atts['width'].'"></iframe>';
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