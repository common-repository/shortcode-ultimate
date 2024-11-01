function generate_note_shortcode(){
	var shortcode = '[msu_note';
	 if(jQuery('#sp_note_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_note_class').val()+'"';
	 }
	  if(jQuery('#sp_note_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_note_id').val()+'"';
	 }
	 if(jQuery('#sp_note_background_color').val() != ''){
		 shortcode +=' bgcolor="'+jQuery('#sp_note_background_color').val()+'"';
	 }
	 if(jQuery('#sp_note_text_color').val() != ''){
		 shortcode +=' textcolor="'+jQuery('#sp_note_text_color').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_note_content').val();
	shortcode += '[/msu_note]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_note_shortcode();
});
jQuery('#sp_note_class').keyup(function(e) {
   generate_note_shortcode(); 
});
jQuery('#sp_note_id').keyup(function(e) {
   generate_note_shortcode(); 
});
jQuery('#sp_note_background_color').change(function(e) {
   generate_note_shortcode(); 
});
jQuery('#sp_note_text_color').change(function(e) {
   generate_note_shortcode(); 
});
jQuery('#sp_note_content').keyup(function(e) {
   generate_note_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_note_background_color').val('#F96');
		jQuery('#sp_note_text_color').val('#FFFFFF');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_note_background_color').blur(function(e) {
		   generate_note_shortcode(); 
		});
		jQuery('#sp_note_text_color').blur(function(e) {
		   generate_note_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});