<?php get_header();?>
<!-- Slider -->
<div id="start_wrapper" class="rev_slider_wrapper fullscreen-container" data-version="5.4.7.2">
<div id="start_slider" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.2">
<ul>
<?php
$slides = get_option("project_settings_slider");
if($slides != false && isset($slides["project_settings_slider_slides_input_slides"])){
    $slides = $slides["project_settings_slider_slides_input_slides"];
} else {
    $slides = false;
}
if($slides != false){
    ?>
    
    <?php foreach(json_decode($slides) as $slide): ?>
            <?php 
            $slide_bg = wp_get_attachment_metadata($slide->ImgID);
            $slide_bg_url = wp_get_attachment_url($slide->ImgID);
            $slide_type = "image";
            if(isset($slide_bg['mime_type']) && strpos($slide_bg['mime_type'], "video") !== false) {
                $slide_type = "video";
            } else {
                if(isset($slide_bg['sizes']['hd'])){
                    $slide_bg_url = wp_get_attachment_image_src($slide->ImgID, "hd")[0];
                } else {
                    $slide_bg_url = wp_get_attachment_image_src($slide->ImgID, "large")[0];
                }
            }
            ?>
           <li data-transition="fade">
            <?php

            if($slide_type == "video") {
                ?>
               <div 
                class="rs-background-video-layer" 
                data-videomp4="<?=$slide_bg_url?>" 
                data-videopreload="auto" 
                data-volume="mute" 
                data-forcerewind="on" 
                data-nextslideatend="true" 
                data-videoloop="loop" 
                data-autoplay="true"
    ></div>
                <?php
            } else {
                ?>
                <img src="<?=$slide_bg_url?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina>
        <?php
            }
            // Other layers
            ?>
              <div class="tp-caption tp-resizeme largewhitebg"  
                data-frames='[{"delay": 2500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, 
                {"delay": "wait", "speed": 300, "to": "opacity: 0"}]'
                data-x="center" 
                data-y="center" 
                data-hoffset="0" 
                data-voffset="0" 
                data-width="['auto']"
                data-height="['auto']"
                ><?=$slide->Header?></div>  

                <div class="tp-caption tp-resizeme largewhitebg"  
                data-frames='[{"delay": 2900, "speed": 100, "from": "opacity: 0", "to": "opacity: 1"}, 
                {"delay": "wait", "speed": 300, "to": "opacity: 0"}]'
                data-x="center" 
                data-y="center" 
                data-hoffset="-50" 
                data-voffset="100" 
                data-width="['auto']"
                data-height="['auto']"
                ><?=$slide->Text?></div> 

<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-146-layer-3" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-60','-65','-65','-65']" 
			data-width="full"
			data-height="120"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="on" 

            data-frames='[
                {"delay":2000,"speed":600,"frame":"0","from":"y:-250px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                {"delay":2000,"speed":600,"frame":"499","to":"width:250px;","ease":"Power3.easeInOut"},
                {"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 16;background-color:rgb(255,255,0);"> </div>
                		<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
			 id="slide-147-layer-3" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['60','65','65','65']" 
						data-width="full"
			data-height="120"
			data-whitespace="nowrap"
 
			data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2000,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 16;background-color:rgb(255,0,255);"> </div>
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
foreach($sections as $section): ?>
    <h3>Sekcja nr: <?=$section->menu_order?></h3>
    <?=$section->post_content ?>
<?php endforeach;
?>
<h1>stopka</h1>

<?php get_footer(); ?>