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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'l%5d7#{3~f[5o[aYP{]9e7k=LQ<^dz4:IP?w87D7o;WCaIfZ}^mW#jJh(Ryv$p8%');
define('SECURE_AUTH_KEY',  ' Z!Dq<Zqq{g>;|F*VyqT8B%+(nkQsrKnW_PFu.3EyNX4IkP4K/9Tx.%4ZilmgQ;K');
define('LOGGED_IN_KEY',    '}$qR)~J/01dmq/4EeOj:#eRu)@BH|)xTyl=]jm`wk!c,Ok{G5H/6#.A:bS`NnzXe');
define('NONCE_KEY',        'uN6|]=A_5{A[8-c{7Kr6,~(Ij vlfEio6tIr9v]ydx]( jQ~4vBX~?$B*l.c^UX|');
define('AUTH_SALT',        '7&EH#d:fv|Q8>im?F,t|hE0hvQf0mYFpZAy]4Tmsp3hrdGIckcM1(;kWf$uEGVB&');
define('SECURE_AUTH_SALT', 'Un]BVWt6<_!K5vOhd_]JAVuwUxQN2NoS9ZqrSEic2avvwDM=gMh:<jN6yKl9mnD)');
define('LOGGED_IN_SALT',   'j-^<x2r6`nVV{mMTd4yZ/7sY:@7C=WdHG*Ob&j${O(wTWpJ.`E[8`mv(MYY>A!#4');
define('NONCE_SALT',       '*NEJMKj&4{XD{|3O~chx#4r4JznRQ,sb-)qK._j&EqVN-^t[!4j~UkJ~2K47T-F$');

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
