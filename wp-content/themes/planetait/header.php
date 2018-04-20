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
		<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
																															echo ' :';
																														} ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="http://fonts.googleapis.com/css?family=Lato%3A700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Poppins:700%2C400%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" media="all">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<script type="text/javascript">
function setREVStartSize(e){
			document.addEventListener("DOMContentLoaded", function() {
				try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                    
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			});

		};</script>
	</head>
	<body <?php body_class(); ?> style="margin: 0; padding: 0; background-color:  #edf1f4;"> 
		<!-- MENU -->			
		<header>
			<div id="menu_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-menu" data-source="gallery" style="margin:0px auto;background: transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
				<div id="menu" class="rev_slider fullwidthabanner" style="display:none;     background-color: rgba(255,255,255,1);" data-version="5.4.7">
					<ul>	<!-- SLIDE  -->
						<li data-index="rs-30" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Menu" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
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
									data-height="none"
									data-whitespace="nowrap"
									data-type="row" 
									data-columnbreak="2" 
									data-responsive_offset="on" 
									data-responsive="off"
									data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
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
										<div class="tp-caption  " 
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
											data-textAlign="['left','left','center','center']"
											data-paddingtop="[20,20,10,10]"
											data-paddingright="[0,0,0,0]"
											data-paddingbottom="[20,20,0,0]"
											data-paddingleft="[30,30,0,0]"
											style="z-index: 7; width: 100%;     background-color: rgba(255,255,255,1);">
											<!-- LAYER NR. 3 LOGO -->
				
												<div class="tp-caption tp-resizeme" 
													id="slide-30-layer-34" 
													data-x="['left','left','left','left']"
													data-hoffset="['0','0','0','0']" 
													data-y="['top','top','top','top']"
													data-voffset="['0','0','0','0']" 
													data-width="['auto']"
													data-height="['50']"
													data-whitespace="normal" 
													data-type="image"
													data-responsive_offset="off" 
													data-responsive="off"
													data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
													data-margintop="[0,0,0,0]"
													data-marginright="[0,0,0,0]"
													data-marginbottom="[0,0,0,0]"
													data-marginleft="[0,0,0,0]"
													data-textAlign="['inherit','inherit','inherit','inherit']"
													data-paddingtop="[0,0,0,0]"
													data-paddingright="[0,0,0,0]"
													data-paddingbottom="[0,0,0,0]"
													data-paddingleft="[0,0,0,0]"
													style="z-index: 8; max-width: 100%; height: auto; color: rgba(0,0,0,1); display: inline-block;font-family:Ubuntu;    background-color: rgba(255,255,255,1);"><a href="<?= home_url()?>"><img src="<?= $logo ?>" alt="logo" height="50" /></a>
												</div>
										</div>
									<!-- LAYER NR. 5 MENU -->
									<div class="tp-caption  " 
										id="slide-30-layer-29" 
										data-x="['left','left','left','left']"
										data-hoffset="['100','100','100','100']" 
										data-y="['top','top','top','top']"
										data-voffset="['100','100','100','100']" 
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
		</header>
		<div class="container-fluid">
		<!-- END MENU -->
	<!--BODY-->