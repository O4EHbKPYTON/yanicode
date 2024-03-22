<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<style>
    .services__item {
        white-space: nowrap;
    }
</style>

        <div class="services">
            <h2 class="services__title">
                <?= $arResult['NAME'] ?>
            </h2>
            <div class="services-category">
                <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?php if ($arItem['CODE'] == 1): ?>
                        <div class="services__item" data-popup="services-popup"><?= $arItem['NAME'] ?></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="services-category">
                <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?php if ($arItem['CODE'] == 2): ?>
                        <div class="services__item" data-popup="services-popup"><?= $arItem['NAME'] ?></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="services-category">
                <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?php if ($arItem['CODE'] == 3): ?>
                        <div class="services__item" data-popup="services-popup"><?= $arItem['NAME'] ?></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>




