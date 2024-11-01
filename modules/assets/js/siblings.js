function generate_siblings_shortcode(){
	var shortcode = '[msu_siblings';
	 if(jQuery('#sp_siblings_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_siblings_class').val()+'"';
	 }
	  if(jQuery('#sp_siblings_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_siblings_id').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_siblings_shortcode();
});
jQuery('#sp_siblings_class').keyup(function(e) {
   generate_siblings_shortcode(); 
});
jQuery('#sp_siblings_id').keyup(function(e) {
   generate_siblings_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});