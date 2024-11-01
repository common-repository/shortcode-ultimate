function generate_frame_shortcode(){
	var shortcode = '[msu_frame';
	 if(jQuery('#sp_frame_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_frame_class').val()+'"';
	 }
	  if(jQuery('#sp_frame_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_frame_id').val()+'"';
	 }
	 if(jQuery('#sp_frame_content').val() != ''){
		 shortcode +=' src="'+jQuery('#sp_frame_content').val()+'"';
	 }
	 if(jQuery('#sp_frame_text_align').val() != ''){
		 shortcode +=' align="'+jQuery('#sp_frame_text_align').val()+'"';
	 }
	 if(jQuery('#sp_frame_img_val').val() != '' && jQuery('#sp_frame_content').val() == 'media'){
		shortcode +=' attachment_id="'+jQuery('#sp_frame_img_val').val()+'"';
	 }
	 if(jQuery('#sp_frame_img_content').val() != '' && jQuery('#sp_frame_content').val() == 'image_url'){
		shortcode +=' image_src="'+jQuery('#sp_frame_img_content').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_frame_shortcode();
});
jQuery('#sp_frame_class').keyup(function(e) {
   generate_frame_shortcode(); 
});
jQuery('#sp_frame_id').keyup(function(e) {
   generate_frame_shortcode(); 
});
jQuery('#sp_frame_text_align').change(function(e) {
   generate_frame_shortcode(); 
});
jQuery('#sp_frame_img_val').change(function(e) {
   generate_frame_shortcode();
});
jQuery('#sp_frame_img_content').keyup(function(e) {
   generate_frame_shortcode();
});
jQuery('#sp_frame_content').change(function() {
	generate_frame_shortcode();
	var sourceData = jQuery(this).val();
	if(sourceData == "media"){
		jQuery("#sp_frame_img_source").css("display","block");
		jQuery("#sp_frame_img_content").css("display","none");
		jQuery('.frame_img_dta').show();
	}
	else{
		jQuery("#sp_frame_img_content").css("display","block");
		jQuery("#sp_frame_img_source").css("display","none");
		jQuery('.frame_img_dta').hide();
	}
});
var media_uploader = null;
var attachedData = [];

		function open_media_uploader_image()
		{
			media_uploader = wp.media({
				frame:    "post", 
				state:    "insert",
				multiple: false
			});
           jQuery('.frame_img_dta').show();
			media_uploader.on("insert", function(){
			var length = media_uploader.state().get("selection").length;
			var images = media_uploader.state().get("selection").models;
			var attachment = media_uploader.state().get("selection").toJSON();
			for(var iii = 0; iii < length; iii++)
			{
				 attachedId = attachment[0].id;
				 var image_url = images[0].changed.url;
				

				
			}
			 var imgData = '<img class="frameImg" src="'+image_url+'">';
			 jQuery("#frameimageData").append(imgData);
			jQuery('#sp_frame_img_val').val(attachedId);
			generate_frame_shortcode();
		});
			media_uploader.open();
			
		}
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});