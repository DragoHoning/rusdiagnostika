    $(".js-main-popup, .js-main-make-popup, .btn-popup").fancybox({//popup form
        padding: [44,10,10,10],
        margin : 0,
        width : '418px',
        height : '450px',
        maxWidth: "100%",
        //maxHeight	: '100%',
        fitToView: false,
        autoSize	: false,
        openEffect	: 'elastic',
        closeEffect	: 'fade',
        openSpeed   : '400',
        openMethod  : 'dropIn',
        closeMethod   : 'dropOut',
        helpers:  {
            title: {type: 'inside', position: 'top'}
        },
        afterLoad: function() {
            this.title = '<div class="content-title-popup">' + this.title + '</div>';
        },
        beforeShow: function() {
            $('.fancybox-wrap').addClass('main-fancy-wrap');
            $('.fancybox-skin').addClass('main-fancy-cont');
        },
        afterShow: function() {
            $('.fancybox-skin .phone_mask').mask("+7 (999) 999-9999"/*,{placeholder:" "}*/);
			$('.fancybox-inner form').capiPolicy({});
        }
    });
	
	
	
	в ajax
	
	
					if($('.form-ajax form').parents('.fancybox-inner').is('div'))
						$('.fancybox-inner .form-ajax form').capiPolicy({});
					else {
						if(form.find('.service-make-form-cont-dublform').is('div')) {
							$('.block-service-make-reception.dublform form')/*$('.form-ajax form')*/.capiPolicy({
								position:2,
								tpl:
								'<div class="clearfix"></div>'+
								'<div class="capiPolicy capiActive" style="padding:2px 15px 0;">'+
								'<span class="capiCheckbox" style="padding:0;">'+
								'<input type="checkbox" value="1" required="required" checked>'+
								'</span>'+
								'Согласен с <a href="javascript:void(0);" class="capiShowPolicy">политикой конфиденциальности</a>'+
								'</div>'
							});
						} else if(form.find('.service-make-form-cont').is('div')) {
							$('.block-service-make-reception:not(.dublform) form')/*$('.form-ajax form')*/.capiPolicy({
								position:2,
								tpl:
								'<div class="clearfix"></div>'+
								'<div class="capiPolicy capiActive" style="padding:2px 15px 0;">'+
								'<span class="capiCheckbox" style="padding:0;">'+
								'<input type="checkbox" value="1" required="required" checked>'+
								'</span>'+
								'Согласен с <a href="javascript:void(0);" class="capiShowPolicy">политикой конфиденциальности</a>'+
								'</div>'
							});
						} else {
							$('.form-ajax form').capiPolicy({});
						}
					}