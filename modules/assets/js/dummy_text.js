function generate_dt_shortcode(){
	var shortcode = '[msu_dummy_text';
	 if(jQuery('#sp_dummy_type').val() != ''){
		 shortcode +=' type="'+jQuery('#sp_dummy_type').val()+'"';
	 }
	  if(jQuery('#sp_dummy_amount').val() != ''){
		 shortcode +=' amount="'+jQuery('#sp_dummy_amount').val()+'"';
	 }
	  if(jQuery('#sp_dummy_cache').val() != ''){
		 shortcode +=' cache="'+jQuery('#sp_dummy_cache').val()+'"';
	 }
	  if(jQuery('#sp_dummy_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_dummy_class').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_dt_shortcode();
});
jQuery('#sp_dummy_type').change(function(e) {
   generate_dt_shortcode(); 
});
jQuery('#sp_dummy_amount').change(function(e) {
   generate_dt_shortcode(); 
});
jQuery('#sp_dummy_amount').keyup(function(e) {
   generate_dt_shortcode(); 
});
jQuery('#sp_dummy_cache').change(function(e) {
   generate_dt_shortcode(); 
});
jQuery('#sp_dummy_class').keyup(function(e) {
   generate_dt_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});