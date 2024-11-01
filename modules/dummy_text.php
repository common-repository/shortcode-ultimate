<?php /*
Module - Dummy Text
Usage:: [msu_dummy_text class="your-class" amount="1" type="words" cache="yes"]
*/
if(!class_exists('shortcode_ultimate_dummy_text')) {
	class shortcode_ultimate_dummy_text
	{
		/*
		Cache
		*/
		var $cache = true;
		/*
		Expire Cache
		*/
		var $cacheExpire = '60*60*24*30';
		/*
		Autoload Hooks
		*/
		public function __construct()
		{
			global $modules;
			$module = array('Dummy-Text' => array('icon' => 'dashicons-format-aside'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_dummy_text', array($this, 'msu_dummy_text_callback'));
			add_action( 'wp_ajax_dummy-text', array(&$this,'ajax_callback'));
		}
		/*
		Shortcode Callback
		*/
		public function msu_dummy_text_callback($atts, $content = null)
		{
			$atts = shortcode_atts( array(
				'amount' => 1,
				'type'   => 'paras',
				'cache'  => 'yes',
				'class'  => ''
			), $atts );
		    $transient = 'msu/cache/dummy_text/' . sanitize_text_field( $atts['type'] ) . '/' . intval( $atts['amount'] );
		    $return = get_transient( $transient );
		if ( $return && $atts['cache'] === 'yes' && $this->cache) return $return;
		else {
			$xml = simplexml_load_file( 'http://www.lipsum.com/feed/xml?amount=' . $atts['amount'] . '&what=' . $atts['type'] . '&start=0' );
			$return = '<div class="msuu-dummy-text' .$atts['class']. '">' . wpautop( str_replace( "\n", "\n\n", $xml->lipsum ) ) . '</div>';
			set_transient( $transient, $return, $this->cacheExpire );
			return $return;
		}
		}
		/*
		Ajax Callback
		*/
		public function ajax_callback() {
			$module = sanitize_text_field($_POST['module']);	
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