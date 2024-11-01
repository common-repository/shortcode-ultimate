<?php /*
Module - Dropcap
Usage:: 
[msu_dropcap class="" id="" size="" style="default"]Content[/msu_dropcap]
*/
if(!class_exists('shortcode_ultimate_dropcap')) {
	class shortcode_ultimate_dropcap
	{
		public function __construct()
		{
			global $modules;
			$module = array('Dropcap' => array('icon' => 'fa fa-circle'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_dropcap', array($this, 'sp_dropcap_callback'));
			add_action( 'wp_ajax_dropcap', array(&$this,'ajax_callback'));
		}
		public function sp_dropcap_callback($atts, $content = null)
		{
				$class = '';
				$id = '';
				$atts = shortcode_atts(
										array(
												'class' => '',
												'id' => '',
												'size' => '',
												'style' => ''
											 ),
											$atts );
				if(!empty($atts['class'])) { $class = $atts['class'];}
				if(!empty($atts['id'])) { $id = 'id = "'.$atts['id'].'"';}
				if($atts['style'] == 'default'){
					$return = "<style>.sp_dropcap .sp_dropcap_div.default
									{
									background: #1e5799; /* Old browsers */
									background: -moz-linear-gradient(top, #1e5799 0%, #636363 0%, #000005 100%, #000005 100%, #207cca 100%, #7db9e8 100%, #000005 100%);
									background: -webkit-linear-gradient(top, #1e5799 0%,#636363 0%,#000005 100%,#000005 100%,#207cca 100%,#7db9e8 100%,#000005 100%); /* Chrome10-25,Safari5.1-6 */
									background: linear-gradient(to bottom, #1e5799 0%,#636363 0%,#000005 100%,#000005 100%,#207cca 100%,#7db9e8 100%,#000005 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
									filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#000005',GradientType=0 ); /* IE6-9 */
									}
						</style>";
				}
				elseif($atts['style'] == 'light'){
					$return = "<style>.sp_dropcap .sp_dropcap_div.light
										{
											background: #f0f9ff; /* Old browsers */
											background: -moz-linear-gradient(top, #f0f9ff 0%, #cbebff 100%, #a1dbff 100%); /* FF3.6-15 */
											background: -webkit-linear-gradient(top, #f0f9ff 0%,#cbebff 100%,#a1dbff 100%); /* Chrome10-25,Safari5.1-6 */
											background: linear-gradient(to bottom, #f0f9ff 0%,#cbebff 100%,#a1dbff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
											filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */
										}
						</style>";
					
				}
				elseif($atts['style'] == 'flat'){
					$return = "<style>.sp_dropcap .sp_dropcap_div.flat
												{
													border-radius:0px;
													background:#333;
												}
						   </style>";
				}
				elseif($atts['style'] == 'simple'){
					$return = "<style>.sp_dropcap .sp_dropcap_div.simple
												{
													background:none;	
													color:#333;
												}
						   </style>";
				}
				$return .= '<div id="sp_dropcap" class="'.$class.'"><div class="sp_dropcap" '.$id.'><div class="sp_dropcap_div '.$atts['style'].'">'.do_shortcode($content).'</div><div class="clear"></div></div></div>';
				
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