		var templateUrl = global_object.templateUrl;
		var revapi20,tpj;
		(function () {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoadHead)
			else
				onLoadHead();

			function onLoadHead() {
				if (tpj === undefined) {
					tpj = jQuery;

					if ("off" == "on") tpj.noConflict();
				}
				if (tpj("#menu").revolution == undefined) {
					revslider_showDoubleJqueryError("#menu");
				} else {
					revapi20 = tpj("#menu").show().revolution({
						sliderType: "hero",
						jsFileLocation: templateUrl+"/js/lib/revolution/js/",
						sliderLayout: "fullwidth",
						dottedOverlay: "none",
						delay: 9000,
						navigation: {
						},
						responsiveLevels: [1240, 1024, 778, 480],
						visibilityLevels: [1240, 1024, 778, 480],
						gridwidth: [1240, 1024, 778, 480],
						gridheight: [90, 90, 90, 90],
						lazyType: "none",
						minHeight: "90",
						shadow: 0,
						spinner: "off",
						autoHeight: "off",
						disableProgressBar: "on",
						hideThumbsOnMobile: "off",
						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						debugMode: false,
						fallbacks: {
							simplifyAll: "off",
							disableFocusListener: false,
						}
					});
					revapi20.bind("revolution.slide.onloaded", function (e) {
						var menubg = jQuery('#tp-menubg');
						punchgs.TweenLite.set(menubg, { autoAlpha: 0 });
						punchgs.TweenLite.set(menubg.closest('.tp-parallax-wrap'), { autoAlpha: 0 });
						function fadeInOutBG() {
							if (document.documentElement.scrollTop > 50 || document.body.scrollTop > 50) {
								punchgs.TweenLite.to(menubg, 0.3, { autoAlpha: 1 });
								punchgs.TweenLite.to(menubg.closest('.tp-parallax-wrap'), 0.3, { autoAlpha: 1 });
							} else {

								punchgs.TweenLite.to(menubg, 0.3, { autoAlpha: 0 });
								//punchgs.TweenLite.to(menubg.closest('.tp-parallax-wrap'),0.3,{autoAlpha:0});
							}
						}
						jQuery(document).on('scroll', function () {
							fadeInOutBG();
						});
						fadeInOutBG();
					});

					function sliderAnchors() {

						var anchorarray = new Array;
						lastknowheaderheight = 0; //jQuery('').height();

						// ANCHOR AND ITS HIGHLITS
						jQuery('.tp-rs-menulink').each(function (i) {
							var a = jQuery(this),
								obj = new Object();

							obj.button = a;
							obj.href = a.attr("href");
							if (obj.href != undefined) {
								obj.fakehref = obj.href.replace("#", "#!");

								if (obj.href != undefined && obj.href.split("http").length < 2 && obj.href != "#wp-toolbar") {
									obj.target = jQuery(obj.href);
									obj.offset = obj.target.data('offset') == undefined ? 0 : obj.target.data('offset');
								}

								if (obj.target != undefined && obj.target.length > 0)
									anchorarray.push(obj);
							}
						});

						jQuery('.tp-rs-menulink').each(function (i) {
							var a = jQuery(this);
							a.click(function () {

								var obj = new Object(),
									ypos = 0;

								if (a.attr('href') != undefined) {
									obj.href = a.attr("href");
									obj.target = jQuery(obj.href);
									if (obj.href != undefined && obj.target != undefined && jQuery(obj.target).length > 0) {


										//if (jQuery(this).hasClass("tp-rs-menu-selected")) return false;

										obj.offset = obj.target.data('offset') == undefined ? 0 : obj.target.data('offset');
										obj.top = jQuery(obj.target).offset().top;
										ypos = obj.top + obj.offset;
										var counter = { val: jQuery(document).scrollTop() };


										if (jQuery('body').data('currenscrollanim') != undefined)
											jQuery('body').data('currenscrollanim').pause();


										var sanim = punchgs.TweenLite.to(counter, 1, {
											val: ypos, ease: punchgs.Power4.easeOut,
											onUpdate: function () {
												forcescrolled = true;
												punchgs.TweenLite.set(jQuery('body, html'), { scrollTop: counter.val - 90 });
											},
											onComplete: function () {
												forcescrolled = false;
												jQuery(window).trigger("scroll.tprsmenu");
											}
										});

										forcescrolled = true;
										jQuery.each(anchorarray, function (index, o) {
											if (obj.href !== o.href) {
												o.button.removeClass("tp-rs-menu-selected");
											} else {
												o.button.addClass("tp-rs-menu-selected");
												window.history.pushState('', '', obj.href)
											}
										});


										jQuery('body').data('currenscrollanim', sanim);
										return false;
									} else {
										return true;
									}
								} else {
									return true;
								}
							})
						});

					}

					sliderAnchors();
				}; /* END OF revapi call */
			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */