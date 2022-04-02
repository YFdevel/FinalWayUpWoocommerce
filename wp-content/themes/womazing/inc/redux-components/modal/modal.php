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
        'title' => esc_html__('Модальное окно', 'your-textdomain-here'),
        'desc' => 'Редактирование модального окна',
        'id' => 'modal',
        'subsection' => true,
        'customizer_width' => '700px',
        'fields' => array(
         
            array(
                'id' => 'modal-close',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Иконка закрыть окно', 'your-textdomain-here'),
                'compiler' => 'true',
                'preview_size' => 'full'
            ),
            
        )
    )
);

