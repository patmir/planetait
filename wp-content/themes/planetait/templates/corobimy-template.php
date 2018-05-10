<?php
/*
Template Name: What we do
Template Post Type: section_main
*/
$co_robimy = get_posts(array(
    'posts_per_page' => 999999999,
    'order_by' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'what_we_do',
    'post_status' => 'publish'
));
$numRows = ceil(sizeof($co_robimy) / 3);
?>
    <div id="rev_slider_41_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="co-robimy-header" data-source="gallery" style="background:#ffffff; padding-bottom: 100px;">
    <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_41_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-58" data-transition="fade" data-slotamount="default" data-delay="10" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default" data-easeout="default" data-masterspeed="3000" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri() ?>/assets/images/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff' alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                </li>
                <li data-index="rs-59" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-delay="100" data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri() ?>/assets/images/transparent.png"  data-bgcolor='#ffffff' style='background:#ffffff' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzt_59" class="rev_row_zone rev_row_zone_top" style="z-index: 9;">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " 
                            id="slide-59-layer-7" 
                            data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                        data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                
                            data-type="row" 
                            data-columnbreak="1" 
                            data-responsive_offset="on" 
                            data-responsive="off"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]"
                            data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " 
                                id="slide-59-layer-8" 
                                data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                    
                                data-type="column" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columnwidth="100%"
                                data-verticalalign="middle"
                                data-margintop="[0,0,0,0]"
                                data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]"
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; width: 100%;">
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" 
                                    id="slide-59-layer-2" 
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                                data-width="none"
                                    data-height="none"
                                    data-whitespace="normal"
                        
                                    data-type="text" 
                                    data-responsive_offset="on" 

                                    data-frames='[{"delay":"+100","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[40,40,40,40]"
                                    data-paddingright="[20,20,20,20]"
                                    data-paddingbottom="[20,20,20,20]"
                                    data-paddingleft="[20,20,20,20]"

                                    style="z-index: 7; white-space: normal; font-size: 36px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?= strtoupper($section->post_title);?>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme" 
                                    id="slide-59-layer-5" 
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                                data-width="none"
                                    data-height="none"
                                    data-whitespace="normal"
                        
                                    data-type="text" 
                                    data-basealign="slide" 
                                    data-responsive_offset="on" 

                                    data-frames='[{"delay":"+1490","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[20,20,20,20]"
                                    data-paddingright="[20,20,20,20]"
                                    data-paddingbottom="[20,20,20,20]"
                                    data-paddingleft="[20,20,20,20]"

                                    style="z-index: 8; white-space: normal; font-size: 16px; line-height: 22px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?= $section->post_content;?>
                                </div>
                                                            
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                                    id="slide-59-layer-6" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
                                                data-width="100"
                                    data-height="2"
                                    data-whitespace="normal"
                        
                                    data-type="shape" 
                                    data-responsive_offset="on" 

                                    data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"rY:90deg;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]"
                                    data-marginright="['auto','auto','auto','auto']"
                                    data-marginbottom="[0,0,0,0]"
                                    data-marginleft="['auto','auto','auto','auto']"
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"

                                    style="z-index: 9; display: block;background-color:rgb(198,178,192);     text-align: center;    margin: 0 auto;">
                                </div>
                            </div>
                        </div>
                        <?php 
                        $currIndex = 0;
                        $layerNo = 29;
                        $zIndex = 10;
                        while ($currIndex < sizeof($co_robimy)) {
                                //row begging?
                            if ($currIndex % 3 == 0) : // początek row?>
                                        
                                <div class="tp-caption " 
                                    id="slide-59-layer-<?= $layerNo ?>" 
                                    data-x="['left','left','left','left']" data-hoffset="['110','110','110','110']" 
                                    data-y="['top','top','top','top']" data-voffset="['110','110','110','110']" 
                                    data-width="auto"
                                    data-height="auto"
                                    data-whitespace="nowrap"            
                                    data-type="row" 
                                    data-columnbreak="1" 
                                    data-responsive_offset="on" 
                                    data-responsive="off"
                                    data-frames='[{"delay":"+2000","speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[10,10,10,10]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: <?= $zIndex ?>; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">

                                <?php $layerNo++;
                                $zIndex++; ?> 
                                <?php endif;
                                // kolumny
                                $el = $co_robimy[$currIndex];
                                ?>
                                    <div class="tp-caption" 
                                        id="slide-59-layer-<?= $layerNo ?>" 
                                        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                        data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                        data-visibility=['on','on','on','off'] 
                                        data-width="auto"
                                        data-height="auto"
                                        data-whitespace="nowrap"
                                        data-minheight="1200px"
                                        data-type="column" 
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                        data-frames='[{"delay":"+1000","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-columnwidth="33.33%"
                                        data-verticalalign="top"
                                        data-margintop="[5,5,5,5]"
                                        data-marginright="[20,20,20,20]"
                                        data-marginbottom="[5,5,5,5]"
                                        data-marginleft="[20,20,20,20]"
                                        data-textAlign="['center','center','center','center']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: <?= $zIndex ?>; width: 100%;
                                            -webkit-box-shadow: 0 0 10px 1px rgba(0,0,0,0.75);
                                            -moz-box-shadow: 0 0 10px 1px rgba(0,0,0,0.75);
                                            box-shadow: 0 0 10px 1px rgba(0,0,0,0.75);">
                                        <?php $layerNo++;
                                        $zIndex++ ?>
                                        <div class="tp-caption tp-resizeme set-img" 
                                                id="slide-59-layer-<?= $layerNo ?>" 
                                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                                data-width="100%"
                                                data-height="220px"
                                                data-whitespace="normal"                                
                                                data-type="image" 
                                                data-responsive_offset="on" 
                                                data-frames='[{"delay":"<?= 500 * ($currIndex + 2) ?>","speed":2000,"frame":"0","from":"y:0px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                                data-margintop="[0,0,0,0]"
                                                data-marginright="[0,0,0,0]"
                                                data-marginbottom="[0,0,0,0]"
                                                data-marginleft="[0,0,0,0]"
                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                data-bg = "<?= get_the_post_thumbnail_url($el->ID, 'large') ?>"
                                                style="z-index: <?= $zIndex ?>; display: block; width: 100%, height: 220px;">
                                        </div>
                                        <?php $layerNo++;
                                        $zIndex++; ?>
                                        <div class="tp-caption   tp-resizeme" 
                                            id="slide-59-layer-<?= $layerNo ?>" 
                                            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                            data-whitespace="normal"                            
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="on" 
                                            data-frames='[{"delay":"+<?= 500 * ($currIndex + 2) ?>","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]"
                                            data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]"
                                            data-marginleft="[0,0,0,0]"
                                            data-textAlign="['center','center','center','center']"
                                            data-paddingtop="[20,20,20,20]"
                                            data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[15,15,15,15]"
                                            data-paddingleft="[20,20,20,20]"
                                            style="z-index: <?= $zIndex ?>; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?= $el->post_title ?>
                                        </div>
                                        <?php $layerNo++;
                                        $zIndex++; ?>
                                        <div class="tp-caption   tp-resizeme" 
                                            id="slide-59-layer-<?= $layerNo; ?>" 
                                            data-x="['left','left','left','left']" data-hoffset="['5','5','5','5']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['5','5','5','5']" 
                                            data-width="none"
                                            data-height="200px"
                                            data-minheight="200px"
                                            data-whitespace="normal"                            
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="on" 
                                            data-frames='[{"delay":"+<?= 500 * ($currIndex + 2) ?>","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]"
                                            data-marginright="[15,15,15,15]"
                                            data-marginbottom="[10,10,10,10]"
                                            data-marginleft="[15,15,15,15]"
                                            data-textAlign="['justify','justify','justify','justify']"
                                            style="z-index: <?= $zIndex ?>; white-space: normal; font-size: 16px; line-height: 20px; font-weight: 400; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?= $el->post_excerpt; ?>
                                        </div>
                                        <?php $layerNo++;
                                        $zIndex++ ?>
                                       <!-- <a class="tp-caption rev-btn center-margin" 
                                            id="slide-59-layer-<?= $layerNo ?>" 
                                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                            data-width="140px"
                                            data-height="none"
                                            data-whitespace="normal"                            
                                            data-type="button" 
                                            data-responsive_offset="on" 
                                            data-responsive="off"
                                            data-frames='[{"delay":"+<?= 500 * ($currIndex + 2) ?>","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(168,99,150);bw:0 0 0 0;"}]'
                                            data-margintop="[0,0,0,0]"
                                            data-marginright="['auto','auto','auto','auto']"
                                            data-marginbottom="[0,0,0,0]"
                                            data-marginleft="['auto','auto','auto','auto']"
                                            data-textAlign="['center','center','center','center']"
                                            data-paddingtop="[10,10,10,10]"
                                            data-paddingright="[15,15,15,15]"
                                            data-paddingbottom="[10,10,10,10]"
                                            data-paddingleft="[15,15,15,15]"
                                            href="/projekty" 
                                            style="z-index: <?= $zIndex ?>; min-width: 140px; max-width: 140px; white-space: normal; font-size: 14px; line-height: 18px; font-weight: 500; color: #a86396; letter-spacing: px; display: block;font-family:Ubuntu;background-color:rgb(255,255,255);border-color:rgb(168,99,150);border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">WIĘCEJ
                                        </a>-->
                                        <?php $layerNo++;
                                        $zIndex++ ?>
                                    </div>
                                <?php
                                if ($currIndex % 3 == 2) : // koniec row?>
                                    </div>        
                                <?php endif;
                                $currIndex++;
                            } ?>
                    </div>
                    <!--- END ROWS -->
                </li>
                
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER CO ROBIMY-->

