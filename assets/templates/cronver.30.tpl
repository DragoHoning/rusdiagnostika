{strip}
	{process_pagedata}
    {cms_lang_info assign='nls'}
    {if isset($pagetitle)}{assign var='main_title' value=$pagetitle}{else}{title assign='main_title'}{/if}
    {content assign='main_content'}
	{content block="description" wysiwyg="false"}
    {share_data scope=parent vars='nls,main_title,main_content' scope=global}
{/strip}<!doctype html><html lang="{$nls->htmlarea()}" dir="{$nls->direction()}"><head>{strip}
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta charset='{$nls->encoding()}' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$main_title nocache} | {sitename}</title>
    <meta property="og:title" content="{$main_title nocache} | {sitename}">
	{metadata|strip}

    {if isset($canonical)}<link rel='canonical' href='{$canonical}' />{elseif isset($content_obj)}<link rel='canonical' href='{$content_obj->GetURL()}' />{/if}
	{nocache}
	{description assign=foo nocache}
	{if $description!=''}
	<meta name="description" content="{$description|strip_tags|escape:"html"|strip|truncate:142:""|replace:'&quot;':''|replace:'nbsp;':''|replace:'&amp;':''|replace:'quot;':''|replace:'\r\n':''|trim nocache}">
	<meta property="og:description" content="{$description|strip_tags|escape:"html"|strip|truncate:142:""|replace:'&quot;':''|replace:'nbsp;':''|replace:'&amp;':''|replace:'quot;':''|replace:'\r\n':''|trim nocache}">
	{elseif $foo}
	<meta name="description" content="{description|strip_tags|escape:"html"|strip|truncate:142:""|replace:'&quot;':''|replace:'nbsp;':''|replace:'&amp;':''|replace:'quot;':''|replace:'\r\n':''|trim nocache}"/>
	<meta property="og:description" content="{description|strip_tags|escape:"html"|strip|truncate:142:""|replace:'&quot;':''|replace:'nbsp;':''|replace:'&amp;':''|replace:'quot;':''|replace:'\r\n':''|trim nocache}">
	{elseif {$main_content|strip_tags:true|escape:"html"|strip|truncate:145:""|replace:'\r\n':'' nocache}!=''}
	<meta name="description" content="{$main_content|strip_tags|escape:"html"|strip|truncate:142:""|replace:'&quot;':''|replace:'nbsp;':''|replace:'&amp;':''|replace:'quot;':''|replace:'\r\n':''|trim nocache}" />
	<meta property="og:description" content="{$main_content|strip_tags|escape:"html"|strip|truncate:142:""|replace:'&quot;':''|replace:'nbsp;':''|replace:'&amp;':''|replace:'quot;':''|replace:'\r\n':''|trim nocache}">
	{else}
	<meta name="description" content=""/>
	<meta property="og:description" content="">
	{/if}
	{/nocache}
	<meta property="og:image" content="{root_url}/assets/images/image_src.jpg">
	<link rel="image_src" href="{root_url}/assets/images/image_src.jpg">

	{cms_stylesheet}
{/strip}</head><body class="" style="margin:0;">{strip}
{cms_module module='PageExtContent' assigns='pageExtContent'}
	<header id="header">
		<div class="header-content container">
			<div class="row block-header-info">
				<div class="col-xls-12 col-xl-10 col-lg-24">{if $content_id==1}<div class="logo"></div>{else}<a href="{root_url}" title="{sitename}"><div class="logo"></div></a>{/if}</div>
				<div class="col-xls-4-5 col-xl-6 col-lg-8 col-sm-24 box-head-contact-info">
					<div class="box-work-schedule">
						<i></i><span>Пн-Сб с 08:00 по 17:00</span>
					</div>
				</div>
				<div class="col-xls-4 col-xl-4 col-lg-8 col-sm-12 box-head-contact-info">
					<div class="box-head-phone">
						<span>Бесплатный по России</span>
						<a href="tel:88001234567" class="link-phone">8-800-123-45-67</a>
					</div>
				</div>
				<div class="col-xls-3-5 col-xl-4 col-lg-8 col-sm-12 box-head-contact-info">
					<div class="box-head-phone">
						<span>Телефон в Кирове</span>
						<a href="tel:+78332783396" class="link-phone">8-8332-78-33-96</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xls-17 col-xl-16">
					<h1>Техническое диагностирование внутридомового и внутриквартирного газового оборудования (ВДГО) и (ВКГО)</h1>
					<div class="box-head-adv-items" data-sb="flipInX">
					{$pageExtContent['adv']->html|strip}
					</div>
				</div>
				<div class="col-xls-6 col-xl-7 col-xl-offset-1">
					<div id="claim-form-box" data-sb="bounceInRight">
						<div class="claim-form-box-inner">
							<div class="claim-form-prefix">
								<p><strong>Получить быстрый <br>расчет уже сегодня</strong><span>Просто напишите, как с вами связаться</span></p>
							</div>
							<div class="claim-form-content"><div class="ajax-form">{FormBuilder|strip form='claimform'}</div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="video-bg" style="background-image:url(/assets/images/bg-header-min.jpg);"></div>
	</header>
	
	<div class="navigation-box">
	<div class="navigation-fix">
	<div class="container">
		<nav id="topmenu" class="navbar navbar-default">
			<div class="logo-min"></div>
			<div class="navig-container"><ul class="nav navbar-nav"><li><a href="#services"><span>Услуги</span></a></li><li><a href="#methods"><span>Методы проведения</span></a></li><li><a href="#documents"><span>Документация</span></a></li><li><a href="#charge"><span>Ответственность</span></a></li><li><a href="#procedure"><span>Порядок проведения</span></a></li><li><a href="#objects"><span>Наши объекты</span></a></li><li><a href="#about"><span>О нас</span></a></li><li><a href="#contacts"><span>Контакты</span></a></li></ul></div>
			<div class="box-head-phone">
				<span>Бесплатный по России</span>
				<a href="tel:88001234567" class="link-phone">8-800-123-45-67</a>
			</div>
			<div class="topmenu-btn"><span class="navbar-top-bar"></span><span class="navbar-middle-bar"></span><span class="navbar-bottom-bar"></span></div>
		</nav>
	</div>
	</div>
	</div>
