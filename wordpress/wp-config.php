<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tadlock0');

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
define('AUTH_KEY',         'f>K<~1TM:IfuWtssJ.^oR4zbmF;EalJ<RAL=Jjq4ZVPE`Yr!@s%$WAI.!+GpS T$');
define('SECURE_AUTH_KEY',  ',qouk,4Fh{Dre;}I[_X+,I>_{ju5d,-W.&7(1>Y0qp`Wxi:MDu*oL*o4Zcj~IY]d');
define('LOGGED_IN_KEY',    'je?+M9f r,GlJIk4q2cYZs+OC$+VS12,+<;&|lon]q&btU?_.Av$<,>%|p9)$uz3');
define('NONCE_KEY',        'Bv!TKD$=T0zO{?-4!>86wC8$lw?- VrhX*Ub5[/jg0EYT=RNfKaIaR^Gd4+mT6+U');
define('AUTH_SALT',        's*4-CMohQ]EG]m.!G*S].:^<W$<8e#2toRT>kBZ&f`$wKwJ11(eR$D7A*OGkXuF+');
define('SECURE_AUTH_SALT', 'GVg!]hsP~n#IrxT.7C:@y}cdY$HK-vm}0.vU>Wqjt`9jFpXiwLYB~T]1]z{QAoI~');
define('LOGGED_IN_SALT',   'NIpyXQ6f`@dQcca9`Yoi36$2~p$4_kE,(Iu33f.-GViU|qD;}Pf,EqA}Y,zQOde~');
define('NONCE_SALT',       'rn5DC>*h9wB%Az=3)R9lKgtzJu[B$=CU7`}7.!] 4Fu?W{!}vrFcB]:3((V_@SD5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'avwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
