<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


/** @var CMain $arResult */
if ($arResult["isFormErrors"] == "Y"):?><?= $arResult["FORM_ERRORS_TEXT"]; ?><?php endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<?php if ($arResult["isFormNote"] != "Y") {
    ?>
    <?= str_replace('<form', '<form class="js-validated-form"', $arResult["FORM_HEADER"]) ?>
    <?php $count = 0;
    $checkboxCounter = 0;
    $chekboxes = 0;
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
        if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "checkbox") {
            $checkboxCounter++;
        }
    } ?>

    <?php
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
        if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "hidden") {
            echo $arQuestion["HTML_CODE"];
        } else {
            ?>
            <?php if ($arQuestion["CAPTION"] == "Название компании:") : ?>
                <div class="popup-feedback__input-cover">
                    <label for=""
                           class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                    <?= str_replace('class="inputtext"', 'class="popup-feedback__input"', $arQuestion["HTML_CODE"]) ?>
                </div>
            <?php elseif ($arQuestion["CAPTION"] == 'Опишите Вашу задачу:') : ?>
                <div class="popup-feedback__input-cover">
                    <label for=""
                           class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                    <textarea name="form_textarea_6" cols="40" rows="5" class="popup-feedback__textarea"></textarea>
                </div>
            <?php elseif ($arQuestion["CAPTION"] == 'Телефон' || $arQuestion["CAPTION"] == 'Email') : ?>
                <?php if ($count == 0): ?>
                    <div class="popup-feedback__double-column">
                <?php endif; ?>
                <?php $count++; ?>
                <div class="popup-feedback__input-cover">
                    <label for=""
                           class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                    <?php if ($arQuestion["CAPTION"] == 'Телефон') : ?>
                        <?= str_replace('class="inputtext"', 'class="popup-feedback__input mask-phone-js js-validated-field"  data-validated_name="phone" required', $arQuestion["HTML_CODE"]) ?>
                    <?php else : ?>
                        <?= str_replace('class="inputtext"', 'class="popup-feedback__input js-validated-field" data-validated_name="mail" required', $arQuestion["HTML_CODE"]) ?>
                    <?php endif ?>
                </div>
                <?php if ($count == 2): ?>
                    </div>
                <?php endif; ?>
            <?php elseif ($arQuestion["STRUCTURE"]["0"]["FIELD_TYPE"] != "checkbox"): ?>
                <div class="popup-feedback__input-cover">
                    <label for=""
                           class="popup-feedback__input-label"><?= $arQuestion["CAPTION"] ?><?php if ($arQuestion["REQUIRED"] == "Y"): ?><?= $arResult["REQUIRED_SIGN"]; ?><?php endif; ?></label>
                    <?= str_replace('class="inputtext"', 'class="popup-feedback__input js-validated-field" data-validated_name="name" required', $arQuestion["HTML_CODE"]) ?>
                </div>
            <?php endif; ?>
            <?php if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'checkbox') :
                if ($chekboxes == 0) :
                    echo '<div class="popup-feedback__consent">';
                endif;
                $chekboxes++ ?>
                <div class="popup-feedback__consent-form-wrapper">
                    <?= str_replace('for="' . $arQuestion['STRUCTURE'][0]['ID'] . '"', 'for="' . $arQuestion['STRUCTURE'][0]['ID'] . '" class="popup-feedback__consent-form" ' . '<a="" href="./article-data-processing.html" target="_blank">' . $arQuestion["CAPTION"], str_replace('value="' . $arQuestion['STRUCTURE'][0]['ID'] . '"', 'value="' . $arQuestion['STRUCTURE'][0]['ID'] . '" class="popup-feedback__consent-input" checked="checked"', $arQuestion["HTML_CODE"])) ?>
                </div>
                <?php if ($chekboxes == $checkboxCounter):
                echo '</div>';
            endif;
            endif;
        }
    } ?>


    <div class="popup-feedback__button-cover">
        <input class="button button_modal-gold js-button-submit" <?php if ($arResult["isFormErrors"] == "N") : ?> <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?><?php endif ?>
               type="submit"
               name="web_form_submit"
               value="Отправить">

    </div>


    <?= $arResult["FORM_FOOTER"] ?>
    <?php
}
?>