<?php /*
Module - Siblings
Usage:: 
[msu_siblings class="" id="" parent_id="Parent Id"][/msu_siblings]
*/
if(!class_exists('shortcode_ultimate_siblings')) {
	class shortcode_ultimate_siblings
	{
		public function __construct()
		{
			global $modules;
			$module = array('Siblings' => array('icon' => 'fa fa-clipboard'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_siblings', array($this, 'sp_siblings_callback'));
			add_action( 'wp_ajax_siblings', array(&$this,'ajax_callback'));
		}
		public function sp_siblings_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												),
											$atts );
					
						$pageData = get_pages( array(
														'sort_order' => 'asc',
														'sort_column' => 'post_title',
														'hierarchical' => 1,
														'parent' => -1,
														'post_type' => 'page',
														'post_status' => 'publish'
													) );
							$return = '<ul class="sp_sibling">';
						foreach($pageData as $post_data){
							$return .= '<li class="'.$atts['class'].'" id="'.$atts['id'].'"><a href="'.get_permalink($post_data->ID).'">'.$post_data->post_title.'</a></li>';
							
						}
						  $return .='</ul>';
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