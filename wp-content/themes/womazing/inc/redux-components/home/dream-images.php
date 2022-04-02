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
        'title' => esc_html__('Галерея команды мечты', 'your-textdomain-here'),
        'id' => 'dream-gallery',
        'desc' => esc_html__('Редактирование галереи: ', 'your-textdomain-here') . '<a href="https://devs.redux.io/core-fields/gallery.html" target="_blank">https://devs.redux.io/core-fields/gallery.html</a>',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'dream-gallery-list',
                'type' => 'gallery',
                'title' => esc_html__('Добавить/Изменить галерею', 'your-textdomain-here'),
                'subtitle' => esc_html__('Создание или обновление галереи', 'your-textdomain-here'),
                'desc' => esc_html__('Галерея команды мечты', 'your-textdomain-here'),
            ),
        ),
    )
);



