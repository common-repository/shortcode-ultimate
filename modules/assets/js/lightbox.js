function generate_lightbox_shortcode(){
	var shortcode = '[msu_lightbox';
	 if(jQuery('#sp_lightbox_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_lightbox_class').val()+'"';
	 }
	  if(jQuery('#sp_lightbox_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_lightbox_id').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_text').val() != ''){
		 shortcode +=' link_popup_text="'+jQuery('#sp_lightbox_text').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_type').val() != ''){
		 shortcode +=' type="'+jQuery('#sp_lightbox_type').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_content_source').val() != ''){
		 shortcode +=' src="'+jQuery('#sp_lightbox_content_source').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_lightbox_height').val()+'"';
	 }
	 if(jQuery('#sp_lightbox_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_lightbox_width').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_lightbox_shortcode();
});
jQuery('#sp_lightbox_class').keyup(function(e) {
   generate_lightbox_shortcode(); 
});
jQuery('#sp_lightbox_id').keyup(function(e) {
   generate_lightbox_shortcode(); 
});
jQuery('#sp_lightbox_type').change(function(e) {
   generate_lightbox_shortcode(); 
});
jQuery('#sp_lightbox_content_source').keyup(function(e) {
   generate_lightbox_shortcode(); 
});
jQuery('#sp_lightbox_height').keyup(function(e) {
   generate_lightbox_shortcode(); 
});
jQuery('#sp_lightbox_width').keyup(function(e) {
   generate_lightbox_shortcode(); 
});
jQuery('#sp_lightbox_text').keyup(function(e) {
   generate_lightbox_shortcode(); 
});

jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});