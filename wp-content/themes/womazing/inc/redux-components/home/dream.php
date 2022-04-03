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
        'title' => esc_html__('Контент команды мечты', 'your-textdomain-here'),
        'desc' => 'Редактирование контента команды мечты',
        'id' => 'dream',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
            array(
                'id' => 'dream-section-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок основной', 'your-textdomain-here'),
                'default' => 'Команда мечты Womazing',
            ),
            array(
                'id' => 'dream-title2',
                'type' => 'text',
                'title' => esc_html__('Заголовок 2', 'your-textdomain-here'),
                'default' => 'Для каждой',
            ),
            array(
                'id' => 'dream-desc1',
                'type' => 'textarea',
                'title' => esc_html__('Описание 1', 'your-textdomain-here'),
                'default' => 'Каждая девушка уникальна. Однако, мы схожи в миллионе мелочей.',
            ),
            array(
                'id' => 'dream-desc2',
                'type' => 'textarea',
                'title' => esc_html__('Описание 2', 'your-textdomain-here'),
                'default' => 'Womazing ищет эти мелочи и создает прекрасные вещи, которые выгодно подчеркивают достоинства каждой девушки.',
            ),
            array(
                'id' => 'dream-link-text',
                'type' => 'text',
                'title' => esc_html__('Текст ссылки', 'your-textdomain-here'),
                'default' => 'Подробнее о бренде',
            ),
            array(
                'id' => 'dream-link-dir',
                'type' => 'text',
                'title' => esc_html__('Ссылка', 'your-textdomain-here')
            ),
            array(
                'id' => 'dream-image-arrow-prev',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Стрелка влево', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
            array(
                'id' => 'dream-image-arrow-next',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Стрелка вправо', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
        )
    )
);

