function generate_headings_shortcode(){
	var shortcode = '[msu_'+jQuery('#sp_heading_type').val();
	 if(jQuery('#sp_heading_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_heading_class').val()+'"';
	 }
	  if(jQuery('#sp_heading_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_heading_id').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += jQuery('#sp_heading_title').val();
	 shortcode += '[/msu_'+jQuery('#sp_heading_type').val()+']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_headings_shortcode();
});
jQuery('#sp_heading_type').change(function(e) {
   generate_headings_shortcode(); 
});
jQuery('#sp_heading_title').keyup(function(e) {
   generate_headings_shortcode(); 
});
jQuery('#sp_heading_class').keyup(function(e) {
   generate_headings_shortcode(); 
});
jQuery('#sp_heading_id').keyup(function(e) {
   generate_headings_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
	jQuery('.shortcode_plus_container_pop').hide();
});