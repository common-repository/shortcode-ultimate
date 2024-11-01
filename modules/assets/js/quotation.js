function generate_quotation_shortcode(){
	var shortcode = '[msu_quotation';
	 if(jQuery('#sp_quotation_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_quotation_class').val()+'"';
	 }
	  if(jQuery('#sp_quotation_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_quotation_id').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += jQuery('#sp_quotation_text').val();
	 shortcode += '[/msu_quotation]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_quotation_shortcode();
});
jQuery('#sp_quotation_text').keyup(function(e) {
   generate_quotation_shortcode(); 
});
jQuery('#sp_quotation_class').keyup(function(e) {
   generate_quotation_shortcode(); 
});
jQuery('#sp_quotation_id').keyup(function(e) {
   generate_quotation_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
	jQuery('.shortcode_plus_container_pop').hide();
});