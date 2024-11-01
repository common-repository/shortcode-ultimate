function generate_spoiler_shortcode(){
	var shortcode = '[msu_spoiler';
	 if(jQuery('#sp_spoiler_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_spoiler_class').val()+'"';
	 }
	  if(jQuery('#sp_spoiler_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_spoiler_id').val()+'"';
	 }
	 if(jQuery('#sp_spoiler_title').val() != ''){
		 shortcode +=' title="'+jQuery('#sp_spoiler_title').val()+'"';
	 }
	 if(jQuery('#sp_spoiler_open').val() != ''){
		 shortcode +=' open="'+jQuery('#sp_spoiler_open').val()+'"';
	 }
	 if(jQuery('#sp_spoiler_style').val() != ''){
		 shortcode +=' style="'+jQuery('#sp_spoiler_style').val()+'"';
	 }
	 if(jQuery('#sp_spoiler_icon').val() != ''){
		 shortcode +=' icon="'+jQuery('#sp_spoiler_icon').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_spoiler_content').val();
	shortcode += '[/msu_spoiler]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_spoiler_shortcode();
});
jQuery('#sp_spoiler_class').keyup(function(e) {
   generate_spoiler_shortcode(); 
});
jQuery('#sp_spoiler_id').keyup(function(e) {
   generate_spoiler_shortcode(); 
});
jQuery('#sp_spoiler_title').change(function(e) {	
   generate_spoiler_shortcode(); 
});
jQuery('#sp_spoiler_open').change(function(e) {
   generate_spoiler_shortcode(); 
});
jQuery('#sp_spoiler_style').change(function(e) {
   generate_spoiler_shortcode(); 
});
jQuery('#sp_spoiler_icon').change(function(e) {
   generate_spoiler_shortcode(); 
});
jQuery('#sp_spoiler_content').keyup(function(e) {
   generate_spoiler_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});