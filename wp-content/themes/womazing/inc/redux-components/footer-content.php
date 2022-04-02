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
        'title' => esc_html__('Контент футера', 'your-textdomain-here'),
        'desc' => 'Редактирование контента футера',
        'id' => 'fc',
        'subsection' => true,
        'customizer_width' => '700px',
        'icon' => 'el el-align-center',
        'fields' => array(
            array(
                'id' => 'fc-email',
                'type' => 'text',
                'title' => esc_html__('Email', 'your-textdomain-here'),
                'default' => 'hello@womazing.com'
            ),
            array(
                'id' => 'fc-socials',
                'type' => 'section',
                'title' => esc_html__('Социальные сети', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'fc-socials-image1',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка №1', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'fc-socials-link1',
                'type' => 'text',
                'title' => esc_html__('Ссылка №1', 'your-textdomain-here'),
                'default' => 'https://instagram.com/'
            ),
            array(
                'id' => 'fc-socials-image2',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка №2', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'fc-socials-link2',
                'type' => 'text',
                'title' => esc_html__('Ссылка №2', 'your-textdomain-here'),
                'default' => 'https://www.facebook.com/'
            ),
            array(
                'id' => 'fc-socials-image3',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка №3', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'fc-socials-link3',
                'type' => 'text',
                'title' => esc_html__('Ссылка №3', 'your-textdomain-here'),
                'default' => 'https://www.twitter.com'
            ),
            array(
                'id' => 'fc-image-paycard',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка платежной системы', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'fс-poly-1',
                'type' => 'text',
                'title' => esc_html__('Копирайт', 'your-textdomain-here'),
                'default' => "© Все права защищены"
            ),
            array(
                'id' => 'fс-poly-2',
                'type' => 'text',
                'title' => esc_html__('Конфиденциальность', 'your-textdomain-here'),
                'default' => 'Политика конфиденциальности'
            ),
            array(
                'id' => 'fс-poly-3',
                'type' => 'text',
                'title' => esc_html__('Оферта', 'your-textdomain-here'),
                'default' => 'Публичная оферта'
            )
        )
    )
);





