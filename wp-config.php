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
define('DB_NAME', 'podatkova');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'O*DOCWZA6!ixq]qOS,#BITAj1|2<@^eHjN+l;mJ(;oHS4q,8p/m]U[w^vG:NZ2=H');
define('SECURE_AUTH_KEY',  'Pa;<+rLuS+pm8,PO]!Wn3-T;azE+0uVrH2UJ(VSgJpJ >R93H`jxS?+#nqE3,@2E');
define('LOGGED_IN_KEY',    'vzwnPViKT7;@?Js4krPIP:fAlv|%6jONw+:eS<uT92^`se6zsU83$IBxt. kd7Cx');
define('NONCE_KEY',        '&7fH$mMz<`wJjj1__vq;{_iPCN%GN]b}`#~<-{Y^`_*}6jaPbR?&s,|v~2ibnl_N');
define('AUTH_SALT',        '5|):(gUHQvNat0;lnVjWA^tW}CML;] Q|2y}wQAp~U36NW{[>Stom;8GWSX00gqm');
define('SECURE_AUTH_SALT', '$PQ[#GiIK>+Z/Df)o ev[aY#vVlx9QtyOGmeI#E CX@nz*R]igsO_>j30LBD~z) ');
define('LOGGED_IN_SALT',   'yh;6=Ob_4{y+gmKu20_nYDhywo9kppe;+ShgHgOj%FRi$NGdQ]kV>_T:.!<>V_YF');
define('NONCE_SALT',       '04~Z+)8|m!OTx2t5F)67NN&[ZhUv+{2Nli,8:cPNgojZ|yi-N~2/nxB6c[U7W~#g');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp564_';

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
