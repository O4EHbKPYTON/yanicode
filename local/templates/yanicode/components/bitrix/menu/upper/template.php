<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */


if (empty($arResult["ALL_ITEMS"]))
    return;?>

        <nav class="nav-list">
            <?php foreach($arResult["ALL_ITEMS"] as $arItem):?>
                <a href="<?= $arItem['LINK']?>" class="nav-list__item"><?=$arItem['TEXT']?></a>
            <?php endforeach;?>
        </nav>

