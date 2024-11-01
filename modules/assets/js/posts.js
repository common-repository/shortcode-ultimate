function generate_posts_shortcode(){
	var shortcode = '[msu_posts';	
	if(jQuery('#sp_post_ids').val() !== null){
		 shortcode +=' ids="'+jQuery('#sp_post_ids').val()+'"';
	 }
	
	 if(jQuery('#sp_posts_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_posts_class').val()+'"';
	 }
	  if(jQuery('#sp_posts_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_posts_id').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_posts_shortcode();
});
jQuery('#sp_post_ids').change(function(e) {
  generate_posts_shortcode();
});
jQuery('#sp_posts_class').keyup(function(e) {
   generate_posts_shortcode(); 
});
jQuery('#sp_posts_id').keyup(function(e) {
   generate_posts_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
		e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	 window.send_to_editor(generated_shortcode);
    jQuery('.shortcode_plus_container_pop').hide();
});
jQuery('#sp_post_ids').multiselect({
		columns: 1,
		placeholder: 'Select Posts',
		search: true,
		selectAll: true
});	