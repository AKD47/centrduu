<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'slides' => array(
        'type'            => 'addable-box',
        'label'           => __( 'Слайдер', '{domain}' ),
        'box-options'     => array(
            'image'  => array(
                'type'  => 'upload',
	            'images_only' => true,
                'label' => __( 'Фотография', '{domain}' ),
            ),
            'descr'  => array(
                'type'  => 'wp-editor',
                'label' => __( 'Текст слайда', '{domain}' ),
            ),
        ),
        'template'        => 'Слайд', // box title
        'box-controls'    => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit'           => 0, // limit the number of boxes that can be added
        'add-button-text' => __( 'Добавить', '{domain}' ),
        'sortable'        => true,
    )
);