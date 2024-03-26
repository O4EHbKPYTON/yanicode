<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("success");
?>
<?php
$APPLICATION->IncludeFile(
    INCLUDE_PATH . '/serviceSuccess.php',
    [
    ],
    ['MODE' => 'html']);
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>