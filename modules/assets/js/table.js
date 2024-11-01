function generate_table_shortcode(){
	var shortcode = '[msu_table';
	 if(jQuery('#sp_table_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_table_class').val()+'"';
	 }
	  if(jQuery('#sp_table_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_table_id').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_table_content').val();
	shortcode += '[/msu_table]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_table_shortcode();
});
jQuery('#sp_table_class').keyup(function(e) {
   generate_table_shortcode(); 
});
jQuery('#sp_table_id').keyup(function(e) {
   generate_table_shortcode(); 
});
jQuery('#sp_table_content').change(function(e) {
   generate_table_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});