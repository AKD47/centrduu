<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'tabs' => array(
        'type' => 'addable-popup',
        'label' => __('Секции', '{domain}'),
        'size' => 'large', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Название вкладки', '{domain}'),
            ),
            'descr' => array(
                'type' => 'wp-editor',
                'label' => __('Текст вкладки', '{domain}'),
                'size' => 'large', // small, large
                'editor_height' => 400,
            ),
            'img-links' => array(
                'type' => 'addable-popup',
                'label' => __('Документ', '{domain}'),
                'size' => 'large', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'popup-options' => array(
                    'link' => array(
                        'type' => 'text',
                        'label' => __('Ссылка', '{domain}'),
                    ),
                    'img' => array(
                        'type' => 'upload',
                        'label' => __('Картинка документа', '{domain}'),                                       
                        'images_only' => true,
                    ),
                    'document' => array(
                        'type' => 'upload',
                        'label' => __('Исходник документа', '{domain}'),
                        'images_only' => false,
                        'files_ext' => array( 'doc', 'pdf'),
                    ),
                ),
                'template' => '{{- link}}', // box title
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
            )
        ),
        'template' => '{{- title}}', // box title
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
    )
);