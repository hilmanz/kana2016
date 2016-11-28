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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kana2016');

/** MySQL database username */
define('DB_USER', 'kana');

/** MySQL database password */
define('DB_PASSWORD', 'kana2016');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'W o6VQr]6!1uV>XXs(Nx ir[| 3Hb:^uohh1i&5m)d+~02B~q.#&K:0@dj;%6#WW');
define('SECURE_AUTH_KEY',  'kW3/F9Xfo7xP,<`|iF3,xC]5Ox7To1OkAQKs_n_<?`R-.ei*ML71|Y[e@GXD:PDh');
define('LOGGED_IN_KEY',    '.?/I+B]p^-:.fsB-{`sA?a@, dsh|KW{e,7+HL6!0+7$.|Yei)+]{H-rl:vw,{R/');
define('NONCE_KEY',        '~/pE K,OS-f93I6zw*f4v>uY7=Q%5DgW/U6+n]E,t?B0*9H+{#$p]J=S~G]<%&i~');
define('AUTH_SALT',        'Q&,=&D&*Palj/IK-ojE6%X^VlJm+Z? Nf+y%(BerRnUeDZM)&q,X!<|gYjW[G.H.');
define('SECURE_AUTH_SALT', '(n;#;J1Y5W)[h|*-# 8^@lo=5-q+DB6Z-g,T>JbRJs|<%m3Z<&wenSo|qW0=<tc/');
define('LOGGED_IN_SALT',   '6XwNvh(JfFx2E*5#k6,-Qlh8!D!o J$J-7#58--}Vu?2W~;wY0>}yJ)%^6F|@Ieo');
define('NONCE_SALT',       'p%HZx1VMt)~,QbEF>di.FR[wK,xdGF8H;B=!~fGIx[./~+>(gF?&+R6QY;CjI._h');

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
