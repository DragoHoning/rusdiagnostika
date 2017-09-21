(function(c){var a=function(e,d){this.$element=c(e);this.options=c.extend({},a.DEFAULTS,this.dataOptions(),d);this.init()};a.DEFAULTS={from:0,to:0,speed:1000,refreshInterval:100,decimals:0,formatter:b,onUpdate:null,onComplete:null,sorter:"asc"};a.prototype.init=function(){this.value=this.options.from;this.loops=Math.ceil(this.options.speed/this.options.refreshInterval);this.loopCount=0;this.increment=(this.options.to-this.options.from)/this.loops};a.prototype.dataOptions=function(){var d={from:this.$element.data("from"),to:this.$element.data("to"),speed:this.$element.data("speed"),refreshInterval:this.$element.data("refresh-interval"),decimals:this.$element.data("decimals"),sorter:this.$element.data("sorter")};var g=Object.keys(d);for(var f in g){var e=g[f];if(typeof(d[e])==="undefined"){delete d[e]}}return d};a.prototype.update=function(){this.value+=this.increment;this.loopCount++;this.render();if(typeof(this.options.onUpdate)=="function"){this.options.onUpdate.call(this.$element,this.value)}if(this.loopCount>=this.loops){clearInterval(this.interval);this.value=this.options.to;if(typeof(this.options.onComplete)=="function"){this.options.onComplete.call(this.$element,this.value)}}};a.prototype.render=function(){var d=this.options.formatter.call(this.$element,this.value,this.options);this.$element.text(d)};a.prototype.restart=function(){this.stop();this.init();this.start()};a.prototype.start=function(){this.stop();this.render();this.interval=setInterval(this.update.bind(this),this.options.refreshInterval)};a.prototype.stop=function(){if(this.interval){clearInterval(this.interval)}};a.prototype.toggle=function(){if(this.interval){this.stop()}else{this.start()}};function b(e,d){return e.toFixed(d.decimals)}c.fn.countTo=function(d){return this.each(function(){var g=c(this);var f=g.data("countTo");var h=!f||typeof(d)==="object";var e=typeof(d)==="object"?d:{};var i=typeof(d)==="string"?d:"start";if(h){if(f){f.stop()}g.data("countTo",f=new a(this,e))}f[i].call(f)})}}(jQuery));

