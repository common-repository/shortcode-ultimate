function generate_template_shortcode(){
	var shortcode = '[msu_template';
	 if(jQuery('#sp_template_name').val() != ''){
		 shortcode +=' name="'+jQuery('#sp_template_name').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_template_shortcode();
});
jQuery('#sp_template_name').keyup(function(e) {
   generate_template_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});