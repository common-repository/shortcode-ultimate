function generate_highlighted_text_shortcode(){
	var shortcode = '[msu_highlighted_text';
	 if(jQuery('#sp_highlighted_text_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_highlighted_text_class').val()+'"';
	 }
	  if(jQuery('#sp_highlighted_text_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_highlighted_text_id').val()+'"';
	 }
	if(jQuery('#sp_highlighted_text_bgcolor').val() != ''){
		 shortcode +=' bgcolor="'+jQuery('#sp_highlighted_text_bgcolor').val()+'"';
	 }
	 if(jQuery('#sp_highlighted_text_text_color').val() != ''){
		 shortcode +=' textcolor="'+jQuery('#sp_highlighted_text_text_color').val()+'"';
	 }
	 shortcode += ']';	
	 shortcode += jQuery('#sp_highlighted_text_content').val();
	 shortcode += '[/msu_highlighted_text]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_highlighted_text_shortcode();
});
jQuery('#sp_highlighted_text_class').keyup(function(e) {
   generate_highlighted_text_shortcode(); 
});
jQuery('#sp_highlighted_text_id').keyup(function(e) {
   generate_highlighted_text_shortcode(); 
});
jQuery('#sp_highlighted_text_content').keyup(function(e) {
   generate_highlighted_text_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_highlighted_text_bgcolor').val('#424F5A');
		jQuery('#sp_highlighted_text_text_color').val('#FF9500');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_highlighted_text_bgcolor').blur(function(e) {
		   generate_highlighted_text_shortcode(); 
		});
		jQuery('#sp_highlighted_text_text_color').blur(function(e) {
		   generate_highlighted_text_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});
