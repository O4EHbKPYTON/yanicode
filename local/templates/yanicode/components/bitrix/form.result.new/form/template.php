<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


if ($arResult["isFormErrors"] == "Y"):?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>

<?php $count = 0; ?>
<form action="" class="js-validated-form">

    <?php foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>
        <?php if ($arQuestion["CAPTION"] == 'Название компании:' || $arQuestion["CAPTION"] == 'Опишите Вашу задачу:') : ?>
            <div class="popup-feedback__input-cover">
                <label for=""
                       class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                <?= str_replace('class="inputtext" name="form_text_1" value="">', '<input type="text" class="popup-feedback__input">', '<input type="text" class="inputtext" name="form_text_1" value="">') ?>
            </div>
        <?php elseif ($arQuestion["CAPTION"] == 'Телефон' || $arQuestion["CAPTION"] == 'Email') : ?>
            <?php if ($count == 0): ?>
                <div class="popup-feedback__double-column">
            <?php endif; ?>
            <?php $count++; ?>
            <div class="popup-feedback__input-cover">
                <label for=""
                       class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                <?= str_replace('class="inputtext" name="form_text_1" value="">', 'class="popup-feedback__input js-validated-field" data-validated_name="name">', '<input type="text" class="inputtext" name="form_text_1" value="">') ?>
            </div>
            <?php if ($count == 2): ?>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="popup-feedback__input-cover">
                <label for=""
                       class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                <?= str_replace('class="inputtext" name="form_text_1" value="">', 'class="popup-feedback__input js-validated-field" data-validated_name="name">', '<input type="text" class="inputtext" name="form_text_1" value="">') ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>


    <div class="popup-feedback__consent">
        <div class="popup-feedback__consent-form-wrapper">
            <input class="popup-feedback__consent-input" id="consent1" type="checkbox" checked="checked"/>
            <label class="popup-feedback__consent-form" for="consent1">
                <a href="./article-data-processing.html" target="_blank">
                    Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в
                    соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и
                    для целей, определенных в Согласии на обработку персональных данных.
                </a>
            </label>
        </div>
        <div class="popup-feedback__consent-form-wrapper">
            <input class="popup-feedback__consent-input" id="consent2" type="checkbox" checked="checked"/>
            <label class="popup-feedback__consent-form" for="consent2">
                <a href="./article-privacy-policy.html" target="_blank">
                    Оставляя данные на Сайте, заполняя регистрационную форму, Вы соглашаетесь с настоящей Политикой
                    конфиденциальности.
                </a>
            </label>
        </div>
    </div>

    <div class="popup-feedback__button-cover">
        <input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit"
                                                                                          class="button button_modal-gold js-button-submit"
                                                                                          name="web_form_submit"
                                                                                          value="Отправить">

    </div>
</form>

