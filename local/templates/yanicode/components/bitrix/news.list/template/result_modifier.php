<?php
$arResult['SERVICES'] = [];
foreach ($arResult['ITEMS'] as $arItem) {
    $serviceValue = $arItem['PROPERTIES']['SERVICES']['VALUE'][0];
    if (!isset($arResult['SERVICES'][$serviceValue])) {
        $arResult['SERVICES'][$serviceValue]['ITEMS'] = [];
    }
    $arResult['SERVICES'][$serviceValue]['ITEMS'][] = $arItem;
}

