<?php /*
Module - Paragraph
Usage:: 
[sp_tabs class="your-class" id="your-id"]
[sp_tab title="Title 1"]Content 1[/sp_tab]
[sp_tab title="Title 2"]Content 2[/sp_tab]
[sp_tab title="Title 3"]Content 3[/sp_tab]
[/sp_tabs]
*/
if(!class_exists('shortcode_ultimate_tabs')) {
	class shortcode_ultimate_tabs
	{
		static $tabs = array();
	    static $tab_count = 0;
		public function __construct()
		{
			global $modules;
			$module = array('Tabs' => array('icon' => 'fa fa-list-alt'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_tabs', array($this, 'sp_tabs_callback'));
			add_shortcode('msu_tab', array($this, 'sp_tab_callback'));
			add_action( 'wp_ajax_tabs', array(&$this,'ajax_callback'));
		}
		public function sp_tabs_callback($atts = null, $content = null)
		{	 
		   do_shortcode($content);
				$class = '';
				$id = '';
				$tabs_sec = $tabs_panel = array();
				$return = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
											 ),
											$atts );																				
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if (is_array( self::$tabs ) ) {
				$return .= '<script>var openTab = "0"</script>';	
				$counter = 0;	
				//print_r(self::$tabs);
				foreach(self::$tabs as $key => $tb) {
					if($tb['active'] == 'active') {
					 $return .= '<script>var openTab = "'.$counter.'"</script>';
					} 
					$tabs_sec[] = '<li>'.$tb['title'].'</li>';
					$tabs_panel[] = '<div>
						<p>'.do_shortcode($tb['content']).'</p>
						</div>';
				$counter++;}
				}
				$return .= '<div class="sp_tabs '.$class.'" '.$id.'><div id="horizontalTab"><ul class="resp-tabs-list">'.implode( '', $tabs_sec ).'</ul><div class="resp-tabs-container">' . implode( "\n", $tabs_panel ) . '</div></div></div>';
				    self::$tabs = array();
		            self::$tab_count = 0;
				return $return;
		}
		public function sp_tab_callback($atts = null, $content = null) {
			     $atts = shortcode_atts(
										array(
												'active' => 'false',
												'title' => '',
											 ),
											$atts );
			$x = self::$tab_count;								
			self::$tabs[$x] = array(
				'title'    => $atts['title'],
				'active'    => ($atts['active'] == 'true') ? 'active' : '',
				'content'  => do_shortcode( $content ),
			);
			self::$tab_count++;
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