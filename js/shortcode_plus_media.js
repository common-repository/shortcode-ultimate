(function($) {
	jQuery('.modules').removeClass('active');
    jQuery('.modules').click(function(e) {
		e.preventDefault();
		jQuery('#shortcode_plus_show_form').html('');
		jQuery('.load_sp_form').show();
	    jQuery('.modules').removeClass('active');
        var module = jQuery(this).data('module');
		jQuery('#'+module).addClass('active');
		var ajax_request_sp = module; 
       	var data = {
			'action': ajax_request_sp,
			'module': module
		 };		 
		jQuery.ajax({
		   url: ajaxurl,
		   type: 'POST',
		   data: data,
			 success: function(data) {
					jQuery('.load_sp_form').hide();
					var get_Response = data;
					jQuery("#shortcode_plus_show_form").html('');
					jQuery(".shortcode_plus_container_pop_inner").css("max-width","600px");
					jQuery("#shortcode_plus_module_section").hide();
					jQuery("#shortcode_plus_show_form").show();
					jQuery("#shortcode_plus_show_form").append(get_Response);
					jQuery(".go_back").show();
					
		   },
			 error: function(data) {
			 console.log("FAILURE");
		   }
		});
		
    });
	jQuery('.load_sp_popup').click(function(e) {
	e.preventDefault();
    jQuery('.shortcode_plus_container_pop').show();
});
jQuery('.close_sp').click(function(e) {
	e.preventDefault();
    jQuery('.shortcode_plus_container_pop').hide();
});
jQuery(".go_back").click(function(){
						jQuery(".shortcode_plus_container_pop_inner").css("max-width","1000px");
						jQuery("#shortcode_plus_show_form").hide();
						jQuery("#shortcode_plus_module_section").show();
						jQuery(this).hide();
					}); 
/* Popup Hide start */					
jQuery('.pop_overlay').on("click", function() {
  jQuery("#shortcode_plus_container").hide();
});						
/* Popup Hide end */   
})(jQuery);	
jQuery(document).keyup(function(e) {
    if (e.which == 27) {
        jQuery(".shortcode_plus_container_pop").fadeOut(300); 
    }
});
jQuery(document).ready(function(){
	 /* highlight matches text */
    var highlight = function (string) {
        jQuery("#shortcode_plus_module_section li .match").each(function () {
            var matchStart = jQuery(this).text().toLowerCase().indexOf("" + string.toLowerCase() + "");
            var matchEnd = matchStart + string.length - 1;
            var beforeMatch = jQuery(this).text().slice(0, matchStart);
            var matchText = jQuery(this).text().slice(matchStart, matchEnd + 1);
            var afterMatch = jQuery(this).text().slice(matchEnd + 1);
            jQuery(this).html(beforeMatch + "<em>" + matchText + "</em>" + afterMatch);
        });
    };
 
 
    /* filter products */
    jQuery("#search-shrtcode").on("keyup click input", function () {
		  jQuery("#shortcode_plus_show_form").html('');
		  jQuery(".go_back").hide();
		  jQuery(".shortcode_plus_container_pop_inner").css("max-width","1000px");
        if (jQuery("#search-shrtcode").val() == "") {
			jQuery('em').css({"background": "transparent", "font-weight": "unset"});
			jQuery(".shortcode_plus_bottom_form li:not(.match)").css({"background": "transparent", "opacity": "1"});
			jQuery("#shortcode_plus_module_section, #shortcode_plus_module_section li").removeClass("match").show();
           
        }
        else {
			 jQuery("#shortcode_plus_module_section li").removeClass("match").filter(function () {
                return jQuery(this).text().toLowerCase().indexOf(jQuery("#search-shrtcode").val().toLowerCase()) != -1;
            }).addClass("match").show();
			
            highlight(this.value);
			jQuery(".shortcode_plus_bottom_form li.match").css("opacity", "1");
			jQuery(".shortcode_plus_bottom_form li:not(.match)").css("opacity", "0.3");
			jQuery("#shortcode_plus_module_section").show();
        }
    });
		});