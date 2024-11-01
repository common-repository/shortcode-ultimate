function generate_meta_shortcode(){
	var shortcode = '[msu_meta_field_value';
	 if(jQuery('#sp_meta_key').val() != ''){
		 shortcode +=' meta_key="'+jQuery('#sp_meta_key').val()+'"';
	 }
	  if(jQuery('#sp_post_id').val() != ''){
		 shortcode +=' post_id="'+jQuery('#sp_post_id').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_meta_shortcode();
});
jQuery('#sp_meta_key').keyup(function(e) {
   generate_meta_shortcode(); 
});
jQuery('#sp_post_id').keyup(function(e) {
   generate_meta_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});