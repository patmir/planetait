  var revapi39,
            tpj;    
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
						fullScreenOffsetContainer: "#nav",
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
                        viewPort: {
                            enable: true,
                            outof: 'wait',
                            visible_area: '80%',
                            presize: true
                        },
						navigation: {
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[1024,768,720,720],
						lazyLoad: "off",
						lazyType:"none",
						shadow:0,
						spinner:"spinner3",
						autoHeight:"on",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							disableFocusListener:false,
						},
						
						whiteboard:{
							movehand: {
								src:templateUrl+"/js/lib/revolution-addons/whiteboard/assets/images/hand_point_right.png",
								width:400,
								height:1000,
								handtype:"right",
								transform:{
									transformX:186,
									transformY:66
								},
								jittering:{
									distance:"80",
									distance_horizontal:"100",
									repeat:"5",
									offset:"10",
									offset_horizontal:"0"
								},
								rotation:{
									angle:"10",
									repeat:"3"
								}
							},
							writehand: {
								src:templateUrl+"/js/lib/revolution-addons/whiteboard/assets/images/write_right_angle.png",
								width:572,
								height:691,
								handtype:"right",
								transform:{
									transformX:49,
									transformY:50
								},
								jittering:{
									distance:"80",
									distance_horizontal:"100",
									repeat:"5",
									offset:"10",
									offset_horizontal:"0"
								},
								rotation:{
									angle:"10",
									repeat:"5"
								}
							}
						},
					});
                }; /* END OF revapi call */
    
                RsTypewriterAddOn(tpj, revapi39);

				RsParticlesAddOn(revapi39);
				
				tpj("#welcome").rsWhiteBoard();
 /* END MAIN SLIDER */


 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */