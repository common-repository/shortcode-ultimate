function generate_user_shortcode(){
	var shortcode = '[msu_user';
	 if(jQuery('#sp_user_field').val() != ''){
		 shortcode +=' field="'+jQuery('#sp_user_field').val()+'"';
	 }
	  if(jQuery('#sp_user_default').val() != ''){
		 shortcode +=' default="'+jQuery('#sp_user_default').val()+'"';
	 }
	 if(jQuery('#sp_user_before').val() != ''){
		 shortcode +=' before="'+jQuery('#sp_user_before').val()+'"';
	 }
	 if(jQuery('#sp_user_after').val() != ''){
		 shortcode +=' after="'+jQuery('#sp_user_after').val()+'"';
	 }
	 if(jQuery('#sp_user_user_id').val() != ''){
		 shortcode +=' user_id="'+jQuery('#sp_user_user_id').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_user_shortcode();
});
jQuery('#sp_user_field').keyup(function(e) {
   generate_user_shortcode(); 
});
jQuery('#sp_user_default').keyup(function(e) {
   generate_user_shortcode(); 
});
jQuery('#sp_user_before').keyup(function(e) {	
   generate_user_shortcode(); 
});
jQuery('#sp_user_after').keyup(function(e) {
   generate_user_shortcode(); 
});
jQuery('#sp_user_user_id').keyup(function(e) {
   generate_user_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});