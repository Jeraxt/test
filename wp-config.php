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
 * * Настройки базы данных
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
define( 'DB_NAME', '439-22_30300' );

/** Имя пользователя базы данных */
define( 'DB_USER', '439-22_30300' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '036d187c61892b349400' );

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
define( 'AUTH_KEY',         'dK ~Ou7-x(rJ|:D;ya)?Ack7X4je_.E6@>1W{,B8FDD+,?$CFV++g+}q{(uP+4/O' );
define( 'SECURE_AUTH_KEY',  'oEF-1F?39BdI0F(+/9SmC?%.|=XXM~<Nb>+%6mI4COQ|R4p>+GIRN*#cv`XT+#Qs' );
define( 'LOGGED_IN_KEY',    '}X%w8B`HpwdR+K5PsSoFCpzuYH|oA#!m&;h;`r~Gj~lrXCZAgkm_0[KNsLtS*Pky' );
define( 'NONCE_KEY',        '^B00att|%g#y SZS`1v-2X>`SDg$flNAPt}@D!8FkMn0 }Y]?r6U].Sz.v.D9JV^' );
define( 'AUTH_SALT',        'D]FQ*4*-y-M+CGKrI+zqPDvOT>D#fK^>rL-}=tcO.lHFTk&QjFIE<Pvynmu7IuO+' );
define( 'SECURE_AUTH_SALT', 'a_#M3YauBbnr{yY_,F&7<je`!Eb?DWa/q^NeI`B@y ,cG6!R~+n~3z!$gx:ghsm!' );
define( 'LOGGED_IN_SALT',   '~So<}pgco&>?0zuzF_7RPl}5w*jXl-&&G;uA8I/Murb69AStzvE4~t65pk<1-|NJ' );
define( 'NONCE_SALT',       '{t}%tWZs4GD:E^/, R)#@~;%`?0tR,:3]_2`{Vj;n!ekSrHhh!nr`CU+9jw*LQbJ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'WiY8t_';


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