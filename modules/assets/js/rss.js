function generate_rss_shortcode(){
	var shortcode = '[msu_rss';
	 if(jQuery('#sp_rss_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_rss_class').val()+'"';
	 }
	  if(jQuery('#sp_rss_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_rss_id').val()+'"';
	 }
	 if(jQuery('#sp_rss_url').val() != ''){
		 shortcode +=' url="'+jQuery('#sp_rss_url').val()+'"';
	 }
	 if(jQuery('#sp_rss_limit').val() != ''){
		 shortcode +=' limit="'+jQuery('#sp_rss_limit').val()+'"';
	 }
		 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_rss_shortcode();
});
jQuery('#sp_rss_class').keyup(function(e) {
   generate_rss_shortcode(); 
});
jQuery('#sp_rss_id').keyup(function(e) {
   generate_rss_shortcode(); 
});
jQuery('#sp_rss_url').keyup(function(e) {	
   generate_rss_shortcode(); 
});
jQuery('#sp_rss_limit').change(function(e) {
   generate_rss_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});