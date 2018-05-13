<?php
$general_settings = get_option("project_settings");
$logo = intval($general_settings["project_settings_header_logo"]);
$logo_obj = wp_get_attachment_metadata($logo);
$logo = wp_get_attachment_image_src($logo, "full")[0];
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if (wp_title('', false)) {echo ' :';} ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		 <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/js/lib/overlay.js" as="script">
		 <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/js/jquery/jquery.js" as="script">
		 <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/js/jquery/jquery-migrate.min.js" as="script">
		 <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/js/lib/revolution/js/jquery.themepunch.revolution.min.js" as="script">
		   <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/lib/fonts/Gloria_Hallelujah/gloria.woff2" as="font" type="font/woff2" crossorigin="anonymous">
		   <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/lib/fonts/Ubuntu/Ubuntu-Regular.ttf" as="font" type="font/woff2" crossorigin="anonymous">
		   <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/lib/fonts/Ubuntu/Ubuntu-Bold.ttf" as="font" type="font/woff2" crossorigin="anonymous">
		   <!-- FAV ICONS -->
		   <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/icon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- External Styling -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/normalize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/fonts/font-awesome/css/font-awesome-leg.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/revolution/settings.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/revolution/layers.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib/revolution/navigation.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lib/revolution-addons/typewriter/css/typewriter.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lib/revolution-addons/particles/css/revolution.addon.particles.css">
<!-- INLINE SCRIPT-->

<script type="text/javascript">


var templateUrl = "<?= get_template_directory_uri() ?>";
</script>
<!-- EXTERNAL SCRIPTS -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.7.1.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery/jquery.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/scripts.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/common.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/frontpage_script.js'></script>
<!-- INLINE SCRIPTS -->
<script type="text/javascript">
	function setREVStartSize(e){
				document.addEventListener("DOMContentLoaded", function() {
					try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
						if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                    
					}catch(d){console.log("Failure at Presize of Slider:"+d)}
				});

			};</script>
			<script>
			var logger = function()
	{
		var oldConsoleLog = null;
		var pub = {};

		pub.enableLogger =  function enableLogger()  
							{
								if(oldConsoleLog == null)
									return;

								window['console']['log'] = oldConsoleLog;
							};

		pub.disableLogger = function disableLogger()
							{
								oldConsoleLog = console.log;
								window['console']['log'] = function() {};
							};

		return pub;
	}();
