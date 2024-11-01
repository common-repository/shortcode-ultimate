function generate_pullquote_shortcode(){
	var shortcode = '[msu_pullquote';
	 if(jQuery('#sp_pullquote_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_pullquote_class').val()+'"';
	 }
	  if(jQuery('#sp_pullquote_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_pullquote_id').val()+'"';
	 }
	 if(jQuery('#sp_pullquote_align').val() != ''){
		 shortcode +=' align="'+jQuery('#sp_pullquote_align').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_pullquote_content').val();
	shortcode += '[/msu_pullquote]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_pullquote_shortcode();
});
jQuery('#sp_pullquote_class').keyup(function(e) {
   generate_pullquote_shortcode(); 
});
jQuery('#sp_pullquote_id').keyup(function(e) {
   generate_pullquote_shortcode(); 
});
jQuery('#sp_pullquote_align').change(function(e) {
   generate_pullquote_shortcode(); 
});
jQuery('#sp_pullquote_content').keyup(function(e) {
   generate_pullquote_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});