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
define('DB_NAME', 'wpshop');

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
define('AUTH_KEY',         'b(N4]RB/X<hzg)F=-O,/lh:{fE))p/?1{5&.IhXouEU2tPFiPX~m{^yl]N=k)PiV');
define('SECURE_AUTH_KEY',  ',:tLp-P}{b)gMT/u^uojRM~?Z~eE1`5=+fP!}3F6YAKPZ=~I)UGhu.You4dfatC)');
define('LOGGED_IN_KEY',    'kySrJB60y%UZl/zGa<I4|lKP0?litjmc%JPSY=&8}g[UMdL.8aVk;j5bOgBv7slv');
define('NONCE_KEY',        'G&!nVw%1F86E`9j)fvMc-pOhI_|k*PxK~p*p(t@ua=eg4j`w<u0-zfz_M5dwE[_I');
define('AUTH_SALT',        '0Z16ZoZ`d!{*_x%k_{NG_r%nx#_A7ms,!NzTNaK??3AxJQ%WBPzB8nyP [{f49UQ');
define('SECURE_AUTH_SALT', 'W:O..pzCAlh|Qq6WP,78cqM3K0n[x=0,p[cg8 94=Tq>blTx_T.b|`g/Xg+{|i:v');
define('LOGGED_IN_SALT',   '7Pu )k[F`:j4dOwX)OLZzO{ng<E`ogO}}yeyj )X;Ya#GFZJTGSB`CId7<&+<0C[');
define('NONCE_SALT',       'Ihq_%5ws:9Zyk#<3aC_$H9:~o>K?)z~*)$:1}vPzUyjklPM.-{4k}C4-Bx777oeJ');

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
