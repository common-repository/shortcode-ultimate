function generate_button_shortcode(){
	var shortcode = '[msu_button';
	 if(jQuery('#sp_button_size').val() != ''){
		 shortcode +=' size="'+jQuery('#sp_button_size').val()+'"';
	 }
	 if(jQuery('#sp_button_onclick').val() != ''){
		 shortcode +=' onclick="'+jQuery('#sp_button_onclick').val()+'"';
	 }
	 if(jQuery('#sp_button_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_button_class').val()+'"';
	 }
	 if(jQuery('#sp_button_background').val() != ''){
		 shortcode +=' background="'+jQuery('#sp_button_background').val()+'"';
	 }
	 if(jQuery('#sp_button_color').val() != ''){
		 shortcode +=' color="'+jQuery('#sp_button_color').val()+'"';
	 }
	  if(jQuery('#sp_button_link').val() != ''){
		 shortcode +=' link="'+jQuery('#sp_button_link').val()+'"';
	 }
	  if(jQuery('#sp_button_target').val() != ''){
		 shortcode +=' target="'+jQuery('#sp_button_target').val()+'"';
	 }
	 shortcode += ']';
	  if(jQuery('#sp_button_text').val() != ''){
		 shortcode += jQuery('#sp_button_text').val();
	 }	 
	 shortcode += '[/msu_button]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
jQuery(".color").wpColorPicker();
   generate_button_shortcode();
});
jQuery('#sp_button_size').keyup(function(e) {
   generate_button_shortcode(); 
});
jQuery('#sp_button_class').keyup(function(e) {
   generate_button_shortcode(); 
});
jQuery('#sp_button_text').keyup(function(e) {
	generate_button_shortcode(); 
});
jQuery('#sp_button_link').keyup(function(e) {
   generate_button_shortcode(); 
});
jQuery('#sp_button_target').change(function(e) {
   generate_button_shortcode(); 
});
jQuery('#sp_button_onclick').keyup(function(e) {
   generate_button_shortcode(); 
});
jQuery('#sp_button_color').blur(function(e) {
		   generate_button_shortcode(); 
		});
jQuery('#sp_button_background').blur(function(e) {
		   generate_button_shortcode(); 
		});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});