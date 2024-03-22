<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


if ($arResult["isFormErrors"] == "Y"):?><?= $arResult["FORM_ERRORS_TEXT"]; ?><?php endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<?php if ($arResult["isFormNote"] != "Y") {
    ?>
    <?= str_replace('<form', '<form class="js-validated-form"', $arResult["FORM_HEADER"]) ?>
    <?php $count = 0; ?>
    <?php
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
            echo $arQuestion["HTML_CODE"];
        } else {
            ?>

            <?php if ($arQuestion["CAPTION"] == 'Название компании:') : ?>
                <div class="popup-feedback__input-cover">
                    <label for=""
                           class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                    <?= str_replace('class="inputtext"', 'class="popup-feedback__input"', $arQuestion["HTML_CODE"]) ?>
                </div>
                <?php elseif ($arQuestion["CAPTION"] == 'Опишите Вашу задачу:') : ?>
                    <div class="popup-feedback__input-cover">
                        <label for=""
                               class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                        <?= str_replace('class="inputtextarea"', 'class="popup-feedback__textarea"', $arQuestion["HTML_CODE"]) ?>
                    </div>
                <?php elseif ($arQuestion["CAPTION"] == 'Телефон' || $arQuestion["CAPTION"] == 'Email') : ?>
                    <?php if ($count == 0): ?>
                        <div class="popup-feedback__double-column">
                    <?php endif; ?>
                    <?php $count++; ?>
                    <div class="popup-feedback__input-cover">
                        <label for=""
                               class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                        <?php if ($arQuestion["CAPTION"] == 'Телефон') :?>
                        <?= str_replace('class="inputtext"', 'class="popup-feedback__input mask-phone-js js-validated-field" data-validated_name="name"', $arQuestion["HTML_CODE"]) ?>
                        <?php else :?>
                        <?= str_replace('class="inputtext"', 'class="popup-feedback__input js-validated-field" data-validated_name="name"', $arQuestion["HTML_CODE"]) ?>
                        <?php endif?>
                    </div>
                    <?php if ($count == 2): ?>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="popup-feedback__input-cover">
                        <label for=""
                               class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                        <?= str_replace('class="inputtext"', 'class="popup-feedback__input js-validated-field" data-validated_name="name"', $arQuestion["HTML_CODE"]) ?>
                    </div>
                <?php endif; ?>
                <?php
            }
    } ?>


    <div class="popup-feedback__consent">
        <div class="popup-feedback__consent-form-wrapper">
            <input class="popup-feedback__consent-input" id="consent1" type="checkbox" checked="checked"/>
            <label class="popup-feedback__consent-form" for="consent1">
                <a href="./article-data-processing.html" target="_blank">
                    Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в
                    соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на
                    условиях и
                    для целей, определенных в Согласии на обработку персональных данных.
                </a>
            </label>
        </div>
        <div class="popup-feedback__consent-form-wrapper">
            <input class="popup-feedback__consent-input" id="consent2" type="checkbox" checked="checked"/>
            <label class="popup-feedback__consent-form" for="consent2">
                <a href="./article-privacy-policy.html" target="_blank">
                    Оставляя данные на Сайте, заполняя регистрационную форму, Вы соглашаетесь с настоящей
                    Политикой
                    конфиденциальности.
                </a>
            </label>
        </div>
    </div>

    <div class="popup-feedback__button-cover">
        <input class="button button_modal-gold js-button-submit" <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?>
               type="submit"
               name="web_form_submit"
               value="Отправить">

    </div>


    <?= $arResult["FORM_FOOTER"] ?>
    <?php
}
?>
