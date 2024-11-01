function generate_private_shortcode(){
	var shortcode = '[msu_private';
	 if(jQuery('#sp_private_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_private_class').val()+'"';
	 }
	  if(jQuery('#sp_private_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_private_id').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_private_content').val();
	shortcode += '[/msu_private]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_private_shortcode();
});
jQuery('#sp_private_class').keyup(function(e) {
   generate_private_shortcode(); 
});
jQuery('#sp_private_id').keyup(function(e) {
   generate_private_shortcode(); 
});
jQuery('#sp_private_content').keyup(function(e) {
   generate_private_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});