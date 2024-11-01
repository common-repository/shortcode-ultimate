<?php  /*
Module - Button
Usage:: [msu_button size="5" onclick="alert('working')" class="your_class" background="#fff" color="#fff" link ="#" target="blank"]Button text[/msu_button]
*/
if(!class_exists('shortcode_ultimate_buttons')) {
	class shortcode_ultimate_buttons
	{
		public function __construct()
		{
			global $modules;
			$module = array('Button' => array('icon' => 'dashicons-heart'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_button', array($this, 'button_callback'));
			add_action( 'wp_ajax_button', array(&$this,'ajax_callback'));
		}
		public function button_callback($atts, $content = null)
		{
				$class = '';
				$id = '';				
				$onclick = '';
				$button = '';
				$style_css = array();
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'size' => '3',
												'background' => '#2D89EF',
												'color' => '#FFFFFF',
												'onclick' => '',
												'target' => 'self',
												'link' =>''
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if(!empty($atts['onclick'])) { $onclick = 'onclick = "'.$atts['onclick'].'"';}
				$styles = array(		
				                 'font-size' => round( ( $atts['size'] + 7 ) * 1.3 ),
								 'padding' => (round( $atts['size'] * 2 + 10 )/2).'px ' . round( $atts['size'] * 3 + 15 ) . 'px; ',
								 'border-radius' =>  round( $atts['size'] / 2 ) . 'px',
								 'background' => $atts['background'],
								 'color' => $atts['color']
								 );
				foreach ( $styles as $key => $val ) { $style_css[] = $key . ':' . $val; }
				if(!empty($atts['link'])) {
					$button .='<a href="'.$atts['link'].'" target="_'.$atts['target'].'">';
				}
				$button .='<button class="sp_button '.$class.'" '.$id.' '.$onclick.' style="' . implode( $style_css, ';' ) . '">' . do_shortcode($content) . '</button>';
				if(!empty($atts['link'])) {
					$button .='</a>';
				}
				return $button;
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