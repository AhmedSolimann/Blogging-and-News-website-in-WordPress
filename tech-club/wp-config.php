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
define('WP_MEMORY_LIMIT', '64M');
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\tech-club\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'tech-club');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '![ CtzFsIu2>N%N&fJn+3N:J;FyNUI[=Z?Jk}8PX87t8{]4T<x>b2:xY#(9Y% mK');
define('SECURE_AUTH_KEY',  'dHvt6Qk!Tg!uUQ|{1^HzBxbFD(&boEi9G5brz6m@pZ:?Ez7B-z tAh.3w}xOGQ8H');
define('LOGGED_IN_KEY',    't+v%&yXY4X!1uXM*vDI6s(=?;/<[[V8&1ZzG^Tk+1(,A(*3H]Yb1(.cE8#k`m,s|');
define('NONCE_KEY',        ']d7wdxe.DIbh{ri9p~`*-DK!A`s&=U7)Me8H!Xxp?/r;EDQY[2abB|dw-nCtKi^n');
define('AUTH_SALT',        '@Ck.~Yze?3/2-pW=)xg<w.iP%or8!=bDgYM-~@h1)hw.pn!^N <3nB_1R2)-6zf@');
define('SECURE_AUTH_SALT', ']}3M2s8*miI{{J=;mS)7b;Kx4u;cC<kJrM;c~0sy]Quqjc*?ONzjd(&?#M6:$u+)');
define('LOGGED_IN_SALT',   'qZ^K8J!iju:@LQg|0?puaN<ur_/s4!d$^ab*i?.ot;[1v8-Oo@}fo<Gr4r~$|qL.');
define('NONCE_SALT',       '.>eR|],GpG3V15pYbGq*x^]zb<sZMG|Pk&05-ca?*~cEBkrtH.G;Lu!b9r^)5L%g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
