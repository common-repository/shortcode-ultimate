function generate_expand_shortcode(){
	var shortcode = '[msu_expand';
	 if(jQuery('#sp_expand_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_expand_class').val()+'"';
	 }
	  if(jQuery('#sp_expand_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_expand_id').val()+'"';
	 }
	 if(jQuery('#sp_expand_more_text').val() != ''){
		 shortcode +=' more_text="'+jQuery('#sp_expand_more_text').val()+'"';
	 }
	 if(jQuery('#sp_expand_less_text').val() != ''){
		 shortcode +=' less_text="'+jQuery('#sp_expand_less_text').val()+'"';
	 }
	 if(jQuery('#sp_expand_hide_less_link').val() != ''){
		 shortcode +=' hide_text="'+jQuery('#sp_expand_hide_less_link').val()+'"';
	 }
	 if(jQuery('#sp_expand_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_expand_height').val()+'"';
	 }
	 if(jQuery('#sp_expand_link_color').val() != ''){
		 shortcode +=' link_color="'+jQuery('#sp_expand_link_color').val()+'"';
	 }
	 if(jQuery('#sp_expand_text_color').val() != ''){
		 shortcode +=' text_color="'+jQuery('#sp_expand_text_color').val()+'"';
	 }
	 if(jQuery('#sp_expand_link_style').val() != ''){
		 shortcode +=' link_style="'+jQuery('#sp_expand_link_style').val()+'"';
	 }
	 if(jQuery('#sp_expand_link_align').val() != ''){
		 shortcode +=' link_align="'+jQuery('#sp_expand_link_align').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_expand_content').val();
	shortcode += '[/msu_expand]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_expand_shortcode();
});
jQuery('#sp_expand_class').keyup(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_id').keyup(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_more_text').change(function(e) {	
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_less_text').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_hide_less_link').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_height').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_link_color').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_text_color').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_link_style').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_link_align').change(function(e) {
   generate_expand_shortcode(); 
});
jQuery('#sp_expand_content').keyup(function(e) {
   generate_expand_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_expand_link_color').val('#0088FF');
		jQuery('#sp_expand_text_color').val('#333333');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_expand_link_color').blur(function(e) {
		   generate_expand_shortcode(); 
		});
		jQuery('#sp_expand_text_color').blur(function(e) {
		   generate_expand_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});