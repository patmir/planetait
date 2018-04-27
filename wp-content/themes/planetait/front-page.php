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
			<ul>
				<li data-index="rs-57" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="3000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<img src="<?= get_template_directory_uri()?>/assets/custom/test-vid-bg.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina>
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
						data-autoplayonlyfirsttime="false">
					</div>
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
						data-frames='[{"delay":"+10","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-textAlign="['inherit','inherit','inherit','inherit']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						style="z-index: 5;font-family:Open Sans;background-color:rgba(45,48,50,0.25);">
					</div>
					<div class="tp-caption   rs-parallaxlevel-4" 
						id="slide-57-layer-1" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','1']" 
						data-y="['middle','top','top','top']" data-voffset="['-180','0','0','0']" 
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
						data-frames='[{"delay":"+500","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0px;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
						data-textAlign="['center','left','center','center']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						style="z-index: 6; min-width: 1001px; max-width: 1001px; white-space: normal; font-size: 140px; line-height: 155px; font-weight: 500; color: #ffffff; letter-spacing: px;font-family:Ubuntu;"><?= $slide->Header ?>
					</div>
					<div class="tp-caption   rs-parallaxlevel-4" 
						id="slide-57-layer-2" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','top','top','top']" data-voffset="['-20','160','140','100']" 
						data-fontsize="['40','32','20','17']"
						data-lineheight="['60','40','25','25']"
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
						style="z-index: 7; white-space: nowrap; font-size: 40px; line-height: px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Ubuntu;"><?= $slide->Text ?>
					</div>
					<?php //prepare typer 
					$typer = $slide->Typer;
					$firstType = substr($typer, 0, strpos($typer, "|"));
					
					$carLength = strlen($firstType);
					$restOfType = explode("|",substr($typer, strlen($firstType)+1));
					foreach($restOfType as $rot){
							if(strlen($rot) > $carLength){
								$carLength = strlen($rot);
							}
					}
					if($carLength > strlen($firstType)){
						$spaces = floor(($carLength-strlen($firstType))/2);
						for($i = 0; $i < $spaces; $i++){
							$firstType = "&nbsp;".$firstType."&nbsp;";
						}
					}
					$restOfTypeString = implode(",", $restOfType);
					?>
					<div class="tp-caption   tp-resizeme" 
						id="slide-57-layer-9" 
						data-x="['center','center','center','center']" data-hoffset="['0','-1','0','1']" 
						data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','100','80','50']" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"		
						data-type="text" 		   
						data-typewriter='{"lines":"<?=$restOfTypeString?>","enabled":"on","speed":"30","delays":"1%7C100","looped":"on","cursorType":"two","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1000","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
						data-responsive_offset="on"
						data-frames='[{"delay":2520,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						style="z-index: 9; white-space: nowrap; font-size:32px; line-height: 60px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Ubuntu;"><?=$firstType?>
					</div>
					<!-- LAYER NR. 6 -->
					<div class="tp-caption  tp-resizeme" 
						id="slide-57-layer-11" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['bottom','bottom','bottom','bottom']" data-voffset="['200','240','200','160']" 
						data-fontsize="['40','25','20','17']"
						data-lineheight="['50','30','25','25']"
						data-width="['none','none','none','100%']"
						data-height="none"
						data-whitespace="['nowrap','nowrap','nowrap','normal']"		
						data-type="text" 
						data-responsive_offset="off" 
						data-responsive="off"
						data-whiteboard='{"hand_function":"write","jitter_distance":"60","jitter_offset":"20","jitter_offset_horizontal":"0","hand_angle":"5","hand_angle_repeat":"5","goto_next_layer":"on"}'
						data-frames='[{"from":"opacity:0;","speed":150,"to":"o:1;","delay":3500,"split":"chars","splitdelay":0.05,"ease":"Power4.easeOut"},{"delay":"wait","speed":3000,"to":"opacity:0","ease":"Power3.easeIn"}]'data-textAlign="['center','center','center','center']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						style="z-index: 10; white-space: nowrap; font-size: 40px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Gloria Hallelujah;"><?= $slide->CTA ?>
					</div>
					<div class="tp-caption   tp-resizeme" 
						id="slide-2919-layer-1" 
						data-x="['center','center','center','center']" data-hoffset="['30','0','0','0']" 
						data-y="['bottom','bottom','bottom','bottom']" data-voffset="['210','220','180','190']" 
						data-visibility="['on', 'on', 'off', 'off']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-type="image" 
						data-whiteboard='{"hand_function":"draw","jitter_repeat":"0","jitter_distance":"60","jitter_offset":"0","hand_angle":"0","hand_angle_repeat":"0","goto_next_layer":"on"}'
						data-responsive_offset="on" 
						data-frames='[{"from":"x:[100%];","mask":"x:[-100%];y:0;rZ:-2deg;s:inherit;e:inherit;","speed":600,"to":"o:1;rZ:-2deg;","delay":6000,"ease":"Power4.easeOut"},{"delay":"wait","speed":3000,"to":"opacity:0;","ease":"Power3.easeIn"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						style="z-index: 11;border-width:0px;"><img src="<?= get_template_directory_uri()?>/assets/images/underline.png" alt="" data-ww="['600px','220px','220px','1']" data-hh="['20px','20px','10px','0']" width="180" height="8" data-no-retina>
					</div>
					
					<div class="tp-caption   tp-svg-layer" 
						id="slide-2919-layer-13" 
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
						style="z-index: 12; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; color: rgba(255,255,255,0.65);font-family:Open Sans;border-radius:40px 40px 40px 40px;cursor:pointer;">
					</div>
				</li>
			</ul>
		</div>
	</div>
<!-- END REVOLUTION SLIDER MAIN SLIDER -->
<!-- SECTIONS -->
<?php
    $sections = get_posts(array(
		'posts_per_page' => 999999999,
		'order_by' => 'menu_order',
		'order' => 'ASC',
		'post_type' => 'section_main',
		'post_status' => 'publish'
	));
	global $post;
	foreach($sections as $section){
		$template = get_page_template_slug( $section->ID );
			include_once($template);		
		}
?>
<?php get_footer(); ?>