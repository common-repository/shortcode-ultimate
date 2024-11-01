function generate_map_shortcode(){
	var shortcode = '[msu_map';
	 if(jQuery('#sp_map_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_map_class').val()+'"';
	 }
	  if(jQuery('#sp_map_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_map_id').val()+'"';
	 }
	 if(jQuery('#sp_map_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_map_width').val()+'"';
	 }
	 if(jQuery('#sp_map_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_map_height').val()+'"';
	 }
	 if(jQuery('#sp_map_marker').val() != ''){
		 shortcode +=' marker="'+jQuery('#sp_map_marker').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_map_shortcode();
});
jQuery('#sp_map_class').keyup(function(e) {
   generate_map_shortcode(); 
});
jQuery('#sp_map_id').keyup(function(e) {
   generate_map_shortcode(); 
});
jQuery('#sp_map_width').change(function(e) {	
   generate_map_shortcode(); 
});
jQuery('#sp_map_height').change(function(e) {
   generate_map_shortcode(); 
});
jQuery('#sp_map_marker').keyup(function(e) {
   generate_map_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});