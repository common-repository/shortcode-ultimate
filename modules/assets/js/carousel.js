function generate_carousel_shortcode(){
	var shortcode = '[msu_carousel';
	 if(jQuery('#sp_carousel_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_carousel_class').val()+'"';
	 }
	  if(jQuery('#sp_carousel_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_carousel_id').val()+'"';
	 }
	 if(jQuery('#sp_carousel_animation').val() != ''){
		 shortcode +=' animation="'+jQuery('#sp_carousel_animation').val()+'"';
	 }
	 if(jQuery('#sp_carousel_animation_loop').val() != ''){
		 shortcode +=' animationloop="'+jQuery('#sp_carousel_animation_loop').val()+'"';
	 }
	 if(jQuery('#sp_carousel_width').val() != ''){
		 shortcode +=' itemwidth="'+jQuery('#sp_carousel_width').val()+'"';
	 }
	 if(jQuery('#sp_carousel_margin').val() != ''){
		 shortcode +=' itemmargin="'+jQuery('#sp_carousel_margin').val()+'"';
	 }
	 if(jQuery('#sp_carousel_source').val() != ''){
		shortcode +=' src="'+jQuery('#sp_carousel_source').val()+'"';
	 }
	 if(jQuery('#sp_carousel_img_val').val() != '' && jQuery('#sp_carousel_source').val() == 'media'){
		shortcode +=' attachment_ids="'+jQuery('#sp_carousel_img_val').val()+'"';
	 }
	shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
	generate_carousel_shortcode();
});
jQuery('#sp_carousel_class').keyup(function(e) {
   generate_carousel_shortcode(); 
});
jQuery('#sp_carousel_id').keyup(function(e) {
   generate_carousel_shortcode(); 
});
jQuery('#sp_carousel_animation').change(function(e) {	
   generate_carousel_shortcode(); 
});
jQuery('#sp_carousel_animation_loop').change(function(e) {
   generate_carousel_shortcode(); 
});
jQuery('#sp_carousel_width').change(function(e) {
   generate_carousel_shortcode(); 
});
jQuery('#sp_carousel_margin').change(function(e) {
   generate_carousel_shortcode(); 
});
jQuery('#sp_carousel_img_val').change(function(e) {
   generate_carousel_shortcode();
});
jQuery('#sp_carousel_source').change(function() {
	generate_carousel_shortcode();
	var sourceData = jQuery(this).val();
	if(sourceData == "media"){
		jQuery("#sp_carousel_img_source").css("display","block");
		jQuery('.img_dta').show();
	}
	else{
		jQuery("#sp_carousel_img_source").css("display","none");
		jQuery('.img_dta').hide();
	}
});
var media_uploader = null;
var attachedData = [];

		function open_media_uploader_image()
		{
			media_uploader = wp.media({
				frame:    "post", 
				state:    "insert",
				multiple: true
			});
           jQuery('.img_dta').show();
			media_uploader.on("insert", function(){
			var length = media_uploader.state().get("selection").length;
			var images = media_uploader.state().get("selection").models;
			var attachment = media_uploader.state().get("selection").toJSON();
			for(var iii = 0; iii < length; iii++)
			{
				 attachedId = attachment[iii].id;
				 var image_url = images[iii].changed.url;
				 var arr = attachedData.push(attachedId);
			     var imgData = '<img class="carouselImg" src="'+image_url+'">';
			     jQuery("#imageData").append(imgData);

				
			}
			var arr1 = attachedData.join(",");
			jQuery('#sp_carousel_img_val').val(arr1);
			generate_carousel_shortcode();
		});
			media_uploader.open();
			
		}
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});