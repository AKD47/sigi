<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'panel_1' => array(
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => array(
			'phone_1' => array(
				'type'  => 'text',
				'label' => __( 'Номер', '{domain}' ),
			),
			'phone_2' => array(
				'type'  => 'text',
				'label' => __( 'Номер', '{domain}' ),
			),
			'address' => array(
				'type'  => 'text',
				'label' => __( 'Адрес', '{domain}' ),
			),
			'email' => array(
				'type'  => 'text',
				'label' => __( 'Электронный адрес', '{domain}' ),
			),
		),
	),
);