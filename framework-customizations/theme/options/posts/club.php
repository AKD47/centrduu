<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
//fw_print( fw_get_db_post_option(get_the_ID(),'services') );
$options = array(
    'main' => array(
        'type'    => 'box',
        'title'   => __( 'Данные о клубе', '{domain}' ),
        'options' => array(
            'address' => array(
                'type' => 'text',
                'label' => __('Адрес', '{domain}'),
            ),
            'phone' => array(
	            'type' => 'text',
	            'label' => __('Телефон', '{domain}'),
            ),
            'email' => array(
	            'type' => 'text',
	            'label' => __('Почта', '{domain}'),
            ),
            'whours' => array(
	            'type' => 'text',
	            'label' => __('Режим работы', '{domain}'),
            ),
            'vk' => array(
                'type' => 'text',
                'label' => __('Ссылка на Вконтакте', '{domain}'),
                'value' => '#'
            ),
        ),
    ),
);