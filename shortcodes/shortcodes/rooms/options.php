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
    'room' => array(
        'type' => 'addable-popup',
        'label' => __('Adding room', '{domain}'),
        'desc'  => __('adding room', '{domain}'),
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
            'photo' => array(
                'type' => 'upload',
                'label' => __('Photo', '{domain}'),
                'desc'  => __('Add photo', '{domain}'),
                'images_only' => true,
            ),
        ),
    ),
];