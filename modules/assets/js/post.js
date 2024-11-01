function generate_post_shortcode(){
	var shortcode = '[msu_post';
	 if(jQuery('#sp_post_field').val() != ''){
		 shortcode +=' field="'+jQuery('#sp_post_field').val()+'"';
	 }
	  if(jQuery('#sp_post_default').val() != ''){
		 shortcode +=' default="'+jQuery('#sp_post_default').val()+'"';
	 }
	 if(jQuery('#sp_post_before').val() != ''){
		 shortcode +=' before="'+jQuery('#sp_post_before').val()+'"';
	 }
	 if(jQuery('#sp_post_after').val() != ''){
		 shortcode +=' after="'+jQuery('#sp_post_after').val()+'"';
	 }
	 if(jQuery('#sp_post_post_id').val() != ''){
		 shortcode +=' post_id="'+jQuery('#sp_post_post_id').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_post_shortcode();
});
jQuery('#sp_post_field').change(function(e) {
   generate_post_shortcode(); 
});
jQuery('#sp_post_default').keyup(function(e) {
   generate_post_shortcode(); 
});
jQuery('#sp_post_before').keyup(function(e) {	
   generate_post_shortcode(); 
});
jQuery('#sp_post_after').keyup(function(e) {
   generate_post_shortcode(); 
});
jQuery('#sp_post_post_id').keyup(function(e) {
   generate_post_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});