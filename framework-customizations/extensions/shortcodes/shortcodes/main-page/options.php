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
    'top_banner_bg' => array(
        'type' => 'upload',
        'label' => __('Top banner background', '{domain}'),
        'help' => __('adding a title to a page', '{domain}'),
        'images_only' => true,
    ),
    'top_banner_title' => array(
        'type' => 'text',
        'label' => __('Top banner title', '{domain}'),
        'help' => __('adding a picture to the main banner', '{domain}'),
        'value' => '',
    ),
    'top_banner_descr' => array(
        'type' => 'textarea',
        'label' => __('Top banner text', '{domain}'),
        'help' => __('adding a text to the main banner under banner title', '{domain}'),
        'value' => '',
    ),
];