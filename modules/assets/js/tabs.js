function generate_tabs_shortcode(){
	var shortcode = '[msu_tabs';
	 if(jQuery('#sp_tabs_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_tabs_class').val()+'"';
	 }
	  if(jQuery('#sp_tabs_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_tabs_id').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += '[msu_tab title="Title 1" active="true"]Content 1[/msu_tab]';
	 shortcode += '[msu_tab title="Title 2"] Content 2 [ /msu_tab]';
	 shortcode += '[msu_tab title="Title 3"] Content 3 [/msu_tab]';
	 shortcode += '[/msu_tabs]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_tabs_shortcode();
});
jQuery('#sp_tabs_class').keyup(function(e) {
   generate_tabs_shortcode(); 
});
jQuery('#sp_tabs_id').keyup(function(e) {
   generate_tabs_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});