</script>
<!-- OTHER -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		

	</head>
	<body <?php body_class(); ?> style="margin: 0; padding: 0; background-color:  #fff;"> 

        <div class="loadingoverlay-placeholder" style="box-sizing: border-box; position: fixed; display: flex; flex-flow: column nowrap; align-items: center; justify-content: space-around; background: rgb(42, 42, 42); top: 0px; left: 0px; width: 100%; height: 100%; z-index: 2147483647; opacity: 1;">
        </div>
		<!-- MENU -->	
			<div id="nav_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="nice-and-clean-menu" data-source="gallery" style="margin:0px auto;background: transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
				<div id="nav" class="rev_slider fullwidthbanner" style="display:none;     background-color: rgba(255,255,255,1); overflow: visible !important;" data-version="5.4.7" data-height="['100px','100px','100px','100px']">
					<ul class="force-overflow">
							<!-- SLIDE  -->
						<li 
						data-index="rs-30" data-transition="fade"
						data-slotamount="default" data-hideafterloop="0" 
						data-hideslideonmobile="off" data-height="['100px','100px','100px','100px']" 
						data-easein="default" data-easeout="default" data-masterspeed="default"  
						data-rotate="0"  data-saveperformance="off"  data-title="Menu" 
						data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" 
						data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" 
						data-description=""class="force-overflow">
							<!-- MAIN IMAGE -->
							<img src="<?= get_template_directory_uri() ?>/assets/images/transparent.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
							<div id="rrzt_30" class="rev_row_zone rev_row_zone_top" style="z-index: 659; background-color: rgba(255,255,255,1);">
								<!-- LAYER NR. 1  MENU WRAP-->
								<div class="tp-caption  " 
									id="slide-30-layer-18" 
									data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
									data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
									data-width="none"
									data-whitespace="nowrap"
									data-type="row" 
									data-columnbreak="2" 
									data-responsive_offset="on" 
									data-responsive="off"
									data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
									data-height="['100px','100px','100px','100px']"
									data-margintop="[0,0,0,0]"
									data-marginright="[0,0,0,0]"
									data-marginbottom="[0,0,0,0]"
									data-marginleft="[0,0,0,0]"
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 660; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255,255,255,1);">
									<!-- LAYER NR. 2 LOGO AND MENU CONTAINER-->
										<div class="tp-caption " 
											id="slide-30-layer-20" 
											data-x="['left','left','left','left']"
											data-hoffset="['310','310','100','100']" 
											data-y="['top','top','top','top']"
											data-voffset="['0','0','100','100']" 
											data-width="none"
											data-height="none"
											data-whitespace="nowrap"	
											data-type="column" 
											data-responsive_offset="on" 
											data-responsive="off"
											data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
											data-columnwidth="25%"
											data-verticalalign="top"
											data-margintop="[0,0,0,0]"
											data-marginright="[0,0,0,0]"
											data-marginbottom="[0,0,0,0]"
											data-marginleft="[0,0,0,0]"
											data-textAlign="['left','left','center','leftx']"
											data-paddingtop="[5,5,5,5]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[5,5,5,5]"
											data-paddingleft="[30,30,0,0]"
											style="z-index: 7; width: 100%;     background-color: rgba(255,255,255,1);">
											<!-- LAYER NR. 3 LOGO -->
				
												<div class="tp-caption tp-resizeme set-img-contain" 
													id="slide-30-layer-34" 
													data-x="['left','left','left','left']"
													data-hoffset="['0','0','0','0']" 
													data-y="['top','top','top','top']"
													data-voffset="['0','0','0','0']" 
													data-width="['100%','100%','100%','150px']"
													data-height="90px"
													data-whitespace="normal" 
													data-type="text"
													data-responsive_offset="off" 
													data-responsive="off"
													data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
													data-margintop="[0,0,0,0]"
													data-marginright="[0,0,0,0]"
													data-marginbottom="[0,0,0,0]"
													data-marginleft="[0,0,0,0]"
													data-textAlign="['inherit','inherit','inherit','left']"
													data-paddingtop="[0,0,0,0]"
													data-paddingright="[0,0,0,0]"
													data-paddingbottom="[0,0,0,0]"
													data-paddingleft="[0,0,0,0]"
													data-bg="<?= get_template_directory_uri() ?>/img/logo.png"
													style="z-index: 8; color: rgba(0,0,0,1); display: inline-block;font-family:Ubuntu;    background-color: rgba(255,255,255,1);"><a href="<?= home_url()?>"></a>
												</div>
										</div>
									<!-- LAYER NR. 5 MENU -->
									<div class="tp-caption  menu-desktop" 
										id="slide-30-layer-29" 
										data-x="['left','left','left','left']"
										data-hoffset="['100','100','100','100']" 
										data-y="['top','top','top','top']"
										data-voffset="['100','100','100','100']" 
										data-visibility="['on','on','off','off']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"		
										data-type="column" 
										data-responsive_offset="on" 
										data-responsive="off"
										data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
										data-columnwidth="75%"
										data-verticalalign="top"
										data-margintop="[0,0,0,0]"
										data-marginright="[0,0,0,0]"
										data-marginbottom="[0,0,0,0]"
										data-marginleft="[0,0,0,0]"
										data-textAlign="['right','right','center','center']"
										data-paddingtop="[27,27,0,0]"
										data-paddingright="[20,20,0,0]"
										data-paddingbottom="[27,27,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 10; width: 100%;    background-color: rgba(255,255,255,1);">
										<!-- LAYER NAV LAYERS -->
										<?php html5blank_nav(); ?>
									</div>	
									<!-- MOBILE MENU STUFF -->
									<!-- LAYER NR. 3 -->
										<div class="tp-caption tp-shape tp-shapewrapper " 
											id="slide-79-layer-44" 
											data-x="['right','right','right','right']" data-hoffset="['60','60','40','30']" 
											data-y="['top','top','top','top']" data-voffset="['30','30','30','20']" 
														data-width="['60','60','50','50']"
											data-height="['60','60','50','50']"
											data-whitespace="nowrap"
											data-visibility="['off','off','on','on']"
											data-type="shape" 
											data-basealign="slide" 
											data-responsive_offset="off" 
											data-responsive="off"
											data-frames='[{"delay":200,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
											data-textAlign="['inherit','inherit','inherit','inherit']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 7;background-color:rgb(255,255,255);cursor:pointer;"> </div>

										<!-- LAYER NR. 4 -->
										<div class="tp-caption tp-shape tp-shapewrapper " 
											id="slide-79-layer-45" 
											data-x="['right','right','right','right']" data-hoffset="['77','77','55','45']" 
											data-y="['top','top','top','top']" data-voffset="['49','49','46','36']" 
														data-width="['26','26','20','20']"
											data-height="['4','4','3','3']"
											data-whitespace="nowrap"
											data-visibility="['off','off','on','on']"
								
											data-type="shape" 
											data-basealign="slide" 
											data-responsive_offset="off" 
											data-responsive="off"
											data-frames='[{"delay":250,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['inherit','inherit','inherit','inherit']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 8;background-color:rgb(0,0,0);"> </div>

										<!-- LAYER NR. 5 -->
										<div class="tp-caption tp-shape tp-shapewrapper " 
											id="slide-79-layer-46" 
											data-x="['right','right','right','right']" data-hoffset="['77','77','55','45']" 
											data-y="['top','top','top','top']" data-voffset="['58','58','53','43']" 
														data-width="['26','26','20','20']"
											data-height="['4','4','3','3']"
											data-whitespace="nowrap"
											data-visibility="['off','off','on','on']"
								
											data-type="shape" 
											data-basealign="slide" 
											data-responsive_offset="off" 
											data-responsive="off"
											data-frames='[{"delay":270,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['inherit','inherit','inherit','inherit']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 9;background-color:rgb(0,0,0);"> </div>

										<!-- LAYER NR. 6 -->
										<div class="tp-caption tp-shape tp-shapewrapper " 
											id="slide-79-layer-47" 
											data-x="['right','right','right','right']" data-hoffset="['87','87','60','50']" 
											data-y="['top','top','top','top']" data-voffset="['67','67','60','50']" 
														data-width="['16','16','15','15']"
											data-height="['4','4','3','3']"
											data-whitespace="nowrap"
											data-visibility="['off','off','on','on']"
								
											data-type="shape" 
											data-basealign="slide" 
											data-responsive_offset="off" 
											data-responsive="off"
											data-frames='[{"delay":290,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
											data-textAlign="['inherit','inherit','inherit','inherit']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 10;background-color:rgb(0,0,0);"> </div>

										<!-- LAYER NR. 7 -->
										<div class="tp-caption   tp-svg-layer" 
											id="slide-79-layer-52" 
											data-x="['right','right','right','right']" data-hoffset="['70','70','45','35']" 
											data-y="['top','top','top','top']" data-voffset="['40','40','35','25']" 
														data-width="40"
											data-height="40"
											data-whitespace="nowrap"
											data-visibility="['off','off','on','on']"
								
											data-type="svg" 
											data-svg_src="<?= get_template_directory_uri()?>/assets/svg/navigation/ic_close_24px.svg" 
											data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" 
											data-basealign="slide" 
											data-responsive_offset="off" 
											data-responsive="off"
											data-frames='[{"delay":"bytrigger","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":150,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
											data-textAlign="['inherit','inherit','inherit','inherit']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"
											data-lasttriggerstate="reset"
											style="z-index: 11; min-width: 40px; max-width: 40px; max-width: 40px; max-width: 40px; color: #000000;background-color:rgb(255,255,255);cursor:pointer;"> </div>

										<?php 
										// prepare layer actions
											$layerActions = array();
											foreach(wp_get_nav_menu_items(GlobalConfig::get("project_slug_name")."_menu") as $menu_item) {
												array_push($layerActions, '{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-79-layer-mm-'.$menu_item->menu_order.'","delay":"50"}');
											}
										?>
										<!-- LAYER NR. 8 -->
										<div class="tp-caption tp-shape tp-shapewrapper   menutoggle" 
											id="slide-79-layer-51" 
											data-x="['right','right','right','right']" data-hoffset="['60','60','40','30']" 
											data-y="['top','top','top','top']" data-voffset="['30','30','30','20']" 
														data-width="['60','60','50','50']"
											data-height="['60','60','50','50']"
											data-whitespace="nowrap"
											data-visibility="['off','off','on','on']"
								
											data-type="shape" 
											data-actions='[
												{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-79-layer-52","delay":""},<?= implode(",", $layerActions)?>
												]' 
											data-basealign="slide" 
											data-responsive_offset="off" 
											data-wrapper_class="menutoggle" 
											data-responsive="off"
											data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
											data-textAlign="['inherit','inherit','inherit','inherit']"
											data-paddingtop="[0,0,0,0]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[0,0,0,0]"
											data-paddingleft="[0,0,0,0]"

											style="z-index: 12;cursor:pointer;"> </div>

										<!-- Menu Items -->
				
										<?php html5blank_nav_mobile(); ?>
									<!-- LAYER NR. 12 -->
									<div class="tp-caption tp-shape tp-shapewrapper " 
										id="tp-menubg" 
										data-x="['center','center','center','center']"
										data-hoffset="['0','0','0','0']" 
										data-y="['top','top','top','top']"
										data-voffset="['0','0','0','0']" 
										data-width="full"
										data-height="['90','90','100','70']"
										data-whitespace="nowrap"
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"delay":10,"speed":0,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":0,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
										data-textAlign="['inherit','inherit','inherit','inherit']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 5;background-color:rgba(45,48,50,1);    background-color: rgba(255,255,255,1);">
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
			</div>
		<!-- END MENU -->
	<!--BODY-->