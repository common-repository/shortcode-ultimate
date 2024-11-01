function generate_label_shortcode(){
	var shortcode = '[msu_label';
	 if(jQuery('#sp_label_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_label_class').val()+'"';
	 }
	  if(jQuery('#sp_label_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_label_id').val()+'"';
	 }
	 if(jQuery('#sp_label_type').val() != ''){
		 shortcode +=' type="'+jQuery('#sp_label_type').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_label_content').val();
	shortcode += '[/msu_label]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_label_shortcode();
});
jQuery('#sp_label_class').keyup(function(e) {
   generate_label_shortcode(); 
});
jQuery('#sp_label_id').keyup(function(e) {
   generate_label_shortcode(); 
});
jQuery('#sp_label_type').change(function(e) {	
   generate_label_shortcode(); 
});
jQuery('#sp_label_content').keyup(function(e) {
   generate_label_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});