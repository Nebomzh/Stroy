<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if (!empty($arResult)):?>
    <ul class="nav navbar-nav">
        <?foreach($arResult as $arItem):?>
            <li<?if($arItem['SELECTED']):?> class="active"<?endif;?>><a href="<?=$arItem["LINK"]."anchor"?>"><?=$arItem["TEXT"]?></a></li>
        <?endforeach;?>
 				<a href="https://www.stroyxpress.ru/catalog/uteplitel/ekstrudirovannyy_penopolistirol/" class="btn btn-success btn-lg" style="height: 200%">Каталог</a>            
    </ul>
<?endif?>