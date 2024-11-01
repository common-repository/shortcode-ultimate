<?php /*
Module - You Tube Advance
Usage:: 
[msu_you_tube_advance playlist="Comma seperated youtube ID's" width="500" height="500" autoplay="0" fullscreen="0" controls="1" controls="2" loop="0" rel="1" modestbranding="1"]
*/
if(!class_exists('shortcode_ultimate_you_tube_advance')) {
	class shortcode_ultimate_you_tube_advance
	{
		public function __construct()
		{
			global $modules;
			$module = array('Youtube-Advance' => array('icon' => 'fa fa-youtube-play'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_you_tube_advance', array($this, 'sp_you_tube_advance_callback'));
			add_action( 'wp_ajax_youtube-advance', array(&$this,'ajax_callback'));
		}
		public function sp_you_tube_advance_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$return = array();
				$atts = shortcode_atts(
										array( 
												'playlist' => '',
												'width' => '',
												'height' => '',
												'autoplay' => '',
												'fullscreen' => '',
												'controls' => '',
												'autohide' => '',
												'loop' => '',
												'rel' => '',
												'modestbranding' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['fullscreen']== 1) { $fullscreen = 'allowfullscreen';}else{ $fullscreen ='';}
				$playlist = explode(" ",$atts['playlist']);
				$plylist = current($playlist);
				$return ='<iframe id ="youtube_advance" src="https://www.youtube.com/embed/'.$plylist.'?autoplay='.$atts['autoplay'].'&controls='.$atts['controls'].'&autohide='.$atts['autohide'].'&loop='.$atts['loop'].'&rel='.$atts['rel'].'&modestbranding='.$atts['modestbranding'].'&playlist='.urlencode($atts['playlist']).'" width="'.$atts['width'].'" height="'.$atts['height'].'" frameborder="0" '.$fullscreen.' frameborder="0" ></iframe>';
				
				return $return;
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