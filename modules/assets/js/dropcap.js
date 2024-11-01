function generate_dropcap_shortcode(){
	var shortcode = '[msu_dropcap';
	 if(jQuery('#sp_dropcap_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_dropcap_class').val()+'"';
	 }
	  if(jQuery('#sp_dropcap_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_dropcap_id').val()+'"';
	 }
	 if(jQuery('#sp_dropcap_size').val() != ''){
		 shortcode +=' size="'+jQuery('#sp_dropcap_size').val()+'"';
	 }
	 if(jQuery('#sp_dropcap_style').val() != ''){
		 shortcode +=' style="'+jQuery('#sp_dropcap_style').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_dropcap_content').val();
	shortcode += '[/msu_dropcap]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_dropcap_shortcode();
});
jQuery('#sp_dropcap_class').keyup(function(e) {
   generate_dropcap_shortcode(); 
});
jQuery('#sp_dropcap_id').keyup(function(e) {
   generate_dropcap_shortcode(); 
});
jQuery('#sp_dropcap_size').change(function(e) {	
   generate_dropcap_shortcode(); 
});
jQuery('#sp_dropcap_style').change(function(e) {
   generate_dropcap_shortcode(); 
});
jQuery('#sp_dropcap_content').keyup(function(e) {
   generate_dropcap_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});