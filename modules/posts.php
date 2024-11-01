<?php /*
Module - Posts
Usage:: [msu_posts ids = "1,2,3,4" class="your-class" id="your-id"]
*/
if(!class_exists('shortcode_ultimate_posts')) {
	class shortcode_ultimate_posts
	{
		var $template = 'templates/posts'; // template
		var $contentwords = 50; // content words
		public function __construct()
		{
			global $modules;
			$module = array('Posts' => array('icon' => 'dashicons-edit'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_posts', array($this, 'posts_callback'));
		    add_action( 'wp_ajax_posts', array(&$this,'ajax_callback'));
		}
		public function posts_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'ids' => '',
											 ),
											$atts );
			   $posts = '';							
			   if(!empty($atts['ids'])){								
				   include($this->template.'.php');
				   return $posts;
			   } else { return __( "<span class='splus_error'>Error:: Ids are Missing, Please add post ids in shortcode e.g ids = '1,2,3'.</span>", SPLUS); }
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