function generate_gallery_shortcode(){
	var shortcode = '[msu_gallery';
	 if(jQuery('#sp_gallery_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_gallery_class').val()+'"';
	 }
	  if(jQuery('#sp_gallery_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_gallery_id').val()+'"';
	 }
	 if(jQuery('#sp_gallery_width').val() != ''){
		 shortcode +=' width="'+jQuery('#sp_gallery_width').val()+'"';
	 }
	 if(jQuery('#sp_gallery_height').val() != ''){
		 shortcode +=' height="'+jQuery('#sp_gallery_height').val()+'"';
	 }
	 if(jQuery('#sp_gallery_source').val() != ''){
		shortcode +=' src="'+jQuery('#sp_gallery_source').val()+'"';
	 }
	 if(jQuery('#sp_gallery_img_val').val() != ''){
		shortcode +=' attachment_ids="'+jQuery('#sp_gallery_img_val').val()+'"';
	 }
	 shortcode += ']';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
	generate_gallery_shortcode();
});
jQuery('#sp_gallery_class').keyup(function(e) {
   generate_gallery_shortcode(); 
});
jQuery('#sp_gallery_id').keyup(function(e) {
   generate_gallery_shortcode(); 
});
jQuery('#sp_gallery_width').keyup(function(e) {
   generate_gallery_shortcode(); 
});
jQuery('#sp_gallery_height').keyup(function(e) {
   generate_gallery_shortcode(); 
});
jQuery('#sp_gallery_img_val').change(function(e) {
   generate_gallery_shortcode();
});
jQuery('#sp_gallery_source').change(function() {
	generate_gallery_shortcode();
	var sourceData = jQuery(this).val();
	if(sourceData == "media"){
		jQuery("#sp_gallery_img_source").css("display","block");
		jQuery('.gllry_dta').show();
	}
	else{
		jQuery("#sp_gallery_img_source").css("display","none");
		jQuery('.gllry_dta').hide();
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

			media_uploader.on("insert", function(){
		    jQuery('.gllry_dta').show();
			var length = media_uploader.state().get("selection").length;
			var images = media_uploader.state().get("selection").models;
			var attachment = media_uploader.state().get("selection").toJSON();
			for(var iii = 0; iii < length; iii++)
			{
				 attachedId = attachment[iii].id;
				 var arr = attachedData.push(attachedId);
				 var gallery_image_url = images[iii].changed.url;
				 var galleryImgData = '<img src="'+gallery_image_url+'">';
				 jQuery("#galleryImageData").append(galleryImgData);
				 
			}
			var arr1 = attachedData.join(",");
			jQuery('#sp_gallery_img_val').val(arr1);
			generate_gallery_shortcode();
		});
			media_uploader.open();
			
		}
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});