<?php  /*
Module - scheduler
Usage:: [msu_scheduler time="9-14" days_week="0" days_month="1" months="1" years="2017" alt="content Goes Here"]This is Awesome...[/msu_scheduler]
*/
if(!class_exists('shortcode_ultimate_scheduler')) {
	class shortcode_ultimate_scheduler
	{
		public function __construct()
		{
			global $modules;
			$sp_scheduler = array('Scheduler' => array('icon' => 'fa fa-calendar'));
			$modules = array_merge($sp_scheduler, $modules);
			add_shortcode('msu_scheduler', array($this, 'scheduler_callback'));
			add_action( 'wp_ajax_scheduler', array(&$this,'ajax_callback'));
		}
		/*
		Callback
		*/
		public function scheduler_callback($atts, $content = null)
		{
					
			$atts = shortcode_atts( array(
					'time'       => 'all',
					'days_week'  => 'all',
					'days_month' => 'all',
					'months'     => 'all',
					'years'      => 'all',
					'alt'        => ''
				), $atts);
			/* Time */	
			if ( $atts['time'] !== 'all' ) {
				$now = current_time( 'timestamp', 0 );
				$atts['time'] = preg_replace( "/[^0-9-,:]/", '', $atts['time'] );
				foreach( explode( ',', $atts['time'] ) as $range ) {
					if ( strpos( $range, '-' ) === false )  return __( "<span class='splus_error'>Incorrect time range (".$range."). Please use - (minus) symbol to specify time range. Example: 14:00 - 18:00</span>", SPLUS);
					$time = explode( '-', $range );
					if ( strpos( $time[0], ':' ) === false ) $time[0] .= ':00';
					if ( strpos( $time[1], ':' ) === false ) $time[1] .= ':00';
					$time[0] = strtotime( $time[0] );
					$time[1] = strtotime( $time[1] );
					if ( $now < $time[0] || $now > $time[1] ) return $atts['alt'];
				}
			}
			/* Week Days */
			if ( $atts['days_week'] !== 'all' ) {
				$today = date( 'w', current_time( 'timestamp', 0 ) );
				$atts['days_week'] = preg_replace( "/[^0-9-,]/", '', $atts['days_week'] );
				$days = $this->mk_range( $atts['days_week'] );
				if ( !in_array( $today, $days ) ) return $atts['alt'];
			}
			/* Month Days */
			if ( $atts['days_month'] !== 'all' ) {
				$today = date( 'j', current_time( 'timestamp', 0 ) );
				$atts['days_month'] = preg_replace( "/[^0-9-,]/", '', $atts['days_month'] );
				$days = $this->mk_range( $atts['days_month'] );
				if ( !in_array( $today, $days ) ) return $atts['alt'];
			}
			/* Months */
			if ( $atts['months'] !== 'all' ) {
				$now = date( 'n', current_time( 'timestamp', 0 ) );
				$atts['months'] = preg_replace( "/[^0-9-,]/", '', $atts['months'] );
				$months = $this->mk_range( $atts['months'] );
				if ( !in_array( $now, $months ) ) return $atts['alt'];
			}
		   /* Years */	
			if ( $atts['years'] !== 'all' ) {
				$now = date( 'Y', current_time( 'timestamp', 0 ) );
				$atts['years'] = preg_replace( "/[^0-9-,]/", '', $atts['years'] );
				$years = $this->mk_range( $atts['years'] );
				if ( !in_array( $now, $years ) ) return $atts['alt'];
			}
			return do_shortcode( $content );
		}
		/* Range */	
		public function mk_range( $string = '' ) {
			$numbers = array();
			foreach ( explode( ',', $string ) as $range ) {
				if ( strpos( $range, '-' ) !== false ) {
					$range = explode( '-', $range );
					if ( !is_numeric( $range[0] ) ) $range[0] = 0;
					if ( !is_numeric( $range[1] ) ) $range[1] = 0;
					sort( $range );
					$range = range( $range[0], $range[1] );
					foreach ( $range as $value ) $numbers[$value] = $value;
				}
				else {
					$numbers[$range] = $range;
				}
			}
			return $numbers;
		}
		/* Ajax Call Back */
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