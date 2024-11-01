function generate_members_shortcode(){
	var shortcode = '[msu_members';
	 if(jQuery('#sp_members_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_members_class').val()+'"';
	 }
	  if(jQuery('#sp_members_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_members_id').val()+'"';
	 }
	 if(jQuery('#sp_members_message').val() != ''){
		 shortcode +=' message="'+jQuery('#sp_members_message').val()+'"';
	 }
	 if(jQuery('#sp_members_background_color').val() != ''){
		 shortcode +=' bgcolor="'+jQuery('#sp_members_background_color').val()+'"';
	 }
	 if(jQuery('#sp_members_text_color').val() != ''){
		 shortcode +=' text_color="'+jQuery('#sp_members_text_color').val()+'"';
	 }
	 if(jQuery('#sp_members_login_text').val() != ''){
		 shortcode +=' login_text="'+jQuery('#sp_members_login_text').val()+'"';
	 }
	 if(jQuery('#sp_members_login_url').val() != ''){
		 shortcode +=' login_url="'+jQuery('#sp_members_login_url').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_members_login_content').val();
	shortcode += '[/msu_members]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_members_shortcode();
});
jQuery('#sp_members_class').keyup(function(e) {
   generate_members_shortcode(); 
});
jQuery('#sp_members_id').keyup(function(e) {
   generate_members_shortcode(); 
});
jQuery('#sp_members_message').keyup(function(e) {	
   generate_members_shortcode(); 
});
jQuery('#sp_members_background_color').change(function(e) {
   generate_members_shortcode(); 
});
jQuery('#sp_members_text_color').change(function(e) {
   generate_members_shortcode(); 
});
jQuery('#sp_members_login_text').keyup(function(e) {
   generate_members_shortcode(); 
});
jQuery('#sp_members_login_url').keyup(function(e) {
   generate_members_shortcode(); 
});
jQuery('#sp_members_login_content').keyup(function(e) {
   generate_members_shortcode(); 
});
jQuery(document).ready(function(e){
		jQuery('#sp_members_background_color').val('#d0edc0');
		jQuery('#sp_members_text_color').val('#000');
		jQuery(".color").wpColorPicker();
		jQuery('#sp_members_background_color').blur(function(e) {
		   generate_members_shortcode(); 
		});
		jQuery('#sp_members_text_color').blur(function(e) {
		   generate_members_shortcode(); 
		});
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});