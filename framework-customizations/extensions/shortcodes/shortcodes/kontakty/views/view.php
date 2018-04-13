<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>

<section class="contacts">

    <div class="container">

        <form id="contacts-form" class="contacts__form">

            <div class="contacts__left">

                <label>Jméno a příjmení (required)</label>

                <input id="contacts-form-name" type="text" name="name" minlength="2" maxlength="100" placeholder="" required class="contacts__left--field">

                <label>E-mail (required)</label>

                <input id="contacts-form-email" type="text" name="mail" minlength="5" maxlength="100" placeholder="" required class="contacts__left--field">

                <label>Předmět</label>

                <input id="contacts-form-subject" type="text" name="subject" minlength="5" maxlength="100" placeholder="" class="contacts__left--field">

            </div>

            <div class="contacts__right">

                <label>Text zprávy</label>

                <textarea id="contacts-form-message" name="message" minlength="2" maxlength="250" required class="contacts__right--message"></textarea>

            </div>

            <input id="contacts-form-submit" type="submit" value="Odeslat" class="contacts__submit">

            <div class="contacts__links">

                <a href="mailto:<?= fw_get_db_customizer_option('email');?>" class="contacts__links--mail"><?= fw_get_db_customizer_option('email');?></a>

                <a href="tel:<?= fw_get_db_customizer_option('phone_first');?>" class="contacts__links--phone"><?= fw_get_db_customizer_option('phone_first');?></a>

            </div>

        </form>
    </div>
</section>