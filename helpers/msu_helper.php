<?php if(!class_exists('msu_helper')) { 
     class msu_helper {
		   var $msu_helper_settings_option = 'msu_options_settings';
		   public function __construct() {
			   	add_action( 'wp_ajax_save_msu_settings', array(&$this,'save_msu_settings_callback'));
		   }
		   public function save_msu_settings_callback() {
			  $options = array();
			  $css = $_POST['mk_su_text_css'];
			  $options['custom_css'] = $css;
			  $update_option = update_option($this->msu_helper_settings_option, $options);
              if($update_option) {
				  echo '1';
			  } else {
				  echo '2';
			  }
			  die;
		   }
	 }
}