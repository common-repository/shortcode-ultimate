function generate_audio_shortcode(){
	var shortcode = '[msu_audio';
	 if(jQuery('#sp_audio_src').val() != ''){
		 shortcode +=' src="'+jQuery('#sp_audio_src').val()+'"';
	 }
	 if(jQuery('#sp_audio_loop').val() != ''){
		 shortcode +=' loop="'+jQuery('#sp_audio_loop').val()+'"';
	 }
	  if(jQuery('#sp_audio_autoplay').val() != ''){
		 shortcode +=' autoplay="'+jQuery('#sp_audio_autoplay').val()+'"';
	 }
	  if(jQuery('#sp_audio_preload').val() != ''){
		 shortcode +=' preload="'+jQuery('#sp_audio_preload').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
generate_audio_shortcode();
});
jQuery('#sp_audio_src').change(function(e) {
   generate_audio_shortcode(); 
});
jQuery('#sp_audio_loop').change(function(e) {
   generate_audio_shortcode(); 
});
jQuery('#sp_audio_autoplay').change(function(e) {
   generate_audio_shortcode(); 
});
jQuery('#sp_audio_preload').change(function(e) {
   generate_audio_shortcode(); 
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});
var media_uploader = null;
var attachedData = [];
		function open_audio_uploader_image()
		{
			media_uploader = wp.media({
				frame:    "post", 
				state:    "insert",
				multiple: false
			});

			media_uploader.on("insert", function(){
			var length = media_uploader.state().get("selection").length;
			var images = media_uploader.state().get("selection").models;
			var attachment = media_uploader.state().get("selection").toJSON();
			for(var iii = 0; iii < length; iii++)
			{
				 attachedId = attachment[iii].id;
				 var arr = attachedData.push(attachedId);
				 var gallery_image_url = images[0].changed.url;
				 jQuery("#sp_audio_src").val(gallery_image_url);
				 
			}
			generate_audio_shortcode();
		});
			media_uploader.open();
			
		}