var loadHtml = '<div class="loader"><div class="loader-inner"></div><div class="loader-inner"></div><div class="loader-inner"></div><div class="loader-inner"></div></div>';
$(document).ready(function () {
	
	$(window).load(function() {
		if($(window).width()>992) {
			$('#video-bg').css('background-image','url(/assets/images/bg-header.jpg)');
		} else if($(window).width()<=992) {
			$('#video-bg').css('background-image','url(/assets/images/bg-header-992.jpg)');
		}
	});
	
    $('input, textarea').placeholder();
	
    $('#slider-charge-items').photobox('a.group', {time: 0});
    $('.galery-items').photobox('a.group', {time: 0});
    $('#slider-sertificate-items').photobox('a.group', {time: 0});
    $('#slider-objects-items').photobox('a.group', {time: 0});

    $(".form-popup").fancybox({//popup form
        padding: 0,
        margin : 30,
        width : 374,
        height : 'auto',
        maxWidth: "100%",
        /*maxHeight	: '100%',*/
        fitToView: false,
        autoSize	: false,
        openEffect	: 'elastic',
        closeEffect	: 'fade',
        openSpeed   : '400',
        openMethod  : 'dropIn',
        closeMethod   : 'dropOut',
        helpers:  {
            title: null,
            /*overlay: {
                locked: false
            }*/
        },
		tpl: {
			loading: '<div id="fancybox-loading">'+loadHtml+'</div>',
		},
        afterLoad: function() {
            if($(this.element).attr('data-fancybox-width')!=undefined && $(this.element).attr('data-fancybox-width')!='undefined') {
                this.width = $(this.element).attr('data-fancybox-width');
            }
            this.title = '<div class="content-title-popup">' + this.title + '</div>';
        },
        beforeShow: function() {
            $('.fancybox-skin').addClass('main-fancy-cont');
            /*$('.modalblock-inner form').capiPolicy({
                position: 1,
                tpl: '<div class="capiPolicy capiActive" style="color:#000; text-align:center; white-space: nowrap; position: relative;"><span class="capiCheckbox"><input type="checkbox" value="1" required="required" checked><span class="capiCheckboxStyle"><span></span></span></span>Согласен с <a href="javascript:void(0);" class="capiShowPolicy">политикой конфиденциальности</a></div>',
            });*/
        },
        afterShow: function() {
            /*$(".phone_mask").mask("+7 (999) 999-9999");*/
			$('.detail-view-left').photobox('a.js-photobox-img', {time: 0});
			$('.fancybox-inner table').each(function() {
				$(this).wrap('<div class="table-responsive"></div>');
			});
			formInit('.fancybox-inner .ajax-form form');
			$('.fancybox-inner #claim-form-box form').capiPolicy({
				position: 3,
				tpl: '<div class="capiPolicy capiActive" style="color:#20222a;"><span class="capiCheckbox"><input type="checkbox" value="1" required="required" checked><span class="capiCheckboxStyle"><span></span></span></span><span class="text">Согласен на обработку персональных данных и соглашаюсь с <a href="javascript:void(0);" class="capiShowPolicy">политикой конфиденциальности</a></span></div>',
			});
        }
    });
	
    /*if($(window).width() < '1120') {
        var pp_text_opt = {
            margin: 5,
            padding:  [20,20,20,20],
            maxWidth: '100%',
            autoSize: true,
            fitToView	: false,
            openEffect	: 'elastic',
            closeEffect	: 'fade',
            openSpeed   : '400',
            openMethod  : 'dropIn',
            closeMethod   : 'dropOut',
            helpers:  {
                title: {type: 'inside', position: 'top'},
                overlay: {
                    locked: false
                }
            },
			tpl: {
				loading: '<div id="fancybox-loading">'+loadHtml+'</div>',
			},
            afterLoad: function() {
                this.title = '<div class="fancy-title"><div class="content-title-popup">' + this.title + '</div></div>';
            },
            beforeShow: function() {
                if($(this.element).hasClass('popup-compact')) $('.fancybox-skin').addClass('popup-compact');
            }
        };
    } else {*/
        var pp_text_opt = {
			margin: [50,35,50,35],
			scrolling: 'no',
            padding: [140,112,115,112],
            width: '1066px',
			height : 'auto',
            maxWidth: '100%',
            /*maxHeight: '100%',*/
            autoSize: false,
            /*fitToView	: false,*/
            openEffect	: 'elastic',
            closeEffect	: 'fade',
            openSpeed   : '400',
            openMethod  : 'dropIn',
            closeMethod   : 'dropOut',
            helpers:  {
                title: {type: 'inside', position: 'top'},
                /*overlay: {
                    locked: false
                }*/
            },
			tpl: {
				loading: '<div id="fancybox-loading">'+loadHtml+'</div>',
			},
            afterLoad: function() {
                this.title = '<div class="fancy-title"><div class="content-title-popup">' + this.title + '</div></div>';
            },
            beforeShow: function() {
                if($(this.element).hasClass('popup-compact')) $('.fancybox-skin').addClass('popup-compact');
            }
        };
    //}

    $('.popup-text').fancybox(pp_text_opt);
	
	$('footer .logo, .logo-min').click(function() {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
	
	var myMap=null,
        centerMap = [58.583847, 49.677186];
        centerMapMax = [58.584647, 49.673186];
        centerMapMinWin = [58.584647, 49.674186];
        placemarkMap = [58.583847, 49.677186];
    setTimeout(function () {
        ymaps.ready(init);
    }, 300);
    function init() {
        myMap = new ymaps.Map('box-maps', {
            center: centerMapMax,
            zoom: 17,
            controls: []
        }), myMap.controls.add(new ymaps.control.ZoomControl({
            options: {
                position: {
                    right: 30,
                    bottom: 100
                }
            }
        }))/*.add(new ymaps.control.TypeSelector({
            options: {
                position: {
                    right: 70,
                    top: 20
                }
            }
        }))*/.add(new ymaps.control.FullscreenControl({options: {position: {right: 30, top: 20}}}));

        myPlacemark = new ymaps.Placemark(placemarkMap, {
            hintContent: '«Русдиагностика»',
            balloonContent: '<div class="map-balloon-box"><div style="text-align:center; float:left; width:75px;"><img style="margin: 10px 10px 10px 0;" title="«Русдиагностика»" src="/assets/images/logo-min.png" alt="«Русдиагностика»" height="56" width="56"></div><div style="text-align:left; width: 330px; padding-top: 12px;"><strong>ООО «Русдиагностика»</strong><br>Время работы: Пн-Пт: с 08-00 до 17:00<br>Киров, ул. Блюхера, 39, оф. 311</div></div>'

        }, {
            iconLayout: 'default#image',
            iconImageHref: 'assets/images/metka.png',
            iconImageSize: [146, 152], iconImageOffset: [-50, -100]
        });

        myMap.geoObjects.add(myPlacemark);
		
        myMap.behaviors.disable('scrollZoom');


        if ($(window).width() < 996) {
            myMap.behaviors.disable('drag');
        }
        myMap.behaviors.disable('dblClickZoom');
        myMap.container.events.add('fullscreenenter', function () {
            myMap.behaviors.enable('drag');
        });
        myMap.container.events.add('fullscreenexit', function () {
            myMap.behaviors.disable('drag');
        });
		
		function initMapControl() {
		if($(window).width()>1200) {
			myMap.setCenter(centerMapMax);
		} else if($(window).width()>1130) {
			myMap.setCenter(centerMapMinWin);
			/*myMap.controls.add(new ymaps.control.ZoomControl({
				options: {
					position: {
						right: 30,
						top: 140
					}
				}
			}));*/
			/*myMap.controls.set('ZoomControl',{position:{
				bottom: 320,
				right: 30
			}});*/
		} else if($(window).width()>992) {
			myMap.setCenter(centerMapMinWin);
			/*myMap.controls.add(new ymaps.control.ZoomControl({
				options: {
					position: {
						right: 30,
						bottom: 100
					}
				}
			}));
			myMap.controls.add(new ymaps.control.FullscreenControl({options: {position: {right: 30, bottom: 320}}}));*/
			/*myMap.controls.set('ZoomControl',{position:{
				bottom: 100,
				right: 30
			}});*/
		} else {
			myMap.setCenter(centerMap);
		}
		}
		initMapControl();
		
		var startAnimateIconMap = $('#contacts').offset().top+($('#contacts').outerHeight()/2),
			animateIconMapObj = '#box-maps > ymaps ymaps[class*="placemark-"] ymaps[class*="-image"]',
			animateIconMapFlag = false;
		
		setTimeout(function(){
			if(startAnimateIconMap <= ($(window).scrollTop()+$(window).height()) && animateIconMapFlag===false) {
				$(animateIconMapObj).addClass('show');
				animateIconMapFlag = true;
			} else if(startAnimateIconMap > ($(window).scrollTop()+$(window).height())) {
				$(animateIconMapObj).removeClass('show');
				animateIconMapFlag = false;
			}
		},700);
		$(window).resize(function(){
			initMapControl();
		});
		$(window).scroll(function(){
			if(startAnimateIconMap <= ($(window).scrollTop()+$(window).height()) && animateIconMapFlag===false) {
				$(animateIconMapObj).addClass('show');
				animateIconMapFlag = true;
			} else if(startAnimateIconMap > ($(window).scrollTop()+$(window).height())) {
				$(animateIconMapObj).removeClass('show');
				animateIconMapFlag = false;
			}
		});
    }
	
	
    var form_flag = false;
	function formInit(parent) {
		$(parent).each(function() {
			$(this).attr('action',$(this).data('form-action'));
			$(this).removeAttr('data-form-action');
		});
	}
	formInit('.ajax-form form');
    $(document).on('submit','.ajax-form form', function(e) {
        e.preventDefault();
        if(!form_flag) {
            var form = $(this),
                parent = form.parents('.ajax-form');
				
			var elem_loader = form.parents('.ajax-form').parent();
			if(elem_loader.hasClass('container') || elem_loader.hasClass('container2')) {
				elem_loader = elem_loader.parent();
			}

            elem_loader.addClass('loader-form');
			
            /*if(form.parents('#form-msg-request').is('div')) {
                //form.find('input[name=page]').val('37');
                form.find('input[name*=returnid]').val('37');
            }*/
			
			if(form.parents('#claim-form-box').is('div')) {
				var initCapiPolicyBox = '#claim-form-box form';
				var initCapiPolicyPosition = 3;
                form.find('input[name*=returnid]').val('37');
				if(form.parents('.fancybox-inner')) {
					initCapiPolicyBox = '.fancybox-inner #claim-form-box form';
					form.find('input[name*=returnid]').val('40');
				}
			} else if(form.parents('#claim-form-box-two').is('div')) {
				var initCapiPolicyBox = '#claim-form-box-two form';
				var initCapiPolicyPosition = 2;
                form.find('input[name*=returnid]').val('39');
			} else if(form.parents('#claim-form-box-three').is('div')) {
				var initCapiPolicyBox = '#claim-form-box-three form';
				var initCapiPolicyPosition = 1;
                form.find('input[name*=returnid]').val('40');
			} else if(form.parents('#contacts').is('div')) {
				var initCapiPolicyBox = '#contacts form';
				var initCapiPolicyPosition = 2;
			}

            var serialize = form.serialize();
            //console.log(form);
			//console.log(serialize);
			form.find('input').attr('disabled',true);
            $.ajax({
                type: 'POST',
                cache: false,
                //url: '/call-form/',
                url: form.attr('action'),
                data: serialize,
                dataType: 'html',
                success: function(data){
                    var h = parent.outerHeight();
                    parent.css('min-height',h);
					if($(data).find('.ajax-form').is('div')) {
						parent.html($(data).find('.ajax-form').html());
					} else {
						parent.html(data);
					}
					if(parent.find('.alert-success').is('div')) {console.log('success');
						parent.css('min-height',1);
					}

                    setTimeout(function () {
						var f = parent.find('form');
						f.attr('action',f.data('form-action'));
						f.removeAttr('data-form-action');
						
							$(initCapiPolicyBox).capiPolicy({
								position: initCapiPolicyPosition,
								tpl: '<div class="capiPolicy capiActive" style="color:#20222a;"><span class="capiCheckbox"><input type="checkbox" value="1" required="required" checked><span class="capiCheckboxStyle"><span></span></span></span><span class="text">Согласен на обработку персональных данных и соглашаюсь с <a href="javascript:void(0);" class="capiShowPolicy">политикой конфиденциальности</a></span></div>',
							});
							
                        elem_loader.removeClass('loader-form');
						form.find('input').removeAttr('disabled');
                    }, 300);

                    form_flag = false;
                    //console.log(data);
                },
                error: function(){
                    form_flag = false;
                    console.log('error');
					form.find('input').removeAttr('disabled');
                }
            });

            form_flag = true;
        }
    });
	
	$('#slider-charge-items').slick({
		slidesToShow: 3,
		arrows: true,
		centerMode: true,
		variableWidth: false,
		infinite: true,
		autoplay: false,
		centerPadding: '150px',
		prevArrow:'<button type="button" class="slick-prev"><span></span></button>',
		nextArrow:'<button type="button" class="slick-next"><span></span></button>',
		responsive: [
			{
				breakpoint: 1300,
				settings: {
					slidesToShow: 2,
					centerMode: false,
					centerPadding: '100px',
				}
			},
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 1,
					centerMode: true,
					centerPadding: '80px',
				}
			},
			{
				breakpoint: 700,
				settings: {
					slidesToShow: 1,
					centerMode: true,
					centerPadding: '50px',
				}
			},
		],
	});
	
	$('#slider-objects-items').slick({
		slidesToShow: 2,
		arrows: true,
		centerMode: true,
		variableWidth: false,
		infinite: true,
		autoplay: false,
		centerPadding: '160px',
		prevArrow:'<button type="button" class="slick-prev"><span></span></button>',
		nextArrow:'<button type="button" class="slick-next"><span></span></button>',
		responsive: [
			{
				breakpoint: 1250,
				settings: {
					slidesToShow: 1,
					centerPadding: '200px',
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					centerPadding: '80px',
				}
			},
			{
				breakpoint: 700,
				settings: {
					slidesToShow: 1,
					centerPadding: '40px',
				}
			},
		],
	});
	
	$('#slider-sertificate-items').slick({
		slidesToShow: 4,
		arrows: true,
		centerMode: true,
		variableWidth: false,
		infinite: true,
		autoplay: false,
		centerPadding: '150px',
		prevArrow:'<button type="button" class="slick-prev"><span></span></button>',
		nextArrow:'<button type="button" class="slick-next"><span></span></button>',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					centerPadding: '100px',
				}
			},
			{
				breakpoint: 1023,
				settings: {
					slidesToShow: 2,
					centerPadding: '100px',
				}
			},
			{
				breakpoint: 700,
				settings: {
					slidesToShow: 1,
					centerPadding: '60px',
				}
			},
		],
	});
	/*$('.galery-items').slick({
		slidesToShow: 3,
		arrows: true,
		centerMode: true,
		variableWidth: true,
		asNavFor: '.galery-items-thumbpag',
		infinite: true,
		prevArrow:'<button type="button" class="slick-prev"><span></span></button>',
		nextArrow:'<button type="button" class="slick-next"><span></span></button>',
		responsive: [
			{
				breakpoint: 1070,
				settings: {
				variableWidth: false,
				slidesToShow: 1,
				centerPadding: '0px',
				}
			},
		],
	});
	$('.galery-items-thumbpag').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.galery-items',
		dots: false,
		arrows: false,
		focusOnSelect: true,
		variableWidth: true,
		infinite: false,
		rtl: false,
		centerMode: true,
		responsive: [
			{
				breakpoint: 700,
				settings: {
				infinite: true,
				}
			},
		],
	});
	
	$('.galery-items-thumbpag .our-product-item a').unbind('click');
	$('.galery-items-thumbpag .our-product-item a').click(function(e) {e.preventDefault();});*/
	
	$(window).resize(function() {
		/*if($(window).width()>1200) {
			myMap.setCenter(centerMap);
		} else if($(window).width()>992) {
			myMap.setCenter([58.616177, 49.683860]);
		} else {
			myMap.setCenter(centerMap);
		}*/
	});


	/*var flagPartnersLoad = false;
	if( (flagPartnersLoad===false) && (($('#content-partners').offset().top) <= ($(window).scrollTop()+$(window).height()) && ($('#content-partners').offset().top+$('#content-partners').outerHeight()) > ($(window).scrollTop()+$(window).height())) ) {
		partnersLoad();
		flagPartnersLoad = true;
	}
    $(window).scroll(function(){
		if( (flagPartnersLoad===false) && (($('#content-partners').offset().top) <= ($(window).scrollTop()+$(window).height()) && ($('#content-partners').offset().top+$('#content-partners').outerHeight()) > ($(window).scrollTop()+$(window).height())) ) {
			partnersLoad();
			flagPartnersLoad = true;
		}
    });*/
	
	function catalogLoad() {
		$('.catalog-items').preloadify({
			imagedelay: 10,
			fadein: 500,
			preload_parent: 'a',
			mode: 'sequential'
		});
	};
	
	/*function partnersLoad() {
    $('#content-partners').preloadify({
        imagedelay: 10,
        fadein: 500,
        preload_parent: '.item',
        mode: 'sequential',
        preload: '.box-i'
    });
	};*/
	
	function loadMenuItemActive() {
        $('[id]:not(input)').each(function(index,object){
            var anchorLink = $('#topmenu .navbar-nav a[href="#' + object.id + '"]');
            if($(object).offset().top - 200 <= $(window).scrollTop() && anchorLink[0]){
                $('#topmenu .navbar-nav .active').removeClass('active');
                anchorLink.parent().addClass('active');
            }
        })
	};
    loadMenuItemActive();
	
