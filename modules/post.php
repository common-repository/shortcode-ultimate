<?php /*
Module - Post
Usage:: 
[msu_post field="post_name"  before="" after=" " post_id="Post ID"]
*/
if(!class_exists('shortcode_ultimate_post')) {
	class shortcode_ultimate_post
	{
		public function __construct()
		{
			global $modules;
			$module = array('Post' => array('icon' => 'fa fa-newspaper-o'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_post', array($this, 'sp_post_callback'));
			add_action( 'wp_ajax_post', array(&$this,'ajax_callback'));
		}
		public function sp_post_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'field' => '',
												'default' => '',
												'before' => '',
												'after' => '',
												'post_id' => '',
											 ),
											$atts );
					$field = $atts['field'];
					$default = $atts['default'];
					$before = $atts['before'];
					$after = $atts['after'];
					$post_id = $atts['post_id'];
					if(empty($post_id)){
						return "Please insert Post Id";
					}
					else{
						$post_info =  get_post_field($field,$post_id );
						if(empty($post_info )){
						$post_info = $default;
						}
					  return '<p><span>'.$before.'</span><span> '. $post_info .'</span><span> '.$after .'</span></p>';
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