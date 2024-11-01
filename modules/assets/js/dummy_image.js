function generate_dummy_image_shortcode(){
	var shortcode = '[msu_dummy_image';
	 if(jQuery('#sp_dummy_image_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_dummy_image_class').val()+'"';
	 }
	  if(jQuery('#sp_dummy_image_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_dummy_image_id').val()+'"';
	 }
	 if(jQuery('#sp_dummy_image_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_dummy_image_height').val()+'"';
	 }
	 if(jQuery('#sp_dummy_image_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_dummy_image_width').val()+'"';
	 }
	 if(jQuery('#sp_dummy_image_theme').val() != ''){
		 shortcode +=' theme="'+jQuery('#sp_dummy_image_theme').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_dummy_image_shortcode();
});
jQuery('#sp_dummy_image_class').keyup(function(e) {
   generate_dummy_image_shortcode(); 
});
jQuery('#sp_dummy_image_id').keyup(function(e) {
   generate_dummy_image_shortcode(); 
});
jQuery('#sp_dummy_image_height').change(function(e) {
   generate_dummy_image_shortcode(); 
});
jQuery('#sp_dummy_image_width').change(function(e) {
   generate_dummy_image_shortcode(); 
});
jQuery('#sp_dummy_image_theme').change(function(e) {
   generate_dummy_image_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});