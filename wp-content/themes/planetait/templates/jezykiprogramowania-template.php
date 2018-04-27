<?php
/*
Template Name: Programming Languages
Template Post Type: section_main
*/
$jezyk_post = get_posts(array(
    'numberposts' => 1,
    'order_by' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'section_main',
    'post_status' => 'publish',
    'name' => 'jezyki-programowania'
))[0];

$jezyki = get_attached_media("image", $jezyk_post->id);

$numRows = ceil(sizeof($jezyki) / 6);

?>
<div id="rev_slider_jp_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="jezyki" data-source="gallery"
        style="background:#ffffff;padding:0px;">
        <div id="rev_slider_jp" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.4.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-65" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri()?>/assets/images/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff' alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-64" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= get_template_directory_uri()?>/assets/images/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff' alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzt_64" class="rev_row_zone rev_row_zone_top" style="z-index: 36;">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " id="slide-64-layer-7" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="row" data-columnbreak="3" data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-64-layer-8" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columnwidth="100%" data-verticalalign="middle" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; width: 100%;">
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+990","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[100,100,100,100]"
                                    data-paddingright="[20,20,20,20]"
                                    data-paddingbottom="[20,20,20,20]"
                                    data-paddingleft="[20,20,20,20]"
                                    style="z-index: 7; white-space: normal; font-size: 36px; line-height: 22px; font-weight: 400; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;"><?=mb_strtoupper($section->post_title)?> </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-64-layer-6" data-x="['center','center','center','center']"
                                    data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                    data-width="100" data-height="2" data-whitespace="normal" data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"rY:90deg;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]"
                                    data-marginright="['auto','auto','auto','auto']"
                                    data-marginbottom="[50,50,50,50]"
                                    data-marginleft="['auto','auto','auto','auto']"
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 8; display: block;background-color:rgb(198,178,192);     text-align: center;    margin: 0 auto;">
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="tp-caption  " id="slide-64-layer-28" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['66','66','66','66']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="row" data-columnbreak="2" data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":3000,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);-webkit-box-shadow:0px 7px 30px 0px rgba(0,0,0,0.75);-moz-box-shadow:0px 7px 30px 0px rgba(0,0,0,0.75);box-shadow:0px 7px 30px 0px rgba(0,0,0,0.75);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 23; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;-webkit-box-shadow:0px 0px 0 0px rgba(0,0,0,0.75);-moz-box-shadow:0px 0 0 0px rgba(0,0,0,0.75);box-shadow:0px 0 0 0px rgba(0,0,0,0.75);">
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption  " id="slide-64-layer-29" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-columnwidth="16.66666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 24; width: 100%;">
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-30" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                                                data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-31","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-31","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 25; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/c++.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> 
                                    </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-31" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 26; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">C++
                                </div>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption  " id="slide-64-layer-34" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 27; width: 100%;">
                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-38" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-41","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-41","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 28; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/csharp.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-41" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":2000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 29; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">C# </div>
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption  " id="slide-64-layer-35" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 30; width: 100%;">
                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-39" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-42","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-42","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 31; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/java.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 14 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-42" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 32; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">Java </div>
                            </div>

                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption  " id="slide-64-layer-36" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 33; width: 100%;">
                                <!-- LAYER NR. 16 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-40" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-43","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-43","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 34; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/asm.jpg" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 17 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-43" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 35; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">ASM </div>
                            </div>
                         <!-- LAYER NR. 19 -->
                            <div class="tp-caption  " id="slide-64-layer-46" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 10; width: 100%;">
                                <!-- LAYER NR. 20 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-47" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-48","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-48","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 11; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/linux.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 21 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-48" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 12; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">Linux </div>
                            </div>

                            <!-- LAYER NR. 22 -->
                            <div class="tp-caption  " id="slide-64-layer-49" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 13; width: 100%;">
                                <!-- LAYER NR. 23 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-50" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-51","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-51","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 14; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/windows.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 24 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-51" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":2000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 15; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">Windows </div>
                            </div>
                        </div>

                        <!-- row 2 -->
                        <div class="tp-caption  " id="slide-64-layer-45" data-x="['left','left','left','left']" data-hoffset="['115','115','115','115']"
                            data-y="['top','top','top','top']" data-voffset="['115','115','115','115']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="row" data-columnbreak="2" data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":3000,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);-webkit-box-shadow:0px 7px 30px 0px rgba(0,0,0,0.75);-moz-box-shadow:0px 7px 30px 0px rgba(0,0,0,0.75);box-shadow:0px 7px 30px 0px rgba(0,0,0,0.75);"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;-webkit-box-shadow:0px 0px 0 0px rgba(0,0,0,0.75);-moz-box-shadow:0px 0 0 0px rgba(0,0,0,0.75);box-shadow:0px 0 0 0px rgba(0,0,0,0.75);">
                        
                            <!-- LAYER NR. 25 -->
                            <div class="tp-caption  " id="slide-64-layer-52" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 16; width: 100%;">
                                <!-- LAYER NR. 26 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-53" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-54","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-54","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 17; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/arm.png" alt="" data-ww="['200px','200px','200px','200px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 27 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-54" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 18; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">ARM </div>
                            </div>

                            <!-- LAYER NR. 28 -->
                            <div class="tp-caption  " id="slide-64-layer-55" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 19; width: 100%;">
                                <!-- LAYER NR. 29 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-56" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-57","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-57","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 20; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/raspberry.png" alt="" data-ww="['100px','100px','100px','100px']"
                                        data-hh="['100px','100px','100px','100px']" data-no-retina> </div>

                                <!-- LAYER NR. 30 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-57" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 21; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">Raspberry Pi </div>
                            </div>

                              <!-- LAYER NR. 32 -->
                            <div class="tp-caption  " id="slide-64-layer-60" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 37; width: 100%;">
                                <!-- LAYER NR. 33 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-61" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-62","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-62","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 38; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/voip.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 34 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-62" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 39; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">VoIP </div>
                            </div>

                            <!-- LAYER NR. 35 -->
                            <div class="tp-caption  " id="slide-64-layer-63" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 40; width: 100%;">
                                <!-- LAYER NR. 36 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-64" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-65","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-65","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 41; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/OpenCV.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 37 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-65" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":2000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 42; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">OpenCV </div>
                            </div>

                            <!-- LAYER NR. 38 -->
                            <div class="tp-caption  " id="slide-64-layer-66" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 43; width: 100%;">
                                <!-- LAYER NR. 39 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-67" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-68","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-68","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 44; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/cnc.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 40 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-68" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 45; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">CNC </div>
                            </div>

                            <!-- LAYER NR. 41 -->
                            <div class="tp-caption  " id="slide-64-layer-69" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none"
                                data-height="none" data-whitespace="nowrap" data-type="column" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columwidth="16.666%" data-verticalalign="top" data-margintop="[20,20,20,20]" data-marginright="[20,20,20,20]"
                                data-marginbottom="[20,20,20,20]" data-marginleft="[20,20,20,20]" data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 46; width: 100%;">
                                <!-- LAYER NR. 42 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-70" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="image" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-64-layer-71","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-64-layer-71","delay":""}]'
                                    data-responsive_offset="on" data-frames='[{"delay":"+0","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[auto,auto,auto,auto]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[auto,auto,auto,auto]" data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 47; display: block;">
                                    <img src="<?= get_template_directory_uri()?>/img/jp/python.png" alt="" data-ww="['100px','100px','100px','100px']" data-hh="['100px','100px','100px','100px']"
                                        data-no-retina> </div>

                                <!-- LAYER NR. 43 -->
                                <div class="tp-caption   tp-resizeme" id="slide-64-layer-71" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                    data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on"
                                    data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:-80px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[50,50,50,50]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[50,50,50,50]" data-lasttriggerstate="reset"
                                    style="z-index: 48; white-space: normal; font-size: 24px; line-height: 30px; font-weight: 500; color: #000000; letter-spacing: 0px; display: block;font-family:Ubuntu;">Python </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <script type="text/javascript">
        var revapijp,
            tpjp;
        (function () {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoadjp)
            else
                onLoadjp();

	        var templateUrl = "<?= get_template_directory_uri() ?>";
            function onLoadjp() {
                if (tpjp === undefined) {
                    tpjp = jQuery;

                    if ("off" == "on") tpjp.noConflict();
                }
                if (tpjp("#rev_slider_jp").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_jp");
                } else {
                    revapijp = tpjp("#rev_slider_jp").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: templateUrl+"/js/lib/revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            onHoverStop: "off",
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1400, 1024, 778, 480],
                        gridheight: [640, 640, 640, 640],
                        lazyType: "none",
                        shadow: 1,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",                       
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "on",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                    
					tpjp(revapijp).on('revolution.slide.onloaded', function() {
						jQuery(window).scroll(function(){jpScroll()});

					});
                }; /* END OF revapi call */
            }; /* END OF ON LOAD FUNCTION */
        }()); /* END OF WRAPPING FUNCTION */
        var jpStarted = false;
        var caction = false;
		var jpScroll = function() {
			var top_of_element = jQuery("#rev_slider_jp").offset().top;
			var bottom_of_element = jQuery("#rev_slider_jp").offset().top + jQuery("#rev_slider_jp").outerHeight();
			var bottom_of_screen = jQuery(window).scrollTop() + window.innerHeight;
			var top_of_screen = jQuery(window).scrollTop();

				if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && !jpStarted){
					// The element is visible, do something
					console.log("STARTING - JP"); 				
					revapijp.revnext();
					jpStarted = true;
				}
		};
    </script>