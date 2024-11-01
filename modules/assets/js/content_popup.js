function generate_lightbox_content_shortcode(){
	var shortcode = '[msu_content_popup';
	 if(jQuery('#sp_lightbox_content_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_lightbox_content_class').val()+'"';
	 }
	  if(jQuery('#sp_lightbox_content_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_lightbox_content_id').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_text').val() != ''){
		 shortcode +=' link_popup_text="'+jQuery('#sp_lightbox_content_text').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_text_align').val() != ''){
		 shortcode +=' align="'+jQuery('#sp_lightbox_content_text_align').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_margin').val() != ''){
		 shortcode +=' margin="'+jQuery('#sp_lightbox_content_margin').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_lightbox_content_width').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_padding').val() != ''){
		 shortcode +=' padding="'+jQuery('#sp_lightbox_content_padding').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_background_color').val() != ''){
		 shortcode +=' bgcolor="'+jQuery('#sp_lightbox_content_background_color').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_text_color').val() != ''){
		 shortcode +=' text_color="'+jQuery('#sp_lightbox_content_text_color').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_lightbox_content_source').val();
	shortcode += '[/msu_content_popup]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_lightbox_content_shortcode();
});
jQuery('#sp_lightbox_content_class').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_id').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_text_align').change(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_source').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_margin').change(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_width').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_padding').change(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_background_color').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_text_color').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery('#sp_lightbox_content_text').keyup(function(e) {
   generate_lightbox_content_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_lightbox_content_background_color').val('#424F5A');
		jQuery('#sp_lightbox_content_text_color').val('#FF9500');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_lightbox_content_background_color').blur(function(e) {
		   generate_lightbox_content_shortcode(); 
		});
		jQuery('#sp_lightbox_content_text_color').blur(function(e) {
		   generate_lightbox_content_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});