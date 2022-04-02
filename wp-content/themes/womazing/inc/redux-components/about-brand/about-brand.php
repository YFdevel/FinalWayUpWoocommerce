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
        'title' => esc_html__('Cтраница О бренде', 'your-textdomain-here'),
        'id' => 'brand',
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'brand-text-btn',
                'type' => 'text',
                'title' => esc_html__('Текст на кнопке', 'your-textdomain-here'),
                'default' => 'Перейти в магазин'
            ),
            array(
                'id' => 'brand-s1',
                'type' => 'section',
                'title' => esc_html__('Верхняя секция', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'brand-s1-image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Фото верхней секции', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'brand-s1-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок верхней секции', 'your-textdomain-here'),
                'default' => '  Идея и женщина'
            ),
            array(
                'id' => 'brand-s1-desc1',
                'type' => 'textarea',
                'title' => esc_html__('Описание №1 верхней секции', 'your-textdomain-here'),
                'default' => 'Womazing была основана в 2010-ом и стала одной из самых успешных компаний нашей страны.
                            Как и многие итальянские фирмы, Womazing остаётся семейной компанией, хотя ни один из
                            членов семьи не является модельером.'
            ),
            array(
                'id' => 'brand-s1-desc2',
                'type' => 'textarea',
                'title' => esc_html__('Описание №2 верхней секции', 'your-textdomain-here'),
                'default' => 'Мы действуем по успешной формуле, прибегая к услугам известных модельеров для создания
                            своих коллекций. Этот метод был описан критиком моды Колином Макдауэллом как форма
                            дизайнерского со-творчества, характерная для ряда итальянских prêt-a-porter компаний.'
            ),
            array(
                'id' => 'brand-s2',
                'type' => 'section',
                'title' => esc_html__('Нижняя секция', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'brand-s2-image',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Фото нижней секции', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id' => 'brand-s2-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок нижней секции', 'your-textdomain-here'),
                'default' => 'Магия в деталях'
            ),
            array(
                'id' => 'brand-s2-desc1',
                'type' => 'textarea',
                'title' => esc_html__('Описание №1 нижней секции', 'your-textdomain-here'),
                'default' => ' Первый магазин Womazing был открыт в маленьком городке на севере страны в 2010-ом году.
                            Первая коллекция состояла из двух пальто и костюма, которые были копиями парижских моделей.'
            ),
            array(
                'id' => 'brand-s2-desc2',
                'type' => 'textarea',
                'title' => esc_html__('Описание №2 нижней секции', 'your-textdomain-here'),
                'default' => 'Несмотря на то, что по образованию основательница была адвокатом, ее семья всегда была тесно
                            связана с шитьём (прабабушка основательницы шила одежду для женщин, а мать основала
                            профессиональную школу кроя и шитья). Стремление производить одежду для масс несло в себе
                            большие перспективы, особенно в то время, когда высокая мода по-прежнему доминировала, а
                            рынка качественного prêt-a-porter попросту не существовало.'
            ),


        ),
    )
);



