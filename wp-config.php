<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'degusta-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7r+A*+qbhPetARJxPHCr.1t]xdV+AL2Yj6t(C5]A?|zO/?~UfFfd?o,n2<#3Zh-_');
define('SECURE_AUTH_KEY',  'CI$=}38x]{Lq/jd]|]uwiU~(jm[xu#!1_mD~Fn~@WNlt;tuPG|}7+nX_G@,HD`R)');
define('LOGGED_IN_KEY',    '.m-<nUx3!1F</o[w$([0H.SQJSo0g:7a7=M$tNyX4zLNzyrbwp$|Vt}DEvX+/2(j');
define('NONCE_KEY',        'h<B=-)$|@}*g;(%Q09+qn> Z:X_^w]h(g;%c,SUtI1~0dG|y(?|R&#Rx}haiO9t*');
define('AUTH_SALT',        ']hSO6-zHL~Hm4%KbC4M)N[1&O1J)~vLnMu`@L? >GDE/b,&2;z0@3z=US8?Y(:)h');
define('SECURE_AUTH_SALT', 'eu?Z^b=KO8(`Xr6|-<+tY&I3%qiVjf3Vzn2$vJpBD+LH-cKbFIf5[;&[Y3`ZRn|=');
define('LOGGED_IN_SALT',   '/N-aCK|72:tqj;k8s[`Fi$!Er3--1AwqhA}cjIwE:=JV{Aj.Dizb+(U=^8`fGzh ');
define('NONCE_SALT',       '6kZH*R0 |MZFj791]+9,z4x_eWA]KhIYmS.fh~/y_U_5Q|(sw1[o)>WJ(4=ksn=2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
