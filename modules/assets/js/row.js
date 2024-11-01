function generate_row_shortcode(){
	var shortcode = '[msu_row';
	 if(jQuery('#sp_row_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_row_class').val()+'"';
	 }
	  if(jQuery('#sp_row_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_row_id').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += '[msu_column type="1/1"]Type Your Content Here[/msu_column]';
	 shortcode += '[/msu_row]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_row_shortcode();
});
jQuery('#sp_row_class').keyup(function(e) {
   generate_row_shortcode(); 
});
jQuery('#sp_row_id').keyup(function(e) {
   generate_row_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});