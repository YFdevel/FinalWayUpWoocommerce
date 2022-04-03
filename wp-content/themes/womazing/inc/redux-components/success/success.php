<?php
/**
 * Redux Framework section config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Cтраница Подтверждение заказа', 'your-textdomain-here'),
        'id' => 'success',
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'success-subtitle',
                'type' => 'text',
                'title' => esc_html__('Подзаголовок', 'your-textdomain-here'),
                'default' => ' Заказ успешно оформлен'
            ),

            array(
                'id' => 'success-text',
                'type' => 'text',
                'title' => esc_html__('Текст', 'your-textdomain-here'),
                'default' => 'Мы свяжемся с вами в ближайшее время!'
            ),
            array(
                'id' => 'success-btn-text',
                'type' => 'text',
                'title' => esc_html__('Текст кнопки', 'your-textdomain-here'),
                'default' => 'Перейти на главную'
            ),
            array(
                'id' => 'success-image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Изображение', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),

        ),
    )
);




