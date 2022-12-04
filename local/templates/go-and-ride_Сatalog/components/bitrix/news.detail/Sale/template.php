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
<section class="sale">
    <div class="container sale__wrp">
        <h2>Скидка 5%</h2>
        <div class="sale__img-wrp">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="helmet">
        </div>
    </div>
</section>