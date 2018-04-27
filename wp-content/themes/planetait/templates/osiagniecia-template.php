<?php
/*
Template Name: Achievements
Template Post Type: section_main
*/
// prep sections
$sectionData = explode("*",$section->post_content);



?>

<div id="rev_slider_45_1_wrapper" class="rev_slider_wrapper" data-alias="blendmodeheader36" data-source="gallery" style="background:#fff;padding:0px;">
	<div id="rev_slider_45_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.4.7">
		<ul>
		<li data-index="rs-62" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri()?>/assets/images/transparent.png" data-bgcolor='#fff' style='background:#fff' alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                </li>
			<!-- SLIDE  -->
			<li data-index="rs-63" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="100"  data-delay="100"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<img src="<?= get_the_post_thumbnail_url($section->ID, 'full') ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->
				<div id="rrzt_63" class="rev_row_zone rev_row_zone_top" style="z-index: 11;">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption  " 
						id="slide-63-layer-20" 
						data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
						data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="auto"
						data-height="auto"
						data-whitespace="nowrap" 
						data-type="row" 
						data-columnbreak="3" 
						data-responsive_offset="on" 
						data-responsive="off"
						data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-margintop="[0,0,0,0]"
						data-marginright="[0,0,0,0]"
						data-marginbottom="[0,0,0,0]"
						data-marginleft="[0,0,0,0]"
						data-textAlign="['inherit','inherit','inherit','inherit']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						style="z-index: 11; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
						<!-- Columns -->
						<?php for($i =0; $i < sizeof($sectionData); $i++):?>
						<?php // prep single part
							$parts = explode("|", $sectionData[$i]);
							$number = (int) filter_var($parts[0], FILTER_SANITIZE_NUMBER_INT);
							$additional = (strlen($number) < strlen($parts[0]))? substr($parts[0], strlen($number)) : "";
							$title = $parts[1];
						?>
						<div class="tp-caption  " 
							id="slide-63-layer-21" 
							data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
							data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
							data-width="none"
							data-height="none"
							data-whitespace="nowrap" 
							data-type="column" 
							data-responsive_offset="on" 
							data-responsive="off"
                            data-frames='[{"delay":"+100","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-columnwidth="<?= 100/sizeof($sectionData)?>%"
							data-verticalalign="top"
							data-margintop="[0,0,0,0]"
							data-marginright="[0,0,0,0]"
							data-marginbottom="[0,0,0,0]"
							data-marginleft="[0,0,0,0]"
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 12; width: 100%;">
							<!-- LAYER NR. 3 -->
							<div class="tp-caption   tp-resizeme" 
								id="slide-63-layer-23" 
								data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"			
								data-type="text" 
								data-responsive_offset="on" 
                                data-frames='[{"delay":"+500","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]"
								data-marginright="[0,0,0,0]"
								data-marginbottom="[0,0,0,0]"
								data-marginleft="[0,0,0,0]"
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[40,40,40,40]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 13; white-space: nowrap; font-size: 64px; line-height: 70px; font-weight: 500; color: #ffffff; letter-spacing: 0px; display: block;font-family:Ubuntu;"><span data-no="<?= $number ?>" class="<?= ($number < 2)?"":"counter"?>"><?= ($number < 2)?"1":"0"?></span>
								<?= (strlen($additional) > 0)? "<span>".$additional."</span>" : ""?>
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption   tp-resizeme" 
								id="slide-63-layer-24" 
								data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"			
								data-type="text" 
								data-responsive_offset="on" 
                                data-frames='[{"delay":"+500","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]"
								data-marginright="[0,0,0,0]"
								data-marginbottom="[0,0,0,0]"
								data-marginleft="[0,0,0,0]"
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								data-fontsize="['24','24','20','17']"
								data-lineheight="['30','30','30','25']"
								style="z-index: 14; white-space: nowrap; font-size: 24px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?= strtoupper($title)?>
							</div>
                        </div>	
					<?php endfor; ?>
					</div>
				</div>

				<!-- LAYER NR. 6 -->
				<div class="tp-caption tp-shape tp-shapewrapper " 
					id="slide-63-layer-31" 
					data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
					data-width="full"
					data-height="full"
					data-whitespace="nowrap" 
					data-type="shape" 
					data-actions=''
					data-basealign="slide" 
					data-responsive_offset="off" 
					data-responsive="off"
					data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"
					data-blendmode="overlay"
					style="z-index: 5;background:linear-gradient(90deg, rgba(193,20,55,1) 0%, rgba(146,28,121,1) 100%);">
				</div>
			</li>
		</ul>
	</div>
</div><!-- END REVOLUTION SLIDER -->
<script type="text/javascript">
			            var revapi45,
			tpjo;    
(function() {            
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoado)
        else
    onLoado();
    
	var templateUrl = "<?= get_template_directory_uri() ?>";
    function onLoado() {                
        if (tpjo===undefined) {
            tpjo = jQuery;

            if("off" == "on") tpj.noConflict();        
        }
				if(tpjo("#rev_slider_45_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_45_1");
				}else{
					revapi45 = tpjo("#rev_slider_45_1").show().revolution({
						sliderType:"standard",
                        jsFileLocation:templateUrl+"/js/lib/revolution/js/",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:100,
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[180,180,180,180],
						lazyType:"single",
						
						navigation: {
							onHoverStop:"off",
						},
						shadow:1,
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:1000,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
						
					});
					tpjo(revapi45).one('revolution.slide.onloaded', function() {
						jQuery(window).scroll(function(){osiagnieciaScroll()});

					});
    }; /* END OF revapi call */
     }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
		var OsiagnieciaStarted = false;
		var caction = false;
		var osiagnieciaScroll = function() {
			var top_of_element = jQuery("#rev_slider_45_1").offset().top;
			var bottom_of_element = jQuery("#rev_slider_45_1").offset().top + jQuery("#rev_slider_45_1").outerHeight();
			var bottom_of_screen = jQuery(window).scrollTop() + window.innerHeight;
			var top_of_screen = jQuery(window).scrollTop();

				if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && !OsiagnieciaStarted){
					// The element is visible, do something
					console.log("STARTING - O"); 				
					revapi45.revnext();
					OsiagnieciaStarted = true;
					tpjo(revapi45).off("revolution.slide.layeraction").on('revolution.slide.onchange', function(e,d) {
						
						if(jQuery(d.currentslide).data('index') == 'rs-63'){
							caction = true;
							jQuery(".counter").each(function(){
								jQuery(this).html(jQuery(this).data("no"));
							});
							console.log("STARTING - COUNTERS");
							jQuery("#rev_slider_45_1 .counter").counterUp({delay: 15, time: 1500});
						}

					});
				}
		};
		</script>
