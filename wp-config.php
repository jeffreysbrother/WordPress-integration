<?php
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
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'yeopress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'yeopress');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'yeopress');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`tth<e>k}_}qE@hv%LSw>l&?f3|K-J|u}H<~/~|K5K$$JeFCLg+^SS@ULTeUY3ET');
define('SECURE_AUTH_KEY',  '}%X|4gqw6#t59jEj2j7(-P8f56fre+@6nkCmFbBMjpT[<W<#D}o&[-j4%v$&f@T+');
define('LOGGED_IN_KEY',    '?,= Gl*=}x{*|}/N?c|Qrn5V>ia.{&egBdQvAPpyLTw&vwOZ(yw[[=uhE~RnbI+|');
define('NONCE_KEY',        '1}.}utOaHun-||y>GQp]htlw*GiD0rer6O_2Dn8VPZ|C@<EL i-=5)4!{#V-b7Du');
define('AUTH_SALT',        ')<7i#vMrU.{nS.5=?U5_n!kGr,_dzpRc>Y+3,tKw(+gtjLlv.?{VWk8&H6oP.Wz4');
define('SECURE_AUTH_SALT', 'GHgMf=@Sm7&lah!38BD_ba./0G=a|nHCn)oTLVE~xln.~WPARoJ&X}R|6,`^5$}@');
define('LOGGED_IN_SALT',   '7^A3E[Up7pdzkV:6SC{:3/-O,NvH26@3*75=_(&a&TEu:YF4h#WMF>EW]=v-11TF');
define('NONCE_SALT',       'w:/-w17#A`f#h~Je<=c13qVw>~i:2/ ,i5O>0i]pOuq,*v8?&![J|5s.d|G%w)03');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jbwp_';

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
