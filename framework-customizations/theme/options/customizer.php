<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'panel_site_settings' => array(
        'title'   => __( 'Настройки сайта', '{domain}' ),
        'options' => array(
            'phone'   => array(
                'type'  => 'text',
                'label' => __( 'Телефон', '{domain}' ),
                'value' => '(062)335-38-32'
            ),
            'email' => array(
                'type'  => 'text',
                'label' => __( 'Email', '{domain}' ),
                'value' => 'liliadonetsk@mail.ru'
            ),
            'address' => array(
		        'type'  => 'text',
		        'label' => __( 'Адрес', '{domain}' ),
		        'value' => 'ДНР 83001, город Донецк, Ворошиловский район, улица 50-летия СССР, дом 108'
	        ),
            'vk' => array(
	            'type'  => 'text',
	            'label' => __( 'Ссылка на Вконтакте', '{domain}' ),
	            'value' => 'https://vk.com/club2102830'
            ),
        ),
    ),
);