<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/**
 * @var CMain $APPLICATION
 */ ?>
</main>
<footer class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <a href="/index.php" class="footer__logo">
                    <img width="232" height="71" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/svg/logo-yanicode.svg"
                         alt="yanicode">
                </a>
                <?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom",
		"MENU_THEME" => "site"
	),
	false
); ?>
                <div class="footer__law">
                    <?php
                    $APPLICATION->IncludeFile(
                        INCLUDE_PATH . '/law.php',
                        [
                        ],
                        ['MODE' => 'text']);
                    ?>
                </div>
            </div>
        </div>
</footer>



