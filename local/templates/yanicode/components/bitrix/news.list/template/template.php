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
<div class="services-cover">
    <?php foreach ($arResult['SERVICES'] as $serviceTitle => $service): ?>
    <div class="services">
        <h2 class="services__title">
            <?php echo $serviceTitle; ?>
        </h2>
        <?php $counter = 0; ?>
        <?php foreach ($service['ITEMS'] as $item): ?>
            <?php if ($counter == 0) : ?>
                <div class="services-category">
            <?php endif; ?>
            <div class="services__item" onclick="popupService('<?= $item['NAME'] ?>')">
                <?php echo $item['NAME']; ?>
                <template id="<?= $item['NAME'] ?>">
                    <div class="popup-services-cover">
                        <div class="popup-services__title">
                            <?= $serviceTitle; ?>
                        </div>
                        <div class="popup-services__category">
                            <?= $item['NAME']; ?>
                        </div>
                        <div class="popup-services__desc">
                            <?= $item['DETAIL_TEXT']; ?>
                        </div>
                    </div>
                </template>
            </div>
            <?php $counter++; ?>
            <?php if ($counter == 4) : ?>
                </div>
                <?php $counter = 0; ?>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if ($counter > 0) : ?>
    </div>
<?php endif; ?>
</div>
<?php endforeach; ?>
</div>

<script>
    function popupService(id) {
        const element = document.getElementById(id);

        const popup = legancyPopup({
            content: element,
            title: null,
            onAfterAppend() {
            }
        });

        popup.open();
    }
</script>
