  var revapi39,
            tpj;    
            
	var templateUrl = global_object.templateUrl;
(function() {            
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad)
        else
    onLoad();
    
    function onLoad() {  
                      
        if (tpj===undefined) {
            tpj = jQuery;

            if("off" == "on") tpj.noConflict();        
        }
				if(tpj("#welcome").revolution == undefined){
					revslider_showDoubleJqueryError("#welcome");
				}else{
					revapi39 = tpj("#welcome").show().revolution({
						sliderType:"hero",
                        jsFileLocation: templateUrl+"/js/lib/revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						particles: {startSlide: "first", endSlide: "last", zIndex: "1",
							particles: {
								number: {value: 110}, color: {value: "#bd1664"},
								shape: {
									type: "triangle", stroke: {width: 1, color: "#f77e4f", opacity: 1},
									image: {src: ""}
								},
								opacity: {value: 0.5, random: false, min: 0.25, anim: {enable: true, speed: 3, opacity_min: 0.01, sync: true}},
								size: {value: 2, random: false, min: 2, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
								line_linked: {enable: true, distance: 200, color: "#d90f72", opacity: 0.4, width: 1},
								move: {enable: true, speed: 4, direction: "none", random: true, min_speed: 6, straight: false, out_mode: "bounce"}},
							interactivity: {
								events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
								modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 320, size: 25, opacity: 0.4}, repulse: {distance: 200}}
							}
						},
						navigation: {
						},
						viewPort: {
							enable:true,
							outof:"wait",
                            visible_area:"80%",
                            presize:true
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
                        scrolleffect: {
                            fade:"on",
                            grayscale:"on",
                            on_slidebg:"on",
                            on_parallax_layers:"on",
                            direction:"top",
                            multiplicator_layers:"1.4",
                            tilt:"10",
                            disable_on_mobile:"off",
                        },
						parallax: {
							type:"scroll",
							origo:"slidercenter",
							speed:400,
                          speedbg:0,
                          speedls:0,
							levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
						},viewPort: {
                            enable: true,
                            outof: 'wait',
                            visible_area: '80%',
                            presize: true
                        },
						shadow:0,
						spinner:"spinner3",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
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
                }; /* END OF revapi call */
    
                RsTypewriterAddOn(tpj, revapi39);

                RsParticlesAddOn(revapi39);
 /* END MAIN SLIDER */


 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */