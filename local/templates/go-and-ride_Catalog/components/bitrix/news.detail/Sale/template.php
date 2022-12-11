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
$this->setFrameMode(true);
?>
<div class="header__catalog-offer">
    <div class="container">
        <div class="header__catalog-offer-wrp">
            <h2><? echo GetMessage('sale_5%')?></h2>
            <div class="header__catalog-offer-img">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="helmet">
            </div>
        </div>
    </div>
</div>
