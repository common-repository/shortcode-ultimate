function generate_video_shortcode(){
	var shortcode = '[msu_video';
	 if(jQuery('#sp_video_id').val() != ''){
		 shortcode +=' vid="'+jQuery('#sp_video_id').val()+'"';
	 }
	  if(jQuery('#sp_video_align').val() != ''){
		 shortcode +=' align="'+jQuery('#sp_video_align').val()+'"';
	 }
	 if(jQuery('#sp_video_title').val() != ''){
		 shortcode +=' title="'+jQuery('#sp_video_title').val()+'"';
	 }
	  if(jQuery('#sp_video_desc_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_video_desc_class').val()+'"';
	 }
	  if(jQuery('#sp_video_desc_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_video_desc_id').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += jQuery('#sp_video_desc').val();
	 shortcode += '[/msu_video]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_video_shortcode();
});
jQuery('#sp_video_align').change(function(e) {
   generate_video_shortcode(); 
});
jQuery('#sp_video_title').keyup(function(e) {
   generate_video_shortcode(); 
});
jQuery('#sp_video_id').keyup(function(e) {
   generate_video_shortcode(); 
});
jQuery('#sp_video_desc').keyup(function(e) {
   generate_video_shortcode(); 
});
jQuery('#sp_video_desc_class').keyup(function(e) {
   generate_video_shortcode(); 
});
jQuery('#sp_video_desc_id').keyup(function(e) {
   generate_video_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
	jQuery('.shortcode_plus_container_pop').hide();
});