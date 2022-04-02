<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'womazing' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+hM_C%x+z1; 6a?1uF{9AeB+o2!8dLdSmkU!-5Qf35M )*I,%e [dqHq%OBgg%6+' );
define( 'SECURE_AUTH_KEY',  'n27A$/e+ Quc]JQK:|vAotLaIdk0],@ CuN}pW)Ux?Q&me0b8#kS>Sbh%q98ub;@' );
define( 'LOGGED_IN_KEY',    'ah81eT?ZEl1~^W:8&L%5Gku%:vQ1rgZ%f+]{+zt2Zm:;<=a{uMBqCF(Jr%)1U0+D' );
define( 'NONCE_KEY',        '{aQV>8j](g([`_`u#olUPN#i8kbl@!?G^HxY6iDHMYk?Id@DSu8j{;R%_LO|U9>:' );
define( 'AUTH_SALT',        '3XfwqIyf8sY0|mnX;@<CV^RkkvHkr#l_.$#=`<5U8Q<#nr4lYcp{-0K<P1qLD{(q' );
define( 'SECURE_AUTH_SALT', '`W+EbMV8Bw,Cyp@MDJL,RsA9AdEktBK^J7#IDyV08,g9!&U~|FjdYG^zELcr^]c/' );
define( 'LOGGED_IN_SALT',   'bGNYbl@A/t{P*s_-ZSpHxcFV@ l+T^CF(5U_!|e)lm|q6tS8Ap849Z%=>:V1>8(i' );
define( 'NONCE_SALT',       '9dR5(0u+tTkj,D*L]P+ JG-<M__S78/1~-,xsZajR^pMYU,P!Nr{3{{mG:WRv/XS' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
