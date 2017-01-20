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
define('DB_NAME', 'it_store');

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
define('AUTH_KEY',         '1E-hxwttm84d^:-E6!XI:8rCPcvB?6BMMtT{JZQ]#)lbkhshu_fu:R#W}Nhfji|1');
define('SECURE_AUTH_KEY',  '^{X-O%6JW5+:dt]tY?=pmrY6.XllFF_$1nE9yBXW~8/ l{zxU~v0`P^Pj5NzUxhP');
define('LOGGED_IN_KEY',    'ggFtV.VOioXaOS*OXBk]@kTH8Izzq6T^E.-Cj|0E7)Yg88a246Yxpi5b>!mK?xwr');
define('NONCE_KEY',        'YXDp7s>|O6T#~+W1iOZtg3lh<(T^=2v0j,.fTI[&c%uHclpk%JMl{rg;y/!HM@kL');
define('AUTH_SALT',        'Vy[cg~s+g|Rz.R/~B#Z&(QIJo#0-%:nQ,N!/+?%8+fEJ1{8qsjFGf._z%9D+N.tF');
define('SECURE_AUTH_SALT', '(IKJGC=7Y}RO]I uTdJ?%9}kac8!ONN>Z2BE`B|D`O=96W5;dW}tO-f=@Z1e|)_+');
define('LOGGED_IN_SALT',   '8+lSk8TGFZ)!)TauOd|h<[QaUdd1VVIc!S]&%{7]GqtlKKHa&B&g[l|7RJ@8@U7>');
define('NONCE_SALT',       'f:bgm:t+!eBtz&92q03gQ%#xs0Oj{nk3jRR[}ltIg@m4O`hQG@D;tWhhNu*e]YP=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'itstore_';

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
