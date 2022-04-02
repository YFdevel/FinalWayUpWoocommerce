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
        'title' => esc_html__('Что для нас важно', 'your-textdomain-here'),
        'id' => 'important',
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'important-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок', 'your-textdomain-here'),
                'default' => 'Что для нас важно'
            ),

            array(
                'id' => 'important-card1',
                'type' => 'section',
                'title' => esc_html__('Карточка №1', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'important-card1-image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Фото №1', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'important-card1-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок №1', 'your-textdomain-here'),
                'default' => 'Качество'
            ),
            array(
                'id' => 'important-card1-desc',
                'type' => 'textarea',
                'title' => esc_html__('Описание №1', 'your-textdomain-here'),
                'default' => 'Наши профессионалы работают на лучшем оборудовании для пошива одежды беспрецедентного качества'
            ),
            array(
                'id' => 'important-card2',
                'type' => 'section',
                'title' => esc_html__('Карточка №2', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'important-card2-image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Фото №2', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'important-card2-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок №2', 'your-textdomain-here'),
                'default' => 'Скорость'
            ),
            array(
                'id' => 'important-card2-desc',
                'type' => 'textarea',
                'title' => esc_html__('Описание №2', 'your-textdomain-here'),
                'default' => 'Наши профессионалы работают на лучшем оборудовании для пошива одежды беспрецедентного качества'
            ),
            array(
                'id' => 'important-card3',
                'type' => 'section',
                'title' => esc_html__('Карточка №3', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'important-card3-image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Фото №3', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'important-card3-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок №3', 'your-textdomain-here'),
                'default' => 'Ответственность'
            ),
            array(
                'id' => 'important-card3-desc',
                'type' => 'textarea',
                'title' => esc_html__('Описание №3', 'your-textdomain-here'),
                'default' => 'Мы заботимся о людях и планете. Безотходное производство и комфортные условия труда - все это Womazing'
            ),
        ),
    )
);


