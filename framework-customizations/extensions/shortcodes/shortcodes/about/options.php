<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'tabs' => array(
	    'type' => 'addable-popup',
        'label'           => __( 'Секции', '{domain}' ),
	    'size' => 'large', // small, medium, large
	    'limit' => 0, // limit the number of popup`s that can be added
        'popup-options'     => array(
	        'title'  => array(
		        'type'  => 'text',
		        'label' => __( 'Название вкладки', '{domain}' ),
	        ),
            'descr'  => array(
                'type'  => 'wp-editor',
                'label' => __( 'Текст вкладки', '{domain}' ),
                'size' => 'large', // small, large
                'editor_height' => 400,
            ),
        ),
        'template'        => '{{- title}}', // box title
        'add-button-text' => __( 'Добавить', '{domain}' ),
        'sortable'        => true,
    )
);