<div class="container">
	<div id="services" class="block-clear">
		<div class="row">
			<div class="col-xl-10 col-lg-12 col-xs-24">
				<div class="bgimg1"></div>
				<div class="bgimg2"><span></span></div>
			</div>
			<div class="col-lg-12 col-xl-offset-2 col-xs-24">
				<div class="box-pagetitle">{$pageExtContent['services_tehnik']->title}</div>
				<div class="box-text">
					{$pageExtContent['services_tehnik']->html|strip}
				</div>
				<div><a href="#services-more1" class="popup-text btnlink-more" data-fancybox-title="{$pageExtContent['services_tehnik']->title}">О диагностировании</a></div>
				<div id="services-more1" class="modal-text" style="display:none">
					{$pageExtContent['services_tehnik']->html|strip}<div class="two-column">{$pageExtContent['services_tehnik']->full|strip}</div>
				</div>
				<div class="box-pagetitle">{$pageExtContent['services_tehnik_2']->title}</div>
				<div class="box-text">
					{$pageExtContent['services_tehnik_2']->html|strip}
				</div>
				<div><a href="#services-more2" class="popup-text btnlink-more" data-fancybox-title="{$pageExtContent['services_tehnik_2']->title}">Постановление правительства</a></div>
				<div id="services-more2" class="modal-text" style="display:none">
					{$pageExtContent['services_tehnik_2']->html|strip}<div class="two-column">{$pageExtContent['services_tehnik_2']->full|strip}</div>
				</div>
				<div><a href="/claimform3?showtemplate=false" class="form-popup fancybox.ajax btnlink-calc" data-fancybox-title="Заявка на конультацию">Получить консультацию</a></div>
			</div>
		</div>
	</div>
	
	<div id="methods" class="block-clear">
		<div class="box-pagetitle">Методы проведения диагностирования</div>
		<div class="block-methods-items">
			<div class="row">
				<div class="col-xl-6 box-methods-item">
					<a href="metods/1/1/rk-radiacionnye-metody-kontrolja/" class="methods-link1 catalog-popup fancybox.ajax" data-fancybox-href="metods/1/1/rk-radiacionnye-metody-kontrolja/?showtemplate=false">
                        <div class="methods-link-icon-anim"><embed src="/uploads/metods/RK.svg" class="svg-scene" width="216" height="123" type="image/svg+xml"></div>
                        <div class="methods-link-text"><span>РК (Радиационные <br>методы контроля)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
				<div class="col-xl-6 box-methods-item">
					<a href="metods/2/1/uk-ultrazvukovoj-kontrol/" class="methods-link2 catalog-popup fancybox.ajax" data-fancybox-href="metods/2/1/uk-ultrazvukovoj-kontrol/?showtemplate=false">
                        <div class="methods-link-icon-anim"><embed src="/uploads/metods/uk.svg" class="svg-scene" width="172" height="133" type="image/svg+xml"></div>
                        <div class="methods-link-text"><span>УК (Ультразвуковой контроль)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
				<div class="col-xl-6 box-methods-item">
					<a href="metods/3/1/kontrol-pronikajushhimi-veshhestvami-pvk/" class="methods-link3 catalog-popup fancybox.ajax" data-fancybox-href="metods/3/1/kontrol-pronikajushhimi-veshhestvami-pvk/?showtemplate=false">
                        <div class="methods-link-icon-anim"><embed src="/uploads/metods/pvk.svg" class="svg-scene" width="171" height="95" type="image/svg+xml"></div>
                        <div class="methods-link-text"><span>Контроль проникающими <br>веществами (ПВК)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
				<div class="col-xl-6 box-methods-item">
					<a href="metods/4/1/ek-jelektricheskie-metody-nerazrushajushhego-kontrolja/" class="methods-link4 catalog-popup fancybox.ajax" data-fancybox-href="metods/4/1/ek-jelektricheskie-metody-nerazrushajushhego-kontrolja/?showtemplate=false">
                        <div class="methods-link-icon-anim"><embed src="/uploads/metods/EK.svg" class="svg-scene" width="184" height="151" type="image/svg+xml"></div>
                        <div class="methods-link-text"><span>ЭК (Электрические методы <br>неразрушающего контроля)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
				<div class="col-xl-6 box-methods-item">
					<a href="metods/5/1/ae-akustiko-jemissionnyj-metod/" class="methods-link5 catalog-popup fancybox.ajax" data-fancybox-href="metods/5/1/ae-akustiko-jemissionnyj-metod/?showtemplate=false">
                        <div class="methods-link-icon-anim"><embed src="/uploads/metods/AE.svg" class="svg-scene" width="245" height="163" type="image/svg+xml"></div>
                        <div class="methods-link-text"><span>АЭ (Акустико эмиссионный <br>метод)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
				<div class="col-xl-6 box-methods-item">
					<a href="metods/6/1/mpm-metod-magnitnoj-pamjati-metalla/" class="methods-link6 catalog-popup fancybox.ajax" data-fancybox-href="metods/6/1/mpm-metod-magnitnoj-pamjati-metalla/?showtemplate=false">
                        <div class="methods-link-icon-anim"><embed src="/uploads/metods/mpm.svg" class="svg-scene" width="228" height="114" type="image/svg+xml"></div>
                        <div class="methods-link-text"><span>МПМ (Метод Магнитной <br>Памяти Металла)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
				<div class="col-xl-12 box-methods-item">
					<a href="metods/7/1/vik-vizualnyj-i-izmeritelnyj-kontrol/" class="methods-link7 catalog-popup fancybox.ajax" data-fancybox-href="metods/7/1/vik-vizualnyj-i-izmeritelnyj-kontrol/?showtemplate=false">
                        <div class="methods-link-icon-anim"></div>
                        <div class="methods-link-text"><span>ВИК (Визуальный и измерительный контроль)</span></div>
                        <div class="methods-link-more"><span>Подробнее</span></div>
                    </a>
				</div>
			</div>
		</div>{*ImageConvert src='/assets/images/aboutimg1.jpg' image_x='1184' image_resize=true image_ratio_y=true jpeg_quality=80*}
	</div>
	
	<div id="documents" class="block-clear">
		<div class="box-pagetitle">Нормативная документация</div>
		<div id="slider-documents-items" class="row">
			<div class="col-xl-4-8 col-lg-12 col-md-24"><a href="uploads/files/MDS-42-1.2000.pdf" target="_blank"><div>МДС 42-1.2000</div><span>скачать</span></a></div>
			<div class="col-xl-4-8 col-lg-12 col-md-24"><a href="uploads/files/prikaz-№613.pdf" target="_blank"><div>ПРИКАЗ № 613</div><span>скачать</span></a></div>
			<div class="col-xl-4-8 col-lg-12 col-md-24"><a href="uploads/files/prikaz-№410.pdf" target="_blank"><div>ПРИКАЗ № 410</div><span>скачать</span></a></div>
			<div class="col-xl-4-8 col-lg-12 col-md-24"><a href="uploads/files/KoAP-statia-9.23.pdf" target="_blank"><div>КоАП статья 9.23</div><span>скачать</span></a></div>
			<div class="col-xl-4-8 col-md-24"><a href="uploads/files/Vedomstvennii-stroitelnie-normi-BCH-58-88-p.pdf" target="_blank"><div>Ведомственный строительные нормы ВСН 58-88 (р)</div><span>скачать</span></a></div>
		</div>
	</div>