$(function(){
    $('#topmenu .navbar-nav a[href^="#"]').on('click',function () {
        var target;
        if(!$($(this).attr('href')).find('.box-pagetitle')[0]){
            target = $($(this).attr('href'));
        } else {
            target = $($(this).attr('href')).find('.box-pagetitle').first();
        }
        $('html, body').animate({scrollTop: target.offset().top - 70 }, 500);
        return false;
    });

    $(window).scroll(function(){
        loadMenuItemActive();
    });

    $('.topmenu-btn').click(function () {
        $('.navigation-fix .navig-container').toggleClass('show');
    });

    $('.navigation-fix .navbar-nav a,.navigation-fix .navig-container .close').on('click',function () {
        $('.navigation-fix .navig-container').removeClass('show');
        return true;
    });
});
	
	$(window).load(function() {
	
	menuHeadFix();

	function menuHeadFix() {
		$('.navigation-box').css('height',$('.navigation-fix').height());
		var navigationPos = $('.navigation-box').offset().top;
		
		if(navigationPos > $(window).scrollTop()) {
			$('.navigation-fix').removeClass("scroller-fix");
		} else {
			$('.navigation-fix').addClass("scroller-fix");
		}
	}
	$(window).scroll(function() {
		menuHeadFix();
	});
	$(window).resize(function() {
		menuHeadFix();
	});
	
	});
	
	/*$(document).on('click','.detail-image-thumb-item img',function() {
		$('.detail-view-image a').css('opacity','0.5').append(loadHtml);
		setTimeout(function(){
			$('.detail-view-image a').attr('href',$(this).data('fullimg'));
			$('.detail-view-image a img').attr('src',$(this).data('viewimg'));
			$('.detail-view-image a').css('opacity','1').find('.loader').remove();
		},500);
	});*/
	
	/*$(document).on('click','.portfolio-prevnext a',function(e) {
		e.preventDefault();
		var th_url = $(this).attr('href');
		$('.fancybox-inner').css('opacity','0.5').append(loadHtml);
        $.ajax({
            type: 'POST',
            cache: false,
            //url: '/call-form/',
            url: th_url,
            dataType: 'html',
            success: function(data){
				console.log(data);
				setTimeout(function(){
					$('.fancybox-inner').html(data);
					$('.fancybox-inner').css('opacity','1');
					
					$('.detail-view-left').photobox('a.js-photobox-img', {time: 0});
					$('.fancybox-inner table').each(function() {
						$(this).wrap('<div class="table-responsive"></div>');
					});
					formInit('.fancybox-inner .ajax-form form');
					$('.fancybox-inner #claim-form-box-two form').capiPolicy({
						position: 1,
						tpl: '<div class="capiPolicy capiActive" style="color:#20222a;"><span class="capiCheckbox"><input type="checkbox" value="1" required="required" checked><span class="capiCheckboxStyle"><span></span></span></span><span class="text">Согласен на обработку персональных данных и соглашаюсь с <a href="javascript:void(0);" class="capiShowPolicy">политикой конфиденциальности</a></span></div>',
					});
				},300);
			},
			error: function(){
                console.log('error');
			}
		});
	});*/
	
	
    var bottomform_pos = $('#services').offset().top-50,
		bottomform_pos2 = $('#about').offset().top-50,
		bottomform_h = $('#services').outerHeight(),
		bottomform_h2 = $('#about').outerHeight(),
        w_height = $(window).innerHeight(),
        el_bottom_h1 = $('#services .bgimg1').height(),
        el_bottom_h2 = $('#services .bgimg2').height(),
        el2_bottom1 = $('#about .bgimg1').height(),
        el2_bottom2 = $('#about .bgimg2').height(),
		el_bottom1_val_def = parseInt($('#services .bgimg1').css('bottom')),
		el_bottom2_val_def = parseInt($('#services .bgimg2').css('bottom')),
		el_bottom1_val = 0,
		el_bottom2_val = 0,
		el2_bottom1_val_def = parseInt($('#about .bgimg1').css('bottom')),
		el2_bottom2_val_def = parseInt($('#about .bgimg2').css('bottom')),
		el2_bottom1_val = 0,
		el2_bottom2_val = 0;
    myparalax_scroll();

    function myparalax_scroll(){
        var k = ($(window).scrollTop() + w_height - bottomform_pos)/$('#services').height();
		
		el_bottom1_val = -el_bottom_h1 + el_bottom_h1 * k + 300;
		if((el_bottom1_val>(el_bottom1_val_def-el_bottom_h1/2)) && (el_bottom1_val<(el_bottom1_val_def+el_bottom1_val_def+el_bottom_h1/2))) {
			$('#services .bgimg1').css('bottom',el_bottom1_val + 'px');
		}
		el_bottom2_val = -el_bottom_h2 + el_bottom_h2 * k;
		if((el_bottom2_val>(el_bottom2_val_def-el_bottom_h2/2)) && (el_bottom2_val<(el_bottom2_val_def+el_bottom2_val_def+el_bottom_h2/2))) {
			$('#services .bgimg2').css('bottom', el_bottom2_val + 'px');
		}
		
        var k2 = ($(window).scrollTop() + w_height - bottomform_pos2)/$('#about').height();
		
		el2_bottom1_val = -el2_bottom1 + el2_bottom1 * k2;
		if((el2_bottom1_val>(el2_bottom1_val_def-el2_bottom1/2)) && (el2_bottom1_val<(el2_bottom1_val_def+el2_bottom1_val_def+el2_bottom1/2))) {
			$('#about .bgimg1').css('bottom',el2_bottom1_val + 'px');
		}
		el2_bottom2_val = -el2_bottom2 + el2_bottom2 * k2 - 128;
		if((el2_bottom2_val>(el2_bottom2_val_def-el2_bottom2/2)) && (el2_bottom2_val<(el2_bottom2_val_def+el2_bottom2_val_def+el2_bottom2/2))) {
			$('#about .bgimg2').css('bottom', el2_bottom2_val + 'px');
		}
    }
    $(window).on("scroll", function () {
        myparalax_scroll();
    });
	
	$(window).load(function() {

		/*if($('.timer').is('span')) {
		var flagtimeron = false;
		if((flagtimeron===false) && (($('.timer').offset().top) <= ($(window).scrollTop()+$(window).height()))) {
			$('.timer').countTo();
			flagtimeron = true;
		}
		$(window).scroll(function(){
			if((flagtimeron===false) && (($('.timer').offset().top) <= ($(window).scrollTop()+$(window).height()))) {
				$('.timer').countTo();
				flagtimeron = true;
			}
		});
		}*/

		/*if($('.catalog-items').is('span')) {
		var flagCatalogLoad = false;
		if( (flagCatalogLoad===false) && (($('.catalog-items').offset().top) <= ($(window).scrollTop()+$(window).height()) && ($('.catalog-items').offset().top+$('.catalog-items').outerHeight()) > ($(window).scrollTop()+$(window).height())) ) {
			catalogLoad();
			flagCatalogLoad = true;
		}
		$(window).scroll(function(){
			if( (flagCatalogLoad===false) && (($('.catalog-items').offset().top) <= ($(window).scrollTop()+$(window).height()) && ($('.catalog-items').offset().top+$('.catalog-items').outerHeight()) > ($(window).scrollTop()+$(window).height())) ) {
				catalogLoad();
				flagCatalogLoad = true;
			}
		});
		}*/
		
		var flagAdv = false;
		if( (flagAdv===false) && (($('.advantage-items').offset().top+$('.advantage-items').outerHeight()/3) <= ($(window).scrollTop()+$(window).height())) && (($('.advantage-items').offset().top+$('.advantage-items').outerHeight()/3*2) > $(window).scrollTop()) ) {
			$('.advantage-items .row > div[class*="col-"] > div strong').animate({bottom:0},800);
			flagAdv = true;
		}
		$(window).scroll(function(){
			if( (flagAdv===false) && (($('.advantage-items').offset().top+$('.advantage-items').outerHeight()/3) <= ($(window).scrollTop()+$(window).height())) && (($('.advantage-items').offset().top+$('.advantage-items').outerHeight()/3*2) > $(window).scrollTop()) ) {
			$('.advantage-items .row > div[class*="col-"] > div strong').animate({bottom:0},800);
				flagAdv = true;
			}
		});
		
		var flagtimeron = false;
			if((flagtimeron===false) && (($('#charge').offset().top+$('#charge').outerHeight()/3) <= ($(window).scrollTop()+$(window).height())) && (($('#charge').offset().top+$('#charge').outerHeight()/3*2) > $(window).scrollTop())) {
			$('.counter-scroll').countTo();
			flagtimeron = true;
		}
		$(window).scroll(function(){
			if((flagtimeron===false) && (($('#charge').offset().top+$('#charge').outerHeight()/3) <= ($(window).scrollTop()+$(window).height())) && (($('#charge').offset().top+$('#charge').outerHeight()/3*2) > $(window).scrollTop())) {
				$('.counter-scroll').countTo();
				flagtimeron = true;
			}
		});
	
	});
});

