function generate_sub_page_shortcode(){
	var shortcode = '[msu_sub_page';
	 if(jQuery('#sp_sub_page_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_sub_page_class').val()+'"';
	 }
	  if(jQuery('#sp_sub_page_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_sub_page_id').val()+'"';
	 }
	 if(jQuery('#sp_sub_page_parent_post_id').val() != ''){
		 shortcode +=' parent_id="'+jQuery('#sp_sub_page_parent_post_id').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_sub_page_shortcode();
});
jQuery('#sp_sub_page_class').keyup(function(e) {
   generate_sub_page_shortcode(); 
});
jQuery('#sp_sub_page_id').keyup(function(e) {
   generate_sub_page_shortcode(); 
});
jQuery('#sp_sub_page_parent_post_id').keyup(function(e) {
   generate_sub_page_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});