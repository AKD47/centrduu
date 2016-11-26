<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 08.06.2016
 * Time: 13:14
 */
/**
 * Регистрируем тип записи "Выкупленные авто"
 */
add_action('init', 'myCustomInitClubs');

function myCustomInitClubs()
{
    $labels = array(
        'name'               => 'Клубы', // Основное название типа записи
        'singular_name'      => 'Клубы', // отдельное название записи типа Book
        'add_new'            => 'Добавить клуб',
        'add_new_item'       => 'Добавить новый клуб',
        'edit_item'          => 'Редактировать клуб',
        'new_item'           => 'Новый клуб',
        'view_item'          => 'Посмотреть клуб',
        'search_items'       => 'Найти клуб',
        'not_found'          => 'Клубов не найдено',
        'not_found_in_trash' => 'В корзине клубов не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Клубы'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'   => 'dashicons-groups',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor', 'thumbnail')
    );
    register_post_type('club', $args);
}