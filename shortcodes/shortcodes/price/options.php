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
    'price_title' => array(
        'type' => 'text',
        'label' => __('Title', '{domain}'),
        'desc'  => __('add title', '{domain}'),
        'value' => '',
    ),
    'price_subtitle' => array(
        'type' => 'text',
        'label' => __('Price title', '{domain}'),
        'desc'  => __('add title', '{domain}'),
        'value' => '',
    ),
    'price_textblock' => array(
        'type' => 'addable-popup',
        'label' => __('Adding textblock', '{domain}'),
        'desc'  => __('adding textblock', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('text', '{domain}'),
                'desc'  => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'private_subtitle' => array(
        'type' => 'text',
        'label' => __('Private title', '{domain}'),
        'desc'  => __('add title', '{domain}'),
        'value' => '',
    ),
    'private_textblock' => array(
        'type' => 'addable-popup',
        'label' => __('Adding textblock', '{domain}'),
        'desc'  => __('adding textblock', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('text', '{domain}'),
                'desc'  => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
];