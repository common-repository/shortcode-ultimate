function generate_you_tube_advance_shortcode(){
	var shortcode = '[msu_you_tube_advance';
	 if(jQuery('#sp_you_tube_advance_video_id').val() != ''){
		 shortcode +=' playlist="'+jQuery('#sp_you_tube_advance_video_id').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_video_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_you_tube_advance_video_width').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_video_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_you_tube_advance_video_height').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_autoplay').val() != ''){
		 shortcode +=' autoplay="'+jQuery('#sp_you_tube_advance_autoplay').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_fullscreen').val() != ''){
		 shortcode +=' fullscreen="'+jQuery('#sp_you_tube_advance_fullscreen').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_controls').val() != ''){
		 shortcode +=' controls="'+jQuery('#sp_you_tube_advance_controls').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_autohide').val() != ''){
		 shortcode +=' autohide="'+jQuery('#sp_you_tube_advance_autohide').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_loop').val() != ''){
		 shortcode +=' loop="'+jQuery('#sp_you_tube_advance_loop').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_related_videos').val() != ''){
		 shortcode +=' rel="'+jQuery('#sp_you_tube_advance_related_videos').val()+'"';
	 }
	 if(jQuery('#sp_you_tube_advance_modestbranding').val() != ''){
		 shortcode +=' modestbranding="'+jQuery('#sp_you_tube_advance_modestbranding').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_you_tube_advance_shortcode();
});
jQuery('#sp_you_tube_advance_video_id').keyup(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_video_width').keyup(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_video_height').keyup(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_autoplay').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_fullscreen').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_controls').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_autohide').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_loop').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_related_videos').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#sp_you_tube_advance_modestbranding').change(function(e) {
   generate_you_tube_advance_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});