<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Контент шапки сайта', 'your-textdomain-here'),
        'desc' => 'Редактирование контента шапки сайта',
        'id' => 'header-content',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'header-content-tel-text',
                'type' => 'text',
                'title' => esc_html__('Телефон', 'your-textdomain-here'),
                'default' => '+7 (495) 823-54-12',
            ),
            array(
                'id' => 'header-content-tel-img',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка телефона', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
            array(
                'id' => 'header-content-tel-img-bcg',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка телефона с фоном', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
            array(
                'id' => 'header-content-img-cart',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка корзины', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
        )
    )
);

