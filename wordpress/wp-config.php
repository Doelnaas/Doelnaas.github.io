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
define( 'DB_NAME', 'Meri-Kolpins' );

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
define( 'AUTH_KEY',         '_,gEPMkJfCn|upfkso:EUxcw*7gikgYRU|.Y*<I1d@gaYIP)${Vbt+o?H)Z[ER/ ' );
define( 'SECURE_AUTH_KEY',  '8AFubTY >Z:qzN_HHpM)7=kBnk|d6!nxmM]bw&3EPgSMWvNTtr3fS2(7WNv1o0Ol' );
define( 'LOGGED_IN_KEY',    '}.@UJmEHQYquSx)J2Tp.*@y6#art9,+3SKrTYzl.0.Fe2!bxXT.YNi#AO`/]5Yh0' );
define( 'NONCE_KEY',        '5Lo<J=(+}SJEVi~Et93_W.dwG( ;fx$Q(DET_2h_f{AxAi$S8j5j,m1kM{BS|%xB' );
define( 'AUTH_SALT',        'X^g8vp<hp1%1h#W;9dVWF105Vs0_yG!#Jhfl8dD$?c*/a=+outQ&unY}#hKu=uO!' );
define( 'SECURE_AUTH_SALT', 'px][qb^B`uhKF&2a-$0Z-RF4ke^c|S0Y[3#n#Z6t%e~M5vQS}1ERwZdaC_HWFpZe' );
define( 'LOGGED_IN_SALT',   'yFo]Ga%21EWSLd;H(tSi#{QqnY?l&aon&B <}lJolcsK!XOy#9P0sr.y &`&3AZ4' );
define( 'NONCE_SALT',       'Rdwn+KgB32u(Up1}u8KenbzOI.od`k6xZi%s3e*_HRDNg!HAmh>_hKkmusR(>Fkt' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
