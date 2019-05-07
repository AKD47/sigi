<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'panel_1' => array(
		'title'   => __( 'Contacts', '{domain}' ),
		'options' => array(
			'phone_first' => array(
				'type'  => 'text',
				'label' => __( 'add phone number', '{domain}' ),
                'value' => '+420 724 360 835',
			),
			'address' => array(
				'type'  => 'textarea',
				'label' => __( 'add post address', '{domain}' ),
                'value' => 'Vyvysen.573 Praha 5 - Lipence 155 31',
			),
			'email' => array(
				'type'  => 'text',
				'label' => __( 'add email address', '{domain}' ),
                'value' => 'horst@sigiteam.cz',
			),
		),
	),
);