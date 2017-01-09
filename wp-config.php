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
define('DB_NAME', 'dicwpbd');

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
define('AUTH_KEY',         '|$9Gc+PQ@2w]gL/xOp-ppTU~`+*^1K3JQb4SK_Q.!oXWCpVGZ(s52M0AoWBs_Qq_');
define('SECURE_AUTH_KEY',  'M@h^JKT18>|Q+y-~{lcgvg=G)FV6y+U~OvjJ=$+e9+SFG#,fmKmR{~F,tad&/M|&');
define('LOGGED_IN_KEY',    'Qvgl4-K!)~/A[*=:6Tw.LWKu_7Z nO>k$HtBiYP]:QP>*(E&,,x`kZGwS_j+`BNS');
define('NONCE_KEY',        ')#*>hC`kn[I=6/nj!GeVR=#>n*N=!}m8Ns@[*Bjgi<TWH%&05?qca]hK}1,I?u0}');
define('AUTH_SALT',        '6vS/k8^g8)<_6]B@;deU-E2/OZ5y2?R%XN3.[bvU?!FH;+,N|Xi+*4=|jFkme>j]');
define('SECURE_AUTH_SALT', 'nXz[w4/H%&6$`bc5K@YLQl1,Oj,.Ca0Y[0Cz(A>RMtuqosVL3YF(C,<QTnX7Oh(W');
define('LOGGED_IN_SALT',   '8jpmOw[4=@tO*-7GbL+9,0a^qixMd}3,y}9<ALnl00qqG&M8[@B H VAv{0?X~D)');
define('NONCE_SALT',       'eSZMwSai=D$.K@r6xG>>B8,.z@HfJ$+7swS7[h!mMANd-75x O-=5m_->~wflJyW');

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
