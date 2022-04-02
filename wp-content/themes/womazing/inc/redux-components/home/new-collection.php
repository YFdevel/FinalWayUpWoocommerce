<?php
/**
 * Redux Framework section config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Новая коллекция', 'your-textdomain-here' ),
        'id'         => 'new',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'new-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
                'default'=>'Новая коллекция'
            ),
            array(
                'id'           => 'new-image-link',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Фото ссылки', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'new-card1',
                'type'     => 'section',
                'title'    => esc_html__( 'Товар №1', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'           => 'new-card1-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Фото №1', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'new-card1-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок №1', 'your-textdomain-here' ),
                'default'=>'Футболка USA'
            ),
            array(
                'id'       => 'new-card1-price',
                'type'     => 'text',
                'title'    => esc_html__( 'Описание №1', 'your-textdomain-here' ),
                'default'=>'$129'
            ),
            array(
                'id'       => 'new-card2',
                'type'     => 'section',
                'title'    => esc_html__( 'Товар №2', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'           => 'new-card2-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Фото №2', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'new-card2-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок №2', 'your-textdomain-here' ),
                'default'=>'Купальник Glow'
            ),
            array(
                'id'       => 'new-card2-price',
                'type'     => 'text',
                'title'    => esc_html__( 'Описание №2', 'your-textdomain-here' ),
                'default'=>'$129'
            ),
            array(
                'id'       => 'new-card3',
                'type'     => 'section',
                'title'    => esc_html__( 'Товар №3', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'           => 'new-card3-image',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Фото №3', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'preview_size' => 'full',
            ),
            array(
                'id'       => 'new-card3-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок №3', 'your-textdomain-here' ),
                'default'=>'Свитшот Sweet Shot'
            ),
            array(
                'id'       => 'new-card3-price',
                'type'     => 'text',
                'title'    => esc_html__( 'Описание №3', 'your-textdomain-here' ),
                'default'=>'$129'
            ),
        ),
    )
);

