<?php /*
Module - Accordion
Usage:: 
[msu_accordions class="your-class" id="your-id"]
	[msu_accordion title="title-1"]Content-1[/msu_accordion]
	[msu_accordion title="title-2"]Content-2[/msu_accordion]
	[msu_accordion title="title-3"]Content-3[/msu_accordion]
[/msu_accordions]
*/
if(!class_exists('shortcode_ultimate_accordion')) {
	class shortcode_ultimate_accordion
	{
		public function __construct()
		{
			global $modules;
			$module = array('Accordion' => array('icon' => 'dashicons-menu'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_accordions', array($this, 'sp_accordians_callback'));
			add_shortcode('msu_accordion', array($this, 'sp_accordian_callback'));
			add_action( 'wp_ajax_accordion', array(&$this,'ajax_callback'));
		}
		public function sp_accordians_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				return '<div class="sp_accordions '.$class.'" '.$id.'><div id="content"><div class="bwl_acc_container" id="toggle_accordion">' . do_shortcode($content) . '</div></div></div>';
		}
		public function sp_accordian_callback($atts, $content = null)
		{
				$atts = shortcode_atts(
										array(
												'title' => '',
											 ),
											$atts );
				return '<section>            
                <h2 class="acc_title_bar"><a href="#">'.$atts["title"].'</a></h2>
                <div class="acc_container">
                    <div class="block">               
                        <p>' . do_shortcode($content) . '</p>
                    </div>
                </div>            
             </section>';
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