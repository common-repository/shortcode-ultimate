function generate_guests_shortcode(){
	var shortcode = '[msu_guests';
	 if(jQuery('#sp_guests_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_guests_class').val()+'"';
	 }
	  if(jQuery('#sp_guests_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_guests_id').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_guests_content').val();
	shortcode += '[/msu_guests]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_guests_shortcode();
});
jQuery('#sp_guests_class').keyup(function(e) {
   generate_guests_shortcode(); 
});
jQuery('#sp_guests_id').keyup(function(e) {
   generate_guests_shortcode(); 
});
jQuery('#sp_guests_content').keyup(function(e) {
   generate_guests_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});