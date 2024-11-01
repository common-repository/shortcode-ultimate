function generate_document_shortcode(){
	var shortcode = '[msu_document';
	 if(jQuery('#sp_document_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_document_class').val()+'"';
	 }
	  if(jQuery('#sp_document_url').val() != ''){
		 shortcode +=' url="'+jQuery('#sp_document_url').val()+'"';
	 }
	 if(jQuery('#sp_document_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_document_width').val()+'"';
	 }
	 if(jQuery('#sp_document_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_document_height').val()+'"';
	 }
	 if(jQuery('#sp_document_responsive').val() != ''){
		 shortcode +=' responsive="'+jQuery('#sp_document_responsive').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_document_shortcode();
});
jQuery('#sp_document_class').keyup(function(e) {
   generate_document_shortcode(); 
});
jQuery('#sp_document_url').keyup(function(e) {
   generate_document_shortcode(); 
});
jQuery('#sp_document_width').keyup(function(e) {	
   generate_document_shortcode(); 
});
jQuery('#sp_document_height').keyup(function(e) {
   generate_document_shortcode(); 
});
jQuery('#sp_document_responsive').keyup(function(e) {
   generate_document_shortcode(); 
});
jQuery('#sp_document_content').keyup(function(e) {
   generate_document_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});