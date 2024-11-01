<?php /*
Module - Sub Pages
Usage:: 
[msu_sub_page class="" id="" parent_id="Parent Id"]
*/
if(!class_exists('shortcode_ultimate_sub_pages')) {
	class shortcode_ultimate_sub_pages
	{
		public function __construct()
		{
			global $modules;
			$module = array('Sub-Pages' => array('icon' => 'fa fa-folder-open-o'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_sub_page', array($this, 'sp_sub_page_callback'));
			add_action( 'wp_ajax_sub-pages', array(&$this,'ajax_callback'));
		}
		public function sp_sub_page_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'parent_id' => '',
												
											 ),
											$atts );
					$post_id = $atts['parent_id'];
					if(empty($post_id)){
						return "Please insert Post Id";
					}
					else{
						$pageData = get_pages( array(
														'child_of' => $post_id
													) );
							$return = '<ul>';
						foreach($pageData as $post_data){
							
							$return .= '<li class="'.$atts['class'].'" id="'.$atts['id'].'"><a href="'.get_permalink($post_data->ID).'">'.$post_data->post_title.'</a></li>';
							
						}
						  $return .='</ul>';
					  return $return;
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