<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 * WORDPRESS3.5.1
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tadlock2');

/** MySQL database username */
define('DB_USER', 'tadlock');

/** MySQL database password */
define('DB_PASSWORD', 'jpachecov02');

/** MySQL hostname */
define('DB_HOST', 'mysql.webhero.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BlFjka+|qu&97)#4l~mw3d^;2(TyunV?pv+e;b#+82xu[%%t:@yIM_v}$?*-dWZS');
define('SECURE_AUTH_KEY',  'uFu+xJ(s1L$Fofj_)EIVxnk_|`6`G|_o3bZ kl8-_|EV8Pf dePMk@8X>()J9G.P');
define('LOGGED_IN_KEY',    'j8AG}5A5qc|dpCHOcCBdvyx;C)VJGJ>:+o-6cT}_%p*=3n^[ zo$fWN@M238]n-R');
define('NONCE_KEY',        '~}qW0-l3+aKQrL_M0iu-6FGDow.8/8wJ0+QV1Hx4%v1Z3R$~wL53E*/D%+g7cM,(');
define('AUTH_SALT',        '`i`:+z43w<#:_/9YVxpyzAlmhxCEw!5F%3;f@|?8)W}aaz|_nSNZSg;K&n`NCB;c');
define('SECURE_AUTH_SALT', 'Jf#oTs`Lw-6|/@giH/O@O.HT4>3dbqg6*jIG@oXp?c{p/;nn$6?aiq6g|2Qail|o');
define('LOGGED_IN_SALT',   '@:vls?ic/@h)|uz=v`F7!S|B~zY7<LFVn.]-nDERx-{Dh$xr,~ogZ|?s4JyD`:mV');
define('NONCE_SALT',       'OT[a}]QsbG4HI?Wez_jzL*I24a|2Z!i{V#^6u$5+3;7X9}-X|5B2KIHMU]9l$LSz');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
