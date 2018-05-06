<?php
/*
Template Name: References
Template Post Type: subpage
*/
get_header();
get_template_part("content", "head");

$refs = get_posts(array(
    'posts_per_page' => 999999999,
    'order_by' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'reference',
    'post_status' => 'publish'
));
$numRows = sizeof($refs);
?>
    <div id="rev_slider_projekty_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="co-robimy-header" data-source="gallery" style="background:#ffffff; padding-bottom: 100px;">
    <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
        <div id="rev_slider_projekty" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7">
            <ul>
                <li data-index="rs-59" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-delay="1000" data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
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
                            </div>
                        </div>
                        <?php 
                        $currIndex = 0;
                        $layerNo = 29;
                        $zIndex = 10;
                        while ($currIndex < sizeof($refs)) {
                                //row begging
                                ?>
                                        
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
                                    data-frames='[{"delay":"2000","speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[60,60,60,60]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: <?= $zIndex ?>; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">

                                <?php $layerNo++;
                                $zIndex++; 
                                // kolumny
                                $el = $refs[$currIndex];
                                ?>
                                    <div class="tp-caption" 
                                        id="slide-59-layer-<?= $layerNo ?>" 
                                        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                        data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                        data-visibility=['on','on','on','off'] 
                                        data-width="auto"
                                        data-height="auto"
                                        data-whitespace="nowrap"
                                        data-minheight="600px"
                                        data-type="column" 
                                        data-responsive_offset="on" 
                                        data-responsive="off"
                                        data-frames='[{"delay":"+100","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                        data-columnwidth="33.33%"
                                        data-verticalalign="top"
                                        data-margintop="[20,20,20,20]"
                                        data-marginright="[20,20,20,20]"
                                        data-marginbottom="[20,20,20,20]"
                                        data-marginleft="[20,20,20,20]"
                                        data-textAlign="['center','center','center','center']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        style="z-index: <?= $zIndex ?>; width: 100%;">
                                        <?php $layerNo++;
                                        $zIndex++ ?>
                                        <div class="tp-caption   tp-resizeme" 
                                            id="slide-59-layer-<?= $layerNo; ?>" 
                                            data-x="['left','left','left','left']" data-hoffset="['5','5','5','5']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['5','5','5','5']" 
                                            data-width="none"
                                            data-height="none"
                                            data-whitespace="normal"                            
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="on" 
                                            data-frames='[{"delay":"+<?= 500 * ($currIndex + 2) ?>","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]"
                                            data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]"
                                            data-marginleft="[60,60,30,20]"
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[20,20,20,20]"
                                            data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[20,20,20,20]"
                                            data-paddingleft="[20,20,20,20]"
                                            style="z-index: <?= $zIndex ?>; white-space: normal; font-size: 18px; line-height: 24px; font-weight: 400; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><i class="fa fa-icon-quote-left"></i> <?= $el->post_content; ?><i class="fa fa-icon-quote-right"></i>
                                        </div>
                                        <?php $layerNo++;
                                        $zIndex++ ?>
                                        <div class="tp-caption   tp-resizeme" 
                                            id="slide-59-layer-<?= $layerNo ?>" 
                                            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                            data-width="none"
                                            data-whitespace="normal"                            
                                            data-type="text" 
                                            data-basealign="slide" 
                                            data-responsive_offset="on" 
                                            data-frames='[{"delay":"+<?= 500 * ($currIndex + 2) ?>","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]"
                                            data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]"
                                            data-marginleft="[0,0,0,0]"
                                            data-textAlign="['right','right','right','right']"
                                            data-paddingtop="[20,20,20,20]"
                                            data-paddingright="[50,50,50,50]"
                                            data-paddingbottom="[20,20,20,20]"
                                            data-paddingleft="[50,50,50,50]"
                                            style="z-index: <?= $zIndex ?>; white-space: normal; font-size: 16px; line-height: 20px; font-weight: 600; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?= $el->post_title ?>
                                        </div>
                                        <?php $layerNo++;
                                        $zIndex++; ?>
                                    </div>
                                    </div>        
                                <?php 
                                $currIndex++;
                            } ?>
                    </div>
                    <!--- END ROWS -->
                </li>
                
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER CO ROBIMY-->

<script type="text/javascript">
			            var revapiprojekty,
                        tpP;
            
    (function() {            
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoadP)
        else
    onLoadP();
    
	var templateUrl = "<?= get_template_directory_uri() ?>";
    function onLoadP() {  
        
        
        if (tpP===undefined) {
            tpP = jQuery;

            if("off" == "on") tpP.noConflict();        
        }
				if(tpP("#rev_slider_projekty").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_projekty");
				}else{
					revapiprojekty = tpP("#rev_slider_projekty").show().revolution({
						sliderType:"standard",
                        jsFileLocation:templateUrl+"/js/lib/revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:1000,
						navigation: {
							onHoverStop:"off",
						},
						viewPort: {
							enable:true,
							outof:"wait",
							visible_area:"80%",
							presize:false
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1320,1024,778,480],
						gridheight:[800,768,700,700],
						lazyType:"single",
						shadow:0,
						spinner:"off",
						stopLoop:"off",
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
</script>
<?php get_footer();?>