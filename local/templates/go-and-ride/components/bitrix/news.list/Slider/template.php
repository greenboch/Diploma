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
<section class="city-bike">
    <div class="container">
        <h2><? echo GetMessage('city_bicycles')?></h2>
        <div class="slider slick-city-slider">
<?foreach($arResult["ITEMS"] as $arItem):?>


                <div class="slider__item">
                    <div class="city-bike__slide-wrp">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="city-bike">
                        <div class="city-bike__content">
                            <p><?echo strip_tags($arItem["PREVIEW_TEXT"], '<br>');?></p>
                            <a href="/catalog/"><? echo GetMessage('to_section')?></a>
                        </div>
                    </div>
                </div>


<?endforeach;?>
        </div>
    </div>
</section>


