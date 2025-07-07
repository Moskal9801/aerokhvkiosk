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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'aerokhv' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '* {z6j8#lB!P4:Q:QhPyrD1-!cR(v^ra.uf8LHd3T rk&!mEE/rmauv,?^7#%1oZ' );
define( 'SECURE_AUTH_KEY',  'Mu|qR#Brq(2^,RCe^zh$&3]%bY0GQWG9{ub(mM)?*h(mFI6~o n&z*bJ5(& 5nC-' );
define( 'LOGGED_IN_KEY',    '/AQV&^VD2,^-Nkk)AKg#D>wmKy@Z}mU3@c65j`7*$vB?.O^S_E3~Rks^uX~X]:0{' );
define( 'NONCE_KEY',        '.|{Wriv8R&aNxNv6J|SJ[;D<<WGkkq}IFiowIHWR<xkTsQ!xtU~q onQA^Cx.=YR' );
define( 'AUTH_SALT',        'abGK+7;6:3ui{xCyQ<8lf7WbX/DHrb u(P#>;ZuL=tV<ibuL?T(!gc1WS)Gq0N u' );
define( 'SECURE_AUTH_SALT', 'gUM4ZlQQLb.u%(yp=i>aP*taF2sUB0%X+OBM8s{S>Xs:=Zw!;ngJWiqC?2ji>J7_' );
define( 'LOGGED_IN_SALT',   '1<*Gy$T|lf^]/^Ah~NFT;n{:p|qLV T5;@~a:VkJN#~`*Zk,GiLLk.L9yp~Z*n8C' );
define( 'NONCE_SALT',       '$aMhNs>#ICC-l?P+CTtjoIR;fuAf#*k5xVdLKayvWY]9tsS]pEY!nbJ1$JHS7b=j' );

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
