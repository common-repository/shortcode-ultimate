function generate_dailymotion_shortcode(){
	var shortcode = '[msu_dailymotion';
	 if(jQuery('#sp_dailymotion_video_id').val() != ''){
		 shortcode +=' dailymotion_id="'+jQuery('#sp_dailymotion_video_id').val()+'"';
	 }
	 if(jQuery('#sp_dailymotion_video_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_dailymotion_video_width').val()+'"';
	 }
	 if(jQuery('#sp_dailymotion_video_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_dailymotion_video_height').val()+'"';
	 }
	 if(jQuery('#sp_dailymotion_autoplay').val() != ''){
		 shortcode +=' autoplay="'+jQuery('#sp_dailymotion_autoplay').val()+'"';
	 }
	 if(jQuery('#sp_dailymotion_fullscreen').val() != ''){
		 shortcode +=' fullscreen="'+jQuery('#sp_dailymotion_fullscreen').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_dailymotion_shortcode();
});
jQuery('#sp_dailymotion_video_id').keyup(function(e) {
   generate_dailymotion_shortcode(); 
});
jQuery('#sp_dailymotion_video_width').keyup(function(e) {
   generate_dailymotion_shortcode(); 
});
jQuery('#sp_dailymotion_video_height').keyup(function(e) {
   generate_dailymotion_shortcode(); 
});
jQuery('#sp_dailymotion_autoplay').change(function(e) {
   generate_dailymotion_shortcode(); 
});
jQuery('#sp_dailymotion_fullscreen').change(function(e) {
   generate_dailymotion_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});