<script type="text/javascript">
			            var revapi41,
			tpjc;    
    (function() {            
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoadc)
        else
    onLoadc();
    
	var templateUrl = "<?= get_template_directory_uri() ?>";
    function onLoadc() {  
        
        
        if (tpjc===undefined) {
            tpjc = jQuery;

            if("off" == "on") tpjc.noConflict();        
        }
				if(tpjc("#rev_slider_41_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_41_1");
				}else{
					revapi41 = tpjc("#rev_slider_41_1").show().revolution({
						sliderType:"standard",
                        jsFileLocation:templateUrl+"/js/lib/revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:100,
						navigation: {
							onHoverStop:"off",
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1320,1024,778,480],
						gridheight:[800,768,700,700],
						lazyType:"single",
						shadow:0,
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
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
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
                    });
 
  
   
    }; /* END OF revapi call */
     }; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
        var coRobimyStarted = false;
   
        jQuery(window).scroll(function() {
            if(scrollEnabled){
            var top_of_element = jQuery("#rev_slider_41_1").offset().top;
            var bottom_of_element = jQuery("#rev_slider_41_1").offset().top + jQuery("#rev_slider_41_1").outerHeight();
            var bottom_of_screen = jQuery(window).scrollTop() + window.innerHeight;
            var top_of_screen = jQuery(window).scrollTop();

            if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && !coRobimyStarted){
                // The element is visible, do something
                console.log("STARTING - CR");
                revapi41.revnext();
                coRobimyStarted = true;
            }
            }
    });
</script>