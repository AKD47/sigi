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
    'girl_name' => array(
        'type' => 'text',
        'label' => __('Girl name and age', '{domain}'),
        'help' => __('adding name and age', '{domain}'),
        'value' => '',
    ),
//    'girl_place' => array(
//        'type' => 'text',
//        'label' => __('Girl location', '{domain}'),
//        'help' => __('adding location', '{domain}'),
//        'value' => '',
//    ),
    'girl_phone' => array(
        'type' => 'text',
        'label' => __('Girl phonenumber', '{domain}'),
        'help' => __('adding phonenumber', '{domain}'),
        'value' => '',
    ),
    'girl_slider' => array(
        'type' => 'multi-upload',
        'label' => __('Girl photos', '{domain}'),
        'help' => __('adding girl photos', '{domain}'),
        'images_only' => true,
    ),
    'girl_text_title' => array(
        'type' => 'text',
        'label' => __('Girl textblock title', '{domain}'),
        'help' => __('adding title', '{domain}'),
        'value' => '',
    ),
    'girl_text_descr' => array(
        'type' => 'textarea',
        'label' => __('Girl textblock', '{domain}'),
        'help' => __('adding text', '{domain}'),
        'value' => '',
    ),
    'girl_descr' => array(
        'type' => 'addable-popup',
        'label' => __('Description of the girl', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'label' => __('Adding parameter', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
            'value' => array(
                'label' => __('Adding value', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
        ),
    ),
//    'girl_langtitle' => array(
//        'type' => 'text',
//        'label' => __('language', '{domain}'),
//        'value' => '',
//    ),
    'girl_lang' => array(
        'type' => 'multi-upload',
        'label' => __('language skills', '{domain}'),
        'help' => __('adding languages', '{domain}'),
        'images_only' => true,
    ),
    'girl_services_title' => array(
        'type' => 'text',
        'label' => __('Girl services title', '{domain}'),
        'help' => __('adding title', '{domain}'),
        'value' => '',
    ),
    'girl_services' => array(
        'type' => 'addable-popup',
        'label' => __('Description of the girl', '{domain}'),
        'template' => '{{- value }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'checkbox' => array(
                'type'  => 'checkbox',
                'value' => false, // checked/unchecked
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar', 'value' => 'active' ),
                'label' => __('', '{domain}'),
                'text'  => __('Yes', '{domain}'),
            ),
            'value' => array(
                'label' => __('Adding value', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
        ),
    ),
    'girl_schedule' => array(
        'type' => 'addable-popup',
        'label' => __('Girl schedule', '{domain}'),
        'template' => '{{- day }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'day' => array(
                'type' => 'text',
                'value' => '',
            ),
            'value' => array(
                'type' => 'text',
                'value' => '',
            ),
        ),
    ),
];