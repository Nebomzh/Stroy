<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<?foreach($arResult["ITEMS"] as $i=>$arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <div class="element" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="center">
                <?if (is_array($arItem['PREVIEW_PICTURE'])):?>
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" width="128" height="128" alt="<?=$arItem["NAME"]?>"/>
                <?else:?>
                    <i class="icon-apple icon-md icon-color1"></i>
                <?endif;?>
                <p><h4><?echo $arItem["NAME"]?></h4></p>
                <p><?=$arItem["PREVIEW_TEXT"]?></p>
            </div>
        </div>
<?endforeach;?>