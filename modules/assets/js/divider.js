function generate_divider_shortcode(){
	var shortcode = '[msu_divider';
	 if(jQuery('#sp_divider_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_divider_class').val()+'"';
	 }
	  if(jQuery('#sp_divider_style').val() != ''){
		 shortcode +=' style="'+jQuery('#sp_divider_style').val()+'"';
	 }
	  if(jQuery('#sp_divider_background_color').val() != ''){
		 shortcode +=' divider_color="'+jQuery('#sp_divider_background_color').val()+'"';
	 }
	 if(jQuery('#sp_divider_size').val() != ''){
		 shortcode +=' size="'+jQuery('#sp_divider_size').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_divider_shortcode();
});
jQuery('#sp_divider_class').keyup(function(e) {
   generate_divider_shortcode(); 
});
jQuery('#sp_divider_style').keyup(function(e) {
   generate_divider_shortcode(); 
});
jQuery('#sp_divider_background_color').change(function(e) {
   generate_divider_shortcode(); 
});
jQuery('#sp_divider_size').change(function(e) {
   generate_divider_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_divider_background_color').val('#000');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_divider_background_color').blur(function(e) {
		   generate_divider_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});