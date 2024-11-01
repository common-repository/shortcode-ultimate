function generate_box_shortcode(){
	var shortcode = '[msu_box';
	 if(jQuery('#sp_box_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_box_class').val()+'"';
	 }
	  if(jQuery('#sp_box_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_box_id').val()+'"';
	 }
	 if(jQuery('#sp_box_title').val() != ''){
		 shortcode +=' title="'+jQuery('#sp_box_title').val()+'"';
	 }
	 if(jQuery('#sp_box_title_background_color').val() != ''){
		 shortcode +=' bgcolor="'+jQuery('#sp_box_title_background_color').val()+'"';
	 }
	 if(jQuery('#sp_box_title_text_color').val() != ''){
		 shortcode +=' textcolor="'+jQuery('#sp_box_title_text_color').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_box_content').val();
	shortcode += '[/msu_box]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_box_shortcode();
});
jQuery('#sp_box_class').keyup(function(e) {
   generate_box_shortcode(); 
});
jQuery('#sp_box_id').keyup(function(e) {
   generate_box_shortcode(); 
});
jQuery('#sp_box_title').change(function(e) {	
   generate_box_shortcode(); 
});
jQuery('#sp_box_title_background_color').change(function(e) {
   generate_box_shortcode(); 
});
jQuery('#sp_box_title_text_color').change(function(e) {
   generate_box_shortcode(); 
});
jQuery('#sp_box_content').keyup(function(e) {
   generate_box_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_box_title_background_color').val('#060');
		jQuery('#sp_box_title_text_color').val('#fff');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_box_title_background_color').blur(function(e) {
		   generate_box_shortcode(); 
		});
		jQuery('#sp_box_title_text_color').blur(function(e) {
		   generate_box_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});