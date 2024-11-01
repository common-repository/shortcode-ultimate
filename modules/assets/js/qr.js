function generate_qr_shortcode(){
	var shortcode = '[msu_qr';
	 if(jQuery('#sp_qr_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_qr_class').val()+'"';
	 }
	  if(jQuery('#sp_qr_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_qr_id').val()+'"';
	 }
	 if(jQuery('#sp_qr_title').val() != ''){
		 shortcode +=' title="'+jQuery('#sp_qr_title').val()+'"';
	 }
	 if(jQuery('#sp_qr_link').val() != ''){
		 shortcode +=' link="'+jQuery('#sp_qr_link').val()+'"';
	 }
	if(jQuery('#sp_qr_link_target').val() != ''){
		 shortcode +=' target="'+jQuery('#sp_qr_link_target').val()+'"';
	 }
	 if(jQuery('#sp_qr_data').val() != ''){
		 shortcode +=' data="'+jQuery('#sp_qr_data').val()+'"';
	 }
	 if(jQuery('#sp_qr_size').val() != ''){
		 shortcode +=' size="'+jQuery('#sp_qr_size').val()+'"';
	 }
	 if(jQuery('#sp_qr_primary_color').val() != ''){
		 shortcode +=' color="'+jQuery('#sp_qr_primary_color').val()+'"';
	 }
	 if(jQuery('#sp_qr_background_color').val() != ''){
		 shortcode +=' bgcolor="'+jQuery('#sp_qr_background_color').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_qr_shortcode();
});
jQuery('#sp_qr_class').keyup(function(e) {
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_id').keyup(function(e) {
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_title').keyup(function(e) {	
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_link').keyup(function(e) {	
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_align').change(function(e) {	
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_size').change(function(e) {	
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_link_target').keyup(function(e) {	
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_data').keyup(function(e) {	
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_primary_color').change(function(e) {
   generate_qr_shortcode(); 
});
jQuery('#sp_qr_background_color').change(function(e) {
   generate_qr_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_qr_background_color').val('#000');
		jQuery('#sp_qr_primary_color').val('#fff');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_qr_background_color').blur(function(e) {
		   generate_qr_shortcode(); 
		});
		jQuery('#sp_qr_primary_color').blur(function(e) {
		   generate_qr_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});