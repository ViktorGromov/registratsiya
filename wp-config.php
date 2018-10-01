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
define('DB_NAME', 'registratsiya62.ru');

/** Имя пользователя MySQL */
define('DB_USER', 'registratsiya62');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'registratsiya62');

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
define('AUTH_KEY',         'G#`-1(s>rJyX$Y0fnFMF#]khBEzm.z@G%pS!i2</tb}BJh@$uH001h`QlAL*_PAS');
define('SECURE_AUTH_KEY',  'HVf:{xP>{~?H%4>z`G!bvAfixa+g^PT;psMNQ}/bj3Ovr7:*aB+o$fF(O6G%HXzu');
define('LOGGED_IN_KEY',    'GffX-9e!Wxz:oW00tvExm:_!K ^}C/|@Zyu<dqqf#$u`L?>k52av3Hb;~_^HDqlI');
define('NONCE_KEY',        'S@n!Qn,/Uo/e[/rmW#kUW%}H}1`TklJaxKnZ4{%(Bn|=84/|zvEymUABNkvxzRpe');
define('AUTH_SALT',        '~r+z9]A]DixmDfZ1_=cu?5/W&vcTV8]CIf%5DVp:#vO5?ql).`9$)yxRF%6:A&8e');
define('SECURE_AUTH_SALT', 'B]{kJKv<@??+E/t!l|m<`[UpS2]<3$9%{Ef;Z|@}qs2Wd/pvSa9hXb|}q[2~,X[&');
define('LOGGED_IN_SALT',   'b:^af~pksS8&>[4}$Gd(>D8)e&}{lys_p)+KIkX4%Qy~0Nq~LS@TUVo}6hCW+)X>');
define('NONCE_SALT',       'L,Zh**rjVN 3)AQV{`gki%,JClpL@D7`f,Xi! J,zQ}B0%/X{@mOQkdxBPI<kGx$');

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
