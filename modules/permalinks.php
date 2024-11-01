<?php /*
Module - Permalink
Usage:: [paragraph class="your-class" id="your-id"]Paragraph Text[/paragraph]
*/
if(!class_exists('shortcode_ultimate_permalinks')) {
	class shortcode_ultimate_permalinks
	{
		public function __construct()
		{
			global $modules;
			$module = array('Permalink' => array('icon' => 'dashicons-admin-links'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_permalink', array($this, 'permalink_callback'));
			add_action( 'wp_ajax_permalink', array(&$this,'ajax_callback'));
		}
		public function permalink_callback($atts, $content = null)
		{
				$class = '';
				$target = '';
				$permalink = '';
				$atts = shortcode_atts(
										array(												
												'id' => '',
												'class' => '',
												'target' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class']; }
				if(!empty($atts['target'])) { $target = 'target = "_'.$atts['target'].'"';}
             	$id = $atts['id'];
				if(!empty($id)) {
					$post_link = get_permalink($id);
				 $permalink = '<a class="sp_permalink '.$class.'" '.$target.' href="'.$post_link.'">' . do_shortcode($content) . '</a>';
				} else {
				$permalink = "<span class='splus_error'>Error:: Post id is Missing, Please add post id in shortcode e.g id = '1'.</span>";	    }
				return $permalink;
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