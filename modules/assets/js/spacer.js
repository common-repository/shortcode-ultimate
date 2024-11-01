function generate_spacer_shortcode(){
	var shortcode = '[msu_spacer';
	 if(jQuery('#sp_spacer_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_spacer_class').val()+'"';
	 }
	  if(jQuery('#sp_spacer_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_spacer_id').val()+'"';
	 }
	  if(jQuery('#sp_spacer_size').val() != ''){
		 shortcode +=' size="'+jQuery('#sp_spacer_size').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_spacer_shortcode();
});
jQuery('#sp_spacer_size').keyup(function(e) {
   generate_spacer_shortcode(); 
});
jQuery('#sp_spacer_class').keyup(function(e) {
   generate_spacer_shortcode(); 
});
jQuery('#sp_spacer_id').keyup(function(e) {
   generate_spacer_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});