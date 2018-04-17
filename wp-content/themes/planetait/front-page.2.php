<?php get_header(); ?>
<!-- Slider -->
<div id="start_wrapper" class="rev_slider_wrapper fullscreen-container" data-version="5.4.7.2" data-alias="clean-landing-page" data-source="gallery" style="background:transparent;padding:0px;">
<div id="start_slider" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.2">
<ul>
<?php
$slides = get_option("project_settings_slider");
if ($slides != false && isset($slides["project_settings_slider_slides_input_slides"])) {
    $slides = $slides["project_settings_slider_slides_input_slides"];
} else {
    $slides = false;
}
if ($slides != false) {
    ?>
    
    <?php foreach (json_decode($slides) as $slide) : ?>
            <?php 
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
          	<li data-index="rs-147" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- LAYERS -->
		<div id="rrzt_147" class="rev_row_zone rev_row_zone_top" style="z-index: 43;">

<!-- LAYER NR. 1 -->
             <div class="tp-caption" 
			 id="slide-147-layer-38" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','0']" 
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','0']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal" 
			data-type="row" 
			data-columnbreak="3" 
			data-basealign="slide" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[30,50,50,3]"
			data-paddingright="[100,50,50,3]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[100,50,50,3]"
			style="z-index: 43; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
		<!-- LAYER NR. 2 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-39" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['top','top','top','top']" data-voffset="['0','60','60','60']" 
						data-fontsize="['20','20','20','20']"
			data-lineheight="['22','22','22','22']"
			data-fontweight="['400','400','400','400']"
			data-letterspacing="['0','0','0','0']"
			data-width="50%"
			data-maxwidth="50%"
			data-height="none"
			data-whitespace="normal" 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-columnwidth="50%"
            data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','left']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 44; max-width:50%;">
<!-- LAYER NR. 3 -->
<div class="tp-caption   tp-resizeme tp-svg-layer" 
			 id="slide-147-layer-30" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="60"
			data-height="50"
			data-whitespace="normal"
 
			data-type="svg" 
			data-svg_src="<?=get_template_directory_uri()?>/assets/svg/action/ic_cached_24px.svg" 
			data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" 
			data-responsive_offset="on" 

			data-frames='[{"delay":"+490","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[5,5,5,5]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[5,5,5,5]"

			style="z-index: 45; min-width: 60px; max-width: 60px; max-width: 50px; max-width: 50px; color: #000000; display: inline-block;"> </div>
		<!-- LAYER NR. 4 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-147-layer-43" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="text" 
			data-typewriter='{"lines":"ANALIZA,OPTYMALIZACJA,INTEGRACJA","enabled":"on","speed":"30","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1000","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
			data-responsive_offset="on" 

			data-frames='[{"delay":"+590","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[10,10,10,10]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[10,10,10,10]"

			style="z-index: 46; white-space: normal; font-size: 16px; line-height: 50px; font-weight: 700; color: #000; letter-spacing: 0px; display: inline-block;font-family:Poppins;text-transform:uppercase;">REWOLUCJA| </div>
				</div>

		<!-- LAYER NR. 5 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-40" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['bottom','top','top','top']" data-voffset="['100','100','100','100']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['right','right','right','right']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 47; width: 100%;">
		<!-- LAYER NR. 6 -->
		<a class="tp-caption rev-btn  tp-resizeme  tp-pointer" 
 href="/kontakt#oferta" target="_self"			 id="slide-147-layer-41" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="button" 
			data-actions=''
			data-responsive_offset="on" 

			data-frames='[{"delay":"+1240","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);bc:rgb(0,0,0);"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[120,120,120,120]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[30,30,30,30]"

			style="z-index: 48; white-space: normal; font-size: 16px; line-height: 46px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: px; display: inline-block;font-family:Poppins;background-color:rgb(0,0,0);border-color:rgba(0,0,0,1);border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">ZAPYTAJ O OFERTĘ</a>
				</div>
			</div>
		</div>
		<div id="rrzb_147" class="rev_row_zone rev_row_zone_bottom" style="z-index: 34;">

		<!-- LAYER NR. 7 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-33" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-50','834','834','834']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="row" 
			data-columnbreak="3" 
			data-basealign="slide" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[100,50,50,30]"
			data-paddingbottom="[0,30,30,30]"
			data-paddingleft="[100,50,50,30]"

			style="z-index: 27; white-space: normal; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
		<!-- LAYER NR. 8 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-34" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="33.33%"
 data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[50,50,50,50]"
			data-paddingbottom="[0,0,0,10]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 28; width: 100%;">
		<!-- LAYER NR. 9 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-147-layer-27" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['bottom','top','top','top']" data-voffset="['0','0','0','0']" 
						data-fontsize="['40','40','25','25']"
			data-lineheight="['40','40','25','25']"
			data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":"+490","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[5,5,5,5]"
			data-paddingright="[5,5,5,5]"
			data-paddingbottom="[5,5,5,5]"
			data-paddingleft="[5,5,5,5]"

			style="z-index: 29; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 700; color: #000000; letter-spacing: 0px; display: inline-block;font-family:Poppins;">LOREM &<br/>
                    IPSUM </div>
				</div>

		<!-- LAYER NR. 10 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-35" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
						data-fontsize="['20','20','20','20']"
			data-lineheight="['22','22','22','22']"
			data-fontweight="['400','400','400','400']"
			data-letterspacing="['0','0','0','0']"
			data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="33.33%"
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
            data-visibility="['on', 'on', 'on', 'off']"

			style="z-index: 30; width: 100%;">
		<!-- LAYER NR. 11 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-147-layer-31" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":"+990","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['center','center','center','left']"
			data-paddingtop="[5,5,5,5]"
			data-paddingright="[5,5,5,5]"
			data-paddingbottom="[5,5,5,5]"
			data-paddingleft="[5,5,5,5]"
            data-visibility="['on', 'on', 'on', 'off']"
			style="z-index: 31; white-space: normal; font-size: 16px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px; display: inline-block;font-family:Poppins;">Maecenas et faucibus ligula. Vivamus convallis neque eu magna laoreet, sed blandit dui consectetur. Ut at aliquet diam. Nulla eu porttitor nisl.<br/> Aenean a convallis nisl, a pharetra dolor. Curabitur congue purus nec dolor. </div>
				</div>

		<!-- LAYER NR. 12 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-36" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="33.33%"
 data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['right','right','right','left']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 32; width: 100%;">
		<!-- LAYER NR. 13 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-147-layer-32" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-fontsize="['20','20','15','15']"
			data-lineheight="['25','25','20','20']"
			data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":"+1240","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['left','left','left','left']"
			data-paddingtop="[5,5,5,5]"
			data-paddingright="[5,5,5,5]"
			data-paddingbottom="[5,5,5,5]"
			data-paddingleft="[5,5,5,5]"

			style="z-index: 33; white-space: normal; font-size: 20px; line-height: 25px; font-weight: 700; color: #000000; letter-spacing: 0px; display: inline-block;font-family:Poppins;">XX<br/>PARTNERÓW </div>
				</div>
			</div>

		<!-- LAYER NR. 14 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-45" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','607','607','607']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="row" 
			data-columnbreak="3" 
			data-basealign="slide" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[40,0,0,0]"
			data-paddingright="[100,50,50,30]"
			data-paddingbottom="[20,50,50,30]"
			data-paddingleft="[100,50,50,30]"

			style="z-index: 34; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
		<!-- LAYER NR. 15 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-46" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="middle"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,10]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 35; width: 100%;">
		<!-- LAYER NR. 16 -->
		<a class="tp-caption   tp-resizeme tp-pointer tp-hoverfix" 
             id="slide-147-layer-48" 
             href="/kontakt"
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-lineheight="['14','14','14','10']"
			data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":"+490","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[30,30,30,10]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[5,5,5,5]"
			data-paddingright="[5,5,5,5]"
			data-paddingbottom="[5,5,5,5]"
			data-paddingleft="[5,5,5,5]"

			style="z-index: 36; white-space: normal; font-size: 12px; line-height: 14px; font-weight: 500; color: #000000; letter-spacing: 0px; display: inline-block;font-family:Poppins;">SKONTAKTUJ SIĘ Z NAMI</a>

	</div>

		<!-- LAYER NR. 21 -->
		<div class="tp-caption  " 
			 id="slide-147-layer-47" 
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="column" 
			data-responsive_offset="on" 
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['right','right','right','left']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 41; width: 100%;">
		<!-- LAYER NR. 22 -->
        <a class="tp-caption   tp-resizeme tp-pointer tp-hoverfix" 
        href="mailto:miroslaw.patryk@gmail.com"
			 id="slide-147-layer-53" 
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="none"
			data-height="none"
			data-whitespace="normal"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":"+1240","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[5,5,5,5]"
			data-paddingright="[5,5,5,5]"
			data-paddingbottom="[5,5,5,5]"
			data-paddingleft="[5,5,5,5]"

			style="z-index: 42; white-space: normal; font-size: 12px; line-height: 14px; font-weight: 500; color: #000000; letter-spacing: 0px; display: inline-block;font-family:Poppins;">2018, PATMIR.COM </a>
				</div>
        </div></div>
        <!-- LAYER NR. 23 -->
        <?php

        if ($slide_type == "video") {
            ?>
   <div class="tp-caption tp-resizeme tp-videolayer fullscreenvideo" 
   data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, 
       {"delay": "wait", "speed": 300, "to": "opacity: 0"}]' 
    data-hoffset="0" 
    data-voffset="0" 
    data-basealign="slide"
    data-videomp4="<?= $slide_bg_url ?>" 
    data-videopreload="auto" 
    data-volume="mute" 
    data-forcerewind="on" 
    data-nextslideatend="false" 
    data-autoplay="true"
    data-forcecover="true"
data-videocontrols="none" 
data-videoloop="loop" 
data-allowfullscreenvideo="false" 
    ></div>
    <?php

} else {
    ?>
    <img src="<?= $slide_bg_url ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina>
<?php

}
// Other layers
?>
		<!-- LAYER NR. 33 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-2" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" 
						data-width="full"
			data-height="['120','160','140','120']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:1;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 15;background-color:rgba(255,255,255,0.4);"> </div>

		<!-- LAYER NR. 34 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-3" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
						data-width="full"
			data-height="['260','320','400','400']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 16;background-color:rgba(255,255,255,0.4);"> </div>

		<!-- LAYER NR. 35 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-147-layer-5" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-140','-200','-200','-240']" 
			data-fontsize="['140','120','100','80']"
			data-lineheight="['180','140','120','100']"
			data-letterspacing="['5','0','0','0']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

		data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"y:top;rX:-20deg;rY:-60deg;rZ:20deg;opacity:0","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[35,35,35,35]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[10,10,10,10]"

            style="z-index: 17; white-space: nowrap; font-size: 140px; line-height: 140px; font-weight: 700; color: #ffffff; letter-spacing: -25px;font-family:Poppins;"><?= $slide->Header ?> </div>
            
            <div class="tp-caption   tp-resizeme" 
			 id="slide-147-layer-5-1" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['55','0','-40','-120']" 
			data-fontsize="['100','75','60','40']"
			data-lineheight="['160','110','100','90']"
			data-letterspacing="['5','0','0','0]"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
			data-type="text" 
			data-responsive_offset="on" 

		data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"y:bottom;rX:20deg;rY:60deg;rZ:0deg;opacity:0","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'data-textAlign="['center','center','center','center']"
		data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[35,35,35,35]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[10,10,10,10]"

			style="z-index: 17; white-space: nowrap; font-size: 140px; line-height: 140px; font-weight: 700; color: #ffffff; letter-spacing: -25px;font-family:Poppins;"><?= $slide->Text ?> </div>
		<!-- LAYER NR. 36 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-18" 
			 data-x="['center','center','center','center']" data-hoffset="['-600','-400','-300','-200']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-400','-300','-300','-300']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-1","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-1","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 18;"> </div>

		<!-- LAYER NR. 37 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-17" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-400','-300','-300','-300']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-7","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-7","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 19;"> </div>

		<!-- LAYER NR. 38 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-19" 
			 data-x="['center','center','center','center']" data-hoffset="['600','400','300','200']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-400','-300','-300','-300']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-8","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-8","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 20;"> </div>

		<!-- LAYER NR. 39 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-20" 
			 data-x="['center','center','center','center']" data-hoffset="['-600','-400','-300','-200']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-9","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-9","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 21;"> </div>

		<!-- LAYER NR. 40 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-12" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-10","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 22;"> </div>

		<!-- LAYER NR. 41 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-21" 
			 data-x="['center','center','center','center']" data-hoffset="['600','400','300','200']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-11","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 23;"> </div>

		<!-- LAYER NR. 42 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-22" 
			 data-x="['center','center','center','center']" data-hoffset="['-600','-400','-300','-200']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['400','300','300','300']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-14","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-14","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 24;"> </div>

		<!-- LAYER NR. 43 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-23" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['400','300','300','300']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-13","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-13","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 25;"> </div>

		<!-- LAYER NR. 44 -->
		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-24" 
			 data-x="['center','center','center','center']" data-hoffset="['600','400','300','200']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['400','300','300','300']" 
						data-width="['600','400','300','200']"
			data-height="['400','300','300','300']"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-147-layer-15","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-147-layer-15","delay":""}]'
			data-responsive_offset="on" 

			data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 26;"> </div>
                   </li>
        <?php endforeach; ?>
    </div>
    <?php

}
?>
</ul>
</div>
</div>
<!-- /Slider -->

<small>Sekcje: </small>
<?php
$sections = get_posts(array(
    'posts_per_page' => 99999,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'section_main',
    'post_status' => 'publish'

));
foreach ($sections as $section) : ?>
    <h3>Sekcja nr: <?= $section->menu_order ?></h3>
    <?= $section->post_content ?>
<?php endforeach;
?>
<h1>stopka</h1>

<?php get_footer(); ?>