</div>
	
	<div class="bg-blackgray advantage">
		<div class="container">
			<div class="box-pagetitle">Преимущества</div>
			<div class="advantage-items">
			{$pageExtContent['advantage']->html|strip}
			</div>
			<div id="claim-form-box-two" class="advantage-form-wrap">
				<div class="row">
					<div class="col-lg-21 col-lg-offset-3">
						<div class="advantage-form-container">
							<div class="advantage-form-content">
								<div class="box-pagetitle">Получить быстрый расчет <br>уже сегодня</div>
								<div class="ajax-form">{FormBuilder|strip form='claimformtwo'}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="charge" class="block-clear">
		<div class="container">
		<div class="row">
			<div class="col-xl-10 col-lg-14 charge-content">
				<div class="box-pagetitle">Последствия непроведения <br>и ответственность</div>
				<div class="row charge-content-size">
					<div class="col-xl-8 col-lg-24 col-sm-8"><strong class="counter-scroll" data-from="0" data-to="2016">2016</strong><span>год</span></div>
					<div class="col-xl-8 col-lg-24 col-sm-8"><strong class="counter-scroll" data-from="0" data-to="120">120</strong><span>аварий</span></div>
					<div class="col-xl-8 col-lg-24 col-sm-8"><strong class="counter-scroll" data-from="0" data-to="200">200</strong><span>жертв</span></div>
				</div>
				<div class="box-text">
					{$pageExtContent['charge_text']->html|strip}
				</div>
				<div><a href="#charge-more" class="popup-text btnlink-more" data-fancybox-title="Последствия непроведения и ответственность">Подробнее</a></div>
				<div id="charge-more" style="display:none">Подробный текст</div>
			</div>
			<div class="col-xl-12 col-lg-10 col-xl-offset-2" data-sb="bounceInRight">
				<div class="charge-chargeimg"></div>
			</div>
		</div>
		</div>
		<div id="slider-charge-items">
			{Gallery|strip dir='charge'}
		</div>
	</div>
	
	<div id="procedure" class="block-clear">
		<div class="box-pagetitle text-center">Порядок проведения</div>
		<div class="block-procedure-items">
			<div class="row">
				<div class="box-procedure-item col-xl-4">
					<div class="box-procedure-item-icon"><i></i></div>
					<div class="box-procedure-item-text">
						<span>Получение заявки</span>
						<a href="/claimform3?showtemplate=false" class="form-popup fancybox.ajax btnlink-calc btnlink-transparent btnlink-border-red" data-fancybox-title="Заявка на конультацию">Отправить заявку</a>
					</div>
				</div>
				<div class="box-procedure-item col-xl-4">
					<div class="box-procedure-item-icon"><i></i></div>
					<div class="box-procedure-item-text">
						<span>Расчет стоимости и сроков</span>
						<a href="/claimform?showtemplate=false" class="form-popup fancybox.ajax btnlink-calc btnlink-transparent btnlink-border-black" data-fancybox-title="Заявка на расчёт цены">Расчитать</a>
					</div>
				</div>
				<div class="box-procedure-item col-xl-4">
					<div class="box-procedure-item-icon"><i></i></div>
					<div class="box-procedure-item-text">
						<span>Заключение договора</span>
					</div>
				</div>
				<div class="box-procedure-item col-xl-4">
					<div class="box-procedure-item-icon"><i></i></div>
					<div class="box-procedure-item-text">
						<span>Проведение технического <br>диагностирования</span>
					</div>
				</div>
				<div class="box-procedure-item col-xl-4">
					<div class="box-procedure-item-icon"><i></i></div>
					<div class="box-procedure-item-text">
						<span>Обработка результатов</span>
					</div>
				</div>
				<div class="box-procedure-item col-xl-4">
					<div class="box-procedure-item-icon"><i></i></div>
					<div class="box-procedure-item-text">
						<span>Выдача положительного <br>экспертного заключения <br>с регистрацией в ростехнадзоре</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<div class="bg-gray">
	<div id="objects" class="block-clear">
		<div class="box-pagetitle text-center">Наши объекты</div>
		<div id="slider-objects-items">
		{Gallery|strip dir='objects'}
		</div>
	</div>
	
	<div id="about" class="block-clear container">
		<div class="row">
			<div class="col-xl-10 col-lg-14">
				<div class="box-pagetitle">О компании</div>
				<div class="box-text">
					{$main_content}
				</div>
			</div>
			<div class="col-xl-12 col-lg-10 col-xl-offset-2 about-content-images">
				<div class="bgimg1"></div>
				<div class="bgimg2"></div>
			</div>
		</div>
	</div>
	
	<div id="" class="block-clear">
		<div class="box-pagetitle container">Сертификаты и лицензии</div>
		<div id="slider-sertificate-items">
			{Gallery|strip dir='sertific_licenz'}
		</div>
	</div>
