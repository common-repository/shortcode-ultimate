function generate_scheduler_shortcode(){
	var shortcode = '[msu_scheduler';
	 if(jQuery('#sp_scheduler_time').val() != ''){
		 shortcode +=' time="'+jQuery('#sp_scheduler_time').val()+'"';
	 }
	  if(jQuery('#sp_scheduler_days_of_week').val() != ''){
		 shortcode +=' days_week="'+jQuery('#sp_scheduler_days_of_week').val()+'"';
	 }
	 if(jQuery('#sp_scheduler_days_of_month').val() != ''){
		 shortcode +=' days_month="'+jQuery('#sp_scheduler_days_of_month').val()+'"';
	 }
	 if(jQuery('#sp_scheduler_month').val() != ''){
		 shortcode +=' month="'+jQuery('#sp_scheduler_month').val()+'"';
	 }
	 if(jQuery('#sp_scheduler_years').val() != ''){
		 shortcode +=' years="'+jQuery('#sp_scheduler_years').val()+'"';
	 }
	 if(jQuery('#sp_scheduler_alt').val() != ''){
		 shortcode +=' alt="'+jQuery('#sp_scheduler_alt').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_scheduler_content').val();
	shortcode += '[/msu_scheduler]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_scheduler_shortcode();
});
jQuery('#sp_scheduler_time').keyup(function(e) {
   generate_scheduler_shortcode(); 
});
jQuery('#sp_scheduler_days_of_week').keyup(function(e) {
   generate_scheduler_shortcode(); 
});
jQuery('#sp_scheduler_days_of_month').keyup(function(e) {	
   generate_scheduler_shortcode(); 
});
jQuery('#sp_scheduler_month').keyup(function(e) {
   generate_scheduler_shortcode(); 
});
jQuery('#sp_scheduler_years').keyup(function(e) {
   generate_scheduler_shortcode(); 
});
jQuery('#sp_scheduler_alt').keyup(function(e) {
   generate_scheduler_shortcode(); 
});
jQuery('#sp_scheduler_content').keyup(function(e) {
   generate_scheduler_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});