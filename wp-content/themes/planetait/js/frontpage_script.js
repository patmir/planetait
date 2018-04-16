(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		var revapi98,tpj;

		var templateUrl = global_object.templateUrl;
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
	if(tpj("#rev_slider_98_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_98_1");
	}else{
		revapi98 = tpj("#start_slider").show().revolution({
			sliderType:"hero",
			jsFileLocation:templateUrl+"/js/lib/revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,768,960,720],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:400,
				speedbg:0,
				speedls:0,
				levels:[1,2,3,4,5,30,35,40,45,46,47,48,49,50,51,55],
			},
			shadow:0,
			spinner:"spinner0",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "60px",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				disableFocusListener:false,
			}
		});
	}
		RsTypewriterAddOn(tpj, revapi98);
	});
	
})(jQuery, this);
