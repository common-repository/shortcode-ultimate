<?php /*
Module - table
Usage:: 
[msu_table class=""]
	<tr>
		<th>Table</th>
		<th>Table</th>
	</tr>
	<tr>
		<td>Table</td>
		<td>Table</td>
	</tr>
	<tr>
		<td>Table</td>
		<td>Table</td>
	</tr>
[/msu_table]
*/
if(!class_exists('shortcode_ultimate_table')) {
	class shortcode_ultimate_table
	{
		public function __construct()
		{
			global $modules;
			$module = array('Table' => array('icon' => 'fa fa-table'));
			$modules = array_merge($module, $modules);
			add_shortcode('msu_table', array($this, 'sp_table_callback'));
			add_action( 'wp_ajax_table', array(&$this,'ajax_callback'));
		}
		public function sp_table_callback($atts, $content = null)
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
				$return = '<div class="sp_table ' .$class. '" '.$id.'><table>'.do_shortcode( $content ).'</table></div>';
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