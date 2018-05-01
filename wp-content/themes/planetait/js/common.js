var templateUrl = global_object.templateUrl;
var revapi20,tpj;
(function () {
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoadHead)
	else
		onLoadHead();

	function onLoadHead() {
		if (tpj === undefined) {
			tpj = jQuery;

			if ("off" == "on") tpj.noConflict();
		}
		if (tpj("#nav").revolution == undefined) {
			revslider_showDoubleJqueryError("#nav");
		} else {
			revapi20 = tpj("#nav").show().revolution({
				sliderType: "standard",
				jsFileLocation: templateUrl+"/js/lib/revolution/js/",
				sliderLayout: "fullwidth",
				dottedOverlay: "none",
				delay: 9000,
				navigation: {
				},
				responsiveLevels: [1240, 1024, 778, 480],
				visibilityLevels: [1240, 1024, 778, 480],
				gridwidth: [1240, 1024, 778, 480],
				gridheight: [90, 90, 90, 90],
				lazyType: "none",
				minHeight: "90px",
				shadow: 0,
				spinner: "off",
				autoHeight: "off",
				disableProgressBar: "on",
				hideThumbsOnMobile: "off",
				hideSliderAtLimit: 0,
				hideCaptionAtLimit: 0,
				hideAllCaptionAtLilmit: 0,
				debugMode: false,
				fallbacks: {
					simplifyAll: "off",
					disableFocusListener: false,
				}
			});

		}; /* END OF revapi call */
	}; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */

// common utils
jQuery(document).ready(function(){

window.scrollTo(0,0);
jQuery(".set-img").each(function(e){
var imgsrc = jQuery(this).data('bg');
jQuery(this).css("background-image", "url("+imgsrc+")");
jQuery(this).css("background-size", "cover");
jQuery(this).css("background-position", "center center");
jQuery(this).css("background-repeat", "no-repeat");
});

jQuery(".set-img-contain").each(function(e){
var imgsrc = jQuery(this).data('bg');
jQuery(this).css("background-image", "url("+imgsrc+")");
jQuery(this).css("background-size", "contain");
jQuery(this).css("background-position", "center center");
jQuery(this).css("background-repeat", "no-repeat");
});

jQuery(".center-margin").each(function(e){
jQuery(this).css("margin", "0 auto");
});


});