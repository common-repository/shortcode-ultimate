function generate_animation_shortcode(){
	var shortcode = '[msu_animation';
	 if(jQuery('#sp_animation_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_animation_class').val()+'"';
	 }
	  if(jQuery('#sp_animation_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_animation_id').val()+'"';
	 }
	 if(jQuery('#sp_animation_type').val() != ''){
		 shortcode +=' animation="'+jQuery('#sp_animation_type').val()+'"';
	 }
	 if(jQuery('#sp_animation_duration').val() != ''){
		 shortcode +=' duration="'+jQuery('#sp_animation_duration').val()+'"';
	 }
	 if(jQuery('#sp_animation_delay').val() != ''){
		 shortcode +=' delay="'+jQuery('#sp_animation_delay').val()+'"';
	 }
	 if(jQuery('#sp_animation_inline').val() != ''){
		 shortcode +=' inline="'+jQuery('#sp_animation_inline').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_animation_content').val();
	shortcode += '[/msu_animation]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_animation_shortcode();
});
jQuery('#sp_animation_class').keyup(function(e) {
   generate_animation_shortcode(); 
});
jQuery('#sp_animation_id').keyup(function(e) {
   generate_animation_shortcode(); 
});
jQuery('#sp_animation_inline').keyup(function(e) {
   generate_animation_shortcode(); 
});
jQuery('#sp_animation_type').change(function(e) {	
   generate_animation_shortcode(); 
});
jQuery('#sp_animation_duration').change(function(e) {
   generate_animation_shortcode(); 
});
jQuery('#sp_animation_delay').change(function(e) {
   generate_animation_shortcode(); 
});
jQuery('#sp_animation_content').keyup(function(e) {
   generate_animation_shortcode(); 
});

jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});