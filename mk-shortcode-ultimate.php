<?php
/*
Plugin Name: Shortcode Ultimate
Plugin URI: https://wordpress.org/plugins/shortcode-ultimate/
Description: Allows you to add custom shortcode in your pages, posts and custom post types
Author: mndpsingh287
Version: 1.0
Author URI: https://profiles.wordpress.org/mndpsingh287/
*/
// Define plugin constants
if (!defined('MK_SPLUS_TD')) {
    define('MK_SPLUS_TD', 'SPLUS');
}
if (!defined('MK_SLICK_EXISTS')) {
    define('MK_SLICK_EXISTS', false);
    /* change to true if exists already */
}
if (!defined('MK_SPLUS_FILE')) {
    define('MK_SPLUS_FILE', __FILE__);
}
if (!defined('MK_SPLUS_PATH')) {
    define('MK_SPLUS_PATH', plugins_url('', __FILE__));
}
if (!class_exists('mk_shortcode_plus')) {
    class mk_shortcode_plus
    {
        /*
         * Options Name
         */
        var $optionname = 'shortcode_plus_options';
        /*
         * Auto load hooks and functions
         */
        public function __construct()
        {
            global $modules;
            $modules = array();
            register_activation_hook(__FILE__, array(
                &$this,
                'shortcode_plus_install'
            ));
            add_action('admin_menu', array(
                &$this,
                'shortcode_plus_menu'
            ));
            add_action('media_buttons_context', array(
                $this,
                'shortcode_plus_btn'
            ));
            add_action('wp_ajax_load_module_form', array(
                &$this,
                'load_module_form_callback'
            ));
            add_action('init', array(
                $this,
                'load_shortcode_plus_css'
            ));
            add_action('admin_enqueue_scripts', array(
                $this,
                'wp_enqueue_color_picker'
            ));
            $this->load_modules();
            $this->post_types = $this->get_custom_post_types();
            $useLess          = array(
                'attachment',
                'revision',
                'nav_menu_item',
                'custom_css',
                'customize_changeset'
            );
            $this->post_types = array_diff($this->post_types, $useLess);
            $this->options    = get_option($this->optionname);
            add_action('wp_head', array(
                $this,
                'some_defines'
            ));
            add_action('admin_head', array(
                $this,
                'some_admin_defines'
            ));
            do_action('shortcode_plus_hook');
            if (is_admin()) {
                include('helpers/msu_helper.php');
                $helper = new msu_helper();
            }
        }
        /*
         * Installation Process
         */
        public function shortcode_plus_install()
        {
            $defaultsettings = array(
                'shortcode_plus_cpt' => array(
                    'post',
                    'page'
                )
            );
            $opt             = $this->options;
            if (!$opt['shortcode_plus_cpt']) {
                update_option($this->optionname, $defaultsettings);
            }
        }
        /*
         * Admin menu
         */
        public function shortcode_plus_menu()
        {
            add_menu_page(__('Shortcode', 'custom_maps'), 'Shortcode', 'manage_options', 'shortcode_ultimate', array(
                &$this,
                'shortcode_plus_callback'
            ), 
			plugins_url("images/code_icon.png", __FILE__ ));
            add_submenu_page('shortcode_ultimate', 'Settings', 'Settings', 'manage_options', 'shortcode_ultimate_settings', array(
                &$this,
                'shortcode_plus_setting'
            ));
            add_submenu_page('shortcode_ultimate', 'Examples', 'Examples', 'manage_options', 'shortcode_ultimate_examples', array(
                &$this,
                'shortcode_plus_example'
            ));
            add_submenu_page('shortcode_ultimate', 'Cheatsheet', 'Cheatsheet', 'manage_options', 'shortcode_ultimate_cheatsheet', array(
                &$this,
                'shortcode_ultimate_cheatsheet'
            ));
			remove_submenu_page('shortcode_ultimate','shortcode_ultimate');
        }
        /*
         * Admin menu - Callback
         */
        public function shortcode_plus_callback()
        {
            if (current_user_can('manage_options') && is_admin()) {
                include('inc/settings.php');
            } else {
                _e('<p>Unauthorized Access!</p>', MK_SPLUS_TD);
            }
        }
        public function shortcode_plus_setting()
        {
            if (current_user_can('manage_options') && is_admin()) {
                include('inc/settings.php');
            } else {
                _e('<p>Unauthorized Access!</p>', MK_SPLUS_TD);
            }
        }
        public function shortcode_plus_example()
        {
            if (current_user_can('manage_options') && is_admin()) {
                include('inc/example.php');
            } else {
                _e('<p>Unauthorized Access!</p>', MK_SPLUS_TD);
            }
        }
        public function shortcode_ultimate_cheatsheet()
        {
            if (current_user_can('manage_options') && is_admin()) {
                include('inc/cheatsheet.php');
            } else {
                _e('<p>Unauthorized Access!</p>', MK_SPLUS_TD);
            }
        }
        /*
         * Add Shortcode Button
         */
        public function shortcode_plus_btn()
        {
            global $post;
            $opt = $this->options;
            if (!empty($opt['shortcode_plus_cpt']) && is_array($opt['shortcode_plus_cpt'])) {
                if (in_array($post->post_type, $opt['shortcode_plus_cpt'])) {
                    $this->admin_assets();
                    include('inc/shortcode_btn.php');
                }
            }
        }
        /*
         * Loading Modules
         */
        public function load_modules()
        {
            $dir          = dirname(__FILE__) . '/modules';
            $module_files = glob($dir . "/*.php");
            $modules      = array();
            foreach ($module_files as $module_file) {
                include($module_file);
                $modules[basename($module_file, ".php")] = basename($module_file, ".php");
            }
            if (!empty($modules) && is_array($modules)) {
                foreach ($modules as $module) {
                    $module = 'shortcode_ultimate_' . $module;
                    if (class_exists($module)) {
                        new $module;
                    }
                }
            }
        }
        /*
         * Admin - Assets
         */
        public function admin_assets()
        {
            wp_enqueue_script('multiselect', plugins_url('/modules/assets/multiselect/jquery.multiselect.js', __FILE__));
            wp_enqueue_style('multiselect', plugins_url('/modules/assets/multiselect/jquery.multiselect.css', __FILE__));
            wp_enqueue_script('shortcode_plus_media', plugins_url('/js/shortcode_plus_media.js', __FILE__), array(), '1.0.0', false);
            wp_enqueue_style('shortcode_plus_media', plugins_url('/css/shortcode_plus_media.css', __FILE__));
        }
        /*
         * Module Form Load Callback
         */
        public function load_module_form_callback()
        {
            $module = $_POST['module'];
            $dir    = dirname(__FILE__) . '/modules/forms/';
            if (!empty($module)) {
                $module_template = $dir . $module . '.php';
                if (file_exists($module_template)) {
                    include($module_template);
                } else {
                    echo '<span class="sp_error">Error: Missing Form File For ' . $module . ' in ' . $module_template . '.</span>';
                }
            }
            die;
        }
        /*
         * Getting All Post Types
         */
        public function get_custom_post_types()
        {
            global $wpdb;
            $post_types = array();
            $all_types  = $wpdb->get_results("select DISTINCT post_type from " . $wpdb->posts . "");
            if (!empty($all_types) && is_array($all_types)) {
                foreach ($all_types as $post_type) {
                    $post_types[] = $post_type->post_type;
                }
            }
            return $post_types;
        }
        /*
         * Loading some css & js
         */
        public function load_shortcode_plus_css()
        {
            
            wp_enqueue_style('shortcode_plus', plugins_url('/css/shortcode_plus.css', __FILE__));
            wp_enqueue_style('font-awesome', plugins_url('/css/font-awesome.css', __FILE__));
            wp_enqueue_style('simple-iconpicker-css', plugins_url('/css/simple-iconpicker.min.css', __FILE__));
            wp_enqueue_style('shortcode_plus_example', plugins_url('/css/shortcode_plus_example.css', __FILE__));
            wp_enqueue_style('easy-responsive-tabs', plugins_url('/css/easy-responsive-tabs.css', __FILE__));
            wp_enqueue_style('carousel', plugins_url('/css/owl.carousel.min.css', __FILE__));
            wp_enqueue_style('flexsliderCss', plugins_url('/css/flexslider.css', __FILE__));
            wp_enqueue_style('animation', plugins_url('/css/animation.css', __FILE__));
            wp_enqueue_script('jquery.bwlaccordion.min', plugins_url('/js/jquery.bwlaccordion.min.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('easy-responsive-tabs', plugins_url('/js/easy-responsive-tabs.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('owl-carousel', plugins_url('/js/owl.carousel.min.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('PopUpjquery', plugins_url('/js/jquery.popup.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('shortcode_example', plugins_url('/js/shortcode_example.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('flexslider', plugins_url('/js/jquery.flexslider.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('animationJs', plugins_url('/js/inview.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('custom', plugins_url('/js/custom.js', __FILE__), array(), '1.0.0', true);
            wp_enqueue_script('simple-iconpicker-js', plugins_url('/js/simple-iconpicker.min.js', __FILE__), array(), '1.0.0', true);
            if (!MK_SLICK_EXISTS) {
                wp_enqueue_script('slick', plugins_url('/modules/assets/js/slick.js', __FILE__), array(), '1.0.0', true);
            }
            
            
            
            
        }
        /*
        Some Defines
        */
        public function some_defines()
        {
            $msu_options = get_option('msu_options_settings');
            echo '<script>
                 var openTab = "0";
                </script>';
            echo "<script type='text/javascript' src='" . plugins_url('/js/slider.js', __FILE__) . "'></script>";
            
            if (isset($msu_options['custom_css'])) {
                $css = str_replace(array(
                    '\"',
                    "\'"
                ), "'", $msu_options['custom_css']);
                $css = str_replace(array(
                    '{home_url}',
                    '{theme_url}',
                    '{plugin_url}'
                ), array(
                    home_url(),
                    get_template_directory_uri(),
                    plugins_url('/shortcode-ultimate')
                ), $css);
                echo '<style>';
                echo $css;
                echo '</style>';
            }
            
        }
        /*
        Some Admin Defines
        */
        public function some_admin_defines()
        {
            echo '<script>
                 var openTab = "0";
                </script>';
        }
        /*
         * Custom  Redirection
         */
        public function redirect($url)
        {
            echo '<script>window.location.href="' . $url . '"</script>';
        }
        /*
         * Flash Message
         * 1 -> Success
         * 2 -> Failed
         */
        public function flash($type = '', $msg)
        {
            if ($type != '') {
                if ($type == 1) {
                    $class = 'updated';
                } else if ($type == 2) {
                    $class = 'error';
                }
                _e('<div class="' . $class . ' settings-error notice is-dismissible" id="setting-error-settings_updated"> 
<p><strong>' . $msg . '</strong></p><button class="notice-dismiss" type="button"><span class="screen-reader-text">Dismiss this notice.</span></button></div>', MK_SPLUS_TD);
            }
        }
        /*
         * Load Module JS
         */
        public function load_js($file)
        {
            echo "<script type='text/javascript' src='" . plugins_url('/modules/assets/js/' . $file . '.js', __FILE__) . "'></script>";
        }
        /* Enqueue WP Color Picker */
        public function wp_enqueue_color_picker()
        {
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_script('wp-color-picker-script', plugins_url('js/script.js', __FILE__), array(
                'wp-color-picker'
            ), false, true);
        }
		/*
		get Css
		*/
		public function getCSS()
	    {
			$dir = dirname( __FILE__ ).'/css/';
			$css_files = glob($dir."/*.css");
			$cssf = array();
			foreach($css_files as $css_file){
				$cssf[basename($css_file,".css")] = MK_SPLUS_PATH.'/css/'.basename($css_file,".css");
			}
			return $cssf;
	    }
    }
    global $bootstart;
    $bootstart = new mk_shortcode_plus();
} 