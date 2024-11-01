<?php /*
Module: Slider
Usage:: [msu_slider class="testing" speed="800" delay="3000" autoplay="false" show-control="true" show-arrow="true"]
  [msu_slide src="http://localhost:8080/shortcode/wp-content/uploads/2017/03/1.jpg" caption="Caption1"][/msu_slide]
  [msu_slide src="http://localhost:8080/shortcode/wp-content/uploads/2017/03/2.jpg" caption="Caption2"][/msu_slide]
  [msu_slide src="http://localhost:8080/shortcode/wp-content/uploads/2017/03/3.jpg" caption="Caption3"][/msu_slide]
  [msu_slide src="http://localhost:8080/shortcode/wp-content/uploads/2017/03/2.jpg" caption="Caption4"][/msu_slide]
[/msu_slider]
*/
if(!class_exists('shortcode_ultimate_slider')) {
	class shortcode_ultimate_slider
	{
		public function __construct()
		{
			global $modules;
			$module = array('Slider' => array('icon' => 'dashicons-images-alt'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_slider', array($this, 'slider_callback'));
			add_shortcode('msu_slide', array($this, 'slide_callback'));
			add_action( 'wp_ajax_slider', array(&$this,'ajax_callback'));
		}
		public function slider_callback($atts, $content = null) {
			    $class = '';
				$id = '';
				$slider = '';
				$atts = shortcode_atts(
										array(
										        'class' => '',
												'speed' => '700',
												'delay' => '3000',
												'autoplay' => 'true',
												'show-control' => 'true',
												'show-arrow' => 'true',
												'csseasing' => 'cubic-bezier(0.285, 1.015, 0.165, 1.000)'
											 ),	$atts );						 
			    if(!empty($atts['class'])) { $class = $atts['class'];} else {$class = 'slider-container'; }
				$slider .= '<div class="sp_slider"><div class="slider-container '.$class.'" id="slider-container"><div class="slider">' . do_shortcode($content) . '</div>
				<div class="switch" id="prev"><span></span></div><div class="switch" id="next"><span></span></div></div><div class="clear"></div></div>';
				$slider .= '<script>
							jQuery(".'.$class.'").sliderUi({
								speed: '.$atts['speed'].',
								autoPlay: '.$atts['autoplay'].',
								caption: true,
								delay: '.$atts['delay'].',
								controlShow: '.$atts['show-control'].',
								arrowsShow: '.$atts['show-arrow'].',
								cssEasing: "'.$atts['csseasing'].'"
							});						
						</script>';
				return $slider;
		}
		public function slide_callback($atts, $content = null) {
			                        $slide = '';
			                        $atts = shortcode_atts(
										array(
										        'src' => '',
												'caption' => ''
											 ),
											$atts );
			                        $slide .='<div><img src="'.$atts['src'].'" alt="">';
									if(!empty($atts['caption'])) {
									  $slide .='<span class="caption">'.$atts['caption'].'</span>';
									}
                                    $slide .='</div>';
								   return $slide;			 
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