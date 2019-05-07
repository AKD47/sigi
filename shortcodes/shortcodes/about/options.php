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
    'about' => array(
        'type' => 'addable-popup',
        'label' => __('Adding text', '{domain}'),
        'desc'  => __('adding textblock', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 5, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text' => array(
                'type' => 'textarea',
                'label' => __('text', '{domain}'),
                'desc'  => __('add text', '{domain}'),
                'value' => '',
            ),
        ),
    ),
];