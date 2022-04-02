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
        'title' => esc_html__('Контент верхней секции', 'your-textdomain-here'),
        'desc' => 'Редактирование контента верхней секции главной страницы',
        'id' => 'home-top-section',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'home-top-section-title1',
                'type' => 'text',
                'title' => esc_html__('Заголовок слайда 1', 'your-textdomain-here'),
                'default' => 'Новые поступления в этом сезоне',
            ),
            array(
                'id' => 'home-top-section-desc1',
                'type' => 'textarea',
                'title' => esc_html__('Описание слайда 1', 'your-textdomain-here'),
                'default' => 'Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.',
            ),
            array(
                'id' => 'home-top-section-title2',
                'type' => 'text',
                'title' => esc_html__('Заголовок слайда 2', 'your-textdomain-here'),
                'default' => 'Мы заждались тебя. Что-то новенькое.',
            ),
            array(
                'id' => 'home-top-section-desc2',
                'type' => 'textarea',
                'title' => esc_html__('Описание слайда 2', 'your-textdomain-here'),
                'default' => 'Надоело искать себя в сером городе? Настало время новых идей, свежих
                                красок и вдохновения с Womazing!',
            ),
            array(
                'id' => 'home-top-section-title3',
                'type' => 'text',
                'title' => esc_html__('Заголовок слайда 3', 'your-textdomain-here'),
                'default' => 'Включай новый сезон с WOMAZING',
            ),
            array(
                'id' => 'home-top-section-desc3',
                'type' => 'textarea',
                'title' => esc_html__('Описание слайда 3', 'your-textdomain-here'),
                'default' => 'Мы обновили ассортимент - легендарные коллекции и новинки от
                                отечественных дизайнеров',
            ),
            array(
                'id' => 'home-top-section-link-arrow',
                'type' => 'text',
                'title' => esc_html__('Ссылка на секцию', 'your-textdomain-here'),
                'default' => '#collection',
            ),
            array(
                'id' => 'home-top-section-link-btn',
                'type' => 'text',
                'title' => esc_html__('Ссылка на страницу', 'your-textdomain-here'),
                'default' => '#',
            ),
            array(
                'id' => 'home-top-section-image-arrow',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Изображение на кнопке', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
            array(
                'id' => 'home-top-section-text-btn',
                'type' => 'text',
                'title' => esc_html__('Текст на кнопке', 'your-textdomain-here'),
                'default' => 'Открыть магазин',
            ),

        )
    )
);
