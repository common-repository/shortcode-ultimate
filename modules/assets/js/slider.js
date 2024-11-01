function generate_slider_shortcode(){
	var shortcode = '[msu_slider';
	 if(jQuery('#sp_slider_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_slider_class').val()+'"';
	 }
	 if(jQuery('#sp_slider_speed').val() != ''){
		 shortcode +=' speed="'+jQuery('#sp_slider_speed').val()+'"';
	 }
	 if(jQuery('#sp_slider_delay').val() != ''){
		 shortcode +=' delay="'+jQuery('#sp_slider_delay').val()+'"';
	 }
	 if(jQuery('#sp_slider_autoplay').val() != ''){
		 shortcode +=' autoplay="'+jQuery('#sp_slider_autoplay').val()+'"';
	 }
	 if(jQuery('#sp_slider_show_control').val() != ''){
		 shortcode +=' show-control="'+jQuery('#sp_slider_show_control').val()+'"';
	 }
	 if(jQuery('#sp_slider_show_arrow').val() != ''){
		 shortcode +=' show-arrow="'+jQuery('#sp_slider_show_arrow').val()+'"';
	 }
	 shortcode += ']';
	 shortcode += '[msu_slide src="http://shortcode-ultimate.webdesi9.com/su_dummy/images/image1.jpg" caption="Caption1"][/msu_slide]';
	 shortcode += '[msu_slide src="http://shortcode-ultimate.webdesi9.com/su_dummy/images/image1.jpg" caption="Caption1"][/msu_slide]';
	 shortcode += '[msu_slide src="http://shortcode-ultimate.webdesi9.com/su_dummy/images/image1.jpg" caption="Caption1"][/msu_slide]';
	 shortcode += '[/msu_slider]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_slider_shortcode();
});
jQuery('#sp_slider_autoplay').change(function(e) {
   generate_slider_shortcode(); 
});
jQuery('#sp_slider_show_control').change(function(e) {
   generate_slider_shortcode(); 
});
jQuery('#sp_slider_show_arrow').change(function(e) {
   generate_slider_shortcode(); 
});
jQuery('#sp_slider_class').keyup(function(e) {
   generate_slider_shortcode(); 
});
jQuery('#sp_slider_speed').keyup(function(e) {
   generate_slider_shortcode(); 
});
jQuery('#sp_slider_delay').keyup(function(e) {
   generate_slider_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
	jQuery('.shortcode_plus_container_pop').hide();
});