/* FANCYBOX ANIMATION */
(function ($, F) {
	F.transitions.dropIn = function () {
		var a = F._getPosition(true);
		a.top = (parseInt(a.top, 10) - 200) + "px";
		a.opacity = 0;
		F.wrap.css(a).show().animate({
			top: "+=200px",
			opacity: 1
		}, {
			duration: F.current.openSpeed,
			complete: F._afterZoomIn
		})
	};
	F.transitions.dropOut = function () {
		F.wrap.removeClass("fancybox-opened").animate({
			top: "-=200px",
			opacity: 0
		}, {
			duration: F.current.closeSpeed,
			complete: F._afterZoomOut
		})
	};
	F.transitions.slideIn = function () {
		var a = F._getPosition(true);
		a.left = (parseInt(a.left, 10) - 200) + "px";
		a.opacity = 0;
		F.wrap.css(a).show().animate({
			left: "+=200px",
			opacity: 1
		}, {
			duration: F.current.nextSpeed,
			complete: F._afterZoomIn
		})
	};
	F.transitions.slideOut = function () {
		F.wrap.removeClass("fancybox-opened").animate({
			left: "+=200px",
			opacity: 0
		}, {
			duration: F.current.prevSpeed,
			complete: function () {
				$(this).trigger("onReset").remove()
			}
		})
	};
}(jQuery, jQuery.fancybox));