</div>
	
	<div id="faq" class="block-clear">
		<div class="box-pagetitle text-center container">Часто задаваемые вопросы</div>
		<div id="collapse-faq-items">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed"><span>Что такое ВДГО (ВКГО)?</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Внутридомовое газовое оборудование (ВДГО) — это общее имущество (стояки в доме, краны, расположенные в подъезде). Ответственность за исправное состояние газового оборудования возложена на управляющую компанию (ТСЖ).</p>
							<p>Внутриквартирное газовое оборудование (ВКГО) — имущество, расположенное в квартире (плита, колонка, водонагреватель или отопительный котел, первый кран в квартире, которым регулируется подача газа к плите или другому газовому оборудованию, а также подводка от него ко всем приборам). Ответственность за исправное состояние газового оборудования возложена на потребителя — собственника жилого помещения.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed"><span>Что такое техническое диагностирование (ТД) ВДГО (ВКГО)?</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Техническое диагностирование — процесс установления технического состояния оборудования. Под такой проверкой подразумевается определение степени исправности технического устройства, за счет сравнения полученных данных с параметрами, установленными в технической документации.</p>
							<p>Путем технического диагностирования обеспечивается безопасное использование и содержание внутридомового (ВДГО) и внутриквартирного (ВКГО) газового оборудования наряду с техническим и аварийно-диспетчерским обслуживанием, ремонтом и заменой. 08 января 2015 г. вступили в силу Правила проведения технического диагностирования внутридомового и внутриквартирного газового оборудования, утвержденные <a href="">приказом Ростехнадзора № 613 от 17.12.2013 г.</a></p>
							<p>Эти нормативные документы возложили ответственность за состояние газоиспользующего оборудования на потребителей и обязали их своевременно заключать договоры на техническое диагностирование ВДГО (ВКГО) со специализированной организацией.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed"><span>Что будет, если диагностика не проведена?</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Как управляющая многоквартирным домом организация, так и собственник (пользователь) жилого помещения, в котором установлено газовое оборудование, несут установленную законодательством РФ гражданско-правовую ответственность:</p>
							<p>а) за нарушение указанных правил, следствием которого стала авария, несчастный случай, а также причинение вреда жизни и здоровью людей и окружающей среде;</p>
							<p>б) за невнесение, несвоевременное внесение или внесение в неполном объёме платы за выполненные работы (оказанные услуги) по договору;</p>
							<p>в) за вред, причинённый жизни, здоровью сотрудников исполнителя и его имуществу, жизни, здоровью и имуществу иных заказчиков, других физических и юридических лиц вследствие ненадлежащего использования и содержания внутридомового или внутриквартирного газового оборудования.</p>
							<p>Газораспределительная организация, в случае истечения нормативного срока службы и отсутствия положительного заключения по результатам технического диагностирования внутридомового (внутриквартирного) газового оборудования, вправе <strong>приостановить подачу газа</strong> с предварительным письменным уведомлением заказчика.</p>
							<p>С 16.12.2016 года <strong>введены штрафы</strong> за уклонение от заключения договора и отказ в допуске представителя специализированной организации для проведения технического обслуживания внутридомового и внутриквартирного газового оборудования <a href="">(ст. 9.23. КоАП РФ)</a>.</p>
							<p><a href="">(КоАП РФ, Статья 7.22.)</a> Нарушение правил содержания и ремонта жилых домов и (или) жилых помещений влечет <strong>наложение административного штрафа</strong> на должностных лиц в размере от четырех тысяч до пяти тысяч рублей; на юридических лиц - от сорока тысяч до пятидесяти тысяч рублей.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed"><span>Соответствует ли ваша фирма определенным требованиям для проведения ВДГО (ВКГО)?</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Аттестована лаборатория неразрушающего контроля (ЛНК), обучены соответствующие специалисты и эксперты <a href="">(Приказ Ростехнадзор №613)</a>.</p>
							<p>Наша организация, соответствует требованиям, определяемым Федеральной службой по экологическому, технологическому и атомному надзору <a href="">(ПП №410 п.8)</a>.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed"><span>Как проверяют ту часть общедомового оборудования, которая находится внутри квартир? Обязан ли собственник пустить специалистов в квартиру?</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse5" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Проверка состоится только в том случае, если специалисты подрядчика смогут попасть в каждую квартиру, ведь часть общедомового оборудования находится в квартирах.</p>
							<p>По одному из пунктов 410 постановления газораспределительная организация — исполнитель вправе приостановить подачу газа, если оборудование хотя бы в одной квартире останется непроверенным. Отключат газ не в конкретной квартире, а во всем доме.</p>
							<p>В данном случае основанием для отключения газа послужит отсутствие информации об исправности, а значит, и продлении срока эксплуатации оборудования, которое на момент проверки используется 20 и более лет.</p>
							<p>В квартирах проводится визуально-измерительный контроль оборудования, приборное обследование. В приборное обследование входит ультразвуковая дефектоскопия и толщинометрия. Эти процедуры проводятся специалистами при помощи высокочувствительного оборудования.</p>
							<p>Время проведения проверки предварительно согласовывается с УО, разрабатывается график посещения квартир в том числе и в нерабочее время.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed"><span>Как обезопасить себя от мошенников?</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse6" class="panel-collapse collapse">
						<div class="panel-body">
							<p>У каждого сотрудника есть документ, удостоверяющий личность, спецодежда, оборудование. Управляющая компания должна известить собственников о проверке. Но все же, если у вас остались сомнения по поводу личностей тех, кто пытается войти к вам в квартиру под видом газовиков, позвоните в свою управляющую компанию (ТСЖ) — вам сообщат, проходит ли в вашем доме проверка, и назовут данные специалистов.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed"><span>Цель технического диагностирования внутридомового и внутриквартирного газового оборудования</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse7" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Техническое диагностирование внутридомового и внутриквартирного газового оборудования должно проводиться каждые 5 лет с целью:</p>
							<ul>
							<li>определения фактического технического состояния внутридомового и внутриквартирного газового оборудования либо их составных частей;</li>
							<li>поиска и определения неисправностей указанного оборудования;</li>
							<li>определения возможности дальнейшего использования внутридомового или внутриквартирного газового оборудования.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="collapsed"><span>Срок первичного диагностирования внутридомового газового оборудования</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse8" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Согласно положению о диагностировании технического состояния внутренних газопроводов жилых и общественных зданий <a href="">(МДС 42.1-2000)</a> первичная диагностика внутреннего газопровода проводится по истечении нормативного срока службы — 30 лет со дня ввода газопровода в эксплуатацию.</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" data-sb="fadeInUpBig">
					<div class="panel-heading">
						<div class="panel-title">
						  <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed"><span>Периодичность технического диагностирования</span><i class="plus"></i></a>
						</div>
					</div>
					<div id="collapse9" class="panel-collapse collapse">
						<div class="panel-body">
							<p>После окончания нормативного срока службы периодичность проведения технического диагностирования ВДГО и ВКГО — составляет 5 лет (пункт 9 Правил проведения технического диагностирования внутридомового и внутриквартирного газового оборудования, утвержденных приказом Федеральной службы по экологическому, технологическому и атомному надзору от 17.12.2013 № 613).</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="contacts" class="">
			<div class="col-lg-12 contact-left-panel block-contact" data-sb="fadeInLeftBig">
				<div class="box-pagetitle">У вас остались вопросы? <br>Наш специалист вас бесплатно проконсультирует</div>
				<div class="ajax-form">{FormBuilder|strip form='claimformfour'}</div>
			</div>
			<div class="col-lg-10 contact-right-panel block-contact" data-sb="fadeInRightBig">
				<div>
				<div class="box-pagetitle">Контакты</div>
				<div class="contact-text row">
					<div class="col-lg-13 col-md-12">
						<a href="tel:88001234567" class="link-phone">8-800-123-45-67</a>
						<p>Пн-Пт: с 08-00 до 17:00</p>
						<p>Киров, ул. Блюхера, 39, оф. 311</p>
					</div>
					<div class="col-lg-11 col-md-12">
						<a href="tel:+78332783396" class="link-phone">8-8332-78-33-96</a><br>
						<a href="mailto:mail@mail.ru" target="_blank" class="link-email">mail@mail.ru</a>
					</div>
				</div>
				</div>
			</div>
		<div id="box-maps"></div>
	</div>

	<script type="text/javascript" src="http://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;load=package.map" defer=""></script>

	<footer>
		<div class="container2">
			<div class="row">
				<div class="col-lg-16">
					<div class="logo">
						<p>ООО «Русдиагностика», &copy; {custom_copyright}</p>
					</div>
					<p>Техническое диагностирование внутридомового <br>и внутриквартирного газового оборудования (ВДГО) и (ВКГО)</p>
				</div>
				<div class="col-lg-8">
					<a href="http://www.artnetstudio.ru/" title="Создание Landing page и реклама" target="_blank"> 
						<div class="dev">
							<p>Разработка и реклама Landing page</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</footer>
<script type="text/javascript" src="/modules/Minify/min/b=assets/plugins&amp;f=jquery-2.2.4.min.js,jquery.placeholder.js,bootstrap.min.js,jquery.smoothscroll.min.js,jquery.preloadify.min.js,capiPolicy/capiPolicy.js,fancybox/jquery.fancybox.js,slick/slick.min.js,photobox/jquery.photobox.js,storybox/story-box.min.js,jquery.parallax-scroll.js,core.js"></script>
</body>
{/strip}
</html>
