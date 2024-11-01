function generate_services_shortcode(){
	var shortcode = '[msu_services';
	 if(jQuery('#sp_services_class').val() != ''){
		 shortcode +=' class="'+jQuery('#sp_services_class').val()+'"';
	 }
	  if(jQuery('#sp_services_id').val() != ''){
		 shortcode +=' id="'+jQuery('#sp_services_id').val()+'"';
	 }
	 if(jQuery('#sp_services_title').val() != ''){
		 shortcode +=' title="'+jQuery('#sp_services_title').val()+'"';
	 }
	 if(jQuery('#sp_services_icon_type').val() != ''){
		 shortcode +=' type="'+jQuery('#sp_services_icon_type').val()+'"';
	 }
	 if(jQuery('#sp_services_icon_color').val() != '' && jQuery('#sp_services_icon_type').val() != 'media'){
		 shortcode +=' color="'+jQuery('#sp_services_icon_color').val()+'"';
	 }
	 if(jQuery('#sp_services_img_val').val() != '' && jQuery('#sp_services_icon_type').val() == 'media'){
		 shortcode +=' image_id="'+jQuery('#sp_services_img_val').val()+'"';
	 }
	 if(jQuery('#sp_services_img_source_icon').val() != '' && jQuery('#sp_services_icon_type').val() == 'icon'){
		 shortcode +=' icon="'+jQuery('#sp_services_img_source_icon').val()+'"';
	 }
	 if(jQuery('#sp_services_icon_size').val() != '' && jQuery('#sp_services_icon_type').val() == 'icon'){
		 shortcode +=' size="'+jQuery('#sp_services_icon_size').val()+'"';
	 }
	shortcode += ']';
	shortcode += jQuery('#sp_services_content').val();
	shortcode += '[/msu_services]';
	jQuery('#generated_shortcode').val(shortcode);
}
jQuery(document).ready(function(e) {
   generate_services_shortcode();
});
jQuery('#sp_services_class').keyup(function(e) {
   generate_services_shortcode(); 
});
jQuery('#sp_services_id').keyup(function(e) {
   generate_services_shortcode(); 
});
jQuery('#sp_services_title').keyup(function(e) {	
   generate_services_shortcode(); 
});
jQuery('#sp_services_icon_color').change(function(e) {
   generate_services_shortcode(); 
});
jQuery('#sp_services_content').keyup(function(e) {
   generate_services_shortcode(); 
});
jQuery('#sp_services_img_val').change(function(e) {
   generate_services_shortcode();
});
jQuery('#sp_services_img_source_icon').change(function(e) {
   generate_services_shortcode();
});
jQuery('#sp_services_icon_size').change(function(e) {
   generate_services_shortcode();
});
jQuery('select option')
    .filter(function() {
        return !this.value || jQuery.trim(this.value).length == 0 || jQuery.trim(this.text).length == 0;
    })
   .remove();
jQuery('#sp_services_icon_type').change(function() {
	generate_services_shortcode();
	var sourceData = jQuery(this).val();
	if(sourceData == "media"){
		jQuery("#sp_services_img_source_media").css("display","block");
		jQuery("#sp_services_img_source_icon").css("display","none");
		jQuery('.sp_services_img_dta').show();
	}
	else if(sourceData == "icon"){
		jQuery("#sp_services_img_source_icon").css("display","block");
		jQuery("#sp_services_img_source_media").css("display","none");
		jQuery('.sp_services_img_dta').show();
		
	}
	else{
		jQuery("#sp_services_img_source_media").css("display","none");
		jQuery("#sp_services_img_source_icon").css("display","none");
		jQuery('.sp_services_img_dta').hide();
	}
});
var media_uploader = null;
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
			 var imgData = '<img class="servicesImg" src="'+image_url+'">';
			 jQuery("#sp_services_imageData").append(imgData);
			jQuery('#sp_services_img_val').val(attachedId);
			generate_services_shortcode();
		});
			media_uploader.open();
			
		}
jQuery(document).ready(function(e){
		jQuery('#sp_services_icon_color').val('#000');
		jQuery(".color").wpColorPicker();
		jQuery('.icon').iconpicker(".icon");
		jQuery('#sp_services_icon_color').blur(function(e) {
		   generate_services_shortcode(); 
		});
		
});
jQuery('#insert_shortcode').click(function(e) {
	e.preventDefault();
    var generated_shortcode = jQuery('#generated_shortcode').val();
	window.send_to_editor(generated_shortcode);
   jQuery('.shortcode_plus_container_pop').hide();
});