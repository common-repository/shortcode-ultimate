<?php /*
Module - Qr
Usage:: 
[msu_rss class="" id="" title="" ="" textcolor=""]Content[/msu_rss]
*/
if(!class_exists('shortcode_ultimate_qr')) {
	class shortcode_ultimate_qr
	{
		public function __construct()
		{
			global $modules;
			$module = array('Qr' => array('icon' => 'fa fa-qrcode'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_qr', array($this, 'sp_qr_callback'));
			add_action( 'wp_ajax_qr', array(&$this,'ajax_callback'));
		}
		public function sp_qr_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'title' => '',
												'link' => '',
												'size' => '',
												'target' => '',
												'bgcolor' => '',
												'color' => '',
												'data' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				$href = ( $atts['link'] ) ? ' href="' . $atts['link'] . '"' : '';
				return '<a' . $href . ' target="_' . $atts['target'] . '" title="' . $atts['title'] . '"><img src="https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode( $atts['data'] ) . '&size=' . $atts['size'] . 'x' . $atts['size'] . '&format=png&color='. $this->msu_hex2rgb($atts['color']).'&bgcolor='. $this->msu_hex2rgb($atts['bgcolor']). '" alt="' . $atts['title'] . '" /></a>';
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
		public function msu_hex2rgb( $colour, $delimiter = '-' ) {
			if ( $colour[0] == '#' ) {
				$colour = substr( $colour, 1 );
			}
			if ( strlen( $colour ) == 6 ) {
				list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
			} elseif ( strlen( $colour ) == 3 ) {
				list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
			} else {
				return false;
			}
			$r = hexdec( $r );
			$g = hexdec( $g );
			$b = hexdec( $b );
			return implode( $delimiter, array( $r, $g, $b ) ); //array( 'red' => $r, 'green' => $g, 'blue' => $b );
		}
	}
}