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
        'title' => esc_html__('Фотографии верхней секции', 'your-textdomain-here'),
        'desc' => 'Редактирование фото верхней секции главной страницы',
        'id' => 'home-top-section-foto',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'home-top-section-foto-image-little-left',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Маленькое фото слева', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
            array(
                'id' => 'home-top-section-foto-image-little-right',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Маленькое фото справа', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),

        )
    )
);

