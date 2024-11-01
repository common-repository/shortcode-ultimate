jQuery(function(){
                jQuery("#default_accordion").bwlAccordion();
                jQuery("#toggle_accordion").bwlAccordion({
                    toggle: true
                });
                jQuery("#all_closed_accordion").bwlAccordion({
                    closeall: true,
                    theme: 'theme-green'
                }); 
            });
			
jQuery(document).ready(function () {	
jQuery('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = jQuery(this);
var $info = jQuery('#tabInfo');
var $name = jQuery('span', $info);
$name.text($tab.text());
$info.show();
}
});
jQuery('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
default_tab(openTab);
});	


jQuery(document).ready(function(){
    var animations = [];
    jQuery('.animate_div').each(function(i) {
        animations.push(
           $(this).hide().delay(i * 2000).fadeIn(1500).promise()
        );
    });

    jQuery.when.apply(jQuery, animations).done(function () {
        time=setInterval(function(){
        if ( jQuery('.animate_div:visible').length === 0 ) {
            jQuery(".advert").fadeIn("slow");
        } },200);
    });
});	
function default_tab(number) {
	                    jQuery('.resp-tab-item').removeClass('resp-tab-active');
                        jQuery('.resp-accordion').removeClass('resp-tab-active');
                        jQuery('.resp-tab-content').removeClass('resp-tab-content-active').attr('style', 'display:none');
                        jQuery('.resp-tab-item:eq('+number+')').addClass('resp-tab-active');
                        jQuery('.resp-accordion:eq('+number+')').addClass('resp-tab-active');
                        jQuery('.resp-tab-content:eq('+number+')').addClass('resp-tab-content-active').attr('style', 'display:block');
}
/*testimonial*/
jQuery(document).ready(function(){
jQuery("#testimonial-slider").owlCarousel({
	items:1,
	itemsDesktop:[1000,1],
	itemsDesktopSmall:[979,1],
	itemsTablet:[768,1],
	pagination:true,
	navigation:false,
	navigationText:["",""],
	slideSpeed:1000,
	singleItem:true,
	autoPlay:false
});
jQuery(".lightPop").click(function(){
	window.scrollTo(0,0);
    jQuery("#sp_light").css("display","block");
	jQuery("#sp_fade").css("display","block");
	
});
jQuery(".CloselightPop").click(function(){
	window.scrollTo(0,0);
    jQuery("#sp_light").css("display","none");
	jQuery("#sp_fade").css("display","none");
});
function is_transition_supported() {
		var thisBody = document.body || document.documentElement,
			thisStyle = thisBody.style,
			support = thisStyle.transition !== undefined || thisStyle.WebkitTransition !== undefined || thisStyle.MozTransition !== undefined || thisStyle.MsTransition !== undefined || thisStyle.OTransition !== undefined;

		return support;
	}

	// Animations is supported
	if (is_transition_supported()) {
		// Animate
		jQuery('.sp_animate').each(function () {
			jQuery(this).one('inview', function (e) {
				var $this = jQuery(this),
					data = $this.data();
				window.setTimeout(function () {
					$this.addClass(data.animation);
					$this.addClass('animated');
					$this.css('visibility', 'visible');
				}, data.delay * 1000);
			});
		});
	}
	// Animations isn't supported
	else {
		jQuery('.sp_animate').css('visibility', 'visible');
	}
	
	/******Spoiler***/
	
	jQuery('.sp_spoiler-title').click(function (e) {
			var $title = jQuery(this),
			$spoiler = $title.parent(),
			bar = (jQuery('#wpadminbar').length > 0) ? 28 : 0;
		// Open/close spoiler
		$spoiler.toggleClass('sp_spoiler-closed');
		// Close other spoilers in accordion
		$spoiler.parent('.sp_accordion').children('.sp_spoiler').not($spoiler).addClass('sp_spoiler-closed');
		// Scroll in spoiler in accordion
		if (jQuery(window).scrollTop() > $title.offset().top) $(window).scrollTop($title.offset().top - $title.height() - bar);
		e.preventDefault();
	});
	jQuery('.sp_spoiler-content').removeAttr('style');
	
	jQuery('.sp_expand').each(function () {
		var $this = jQuery(this),
			$content = $this.children('.sp_expand-content'),
			$more = $this.children('.sp_expand-link-more'),
			$less = $this.children('.sp_expand-link-less'),
			data = $this.data(),
			col = 'sp_expand-collapsed';

		$more.on('click', function (e) {
			$content.css('max-height', 'none');
			$this.removeClass(col);
		});
		$less.on('click', function (e) {
			$content.css('max-height', data.height + 'px');
			$this.addClass(col);
		});
	});
	jQuery('.sp_table tr:even').addClass('sp_even');
});		

/* popup hide on click  
jQuery(document).ready(function(){
    jQuery(".sp_example_pop_wrap").click(function(){
        jQuery(this).hide();
    });
});*/

/* popup hide on esp key  */
jQuery(document).keyup(function(e) {
    if (e.which == 27) {
        jQuery(".sp_example_pop_wrap").fadeOut(300); 
    }
});
