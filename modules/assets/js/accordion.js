function generate_accordion_shortcode(){
	var shortcode = '[msu_accordions';
	 if(jQuery('#sp_accordian_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_accordian_class').val()+'"';
	 }
	  if(jQuery('#sp_accordian_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_accordian_id').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += '[msu_accordion title="title-1"]Content-1[/msu_accordion]';
	 shortcode += '[msu_accordion title="title-2"]Content-2[/msu_accordion]';
	 shortcode += '[msu_accordion title="title-3"]Content-3[/msu_accordion]';
	 shortcode += '[/msu_accordions]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_accordion_shortcode();
});
jQuery('#sp_accordian_class').keyup(function(e) {
   generate_accordion_shortcode(); 
});
jQuery('#sp_accordian_id').keyup(function(e) {
   generate_accordion_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});