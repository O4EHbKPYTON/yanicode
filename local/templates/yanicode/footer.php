<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/**
 * @var CMain $APPLICATION
 */ ?>

<footer class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <a href="/index.php" class="footer__logo">
                    <img width="232" height="71" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/logo-yanicode.svg"
                         alt="yanicode">
                </a>
                <?php $APPLICATION->IncludeComponent("bitrix:menu", "bot", array(
                    "ROOT_MENU_TYPE" => "bottom",    // Тип меню для первого уровня
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => ".default",
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "MENU_CACHE_GET_VARS" => "",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                    false
                ); ?>

                <div class="footer__law">
                    <?php
                    $APPLICATION->IncludeFile(
                        INCLUDE_PATH . '/html/law.php',
                        [
                        ],
                        ['MODE' => 'text']);
                    ?>
                </div>
            </div>
        </div>
</footer>



