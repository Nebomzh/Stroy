<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
        <footer id="footer">
        <div class="container">
            <div class="foottop">
                <div class="infoblock">
                    <div class="phones">
                        <span class="phone_wrap">
                            <span class="icon-phone"></span>
                                <span class="phone_text">
                                    <?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PHONE")));?>
                                </span>
                        </span>
                        <span class="order_wrap_btn">
                            <?if( \Bitrix\Main\Config\Option::get("aspro.mshop", "SHOW_CALLBACK", "Y") != "N"):?>
                            <span class="callback_btn"><?=GetMessage("CALLBACK")?></span>
                            <?endif;?>
                        </span>
                    </div>
                    <div class="adress">
                        <span class="icon-map-marker"></span>
                        <span class="adress_text1">Челябинск, Свердловский тракт, 5, корпус 9<br></span>
                        <span class="adress_text2">Строительный центр «Прораб», цокольный этаж</span>
                    </div>
                </div>
                <div class="social">
                    <?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/social.info.mshop.default.php');?>
                </div>
            </div>    
            <div class="pay_system_icons">
                <?$APPLICATION->IncludeFile(SITE_DIR."include/pay_system_icons.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PHONE")));?>
            </div>
        </div>
        </footer>
        <?$APPLICATION->ShowPanel();?>
    </body>
</html>