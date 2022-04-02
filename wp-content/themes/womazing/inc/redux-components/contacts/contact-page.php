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
        'title' => esc_html__('Cтраница Контакты', 'your-textdomain-here'),
        'id' => 'contact',
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'contact-form-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок формы', 'your-textdomain-here'),
                'default' => ' Напишите нам'
            ),
            array(
                'id' => 'contact-s1',
                'type' => 'section',
                'title' => esc_html__('Секция 1', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id' => 'contact-s1-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок секции 1', 'your-textdomain-here'),
                'default' => '  Телефон'
            ),

            array(
                'id' => 'contact-s2',
                'type' => 'section',
                'title' => esc_html__('Секция 2', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),

            array(
                'id' => 'contact-s2-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок секции 2', 'your-textdomain-here'),
                'default' => 'E-mail'
            ),
            array(
                'id' => 'contact-s2-text',
                'type' => 'text',
                'title' => esc_html__('Текст ссылки секции 2', 'your-textdomain-here'),
                'default' => 'info@sitename.com'
            ),
            array(
                'id' => 'contact-s2-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка секции 2', 'your-textdomain-here'),
                'default' => 'info@sitename.com'
            ),
            array(
                'id' => 'contact-s3',
                'type' => 'section',
                'title' => esc_html__('Секция 3', 'your-textdomain-here'),
                'indent' => true, // Indent all options below until the next 'section' option is set.
            ),

            array(
                'id' => 'contact-s3-title',
                'type' => 'text',
                'title' => esc_html__('Заголовок секции 3', 'your-textdomain-here'),
                'default' => 'Адрес'
            ),
            array(
                'id' => 'contact-s3-text',
                'type' => 'text',
                'title' => esc_html__('Текст ссылки секции 3', 'your-textdomain-here'),
                'default' => 'г. Москва, 3-я улица Строителей, 25'
            ),


        ),
    )
);




