function generate_permalink_shortcode(){
	var shortcode = '[msu_permalink';
	  if(jQuery('#sp_permalink_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_permalink_id').val()+'"';
	 }
	  if(jQuery('#sp_permalink_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_permalink_class').val()+'"';
	 }
	  if(jQuery('#sp_permalink_target').val() != ''){
		 shortcode +=' target="'+jQuery('#sp_permalink_target').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += jQuery('#sp_permalink_content').val();
	 shortcode += '[/msu_permalink]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_permalink_shortcode();
});
jQuery('#sp_permalink_content').keyup(function(e) {
   generate_permalink_shortcode(); 
});
jQuery('#sp_permalink_target').change(function(e) {
   generate_permalink_shortcode(); 
});
jQuery('#sp_permalink_class').keyup(function(e) {
   generate_permalink_shortcode(); 
});
jQuery('#sp_permalink_id').keyup(function(e) {
   generate_permalink_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});