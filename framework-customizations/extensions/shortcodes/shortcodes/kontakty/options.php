<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'form_name_title' => array(
        'type' => 'text',
        'label' => __('Form name field title', '{domain}'),
        'help' => __('adding text', '{domain}'),
        'value' => 'Jméno a příjmení (required)',
    ),
    'form_email_title' => array(
        'type' => 'text',
        'label' => __('Form email field title', '{domain}'),
        'help' => __('adding text', '{domain}'),
        'value' => 'E-mail (required)',
    ),
    'form_subject_title' => array(
        'type' => 'text',
        'label' => __('Form subject field title', '{domain}'),
        'help' => __('adding text', '{domain}'),
        'value' => 'E-mail (required)',
    ),
    'form_textarea_title' => array(
        'type' => 'text',
        'label' => __('Form textarea field title', '{domain}'),
        'help' => __('adding text', '{domain}'),
        'value' => 'Text zprávy',
    ),
];