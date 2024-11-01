function generate_screenr_shortcode(){
	var shortcode = '[msu_screenr';
	 if(jQuery('#sp_screenr_video_id').val() != ''){
		 shortcode +=' screenr_id="'+jQuery('#sp_screenr_video_id').val()+'"';
	 }
	 if(jQuery('#sp_screenr_video_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_screenr_video_width').val()+'"';
	 }
	 if(jQuery('#sp_screenr_video_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_screenr_video_height').val()+'"';
	 }
	 if(jQuery('#sp_screenr_fullscreen').val() != ''){
		 shortcode +=' fullscreen="'+jQuery('#sp_screenr_fullscreen').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_screenr_shortcode();
});
jQuery('#sp_screenr_video_id').keyup(function(e) {	
	generate_screenr_shortcode(); 
});
jQuery('#sp_screenr_video_width').keyup(function(e) {
   generate_screenr_shortcode(); 
});
jQuery('#sp_screenr_video_height').keyup(function(e) {
   generate_screenr_shortcode(); 
});
jQuery('#sp_screenr_fullscreen').change(function(e) {
   generate_screenr_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});