<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'kabrita' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']qp0!B=U:1]C`;HoK($23jr#:~^o%eK5:D$|Y!jjuM#) )]>W`[%!7%$,#?`3{L5' );
define( 'SECURE_AUTH_KEY',  'ymC(c(-1TLQj4`|%AR}a6N*FWYp!e+j21*j<_r5XziLoXArn&]~$_?St<6B<RKB ' );
define( 'LOGGED_IN_KEY',    '9 E(=KuY~w9 w--Vp7Tj:qkA*A_KTnJEido]&_M3n1<qAkxg^dcMnK+jy$|NwQ.K' );
define( 'NONCE_KEY',        'VxW(/a*c<CCT1hc7G=`(VFZAh~}X!B5^R4j_R0WsaE>`FW,09(#P-ygezY#p|fxd' );
define( 'AUTH_SALT',        'sTi^UK0s1t%L{lm*N8lwEca?}O(QOt;IEOk9nFgy,RjbZ`7Fe|WgS/m0]nbb8M&X' );
define( 'SECURE_AUTH_SALT', 'oa;%AaP@?53];roUdlC4_LUi1PsJMx,c>`]W(&{N.sFI9S&({j=f}Wf{]wKALZNd' );
define( 'LOGGED_IN_SALT',   'Fb[ mg+?d>g%!dmlg&#pJ`r@IIgFss7EelT12U_B7(o[f/[diT,]~A;|HR%n/kQT' );
define( 'NONCE_SALT',       '%Lrh+0{l;(K#)87,lxe^K,;&w;Xnc]KjL)|f*Ym(OtUdc%Cx9!X%6T2mQ>:rZ$MB' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
