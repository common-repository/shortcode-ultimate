<?php /*
Module - Video
@usage [msu_video vid="UkKv854vBgc" align="left" title="Video Title" class="your_class" id="your_id"]Video Description.[/msu_video]
*/
if(!class_exists('shortcode_ultimate_video')) {
	class shortcode_ultimate_video
	{
		var $video_url = 'https://www.youtube.com/embed/';
		var $video_width = '400';
		var $video_height = '250';
		var $video_frame_border = '0';
		var $video_allow_full_screen = 'allowfullscreen';
		public function __construct()
		{
			global $modules;
			$module = array('Video' => array('icon' => 'dashicons-format-video'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_video', array($this, 'video_callback'));
			add_action( 'wp_ajax_video', array(&$this,'ajax_callback'));
		}
		public function video_callback($atts, $content = null)
		{      
				$class = ''; 
				$id = '';
				$atts = shortcode_atts(
										array(
												'vid' => '',
												'title' => '',
												'align' => 'left',
												'class' => '',
												'id' => '',	
											  ),
											$atts );
				 if(!empty($atts['class'])) { $class = $atts['class'];}
				 if(!empty($atts['id'])) { $id = 'id="'.$atts['id'].'"';}
					$video = '<div class="sp_video_sec sp_vid_'.$atts['align'].'">';
					$video .= '<div class="sp_video_sec_title">'.$atts['title'].'</div>';
					if($atts['align'] == 'left') {
					$video .='<div class="sp_video_sec_left"><iframe width="'.$this->video_width.'" height="'.$this->video_height.'" src="'.$this->video_url.$atts['vid'].'" frameborder="0" allowfullscreen></iframe></div>';
					$video .='<div class="sp_video_sec_right"><div class="sp_video_sec_content">'.do_shortcode($content).'</div></div>';	
					} else {	
					 $video .='<div class="sp_video_sec_right"><iframe class="sp_video_sec_iframe" id="sp_video_sec_iframe" width="'.$this->video_width.'" height="'.$this->video_height.'" src="'.$this->video_url.$atts['vid'].'" frameborder="'.$this->video_frame_border.'" '.$this->video_allow_full_screen.'></iframe></div>';	
					 $video .='<div class="sp_video_sec_left_main"><div class="sp_video_sec_content">'.do_shortcode($content).'</div></div>';	
				   }			
				$video .= '</div><div class="clear"></div>';
				 if(!empty($atts['vid'])){												
					return $video;
				 } else { 
					return __( "<span class='splus_error'>Error:: Missing Video ID. Use vid = 'your_video_id' in shortcode.'</span>");
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