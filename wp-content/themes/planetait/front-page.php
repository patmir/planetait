<?php get_header(); ?>
<?php
// first slider data
$slides = get_option("project_settings_slider")["project_settings_slider_slides_input_slides"];
$slide = json_decode($slides)[0];
            $slide_bg = wp_get_attachment_metadata($slide->ImgID);
            $slide_bg_url = wp_get_attachment_url($slide->ImgID);
            $slide_type = "image";
            if (isset($slide_bg['mime_type']) && strpos($slide_bg['mime_type'], "video") !== false) {
                $slide_type = "video";
            } else {
                if (isset($slide_bg['sizes']['hd'])) {
                    $slide_bg_url = wp_get_attachment_image_src($slide->ImgID, "hd")[0];
                } else {
                    $slide_bg_url = wp_get_attachment_image_src($slide->ImgID, "large")[0];
                }
            }
?>
<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="header-w-goodies" data-source="gallery" style="background:#2d3032;padding:0px;">
<!-- START REVOLUTION SLIDER 5.4.7 fullscreen mode -->
	<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7">
<ul>	<!-- SLIDE  -->
    <li data-index="rs-57" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="3000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
        <img src="<?= get_template_directory_uri()?>/assets/custom/test-vid-bg.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- BACKGROUND VIDEO LAYER -->
		<div class="rs-background-video-layer" 
			data-forcerewind="on" 
			data-volume="mute" 
			data-videowidth="100%" 
			data-videoheight="100%" 
			data-videomp4="<?=$slide_bg_url?>" 
            data-videopreload="auto" 
			data-videoloop="loop" 
			data-forceCover="1" 
			data-aspectratio="16:9" 
			data-autoplay="true" 
			data-autoplayonlyfirsttime="false" 
></div>
		<!-- LAYER NR. 1 -->
		<div class="tp-caption tp-shape tp-shapewrapper " 
			 id="slide-57-layer-7" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
						data-width="full"
			data-height="full"
			data-whitespace="nowrap"
 
            data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="off" 
			data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5;font-family:Open Sans;background-color:rgba(45,48,50,0.25);"> </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   rs-parallaxlevel-4" 
			 id="slide-57-layer-1" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','1']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-180','-180','-120','-240']" 
						data-fontsize="['140','120','100','80']"
			data-lineheight="['155','140','110','100']"
			data-fontweight="['500','400','400','400']"
			data-color="['rgb(255,255,255)','rgba(255,255,255,1)','rgba(255,255,255,1)','rgba(255,255,255,1)']"
			data-width="['1001','none','400','320']"
			data-height="none"
			data-whitespace="['normal','nowrap','normal','normal']"
 
            data-type="text" 
			data-responsive_offset="off" 
			data-responsive="off"
            data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0px;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
            data-textAlign="['center','left','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; min-width: 1001px; max-width: 1001px; white-space: normal; font-size: 140px; line-height: 155px; font-weight: 500; color: #ffffff; letter-spacing: px;font-family:Ubuntu;"><?= $slide->Header ?> </div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption   rs-parallaxlevel-4" 
			 id="slide-57-layer-2" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-20','0','0','-100']" 
						data-fontsize="['40','25','20','17']"
			data-lineheight="['','30','25','25']"
			data-width="['none','none','480','none']"
			data-height="none"
			data-whitespace="['nowrap','nowrap','normal','normal']"
 
            data-type="text" 
			data-responsive_offset="off" 
			data-responsive="off"
            data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: nowrap; font-size: 40px; line-height: px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Ubuntu;"><?= $slide->Text ?></div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption   tp-svg-layer" 
			 id="slide-57-layer-4" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['79','40','40','40']" 
						data-width="50"
			data-height="50"
			data-whitespace="nowrap"
 
            data-type="svg" 
			data-actions='[{"event":"click","action":"scrollbelow","offset":"-90px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
            data-svg_src="<?php echo get_template_directory_uri(); ?>/assets/svg/hardware/ic_keyboard_arrow_down_24px.svg" 
            data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" 
			data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;" 
			data-basealign="slide" 
			data-responsive_offset="off" 
			data-responsive="off"
            data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[7,7,7,7]"
            data-paddingright="[5,5,5,5]"
            data-paddingbottom="[5,5,5,5]"
            data-paddingleft="[5,5,5,5]"

            style="z-index: 8; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; color: rgba(255,255,255,0.65);font-family:Open Sans;border-radius:40px 40px 40px 40px;cursor:pointer;"> </div>

		<!-- LAYER NR. 5 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-57-layer-9" 
			 data-x="['center','center','center','center']" data-hoffset="['0','-1','0','1']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','50']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
            data-type="text" 
			data-typewriter='{"lines":"OPTIMISATION,INTEGRATION,&nbsp;REVOLUTION&nbsp;","enabled":"on","speed":"30","delays":"1%7C100","looped":"on","cursorType":"two","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1000","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
			data-responsive_offset="on" 

            data-frames='[{"delay":2520,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Ubuntu;">&nbsp;&nbsp;ANALYSIS&nbsp;</div>

		<!-- LAYER NR. 6 -->
		<div class="tp-caption   rs-parallaxlevel-4" 
			 id="slide-57-layer-11" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['200','200','200','200']" 
						data-fontsize="['40','25','20','17']"
			data-lineheight="['50','30','25','25']"
			data-width="none"
			data-height="none"
			data-whitespace="['nowrap','nowrap','normal','normal']"
 
            data-type="text" 
			data-responsive_offset="off" 
			data-responsive="off"
            data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 10; white-space: nowrap; font-size: 40px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Ubuntu;">ROZWIJAJ SWÓJ BIZNES Z NAMI</div>
	</li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
</div><!-- END REVOLUTION SLIDER  MAIN SLIDER-->
<!-- SECTIONS -- >
<?php
    $sections = get_posts(array(
		'posts_per_page' => 999999999,
		'order_by' => 'menu_order',
		'order' => 'ASC',
		'post_type' => 'section_main',
		'post_status' => 'publish'
	));
	foreach($sections as $section){
			switch($section->post_name){
				case "co-robimy":
					include_once("templates/corobimy-template.php");
					break;
				case "osiagniecia":
					include_once("templates/osiagniecia-template.php");
					break;
				
			}

	}
?>
<?php get_footer(); ?>