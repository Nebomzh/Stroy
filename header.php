<!DOCTYPE html>

<head>
    <meta charset="windows-1251">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/ico/favicon.ico">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css-js/bootstrap.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css-js/font-awesome.min.css");?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/font.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css-js/prettyPhoto.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css-js/tooltips/themes/tooltipster-shadow.css");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/css-js/jquery.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/css-js/bootstrap.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/css-js/jquery.isotope.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/css-js/jquery.prettyPhoto.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/css-js/main.js");?>
    <?require_once('.config.php');?>
    <!--[if lt IE 9]>
    <script src="<?=SITE_TEMPLATE_PATH?>/css-js/html5shiv.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/css-js/respond.min.js"></script>
    <![endif]-->
<!--     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-57-precomposed.png"/> -->
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">
<header id="header" role="banner">
    <div class="container">    
        <div id="navbar" class="navbar navbar-default"><div></div>
            <div class="navbar-header">
				<a class="navbar-brand" href="<?=SITE_DIR?>"></a>                
            </div>
            <div class="infoblock">
                <div class="phones">
                    <span class="phone_wrap">
                        <span class="icon-phone"></span>
                            <span class="phone_text">
                                <a rel="nofollow" href="tel:+7 (351) 277-77-88">+7 (351) 277-77-88</a>
                            </span>
                    </span>
                    <span class="order_wrap_btn">
                        <span class="callback_btn">Заказать звонок</span>
                    </span>
                </div>
                <div class="adress">
                    <span class="icon-map-marker"></span>
                    <span class="adress_text1">Челябинск, Свердловский тракт, 5, корпус 9<br></span>
                    <span class="adress_text2">Строительный центр «Прораб», цокольный этаж</span>
                </div>
            </div>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => "",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                );?>
            
        </div>
    </div>
</header>

<section id="house" class="col-sm-12">
<div class="container">
    <div class="box first" style="background: #ffb200; margin-top: -100px; margin-bottom: -400px; position: absolute;">
    <div class="row">
        <h1 style="text-align: center; color: #000;">Утеплите ваш дом и экономьте до 68% на отоплении</h1>
    <p class="h2">Экструзионный пенополистирол или XPS - один из самых популярных утеплителей.<br>Наиболее известен под названиями брендов Пенплэкс и Технониколь.<br>Отлично подходит для утепления фундаментов, балконов и всего, где важно сохранить тепло.</p><img class="img-responsive" align="left" style="margin-bottom: -500px; margin-top: 100px; position: relative;" src="<?=SITE_TEMPLATE_PATH?>/images/block_text.png">
    </div>    
    </div>

</div>
</section>
<!-- <?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
        "IBLOCK_TYPE" => BXCERT_TPL_XEON_SLIDER_TYPE,
        "IBLOCK_ID" => BXCERT_TPL_XEON_SLIDER_ID,
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "ACTIVE_DATE",
        "SORT_ORDER1" => "ESC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(),
        "PROPERTY_CODE" => array(),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
    ),
    false
);?> -->

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.services.php"), array(), array("MODE" => "html"));?>
<!-- <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.portfolio.php"), array(), array("MODE" => "html"));?> -->
<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.pricing.php"), array(), array("MODE" => "html"));?>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.about.php"), array(), array("MODE" => "html"));?>

<!-- <section id="contact">
    <div class="container">
        <div class="box last">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Форма обратной связи</h1>
                    <p>Вы можете связаться с нами через форму обратной связи.</p>
                    <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
                            "USE_CAPTCHA" => "N",
                            "OK_TEXT" => "Спасибо, Ваше сообщение отправлено!",
                            "EMAIL_TO" => BXCERT_TPL_FEEDBACK_EMAIL,
                            "REQUIRED_FIELDS" => array(
                                0 => "NAME",
                                1 => "EMAIL",
                                2 => "MESSAGE",
                            ),
                            "EVENT_MESSAGE_ID" => array("7")
                        ),
                        false
                    );?>
                </div>
                <div class="col-sm-6">
                    <h1>Наши адреса</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.footer.address-1.php"), array(), array("MODE" => "html"));?>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address>
                                <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.footer.address-2.php"), array(), array("MODE" => "html"));?>
                            </address>
                        </div>
                    </div>
                    <h1>Мы в социальных сетях</h1>
                    <div class="row">
                        <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/inc.social.php"), array(), array("MODE" => "html"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section>
<div class="container">
<div class="box">
<div class="center">
<h2>Купи XPS по самой выгодной цене</h2>
<div class="plan"><p class="lead">
Мы предлагаем приобрести экструдированный пенополистирол по лучшей цене на нашем сайте, в офисе или по телефону +7 (351) 277-77-88<br><br>
Мы предоставляем гарантии от дилера и лучшие условия для каждого типа клиентов.<br><br>
У нас вы найдёте широкий ассортимент строительных материалов, в том числе экструдированный пенополистерол. У нас действуют выгодные условия доставки, разгрузки и подъема материалов на ваш объект. Мы доставляем товар в день заказа!<br><br>
Вы можете заказать звонок и наши специалисты помогут определиться с выбором.<br><br>
Вы можете купить экструзионный пенполистирол в нашем офисе Челябинск, Свердловский тракт 5 корпус 9 (Строительный центр «Прораб»)</p>
</div>
</div>
</div>
</div>
</section>