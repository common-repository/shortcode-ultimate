jQuery(document).ready(function(e) {
  jQuery('div[data-modal-id]').click(function(e) {
	e.stopPropagation();
    jQuery('body').addClass('k-modal-pop');
	var modalBox = jQuery(this).attr('data-modal-id');
	jQuery('#'+modalBox).fadeIn(jQuery(this).data());
});
jQuery('.sp_close').click(function(e) {
	jQuery('body').removeClass('k-modal-pop');
    jQuery('.sp_example_pop_wrap').fadeOut(500);
		var video_youtube = jQuery("#youtube").attr("src");
		var video_screenr = jQuery("#screenr").attr("src");
		var video_vimeo = jQuery("#vimeo").attr("src");
		var video_youtube_advance = jQuery("#youtube_advance").attr("src");
		var video_dailymotion = jQuery("#dailymotion").attr("src");
		jQuery("#youtube").attr("src","");
		jQuery("#screenr").attr("src","");
		jQuery("#vimeo").attr("src","");
		jQuery("#youtube_advance").attr("src","");
		jQuery("#dailymotion").attr("src","");
        jQuery("#youtube").attr("src",video_youtube);
        jQuery("#screenr").attr("src",video_screenr);
        jQuery("#vimeo").attr("src",video_vimeo);
        jQuery("#youtube_advance").attr("src",video_youtube_advance);
        jQuery("#dailymotion").attr("src",video_dailymotion);
});
jQuery(document).click(function(e) {
  jQuery('body').removeClass('k-modal-pop');
    jQuery('.sp_example_pop_wrap').fadeOut(500);
		var video_youtube = jQuery("#youtube").attr("src");
		var video_screenr = jQuery("#screenr").attr("src");
		var video_vimeo = jQuery("#vimeo").attr("src");
		var video_youtube_advance = jQuery("#youtube_advance").attr("src");
		var video_dailymotion = jQuery("#dailymotion").attr("src");
		jQuery("#youtube").attr("src","");
		jQuery("#screenr").attr("src","");
		jQuery("#vimeo").attr("src","");
		jQuery("#youtube_advance").attr("src","");
		jQuery("#dailymotion").attr("src","");
        jQuery("#youtube").attr("src",video_youtube);
        jQuery("#screenr").attr("src",video_screenr);
        jQuery("#vimeo").attr("src",video_vimeo);
        jQuery("#youtube_advance").attr("src",video_youtube_advance);
        jQuery("#dailymotion").attr("src",video_dailymotion);	
});
jQuery('.sp_outer_layout').click(function(e) {
		e.stopPropagation();
});
jQuery('.toggle_text').hide();
    jQuery('.toggle_expander').click(function () {
        // .parent() selects the A tag, .next() selects the P tag
        jQuery(this).parent().next().slideToggle(1000);
    });
    jQuery('.toggle_text').slideUp(1000);
	
/********Setting**************/
jQuery(".sp_setting_tab_ul a").click(function(event) {
	event.preventDefault();
	jQuery(this).parent().addClass("current");
	jQuery(this).parent().siblings().removeClass("current");
	var tab = jQuery(this).attr("href");
	jQuery(".sp_setting_tab_content").not(tab).css("display", "none");
	jQuery(tab).fadeIn();
});
});	
/*******Setting*********/
jQuery('#mk_su_save_css').click(function(e) {
	save_msu_settings_options();
});
jQuery(window).keypress(function(event) {
    if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
    save_msu_settings_options();
    event.preventDefault();
    return false;
});
function save_msu_settings_options() {
	jQuery('.mk_su_text_css_txt_area_tip').hide();
   jQuery('.mk_su_text_css_txt_area_spin').show();
   var custom_css = jQuery('.mk_su_text_css').val();
   var data = {
			'action': 'save_msu_settings',
			'mk_su_text_css': custom_css
		};
		jQuery.post(ajaxurl, data, function(response) {
		  if(response == '1') {
			  jQuery('.mk_su_text_css_txt_area_spin').hide();
			  jQuery('.mk_su_text_css_txt_area_tip').show().html('<span class="mk_su_text_css_success">Saved!</span>');
		  } else {
			  jQuery('.mk_su_text_css_txt_area_spin').hide();
			  jQuery('.mk_su_text_css_txt_area_tip').show().html('<span class="mk_su_text_css_error">Not Saved!');
		  }
		});   
}