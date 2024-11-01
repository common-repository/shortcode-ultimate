<?php /*
Module - expand
Usage:: 
[msu_expand class="" id="" more_text="Show more" less_text="Show less" hide_text="no" height="100" link_color="#0088FF" text_color="#333333" link_style="button" link_align="left"]Content[/msu_expand]
*/
if(!class_exists('shortcode_ultimate_expand')) {
	class shortcode_ultimate_expand
	{
		public function __construct()
		{
			global $modules;
			$module = array('Expand' => array('icon' => 'fa fa-sort-amount-asc'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_expand', array($this, 'sp_expand_callback'));
			add_action( 'wp_ajax_expand', array(&$this,'ajax_callback'));
		}
		public function sp_expand_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'more_text'  => '',
												'less_text'  => '',
												'height'     => '',
												'hide_text'  => '',
												'text_color' => '',
												'link_color' => '',
												'link_style' => '',
												'link_align' => '',
												'class'      => '',
												'id'      	 => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				$less = ( $atts['hide_text'] !== 'yes' ) ? '<div class="sp_expand-link sp_expand-link-less" style="text-align:' . $atts['link_align'] . '"><a href="javascript:;" style="color:' . $atts['link_color'] . ';border-color:' . $atts['link_color'] . '">' . $less_icon . '<span style="border-color:' . $atts['link_color'] . '">' . $atts['less_text'] . '</span></a></div>' : '';
				
				return '<div class="sp_expand sp_expand-collapsed sp_expand-link-style-' . $atts['link_style'] . '" data-height="' . $atts['height'] . '"><div class="sp_expand-content" style="color:' . $atts['text_color'] . ';max-height:' . intval( $atts['height'] ) . 'px;overflow:hidden">' . do_shortcode( $content ) . '</div><div class="sp_expand-link sp_expand-link-more" style="text-align:' . $atts['link_align'] . '"><a href="javascript:;" style="color:' . $atts['link_color'] . ';border-color:' . $atts['link_color'] . '">' . $more_icon . '<span style="border-color:' . $atts['link_color'] . '">' . $atts['more_text'] . '</span></a></div>' . $less . '</div>';
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