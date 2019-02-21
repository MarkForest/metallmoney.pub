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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'metall_db');

/** Имя пользователя MySQL */
define('DB_USER', 'metall_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[4XOI,p{>e<&^T-vc0F(+o~le?bvI!E(YgNTk[bC^YMF7:DW14Z& (#1[+ARF#mS');
define('SECURE_AUTH_KEY',  '23H3:#Dl?t_[y,C*tKIaHzXHcOe69RB+^i}i(5jve*&M%Lf7(j1L/3.)MPK&tr<z');
define('LOGGED_IN_KEY',    'm%~-.r?:#0F=n,ahus8%Q]aM)vwN1(j8!.Da((vBudbJFC>R7Y1Ks .<j{~~.ycn');
define('NONCE_KEY',        'IX`_/RN.+xOKwP[gg{VJGW,ddS^:Pn_%>p[Y]@b]ftJ)eTkdOrT^>Wzmp|?+ejr~');
define('AUTH_SALT',        '^IzDDOeq;5B1[h)(1#ig~IDY(2p]pURwE;4>._zq`-sU f(~We1t9nn])1/KwD#9');
define('SECURE_AUTH_SALT', '`(3;#_4%W:-GB2PZ6Krrp@:&mQ;7bRyyPDfe},sgudZ6h[!==QCmB$Njo-y.E|d.');
define('LOGGED_IN_SALT',   '|G3dJL]CIEM`:rBI0p<)1pB@Y_%IB89xMM2zESwpB%1@t2k3bRL3f~VZp+Dl=No=');
define('NONCE_SALT',       '$]N}LC4H2s,MTFwTrp%-_!PAo:Y4vH#T=lg^p%ncWbep3FyXoP-^/Q#[X~[-{y^j');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
