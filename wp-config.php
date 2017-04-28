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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'TqE=s8j]1tW WW:;B>NuH^=v5$wFr|jWyx%-B)YcWsv)^Oo=*Dnp:+n6C;$CAaQ_');
define('SECURE_AUTH_KEY',  'vN<*HK^7+muM9SdT_;s!|K jnSrAbifY$jC]bXljr0  ]Mu@&h)Sa<sDcF!i 3~E');
define('LOGGED_IN_KEY',    ',ocd`-F!f+~;|?9)~R#y`31D6n.(En|Ibw4ru/s;ymloT#^Thj(Yv}n4A3}yf*g|');
define('NONCE_KEY',        'G^}})a6JXR]*-?39`w1aI-fzj/-qd(l$_1+[vs=}e7go YtuU/9XVmlg5:eM8-|.');
define('AUTH_SALT',        'D{:Ze9xQ*{7V=BLGxK~]+u.CXKr)%GKK7O^{%e|GEz;uVZ}qMyZ}>c<0$`z,_BY(');
define('SECURE_AUTH_SALT', '=zf]Pq:h^dIu.Q1m+j`14y_ku:sGL37lvCAF.aAFQ%D-m14=4r9Gr+9]dY3k11Bh');
define('LOGGED_IN_SALT',   'hEZxm*{M/s3zpre;b.crT2Q<?/c(CZf%Z>5:HphE^rA7q^}~c V7|A$#2HTsBN@F');
define('NONCE_SALT',       '/Dm E_i1? /YLT[Su8,;@:))Gg}d(_lJXK$WzL Apqn9~;o; Hb9%<G`I/1>K|;@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_med';

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
